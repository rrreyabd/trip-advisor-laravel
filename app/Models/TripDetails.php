<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripDetails extends Model
{
    use HasFactory;

    public function tripPlans()
    {
        return $this->belongsTo(TripPlan::class);
    }
}
