<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Keyword;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    public function index(Request $request)
    {   
        try {
            // Retrieve blogs with keywords and paginate
            $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'created_at', 'updated_at', 'created_by', 'updated_by')
                ->with(['keywords' => function ($query) {
                    // This ensures each blog is returned with its associated keywords
                    $query->withCount('blogs'); // Assuming a blogs() relation exists on the Keyword model
                }])
                ->paginate(10);
        
                $selectedTag = $request->input('tag');
                $selectedKeyword = $request->input('keyword');

                if ($selectedTag) {
                    // Filter blogs by the selected tag
                    $blogs = Blog::whereHas('tags', function ($query) use ($selectedTag) {
                        $query->where('tag', $selectedTag);
                    })->get();
                } 
                if ($selectedKeyword) {
                    // Filter blogs by the selected tag
                    $blogs = Blog::whereHas('keywords', function ($query) use ($selectedKeyword) {
                        $query->where('keyword', $selectedKeyword);
                    })->get();
                } 
            
                // Fetch all keywords and tags for sidebar display
                $allkeywords = Keyword::withCount('blogs')->get();
                $alltags = Tag::all();
        

            return view('frontend.blog.index')
                ->with('blogs', $blogs)
                ->with('alltags', $alltags)
                ->with('allkeywords', $allkeywords)
                ->with('selectedTag', $selectedTag)
                ->with('selectedKeyword', $selectedKeyword);
        
        } catch (ModelNotFoundException $e) {
            return redirect()->route('blogs.index')->with('error', 'Blog not found.');
        }
        
    }

   

    public function blogDetail(Request $request, string $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'created_by', 'updated_by')->with(['keywords', 'tags'])->paginate(10);

            
            // Fetch all keywords and tags for sidebar display
            $allkeywords = Keyword::withCount('blogs')->get();
            $alltags = Tag::all();
            
            return view('frontend.blog.blog-detail')
                ->with('blog', $blog)
                ->with('blogs', $blogs)
                ->with('alltags', $alltags)
                ->with('allkeywords', $allkeywords);

        } catch (ModelNotFoundException $e) {
            return redirect()->route('home')->with('error', 'Blog not found.');
        }
    }

    public function list(Request $request)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }

        // Start a query to fetch blogs
        $query = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'created_at', 'updated_at', 'created_by', 'updated_by')
            ->with(['keywords' => function ($query) {
                // Ensure each blog is returned with its associated keywords
                $query->withCount('blogs'); // Assuming a blogs() relation exists on the Keyword model
            }]);

        // Filter blogs by keyword
        $selectedKeyword = $request->input('keywords');
        if ($selectedKeyword) {
            $query->whereHas('keywords', function ($q) use ($selectedKeyword) {
                $q->where('keyword', $selectedKeyword);
            });
        }

        // Get paginated blogs after applying the filter
        $blogs = $query->paginate(10);

        // Ensure that query parameters like `keyword` persist in pagination links
        $blogs->appends($request->all());

        // Fetch all keywords for sidebar display
        $allkeywords = Keyword::all();

        // Return the view with the blogs and filter data
        return view('frontend.blog.list')
            ->with('blogs', $blogs)
            ->with('allkeywords', $allkeywords)
            ->with('selectedKeyword', $selectedKeyword);
    }




    public function create()
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        $keywords=Keyword::all();
        $tags=Tag::all();
        return view('frontend.blog.add')->with('keywords',$keywords)->with('tags', $tags);
    }

    public function store(Request $request)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        $user= Auth::user();
        // validations
        $request->validate([
          'title' => 'required',
          'body' => 'required|string|max:16777215',
          'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'keywords' => 'sometimes|array',
          'tags' => 'sometimes|array',
        ]);
      
        $blog = new Blog;
      
        if(request()->image){

            $file_name = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/blogs/'), $file_name);
            $blog->image = $file_name;

        }else{
            $blog->image = null;

        }

      
        $blog->title = $request->title;
        $blog->body = $request->body;
        // $blog->keywords = implode(",",$request->keywords);
        // $blog->tags = $request->tags; 
      
        $blog->save();

        if ($request->has('keywords')) {
            $keywordIds = [];
            foreach ($request->input('keywords') as $keyword) {
                $keywordRecord = Keyword::firstOrCreate(['keyword' => $keyword]);
                $keywordIds[] = $keywordRecord->id;
            }
            // Sync keywords
            $blog->keywords()->sync($keywordIds);
        }
        
        if ($request->has('tags')) {
            $tagIds = [];
            foreach ($request->input('tags') as $tag) {
                $tagRecord = Tag::firstOrCreate(['tag' => $tag]);
                $tagIds[] = $tagRecord->id;
            }
            // Sync tags
            $blog->tags()->sync($tagIds);
        }

        return redirect()->route('blogs.list')->with('success', 'Blog created successfully.');
    }

    public function show(string $id)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        try {
            $blog = Blog::findOrFail($id);
            $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'created_by', 'updated_by')->paginate(10);
            return view('frontend.blog.view')
                ->with('blog', $blog)
                ->with('blogs', $blogs)
                ->with(['keywords,tags']);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('blogs.index')->with('error', 'User not found.');
        }
    }

 /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        try {
            $keywords=Keyword::all();
            $tags=Tag::all();
            $blog = Blog::findOrFail($id);
            return view('frontend.blog.edit')->with('blog', $blog)->with('keywords',$keywords)->with('tags', $tags);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('blogs.index')->with('error', 'Blog not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        try {
            // Retrieve the existing blog by ID
            $blog = Blog::findOrFail($id);
    
            // Validate the request data
            $request->validate([
                'title' => 'required',
                'body' => 'required|string|max:16777215',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                 'keywords' => 'sometimes|array',
                'tags' => 'sometimes|array',
            ]);
    
            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($blog->image && file_exists(public_path('images/blogs/' . $blog->image))) {
                    unlink(public_path('images/blogs/' . $blog->image));
                }
    
                // Upload the new image
                $file_name = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/blogs/'), $file_name);
    
                // Set the new image name
                $blog->image = $file_name;
            }
    
            // Update the blog data
            $blog->title = $request->title;
            $blog->body = $request->body;
           
    
            // Save the blog
            $blog->save();

            if ($request->has('keywords')) {
                $keywordIds = [];
                foreach ($request->input('keywords') as $keyword) {
                    $keywordRecord = Keyword::firstOrCreate(['keyword' => $keyword]);
                    $keywordIds[] = $keywordRecord->id;
                }
                // Sync keywords
                $blog->keywords()->sync($keywordIds);
            }
            
            if ($request->has('tags')) {
                $tagIds = [];
                foreach ($request->input('tags') as $tag) {
                    $tagRecord = Tag::firstOrCreate(['tag' => $tag]);
                    $tagIds[] = $tagRecord->id;
                }
                // Sync tags
                $blog->tags()->sync($tagIds);
            }

            return redirect()->route('blogs.list')->with('success', 'Blog updated successfully.');
    
        } catch (\Throwable $th) {
            // Log any errors
            \Log::error('Error updating blog: ' . $th->getMessage());
            return back()->with('error', 'Something went wrong while updating Blog data.');
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
            return redirect()->route('blog.list')->with('success', 'Blog deleted successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Failed to delete blog.');
        }
    }
}