<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sponsor;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SponsorController extends Controller
{
    public function index()
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        $sponsor = Sponsor::select('id', 'name', 'category', 'image')->get();

        return view('frontend.sponsor.index')->with('sponsors', $sponsor);
    }

    public function create()
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }

        $sponsors = Sponsor::select('id', 'name', 'category', 'image')->get();
        return view('frontend.sponsor.add')->with('sponsors', $sponsors);
    }

    public function store(Request $request)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        // validations
        $request->validate([
        'name' => 'required',
        'category' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
      
        $Sponsor = new Sponsor;
      
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/sponsors'), $file_name);
      
        $Sponsor->name = $request->name;
        $Sponsor->category = $request->category;
        $Sponsor->image = $file_name;
        $Sponsor->created_by = Auth::user()->id;
        $Sponsor->updated_by = Auth::user()->id;
      
        $Sponsor->save();
        return redirect()->route('sponsor.index')->with('success', 'Sponsor created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        try {
            $sponsors = Sponsor::select('id', 'name', 'category', 'image')->get();
            $categories = Sponsor::distinct()->pluck('category');
            $sponsor = Sponsor::findOrFail($id);
            return view('frontend.sponsor.edit')->with('sponsor', $sponsor)->with('sponsors', $sponsors)->with('categories', $categories);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('sponsor.index')->with('error', 'sponsor not found.');
        }
    }

    public function update(Request $request, $id)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        try {
            // Retrieve the existing blog by ID
            $Sponsor = Sponsor::findOrFail($id);
            
            // Validate the request data
            $request->validate([
                'name' => 'sometimes',
                'category' => 'sometimes',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($Sponsor->image && file_exists(public_path('images/sponsors' . $Sponsor->image))) {
                    unlink(public_path('images/sponsors' . $Sponsor->image));
                }
    
                // Upload the new image
                $file_name = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/sponsors'), $file_name);
    
                // Set the new image name
                $Sponsor->image = $file_name;
            }
    
            // Update the blog data
            $Sponsor->name = $request->name;
            $Sponsor->category = $request->category;
            $Sponsor->updated_by = Auth::user()->id;
    
            // Save the blog
            $Sponsor->save();
    
            return redirect()->route('sponsor.index')->with('success', 'Sponsor updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('sponsor.index')->with('error', 'Sponsor not found.');
        } catch (\Throwable $th) {
            // Log any errors
            \Log::error('Error updating sponsor: ' . $th->getMessage());
            return back()->with('error', 'Something went wrong while updating Sponsor data.');
        }
    }

    public function destroy(string $id)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        DB::beginTransaction();
        try {
            $Sponsor = Sponsor::findOrFail($id);
            
            if ($Sponsor->image && file_exists(public_path('images/sponsors/' . $Sponsor->image))) {
                unlink(public_path('images/sponsors/' . $Sponsor->image));
            }
            
            $Sponsor->delete();

            DB::commit();
            return redirect()->route('sponsor.index')->with('success', 'Sponsor deleted successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Failed to delete sponsor.');
        }
    }
}
