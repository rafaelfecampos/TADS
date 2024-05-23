<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'slug',
        'is_active',
        'user_id'

    ];

    function user(){
        return $this->belongsTo(User::class);
    }

    function categories(){
        return $this->belongsToMany(Category::class, 'posts_categories');
    }
}
