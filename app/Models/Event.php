<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Event extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'title',
        'wave_product_id',
        'details',
        'image',
        'price_member',
        'price_non_member',
        'is_active',
        'date',
        'start_time',
        'end_time',
        'address',
        'country',
        'state',
        'city',
        'pincode',
        'created_by',
        'updated_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'event_features');
    }
}
