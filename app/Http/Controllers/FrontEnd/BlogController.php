<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('frontend.blog.index');
    }
    public function blogDetail(Request $request)
    {
        return view('frontend.blog.blog-detail');
    }

}