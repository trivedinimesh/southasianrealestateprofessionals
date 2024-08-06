<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Show About page to the users
     */
    public function index()
    {
        return view('frontend.about.index');
    }
}
