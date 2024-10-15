<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'feature'
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class,'event_features');
    }
}
