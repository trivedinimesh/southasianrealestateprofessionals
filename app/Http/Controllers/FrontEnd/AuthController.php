<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\ChangePasswordRequest;

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

    
    // Handle login action
    public function actionlogin(LoginRequest $request)
    {

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            $user = Auth::user();

            if ($user->hasRole('admin')) {
                return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in as admin.');
            }
            
            return redirect()->route('home')
                ->withSuccess('You have successfully logged in.');
        }
        
        \Log::warning('Login attempt failed for email: ' . $request->email);
        
        return back()->withErrors([
            'email' => 'Invalid credentials. Please try again.',
        ])->withInput();
    }
        
    // Show registration form
    public function signup()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('frontend.auth.signup');
    }

    // Handle registration action
    public function actionSignup(SignupRequest $request)
    {
        // Create the user
        $user = User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'isd_code' => $request['isd_code'],
            'phone_number' => $request['phone_number'],
            'password' => bcrypt($request['password']),
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
    public function changePassword(ChangePasswordRequest $request)
    {

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
