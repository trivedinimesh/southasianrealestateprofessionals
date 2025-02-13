<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use App\Mail\MembershipExpiredNotification;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request, $planId)
    {
        $user = Auth::user();
        
        // Validate the planId to ensure it's an integer
        $validatedData = $request->validate([
            'planId' => 'required|integer|exists:plans,id'
        ]);

        $plan = Plan::findOrFail($planId);

        if ($user->hasRole('admin')) {
            return redirect()->back()->with('error', 'You are an admin, you don\'t need membership.');
        }

        if (Subscription::where('user_id', $user->id)->where('status', 'active')->exists()) {
            return redirect()->back()->with('error', 'You already have an active membership.');
        }

        if (Subscription::where('user_id', $user->id)->exists()) {
            return redirect()->back()->with('error', 'You were our member in the past, please renew your cancelled or expired membership.');
        }

        $activeSubscription = Subscription::where('user_id', $user->id)
                                        ->where('status', 'active')
                                        ->where('ends_at', '>', Carbon::now()) // Check if the subscription is still valid
                                        ->first();

        if ($activeSubscription) {
            return redirect()->route('subscription.details')->with('error', 'You are already subscribed to a membership plan.');
        }

        // Assume payment is processed here...

        // Create the subscription (safe from SQL injection)
        $subscription = Subscription::create([
            'user_id' => $user->id,
            'plan_id' => $plan->id,
            'starts_at' => Carbon::now(),
            'ends_at' => Carbon::now()->addDays($plan->duration),
            'status' => 'active',
        ]);

        $user->assignRole('member');

        $admins = \App\Models\User::role('admin')->get(); 
        foreach ($admins as $admin) {
            \Mail::to($admin->email)->send(new \App\Mail\AdminSubscriptionNotification($subscription));
        }

        \Mail::to($user->email)->send(new \App\Mail\UserSubscriptionNotification($subscription));

        return redirect()->route('subscription.details')->with('success', 'Subscription successful');
    }

    public function listMembership()
    {
        $subscriptions = Subscription::paginate(10);

        return view('frontend.membership.list')->with('subscriptions', $subscriptions);
    }

    public function subscriptionDetails()
    {
        $user= Auth::user();
        $subscriptions = Subscription::where('user_id', $user->id)
                                    ->with('plan')
                                    ->latest()
                                    ->paginate(10);

        return view('frontend.membership.details')->with('subscriptions', $subscriptions);
    }

    public function cancelSubscription($id)
    {
        $user= Auth::user();
        $subscription = Subscription::where('user_id', $user->id)->findOrFail($id);
        $subscription->cancel();
        $user->removeRole('member');

        return redirect()->route('subscription.details')->with('success', 'Subscription canceled.');
    }

    public function extendSubscription(Request $request, $id)
    {
        $this->authorizeAdmin();

        $validatedData = $request->validate([
            'days' => 'integer|min:1|max:365', // Ensure the 'days' input is a valid integer between 1 and 365
        ]);

        $subscription = Subscription::findOrFail($id);

        $days = $request->input('days', 30); // Default 30 days if not provided
        $subscription->extend($days);
        $safeDays = e($days);

        return redirect()->route('subscription.list')->with('success', 'Subscription extended by ' . $safeDays . ' days.');
    }

    public function renewSubscription($id){
        $subscription = Subscription::findOrFail($id);
        $subscription->renew();
        $user=$subscription->user;
        \Mail::to($user->email)->send(new \App\Mail\UserSubscriptionRenewalNotification($subscription));

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

            
            $user=$subscription->user;
              // Send the email notification to the user
        try {
            \Mail::to($user->email)->send(new \App\Mail\MembershipExpiredNotification($user));
        } catch (\Exception $e) {
            // Log any error encountered during the email sending process
            echo $e;
        }

        }

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

    private function authorizeAdmin()
    {
        if (!Auth::user()->hasRole('admin')) {
            abort(403, 'Access denied.');
        }
    }

}
