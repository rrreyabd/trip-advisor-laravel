<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = ['partner_id', 'destination_id', 'price'];
    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }

    public function partner(){
        return $this->belongsTo(Partner::class);
    }
}