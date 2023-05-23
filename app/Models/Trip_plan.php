<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip_plan extends Model
{
    use HasFactory;

    public function trip_detail()
    {
        return $this->hasMany(TripDetail::class);
    }
}
