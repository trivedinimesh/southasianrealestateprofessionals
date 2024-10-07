<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Show login form
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('frontend.auth.login');
    }

    // Show registration form
    public function signup()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('frontend.auth.signup');
    }

    // Handle login action
    public function actionlogin(Request $request)
    {
        // Validate input with stricter rules
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt login
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            $user = Auth::user(); // Cached user

            if ($user->hasRole('admin')) {
                return redirect()->route('dashboard')
                    ->withSuccess('You have successfully logged in as admin.');
            }

            return redirect()->route('home')
                ->withSuccess('You have successfully logged in.');
        }

        // Log failed login attempt
        \Log::warning('Login attempt failed for email: ' . $request->email);

        // Invalid credentials
        return back()->withErrors([
            'email' => 'Invalid credentials. Please try again.',
        ])->withInput();
    }

    // Handle registration action
    public function actionSignup(Request $request)
    {
        // Validate user input
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'isd_code' => 'required|string|max:10',
            'phone_number' => 'required|string|max:15|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6', // Password confirmation
        ]);

        // Create the user
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'isd_code' => $validatedData['isd_code'],
            'phone_number' => $validatedData['phone_number'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Assign default role
        $user->assignRole('user');

        // Auto login
        Auth::login($user);

        // Log user registration
        \Log::info('New user registered: ' . $user->email);

        // Redirect with success message
        return redirect()->route('home')
            ->withSuccess('You have successfully registered and logged in.');
    }

    // Show the dashboard
    public function dashboard()
    {
        if (Auth::check()) {
            return view('frontend.dashboard.index');
        }
        return redirect()->route('login')->with('error', 'You do not have access');
    }

    // Logout method
    public function logout()
    {
        Session::flush();
        Auth::logout();

        // Log the logout action
        \Log::info('User logged out.');

        return redirect()->route('login');
    }

    // Show password change form
    public function showChangePasswordForm()
    {
        return view('frontend.auth.change');
    }

    // Handle password change
    public function changePassword(Request $request)
    {
        // Validate the input
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed', // Confirmed validation
        ]);

        // Check if the current password matches
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'The current password does not match']);
        }

        // Update the password
        Auth::user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        // Log the password change
        \Log::info('Password changed for user: ' . Auth::user()->email);

        return redirect()->back()->with('success', 'Password changed successfully!');
    }
}
