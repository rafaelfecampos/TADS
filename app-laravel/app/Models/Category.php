<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Post;

class Category extends Model
{
    use HasFactory;

    function posts(){
        return $this->belongsToMany(Post::class, 'posts_categories');
    }
}
