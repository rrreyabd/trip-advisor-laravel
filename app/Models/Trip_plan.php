<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip_plan extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'trip_name',
        'trip_info',
        'days',
        'trip_type',
        // properti fillable lainnya
    ];
}