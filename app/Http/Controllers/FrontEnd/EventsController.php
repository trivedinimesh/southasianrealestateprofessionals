<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        return view('frontend.events.index');
    }
    public function eventDetail(Request $request)
    {
        return view('frontend.events.event-detail');
    }
}
