<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show home page to the users
     */
    public function index()
    {
        return view('frontend.home');
    }
}
