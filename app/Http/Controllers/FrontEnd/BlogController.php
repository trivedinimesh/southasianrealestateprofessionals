<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class BlogController extends Controller
{
    public function index()
    {
        try {
            $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'keywords', 'tags', 'created_by', 'updated_by')->paginate(10);
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
            $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'keywords', 'tags', 'created_by', 'updated_by')->paginate(10);
            return view('frontend.blog.blog-detail')
                ->with('blog', $blog)
                ->with('blogs', $blogs);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('home')->with('error', 'Blog not found.');
        }
    }

    public function list()
    {
        $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'keywords', 'tags', 'created_by', 'updated_by')->paginate(10); // Paginate results

        return view('frontend.blog.list')->with('blogs', $blogs);
    }

    public function create()
    {
        return view('frontend.blog.add');
    }

    public function store(Request $request)
    {
        // validations
        $request->validate([
          'title' => 'required',
          'body' => 'required|string|max:16777215',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'keywords' => 'required',
          'tags' => 'required',
        ]);
      
        $blog = new Blog;
      
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/blog/'), $file_name);
      
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->image = $file_name;
        $blog->keywords = $request->keywords;
        $blog->tags = $request->tags;
      
        $blog->save();
        return redirect()->route('blogs.list')->with('success', 'Blog created successfully.');
    }

    public function show(string $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'keywords', 'tags', 'created_by', 'updated_by')->paginate(10);
            return view('frontend.blog.view')
                ->with('blog', $blog)
                ->with('blogs', $blogs);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('blogs.index')->with('error', 'User not found.');
        }
    }



    public function destroy(string $id)
    {
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