<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BOD extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'designation',
        'image',
        'fb_id',
        'twitter_id',
        'linkedin_id',
        'created_by',
        'updated_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
