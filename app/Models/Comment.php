<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function posts(){
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

}
