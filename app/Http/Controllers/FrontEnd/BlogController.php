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
    public function index()
    {   
        try {
            $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'created_at','updated_at','created_by', 'updated_by')->with(['keywords','tags'])->paginate(10);
          
           
            return view('frontend.blog.index')
                ->with('blogs', $blogs);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('blogs.index')->with('error', 'Blog not found.');
        }
    }

    public function blogDetail(Request $request, string $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'created_by', 'updated_by')->with(['keywords', 'tags'])->paginate(10);
            $allblogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'created_by', 'updated_by')->with(['keywords', 'tags'])->paginate(10);
           
           
            return view('frontend.blog.blog-detail')
                ->with('blog', $blog)
                ->with('blogs', $blogs)
                ->with('blogs', $allblogs);
                
        } catch (ModelNotFoundException $e) {
            return redirect()->route('home')->with('error', 'Blog not found.');
        }
    }

    public function list()
    {

        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'created_by', 'updated_by')->paginate(10); // Paginate results
        return view('frontend.blog.list')->with('blogs', $blogs)->with(['keywords', 'tags']);
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