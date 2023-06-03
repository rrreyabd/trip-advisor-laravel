<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination_feature extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['feature_id', 'destination_id'];

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }
    public function feature()
    {
        return $this->belongsTo(Feature::class, 'feature_id');
    }
    

}