<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\WesbiteSettingRequest;
use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\Auth;

class WebsiteSettingController extends Controller
{
    public function edit()
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        try {
            $websiteSetting = WebsiteSetting::first();
            return view('frontend.setting.edit')->with('websiteSetting', $websiteSetting);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('sponsor.index')->with('error', 'sponsor not found.');
        }
    }

    public function update(WesbiteSettingRequest $request)
    {
        try {
            $websiteSetting = WebsiteSetting::first();
            if ($request->hasFile('header_image')) {
                // Delete the old image if it exists
                if ($websiteSetting->header_image && file_exists(public_path('images/header/' . $websiteSetting->header_image))) {
                    unlink(public_path('images/header/' . $websiteSetting->header_image));
                }
    
                // Upload the new image
                $file_name = time() . '.' . $request->header_image->getClientOriginalExtension();
                $request->header_image->move(public_path('images/header/'), $file_name);
    
                // Set the new image name
                $websiteSetting->header_image = $file_name;
            }
    
            // Update the blog data
            $websiteSetting->header_title = $request->header_title;
            $websiteSetting->contact_form_email = $request->contact_form_email;
            $websiteSetting->feedback_form_email = $request->feedback_form_email;
    
            // Save the blog
            $websiteSetting->save();

            return redirect()->route('websiteSetting.edit')->with('success', 'Website setting updated successfully.');
        } catch (\Throwable $th) {
            // Log any errors
            dd($th);
            \Log::error('Error updating website setting: ' . $th->getMessage());
            return back()->with('error', 'Something went wrong while updating website setting.');
        }
    }
}
