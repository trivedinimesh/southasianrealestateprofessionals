<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request, $planId)
    {
        $user= Auth::user();
        $plan = Plan::findOrFail($planId);

        if ($user->hasRole('admin')) {
            return redirect()->back()->with('error', 'You are a admin, you dont need membership');
        }

        $activeSubscription = Subscription::where('user_id', $user->id)
                                       ->where('status', 'active')
                                       ->where('ends_at', '>', Carbon::now()) // Check if the subscription is still valid
                                       ->first();

        if ($activeSubscription) {
            // Redirect back with an error message if user already has an active subscription
            return redirect()->route('subscription.details')->with('error', 'You are already subscribed to a membership plan.');
        }

        // Assume payment is processed here...

        // Create the subscription
        $subscription = Subscription::create([
            'user_id' => $user->id,
            'plan_id' => $plan->id,
            'starts_at' => Carbon::now(),
            'ends_at' => Carbon::now()->addDays($plan->duration),
            'status' => 'active',
        ]);

        $user->assignRole('member');

        $admins = \App\Models\User::role('admin')->get(); // Get all users with the "admin" role
        foreach ($admins as $admin) {
            \Mail::to($admin->email)->send(new \App\Mail\AdminSubscriptionNotification($subscription));
        }


       

      
            \Mail::to($user->email)->send(new \App\Mail\UserSubscriptionNotification($subscription));

   
        return redirect()->route('subscription.details')->with('success', 'Subscription successful');


    }

    public function listMembership()
    {
        $subscriptions = Subscription::get();

        return view('frontend.membership.list')->with('subscriptions', $subscriptions);
    }

    public function subscriptionDetails()
    {
        $user= Auth::user();
        $subscription = Subscription::where('user_id', $user->id)
                                    ->with('plan')
                                    ->latest()
                                    ->first();

        return view('frontend.membership.details')->with('subscription', $subscription);
    }

    public function cancelSubscription($id)
    {
        $user= Auth::user();
        $subscription = Subscription::where('user_id', $user->id)->findOrFail($id);
        $subscription->cancel();
        $user->assignRole('user');

        return redirect()->route('subscription.details')->with('success', 'Subscription canceled.');
    }

    public function extendSubscription(Request $request, $id)
    {
        $subscription = Subscription::findOrFail($id);
        $days = $request->input('days', 30); // Default 30 days if not provided
        $subscription->extend($days);

        return redirect()->route('subscription.list')->with('success', 'Subscription extended by ' . $days . ' days.');
    }

    public function renewSubscription($id){
        $subscription = Subscription::findOrFail($id);
        $subscription->renew();
        return redirect()->route('subscription.details')->with('success');
    }

    public function checkExpired()
    {
        $expiredSubscriptions = Subscription::where('ends_at', '<', Carbon::now())
                                            ->where('status', '!=', 'canceled')
                                            ->get();

        foreach ($expiredSubscriptions as $subscription) {
            $subscription->status = 'expired';
            $subscription->save();
            $subscription->user->assignRole('user');

        }

        var_dump("expiry check");
    }


    public function checkDaysLeft()
    {
        $subscriptions = Subscription::where('status', 'active')
                                    ->where('ends_at', '>', Carbon::now())
                                    ->get();

        // Define the day intervals when reminders should be sent
        $reminderDays = [30, 15, 7, 1];

        foreach ($subscriptions as $subscription) {
            // Calculate days left
            $daysLeft = Carbon::now()->diffInDays(Carbon::parse($subscription->ends_at), false);

            if (in_array($daysLeft, $reminderDays)) {
                // Send email notification if the days left match the reminder days
                $user = $subscription->user;
                \Mail::to($user->email)->send(new \App\Mail\SubscriptionReminder($user, $daysLeft));

                // Log the reminder
                \Log::info("Reminder sent to user {$user->email} with {$daysLeft} days left.");
            }
        }
    }

}
