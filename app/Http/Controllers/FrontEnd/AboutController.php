<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BOD;

class AboutController extends Controller
{
    /**
     * Show About page to the users
     */
    public function index()
    {
        $bod = BOD::select('id', 'first_name', 'last_name', 'designation', 'image', 'fb_id', 'twitter_id', 'linkedin_id')->get();
        
        return view('frontend.about.index')->with('bods', $bod);
    }
}
