<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class MembershipController extends Controller
{
    public function index()
    {
        // return view('frontend.membership.index');

        $plans = Plan::all();
        return view('frontend.membership.index')->with('plans', $plans);
    }
}
