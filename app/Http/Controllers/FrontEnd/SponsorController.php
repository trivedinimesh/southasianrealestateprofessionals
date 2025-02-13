<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SponsorRequest;
use App\Models\Sponsor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SponsorController extends Controller
{
    public function index(Request $request)
    {
        // Ensure the user is authorized as an admin
        $this->authorizeAdmin();
    
        // Create a query builder for Sponsor
        $query = Sponsor::select('id', 'name', 'category', 'image');
    
        // Sanitize and validate category input
        if ($request->has('category') && is_array($request->input('category'))) {
            // Validate each category input if needed
            foreach ($request->input('category') as $category) {
                if (!is_string($category) || strlen($category) > 255) {
                    abort(400, 'Invalid category input.'); // Handle invalid category input
                }
            }
    
            // Assuming 'category' is a column in your sponsors table
            $query->whereIn('category', $request->input('category'));
        }
    
        // Sanitize and validate search input
        $validatedData = $request->validate([
            'search' => 'nullable|string|max:255|regex:/^[a-zA-Z0-9\s\-\,\.]*$/', // Allow specific characters
        ]);
    
        // Filter by search input (searching by name or category)
        if ($request->filled('search')) {
            $searchInput = trim($validatedData['search']); // Trim the input
            $searchTerms = explode(' ', $searchInput); // Split the search input by spaces
    
            // Use the search terms in the query
            $query->where(function ($q) use ($searchTerms) {
                foreach ($searchTerms as $term) {
                    // Escape the term to prevent XSS
                    $q->orWhere('name', 'like', '%' . e($term) . '%')
                      ->orWhere('category', 'like', '%' . e($term) . '%'); // Adjust 'category' if it's a column
                }
            });
        }
    
        // Retrieve the filtered sponsors
        $sponsors = $query->paginate(10);
    
        // Retrieve all sponsors data if needed (consider removing this if not necessary)
        $sponsorData = Sponsor::all();
    
        return view('frontend.sponsor.index')->with('sponsors', $sponsors)->with('sponsorData', $sponsorData);
    }
    

    public function create()
    {
        $this->authorizeAdmin();


        $sponsors = Sponsor::select('id', 'name', 'category', 'image')->get();
        return view('frontend.sponsor.add')->with('sponsors', $sponsors);
    }

    public function store(SponsorRequest $request)
    {
        $this->authorizeAdmin();

        
        try {
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
        } catch (ModelNotFoundException $e) {
            return redirect()->route('sponsor.index')->with('error', 'Sponsor not found.');
        } catch (\Throwable $th) {
            // Log any errors
            \Log::error('Error updating sponsor: ' . $th->getMessage());
            return back()->with('error', 'Something went wrong while updating Sponsor data.');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorizeAdmin();

        
        try {
            $sponsors = Sponsor::select('id', 'name', 'category', 'image')->get();
            $categories = Sponsor::distinct()->pluck('category');
            $sponsor = Sponsor::findOrFail($id);
            return view('frontend.sponsor.edit')->with('sponsor', $sponsor)->with('sponsors', $sponsors)->with('categories', $categories);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('sponsor.index')->with('error', 'sponsor not found.');
        }
    }

    public function update(SponsorRequest $request, $id)
    {
        $this->authorizeAdmin();

        
        try {
            // Retrieve the existing blog by ID
            $Sponsor = Sponsor::findOrFail($id);
    
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
        $this->authorizeAdmin();

        
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

    

    private function authorizeAdmin()
    {
        if (!Auth::user()->hasRole('admin')) {
            abort(403, 'Access denied.');
        }
    }
}
