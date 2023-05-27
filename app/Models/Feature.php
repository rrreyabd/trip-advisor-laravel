<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    public function destination(){
        return $this->belongsTo('Destination');
    }

    public function restaurant_feature(){
        return $this->hasOne(Restaurant_feature::class);
    }
}