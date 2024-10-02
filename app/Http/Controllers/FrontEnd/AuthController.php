<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    // code login method
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('frontend.auth.login');
    }
    // code registration method
    public function signup()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('frontend.auth.signup');
    }
 
    // code action login method
    public function actionlogin(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email', // Added email format validation
            'password' => 'required|min:6', // Added password length validation
        ]);

        // Attempt to log in the user
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Check if the user has the "admin" role
            if ($user->hasRole('admin')) {
                return redirect()->route('dashboard')
                    ->withSuccess('You have successfully logged in as admin.');
            }

            // Redirect non-admin users to the home route
            return redirect()->route('home')
                ->withSuccess('You have successfully logged in.');
        }

        // Return error if credentials are invalid
        return back()->withErrors([
            'email' => 'Invalid credentials. Please try again.',
        ])->withInput();
    }

 
    // code action registration method
    public function actionSignup(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'isd_code' => 'required|string|max:10', // Added max length validation
            'phone_number' => 'required|string|unique:users|max:15', // Added max length validation
            'password' => 'required|string|min:6', // Added password confirmation
        ]);

        // Create the user with validated data
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'isd_code' => $validatedData['isd_code'],
            'phone_number' => $validatedData['phone_number'],
            'password' => bcrypt($validatedData['password']), // Encrypt password
        ]);

        // Assign the 'user' role
        $user->assignRole('user');

        // Auto-login the user after signup
        Auth::login($user);

        // Redirect to the dashboard with success message
        return redirect()->route('dashboard')->withSuccess('You have successfully registered and logged in.');
    }


 
    // code dashboard method
    public function dashboard()
    {
        if (Auth::check()) {
            return view('frontend.dashboard.index');
        }
        return redirect()->route('login')->withSuccess('You do not have access');
    }
 
    // code create method
    public function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'isd_code' => $data['isd_code'],
            'phone_number' => $data['phone_number'],
            'password' => Hash::make($data['password'])
        ]);
    }
 
    // code logout method
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect()->route('login');
    }
}
