<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subcategory(){
        return $this->hasMany(Subcategory::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
