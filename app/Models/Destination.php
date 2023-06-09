<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    public function rating(){
        return $this->belongsTo(Rating::class, 'rating_id');
    }
    public function feature(){
        return $this->hasMany(Feature::class);
    }

    public function restaurant_type(){
        return $this->hasOne(Restaurant_type::class);
    }

    public function destination_feature()
    {
        return $this->hasMany(Destination_feature::class, 'destination_id');
    }

    public function photo()
    {
        return $this->hasMany(Photo::class, 'destination_id');
    }
    public function price()
    {
        return $this->hasMany(Price::class, 'destination_id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'destination_id');
    }
}
