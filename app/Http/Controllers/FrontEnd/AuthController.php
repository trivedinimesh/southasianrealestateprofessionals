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
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')
                ->withSuccess('You have Successfully loggedin');
        }
        return back()->withErrors([
            'email' => 'Invalid credentials. Please try again.',
        ])->withInput();
    }
 
    // code action registration method
    public function actionSignup(Request $request)
    {
        // Validate the request
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'isd_code' => 'required',
            'phone_number' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create a new user with the validated data
        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'isd_code' => $request->input('isd_code'),
            'phone_number' => $request->input('phone_number'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Assign the 'user' role to the newly created user
        $user->assignRole('user');

        // Log in the user automatically after registration (optional)
        Auth::login($user);

        // Redirect to the dashboard with a success message
        return redirect()->route('dashboard')->withSuccess('You have Successfully logged in');
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
