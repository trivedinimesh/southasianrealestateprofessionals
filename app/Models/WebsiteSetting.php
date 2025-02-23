<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class WebsiteSetting extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'header_image',
        'header_title',
        'contact_form_email',
        'feedback_form_email',
    ];
}
