<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::select('id', 'email', 'first_name', 'last_name')->get();

        return view('frontend.users.index')->with([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.users.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'phone_number' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ]);
        
            try {
                DB::beginTransaction();
                // Logic For Save User Data
        
                $create_user = User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'password' => Hash::make('password')
                ]);
        
                if(!$create_user){
                    DB::rollBack();
        
                    return back()->with('error', 'Something went wrong while saving user data');
                }
        
                DB::commit();
                return redirect()->route('users.index')->with('success', 'User Stored Successfully.');
        
        
            } catch (\Throwable $th) {
                DB::rollBack();
                throw $th;
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('frontend.users.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('frontend.users.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
