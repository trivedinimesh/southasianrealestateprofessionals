<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sponser;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SponserController extends Controller
{
    public function index()
    {
        $Sponser = Sponser::select('id', 'name', 'image')->get();

        return view('frontend.sponser.index')->with('sponsers', $Sponser);
    }

    public function create()
    {
        return view('frontend.sponser.add');
    }

    public function store(Request $request)
    {
        // validations
        $request->validate([
        'name' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
      
        $Sponser = new Sponser;
      
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/sponser'), $file_name);
      
        $Sponser->name = $request->name;
        $Sponser->image = $file_name;
        $Sponser->created_by = Auth::user()->id;
        $Sponser->updated_by = Auth::user()->id;
      
        $Sponser->save();
        return redirect()->route('sponser.index')->with('success', 'Sponser created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $Sponser = Sponser::findOrFail($id);
            return view('frontend.sponser.edit')->with('sponser', $Sponser);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('sponser.index')->with('error', 'sponser not found.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Retrieve the existing blog by ID
            $Sponser = Sponser::findOrFail($id);
    
            // Validate the request data
            $request->validate([
                'name' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($Sponser->image && file_exists(public_path('images/sponser' . $Sponser->image))) {
                    unlink(public_path('images/sponser' . $Sponser->image));
                }
    
                // Upload the new image
                $file_name = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/sponser'), $file_name);
    
                // Set the new image name
                $Sponser->image = $file_name;
            }
    
            // Update the blog data
            $Sponser->name = $request->name;
            $Sponser->image = $file_name;
            $Sponser->updated_by = Auth::user()->id;
    
            // Save the blog
            $Sponser->save();
    
            return redirect()->route('sponser.index')->with('success', 'Sponser updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('sponser.index')->with('error', 'Sponser not found.');
        } catch (\Throwable $th) {
            // Log any errors
            \Log::error('Error updating sponser: ' . $th->getMessage());
            return back()->with('error', 'Something went wrong while updating Sponser data.');
        }
    }

    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $Sponser = Sponser::findOrFail($id);
            
            if ($Sponser->image && file_exists(public_path('images/sponser/' . $Sponser->image))) {
                unlink(public_path('images/sponser/' . $Sponser->image));
            }
            
            $Sponser->delete();

            DB::commit();
            return redirect()->route('sponser.index')->with('success', 'Sponser deleted successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Failed to delete sponser.');
        }
    }
}
