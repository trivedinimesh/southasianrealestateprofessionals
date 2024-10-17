<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Sponsor;
use App\Models\WebsiteSetting;

class HomeController extends Controller
{
    /**
     * Show home page to the users
     */
    public function index()
    {
        $websiteSetting = WebsiteSetting::first();
        $events = Event::select('id', 'title', 'details', 'image', 'price_member', 'price_non_member', 'is_active', 'date', 'start_time', 'end_time', 'address', 'country', 'state', 'city', 'pincode', 'created_by', 'updated_by')
        ->where('members_only', 0)
        ->where('is_active', 1)
        ->take(4)
        ->get(); // Paginate results
        $blogs = Blog::select('id', 'image', 'title', 'body', 'meta_tag', 'meta_description', 'slug', 'created_at')
        ->take(4)
        ->get();
        $sponsor = Sponsor::select('id', 'name', 'image', 'category')->get();

        return view('frontend.home')->with('events', $events)->with('blogs', $blogs)->with('sponsors', $sponsor)->with('websiteSetting', $websiteSetting);
    }
}
