<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BOD;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use App\Http\Requests\BODRequest;

class BODController extends Controller
{
    
    public function index(Request $request)
    {
        // Ensure the user is authorized as an admin
        $this->authorizeAdmin();
    
        // Sanitize and validate search input
        $validatedData = $request->validate([
            'search' => 'nullable|string|max:255|regex:/^[a-zA-Z0-9\s\-\,\.]+$/', // Validation rule for search
        ]);
    
        $query = BOD::select('id', 'first_name', 'last_name', 'designation', 'image', 'fb_id', 'twitter_id', 'linkedin_id');
    
        // Check if the search field is filled and not empty
        if ($request->filled('search')) {
            // Trim the search input to remove unnecessary spaces
            $searchInput = trim($validatedData['search']); // Use validated data
    
            // Break down the search terms into an array
            $searchTerms = explode(' ', $searchInput);
    
            // Use the search terms in the query
            $query->where(function ($q) use ($searchTerms) {
                if (count($searchTerms) == 2) {
                    // Search by both first and last name
                    $q->where('first_name', 'like', '%' . e($searchTerms[0]) . '%')
                      ->where('last_name', 'like', '%' . e($searchTerms[1]) . '%');
                } else {
                    // Single term search (first name or last name)
                    $q->where('first_name', 'like', '%' . e($searchTerms[0]) . '%')
                      ->orWhere('last_name', 'like', '%' . e($searchTerms[0]) . '%');
                }
            });
        }
    
        // Paginate the results (10 per page)
        $bods = $query->paginate(10);
    
        // Render the view with sanitized output data
        return view('frontend.bod.index', ['bods' => $bods]);
    }
    

    public function create()
    {
        $this->authorizeAdmin();

        return view('frontend.bod.add');
    }

    public function store(BODRequest $request)
    {
        $this->authorizeAdmin();


        try {
            // Store the image securely
            $file_name = $this->uploadImage($request->file('image'));

            // Save BOD details to database
            BOD::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'designation' => $request->designation,
                'image' => $file_name,
                'fb_id' => $request->fb_id,
                'twitter_id' => $request->twitter_id,
                'linkedin_id' => $request->linkedin_id,
                'created_by' => Auth::id(),
                'updated_by' => Auth::id(),
            ]);

            return redirect()->route('board-of-director.index')->with('success', 'BOD created successfully.');
        } catch (\Exception $e) {
            Log::error('Error creating BOD: ' . $e->getMessage());
            return back()->with('error', 'Failed to create BOD. Please try again.');
        }
    }

    public function edit($id)
    {
        $this->authorizeAdmin();

        try {
            $bod = BOD::findOrFail($id);
            return view('frontend.bod.edit', ['bod' => $bod]);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('board-of-director.index')->with('error', 'BOD not found.');
        }
    }

    public function update(BODRequest $request, $id)
    {
        $this->authorizeAdmin();

        try {
            $bod = BOD::findOrFail($id);
            
            // Update image if provided
            if ($request->hasFile('image')) {
                $this->deleteOldImage($bod->image); // Delete old image
                $bod->image = $this->uploadImage($request->file('image'));
            }

            // Update other fields
            $bod->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'designation' => $request->designation,
                'fb_id' => $request->fb_id,
                'twitter_id' => $request->twitter_id,
                'linkedin_id' => $request->linkedin_id,
                'updated_by' => Auth::id(),
            ]);

            return redirect()->route('board-of-director.index')->with('success', 'BOD updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('board-of-director.index')->with('error', 'BOD not found.');
        } catch (\Exception $e) {
            Log::error('Error updating BOD: ' . $e->getMessage());
            return back()->with('error', 'Failed to update BOD. Please try again.');
        }
    }

    public function destroy($id)
    {
        $this->authorizeAdmin();

        DB::beginTransaction();
        try {
            $bod = BOD::findOrFail($id);
            $this->deleteOldImage($bod->image); // Delete image
            $bod->delete();

            DB::commit();
            return redirect()->route('board-of-director.index')->with('success', 'BOD deleted successfully.');
        } catch (ModelNotFoundException $e) {
            DB::rollBack();
            return redirect()->route('board-of-director.index')->with('error', 'BOD not found.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error deleting BOD: ' . $e->getMessage());
            return back()->with('error', 'Failed to delete BOD. Please try again.');
        }
    }

    // Helper function to upload image
    private function uploadImage($image)
    {
        $file_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/bods'), $file_name);
        return $file_name;
    }

    // Helper function to delete old image
    private function deleteOldImage($image)
    {
        if ($image && File::exists(public_path('images/bods/' . $image))) {
            File::delete(public_path('images/bods/' . $image));
        }
    }

    private function authorizeAdmin()
    {
        if (!Auth::user()->hasRole('admin')) {
            abort(403, 'Access denied.');
        }
    }
}
