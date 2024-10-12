<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plan_id',
        'starts_at',
        'ends_at',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    // Check if the subscription is active
    public function isActive()
    {
        return $this->status == 'active' && $this->ends_at->isFuture();
    }

    // Check if the subscription is expired
    public function isExpired()
    {
        return $this->ends_at->isPast() && $this->status != 'canceled';
    }

    // Extend subscription by a certain number of days
    public function extend($days)
    {
        $endsAt = Carbon::parse($this->ends_at);
        $this->ends_at = $endsAt->addDays((int) $days);
        $this->save();
    }

    // Cancel the subscription
    public function cancel()
    {
        $this->status = 'canceled';
        $this->save();
    }

    // Renew the subscription by restarting it
    public function renew()
    {
        $this->status = 'active';
        $this->ends_at = Carbon::now()->addDays($this->plan->duration);
        $this->save();
    }

    // Static method to check expired subscriptions for a cron job
    public static function checkExpiredSubscriptions()
    {
        $expiredSubscriptions = self::where('ends_at', '<', Carbon::now())
            ->where('status', '!=', 'canceled')
            ->get();

        foreach ($expiredSubscriptions as $subscription) {
            $subscription->status = 'expired';
            $subscription->save();
        }
    }
}
