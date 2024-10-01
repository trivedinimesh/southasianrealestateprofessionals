<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'body',
        'meta_tag',
        'meta_description',
        'slug',
        'created_by',
        'updated_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'blog_tags');
    }

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'blog_keywords');
    }
}
