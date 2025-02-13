<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('frontend.gallery.index', ['galleries' => $galleries]);
    }

    public function list()
    {
        $this->authorizeAdmin();
    
        $galleries = Gallery::paginate(10);
    
        return view('frontend.gallery.list', [
            'galleries' => $galleries
        ]);
    }

    public function create()
    {
        $this->authorizeAdmin();

        $events = Event::all();
        $galleries = Gallery::all();
        
        return view('frontend.gallery.add', [
            'events' => $events,
            'galleries' => $galleries
        ]);
    }

    // Store multiple images in the gallery
    public function store(GalleryRequest $request)
    {
        $this->authorizeAdmin();

        // Loop through each image, save to storage and database
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $file_name = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/gallery'), $file_name);

                // Save to database with the title
                Gallery::create([
                    'image_path' => 'images/gallery/' . $file_name,
                    'title' => $request->input('title'), // Save the title
                ]);
            }
        }

        return redirect()->route('gallery.list')->with('success', 'Images uploaded successfully under the title "' . $request->input('title') . '".');
    }


    // Delete an image from the gallery
    public function destroy($id)
    {
        $this->authorizeAdmin();

        $gallery = Gallery::findOrFail($id);

        // Delete the image file from the storage
        if (file_exists(public_path($gallery->image_path))) {
            unlink(public_path($gallery->image_path));
        }

        // Remove from the database
        $gallery->delete();

        return redirect()->route('gallery.list')->with('success', 'Image deleted successfully.');
    }

    private function authorizeAdmin()
    {
        if (!Auth::user()->hasRole('admin')) {
            abort(403, 'Access denied.');
        }
    }
}
