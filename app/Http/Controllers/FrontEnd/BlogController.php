<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Keyword;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\BlogRequest;
use HTMLPurifier;
use HTMLPurifier_Config;

class BlogController extends Controller
{
    public function index(Request $request)
    {   
        try {
            // Apply filters based on keywords or tags
            $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'created_at', 'updated_at', 'created_by', 'updated_by')
                ->with(['keywords', 'tags'])
                ->when($request->input('keyword'), function ($query, $keyword) {
                    $query->whereHas('keywords', function ($q) use ($keyword) {
                        $q->where('keyword', $keyword);
                    });
                })
                ->when($request->input('tag'), function ($query, $tag) {
                    $query->whereHas('tags', function ($q) use ($tag) {
                        $q->where('tag', $tag);
                    });
                })
                ->paginate(10);

            $allkeywords = Keyword::withCount('blogs')->get();
            $alltags = Tag::all();

            return view('frontend.blog.index', [
                'blogs' => $blogs,
                'alltags' => $alltags,
                'allkeywords' => $allkeywords,
                'selectedTag' => $request->input('tag'),
                'selectedKeyword' => $request->input('keyword')
            ]);

        } catch (ModelNotFoundException $e) {
            return redirect()->route('blogs.index')->with('error', 'Blog not found.');
        }
    }

    public function blogDetail(Request $request, string $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $allkeywords = Keyword::withCount('blogs')->get();
            $alltags = Tag::all();
            $blogs = Blog::get();

            return view('frontend.blog.blog-detail', [
                'blog' => $blog,
                'blogs' => $blogs,
                'alltags' => $alltags,
                'allkeywords' => $allkeywords
            ]);

        } catch (ModelNotFoundException $e) {
            return redirect()->route('home')->with('error', 'Blog not found.');
        }
    }

    public function list(Request $request)
    {
        $this->authorizeAdmin();

        $blogs = Blog::with(['keywords'])
            ->when($request->input('keywords'), function ($query, $keyword) {
                $query->whereHas('keywords', function ($q) use ($keyword) {
                    $q->where('keyword', $keyword);
                });
            })
            ->paginate(10);

        $blogs->appends($request->all());
        $allkeywords = Keyword::all();

        return view('frontend.blog.list', [
            'blogs' => $blogs,
            'allkeywords' => $allkeywords,
            'selectedKeyword' => $request->input('keywords')
        ]);
    }

    public function create()
    {
        $this->authorizeAdmin();
            
        $keywords = Keyword::all();
        $tags = Tag::all();

        return view('frontend.blog.add', compact('keywords', 'tags'));
    }

    public function store(BlogRequest $request)
    {
        $this->authorizeAdmin();

            
        DB::beginTransaction();

        try {
            $blog = new Blog();
            $blog->title = $request['title'];
            $blog->body = $this->purifyHtml($request['body']);
            $blog->image = $this->uploadImage($request);

            $blog->save();

            $this->syncKeywordsAndTags($blog, $request['keywords'] ?? [], $request['tags'] ?? []);

            DB::commit();
            return redirect()->route('blogs.list')->with('success', 'Blog created successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Error creating blog: ' . $th->getMessage());
            return back()->with('error', 'Error creating blog.');
        }
    }

    public function edit(string $id)
    {
        $this->authorizeAdmin();

            
        $blog = Blog::findOrFail($id);
        $keywords = Keyword::all();
        $tags = Tag::all();

        return view('frontend.blog.edit', compact('blog', 'keywords', 'tags'));
    }

    public function update(BlogRequest $request, string $id)
    {
        $this->authorizeAdmin();
            
        DB::beginTransaction();

        try {
            $blog = Blog::findOrFail($id);
            $blog->title = $request['title'];
            $blog->body = $this->purifyHtml($request['body']);
            if ($request->hasFile('image')) {
                $blog->image = $this->uploadImage($request, $blog->image);
            }

            $blog->save();

            $this->syncKeywordsAndTags($blog, $request['keywords'] ?? [], $request['tags'] ?? []);

            DB::commit();
            return redirect()->route('blogs.list')->with('success', 'Blog updated successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Error updating blog: ' . $th->getMessage());
            return back()->with('error', 'Error updating blog.');
        }
    }

    public function destroy(string $id)
    {
        $this->authorizeAdmin();

            
        DB::beginTransaction();

        try {
            $blog = Blog::findOrFail($id);
            $this->deleteExistingImage($blog->image); 
            $blog->delete();

            DB::commit();
            return redirect()->route('blogs.list')->with('success', 'Blog deleted successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Failed to delete blog.');
        }
    }

    private function uploadImage(Request $request, $existingImage = null)
    {
        if ($request->hasFile('image')) {
            $this->deleteExistingImage($existingImage);

            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/blogs/'), $fileName);

            return $fileName;
        }

        return $existingImage;
    }

    private function syncKeywordsAndTags(Blog $blog, array $keywords, array $tags)
    {
        if (!empty($keywords)) {
            $keywordIds = [];
            foreach ($keywords as $keyword) {
                $keywordRecord = Keyword::firstOrCreate(['keyword' => $keyword]);
                $keywordIds[] = $keywordRecord->id;
            }
            $blog->keywords()->sync($keywordIds);
        }

        if (!empty($tags)) {
            $tagIds = [];
            foreach ($tags as $tag) {
                $tagRecord = Tag::firstOrCreate(['tag' => $tag]);
                $tagIds[] = $tagRecord->id;
            }
            $blog->tags()->sync($tagIds);
        }
    }

    private function deleteExistingImage($image)
    {
        if ($image && file_exists(public_path('images/blogs/' . $image))) {
            unlink(public_path('images/blogs/' . $image));
        }
    }

    private function authorizeAdmin()
    {
        if (!Auth::user()->hasRole('admin')) {
            abort(403, 'Access denied.');
        }
    }

    /**
     * Purify HTML content to prevent XSS attacks.
     */
    private function purifyHtml($html)
    {
        // Create a new HTML Purifier instance
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);

        // Purify the HTML content
        return $purifier->purify($html);
    }
}
