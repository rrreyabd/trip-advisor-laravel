<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip_destination_detail extends Model
{
    use HasFactory;

    public function destination(){
        return $this->belongsTo(Destination::class);
    }
    // public function trip_detail(){
    //     return $this->belongsTo(Trip_detail::class);
    // }
}