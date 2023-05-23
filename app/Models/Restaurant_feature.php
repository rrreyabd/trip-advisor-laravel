<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant_feature extends Model
{
    use HasFactory;

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    public function feature(){
        return $this->belongsTo(Feature::class);
    }
}