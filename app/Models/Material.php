<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['name', 'unit_price', 'stock_quantity', 'observation', 'measures_type'];
}
