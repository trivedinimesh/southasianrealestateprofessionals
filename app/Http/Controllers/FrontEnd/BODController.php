<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BOD;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class BODController extends Controller
{
    public function index()
    {
        $bod = BOD::select('id', 'first_name', 'last_name', 'designation', 'image', 'fb_id', 'twitter_id', 'linkedin_id')->get();

        return view('frontend.bod.index')->with('bods', $bod);
    }

    public function create()
    {
        return view('frontend.bod.add');
    }

    public function store(Request $request)
    {
        // validations
        $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'designation' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'fb_id' => 'required',
        'twitter_id' => 'required',
        'linkedin_id' => 'required',
        ]);
      
        $bod = new BOD;
      
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/bods'), $file_name);
      
        $bod->first_name = $request->first_name;
        $bod->last_name = $request->last_name;
        $bod->designation = $request->designation;
        $bod->image = $file_name;
        $bod->fb_id = $request->fb_id;
        $bod->twitter_id = $request->twitter_id;
        $bod->linkedin_id = $request->linkedin_id;
        $bod->created_by = Auth::user()->id;
        $bod->updated_by = Auth::user()->id;
      
        $bod->save();
        return redirect()->route('board-of-director.index')->with('success', 'BOD created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $bod = BOD::findOrFail($id);
            return view('frontend.bod.edit')->with('bod', $bod);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('board-of-director.index')->with('error', 'bod not found.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Retrieve the existing blog by ID
            $bod = BOD::findOrFail($id);
    
            // Validate the request data
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'designation' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'fb_id' => 'required',
                'twitter_id' => 'required',
                'linkedin_id' => 'required',
            ]);
    
            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($bod->image && file_exists(public_path('images/bods' . $bod->image))) {
                    unlink(public_path('images/bods' . $bod->image));
                }
    
                // Upload the new image
                $file_name = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/bods'), $file_name);
    
                // Set the new image name
                $bod->image = $file_name;
            }
    
            // Update the blog data
            $bod->first_name = $request->first_name;
            $bod->last_name = $request->last_name;
            $bod->designation = $request->designation;
            $bod->image = $file_name;
            $bod->fb_id = $request->fb_id;
            $bod->twitter_id = $request->twitter_id;
            $bod->linkedin_id = $request->linkedin_id;
            $bod->updated_by = Auth::user()->id;
    
            // Save the blog
            $bod->save();
    
            return redirect()->route('board-of-director.index')->with('success', 'BOD updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('board-of-director.index')->with('error', 'BOD not found.');
        } catch (\Throwable $th) {
            // Log any errors
            \Log::error('Error updating bod: ' . $th->getMessage());
            return back()->with('error', 'Something went wrong while updating BOD data.');
        }
    }

    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $bod = BOD::findOrFail($id);
            
            if ($bod->image && file_exists(public_path('images/bods/' . $bod->image))) {
                unlink(public_path('images/bods/' . $bod->image));
            }
            
            $bod->delete();

            DB::commit();
            return redirect()->route('board-of-director.index')->with('success', 'BOD deleted successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Failed to delete bod.');
        }
    }
}