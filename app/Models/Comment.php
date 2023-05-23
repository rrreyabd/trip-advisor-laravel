<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment_Photo;


class Comment extends Model
{
    use HasFactory;

    public function destination(){
        return $this->belongsTo(Destination::class); //many to one
    }
    public function user(){
        return $this->belongsTo(User::class); //many to one
    }
    public function rating(){
        return $this->belongsTo(Rating::class);//many to one
    }

    public function comment_photo(){
        return $this->hasMany(Comment_photo::class); //one to many
    }
}
