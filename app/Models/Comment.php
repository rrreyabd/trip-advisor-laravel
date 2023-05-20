<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment_Photo;


class Comment extends Model
{
    use HasFactory;

    public function destination() {
        return $this->belongsTo(Destination::class);
    }

    public function commentPhotos()
    {
        return $this->belongsTo(CommentPhoto::class, 'comment_id');
    }
}
