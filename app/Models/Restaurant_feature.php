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

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'id', 'destination_id');
    }
    public function feature()
    {
        return $this->belongsTo(Feature::class, 'id', 'feature_id');
    }


}