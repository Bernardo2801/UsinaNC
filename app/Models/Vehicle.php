<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['vehicle_model', 'vehicle_type', 'chassi', 'plate', 'observation'];
}
