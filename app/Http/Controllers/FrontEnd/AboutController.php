<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BOD;
use App\Models\Blog;

class AboutController extends Controller
{
    /**
     * Show About page to the users
     */
    public function index()
    {
        $bod = BOD::select('id', 'first_name', 'last_name', 'designation', 'image', 'fb_id', 'twitter_id', 'linkedin_id')->get();
        $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'created_at')->get();

        return view('frontend.about.index')->with('bods', $bod)->with('blogs', $blogs);
    }
}
