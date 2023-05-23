<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant_type extends Model
{
    use HasFactory;
    public function destination(){
        return $this->belongsTo(Destination::class);
    }
}