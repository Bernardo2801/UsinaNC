<?php

namespace App\Models;

use App\Models\aux_type_measures;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Material extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['name', 'unit_price', 'stock_quantity', 'observation', 'measures_type'];
}
