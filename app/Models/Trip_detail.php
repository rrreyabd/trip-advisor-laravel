<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip_detail extends Model
{
    use HasFactory;
    
    public function trip_plan(){
        return $this->belongsTo(Trip_plan::class);
    }

    public function trip_destination_detail(){
        return $this->hasMany(Trip_destination_detail::class);
    }
}