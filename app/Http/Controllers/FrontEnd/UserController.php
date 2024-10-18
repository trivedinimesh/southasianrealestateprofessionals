<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\EditProfileRequest;
use App\Models\User;
use App\Models\Event;
use App\Models\Booking;

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;



class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->authorizeAdmin();

        $query = User::select('id', 'email', 'first_name', 'last_name', 'isd_code', 'phone_number');
    
        // Filter by roles if any are selected
        if ($request->has('roles') && is_array($request->input('roles'))) {
            $query->whereHas('roles', function($q) use ($request) {
                $q->whereIn('name', $request->input('roles'));
            });
        }

        // Filter by search input (searching by name)
        if ($request->filled('search')) {
            $search = $request->input('search');
            $searchTerms = explode(' ', $search); // Split the search input by spaces

            if (count($searchTerms) == 2) {
                $query->where('first_name', 'like', '%' . e($searchTerms[0]) . '%')
                      ->where('last_name', 'like', '%' . e($searchTerms[1]) . '%');
            } else {
                $query->where(function ($q) use ($search) {
                    $q->where('first_name', 'like', '%' . e($search) . '%')
                      ->orWhere('last_name', 'like', '%' . e($search) . '%');
                });
            }
        }

        // Retrieve the filtered users
        $users = $query->paginate(10);
        $roles = Role::all(); // Assuming you have a Role model

        return view('frontend.users.index')->with('users', $users)->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorizeAdmin();


        $roles = Role::all();

        return view('frontend.users.add')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $this->authorizeAdmin();

        DB::beginTransaction();
        try {
            // Create the user and assign a role
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'isd_code' => $request->isd_code,
                'phone_number' => $request->phone_number,
                'password' => bcrypt($request->password) // Use the user's password
            ])->assignRole($request->role);

            DB::commit();

            return redirect()->route('users.index')->with('success', 'User stored successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Something went wrong while saving user data.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->authorizeAdmin();


        try {
            $user = User::findOrFail($id);
            return view('frontend.users.view')->with('user', $user);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('users.index')->with('error', 'User not found.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorizeAdmin();

        $roles = Role::all();
        try {
            $user = User::findOrFail($id);
            return view('frontend.users.edit')->with('user', $user)->with('roles', $roles);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('users.index')->with('error', 'User not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, $id)
    {
        $this->authorizeAdmin();

        DB::beginTransaction();
        try {
            $user = User::findOrFail($id);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->isd_code = $request->isd_code;
            $user->phone_number = $request->phone_number;
            $user->email = $request->email;

            // Update password only if provided
            if ($request->filled('password')) {
                $user->password = bcrypt($request->password); // Hash the password
            }

            $user->save();

            DB::commit();
            return redirect()->route('users.index')->with('success', 'User updated successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Something went wrong while updating user data.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorizeAdmin();

        
        DB::beginTransaction();
        try {
            $user = User::findOrFail($id);
            $user->delete();

            DB::commit();
            return redirect()->route('users.index')->with('success', 'User deleted successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Failed to delete user.');
        }
    }

    public function member()
    {
        $this->authorizeAdmin();


        // $members = User::select('id', 'email', 'first_name', 'last_name','isd_code','phone_number')->paginate(10); // Paginate results
        $members = User::role('member')->paginate(10); // Paginate results

        return view('frontend.users.member')->with('members', $members);
    }


    public function membershipUpselling()
{
    // Get the currently authenticated user
    $user = Auth::user();

    // Check if the user has the 'user' role
    if ($user && $user->hasRole('user')) {
        // Prepare data for the email
        $emailData = [
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            // 'message' => 'We have some great membership upgrades available for you!',
        ];

        // Send the email using the Mailable
        \Mail::to($user->email)->send(new \App\Mail\MembershipUpsellNotification($emailData));

        // Return a response (you can redirect or return a view)
        return redirect()->route('dashboard')->with('success', 'Upselling email sent successfully!');
    } else {
        // Redirect if the user does not have the 'user' role
        return redirect()->route('dashboard')->with('error', 'Access denied. You are not eligible for upselling.');
    }
}



    public function profile()
    {
        $current_user = Auth::user(); // Paginate results

        return view('frontend.users.profile')->with('current_user', $current_user);
    }

    public function editProfile()
    {
        $current_user = Auth::user(); // Paginate results

        return view('frontend.users.edit-profile')->with('current_user', $current_user);
    }

    public function updateProfile(EditProfileRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            // Fetch the user by ID or fail
            $user = User::findOrFail($id);

            // Update profile information
            $user->update([
                'first_name'   => $request->first_name,
                'last_name'    => $request->last_name,
                'isd_code'     => $request->isd_code,
                'phone_number' => $request->phone_number,
                'email'        => $request->email,
            ]);

            DB::commit();
            return redirect()->route('profile')->with('success', 'Profile updated successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Something went wrong while updating the profile.');
        }
    }

    private function authorizeAdmin()
    {
        if (!Auth::user()->hasRole('admin')) {
            abort(403, 'Access denied.');
        }
    }
}
