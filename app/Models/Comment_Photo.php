<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_photo extends Model
{
    use HasFactory;

    public $timestamps = false;
    public function comment(){
        return $this->belongsTo(Comment::class, 'comment_id');
    }

    public function comment_photo()
    {
        return $this->hasMany(Comment_photo::class);
    }

}