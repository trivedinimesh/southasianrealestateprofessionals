<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Event;
use App\Models\Booking;
use App\Models\Subscription;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Mail\UserWelcomeNotification;
use Carbon\Carbon;



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

          // Send the welcome email
          try {
            \Mail::to($user->email)->send(new UserWelcomeNotification($user));
        } catch (\Exception $e) {
            // Log the error if email sending fails
            // You can show a warning if mail fails
            return redirect()->route('users.index')->with('warning', 'User created, but email sending failed.');
        }

        // Redirect with success message
        return redirect()->route('home')
            ->withSuccess('You have successfully registered and logged in.');
    }

    // Show the dashboard
    public function dashboard()
    {
        if (Auth::check()) {
            $currentUser = Auth::user();
            if($currentUser->hasRole('admin')){
                $usersCount = User::count();
                $membersCount = User::role('member')->count();
                $eventsCount = Event::count();
                $bookingsCount = Booking::count();
                $subscriptions = Subscription::take(10)->get();
                $events = Event::withCount('bookings')->take(10)->get();
                $bookings = Booking::take(10)->get();

                return view('frontend.dashboard.index', [
                    'usersCount' => $usersCount,
                    'membersCount' => $membersCount,
                    'eventsCount' => $eventsCount,
                    'bookingsCount' => $bookingsCount,
                    'subscriptions' => $subscriptions,
                    'events' => $events,
                    'bookings' => $bookings,
                ]);
            } else {

                $subscriptions = Subscription::where('user_id', $currentUser->id)
                                       ->where('status', 'active')
                                       ->where('ends_at', '>', Carbon::now()) // Check if the subscription is still valid
                                       ->get();
                $events = Event::take(10)->get();
                $bookings = Booking::where('user_id', $currentUser->id)->with('event')->with('user')->take(10)->get();
                return view('frontend.dashboard.user', [
                    'subscriptions' => $subscriptions,
                    'events' => $events,
                    'bookings' => $bookings,
                ]);
            }
        }
        return redirect()->route('login')->with('error', 'You do not have access');
    }

    // Logout method
    public function logout()
    {
        Session::flush();
        Auth::logout();

        // Log the logout action

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

        return redirect()->back()->with('success', 'Password changed successfully!');
    }
}
