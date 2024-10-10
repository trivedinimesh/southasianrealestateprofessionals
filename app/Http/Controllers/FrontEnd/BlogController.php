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

            return view('frontend.blog.blog-detail', [
                'blog' => $blog,
                'alltags' => $alltags,
                'allkeywords' => $allkeywords
            ]);

        } catch (ModelNotFoundException $e) {
            return redirect()->route('home')->with('error', 'Blog not found.');
        }
    }

    public function list(Request $request)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }

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
         if (!Auth::user()->hasRole('admin')) {
                return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
            }
            
        $keywords = Keyword::all();
        $tags = Tag::all();

        return view('frontend.blog.add', compact('keywords', 'tags'));
    }

    public function store(Request $request)
    {
         if (!Auth::user()->hasRole('admin')) {
                return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
            }
            

        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required|string|max:16777215',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'keywords' => 'sometimes|array',
            'tags' => 'sometimes|array',
        ]);

        DB::beginTransaction();

        try {
            $blog = new Blog();
            $blog->title = $validated['title'];
            $blog->body = $validated['body'];
            $blog->image = $this->uploadImage($request);

            $blog->save();

            $this->syncKeywordsAndTags($blog, $validated['keywords'] ?? [], $validated['tags'] ?? []);

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
         if (!Auth::user()->hasRole('admin')) {
                return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
            }
            

        $blog = Blog::findOrFail($id);
        $keywords = Keyword::all();
        $tags = Tag::all();

        return view('frontend.blog.edit', compact('blog', 'keywords', 'tags'));
    }

    public function update(Request $request, string $id)
    {
         if (!Auth::user()->hasRole('admin')) {
                return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
            }
            

        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required|string|max:16777215',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'keywords' => 'sometimes|array',
            'tags' => 'sometimes|array',
        ]);

        DB::beginTransaction();

        try {
            $blog = Blog::findOrFail($id);
            $blog->title = $validated['title'];
            $blog->body = $validated['body'];
            if ($request->hasFile('image')) {
                $blog->image = $this->uploadImage($request, $blog->image);
            }

            $blog->save();

            $this->syncKeywordsAndTags($blog, $validated['keywords'] ?? [], $validated['tags'] ?? []);

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
         if (!Auth::user()->hasRole('admin')) {
                return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
            }
            

        DB::beginTransaction();

        try {
            $blog = Blog::findOrFail($id);
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
            if ($existingImage && file_exists(public_path('images/blogs/' . $existingImage))) {
                unlink(public_path('images/blogs/' . $existingImage));
            }

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
}
