<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Sponser;

class HomeController extends Controller
{
    /**
     * Show home page to the users
     */
    public function index()
    {
        $events = Event::select('id', 'title', 'details', 'image', 'price_member', 'price_non_member', 'is_active', 'date', 'start_time', 'end_time', 'address', 'country', 'state', 'city', 'pincode', 'created_by', 'updated_by')->get(); // Paginate results
        $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'keywords', 'tags', 'created_at')->get();
        $sponser = Sponser::select('id', 'name', 'image')->get();

        return view('frontend.home')->with('events', $events)->with('blogs', $blogs)->with('sponsers', $sponser);
    }
}
