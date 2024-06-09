<?php

namespace App\Models;

use App\Models\aux_type_measures;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    public function typeMeasures() {
        return $this->belongsTo(aux_type_measures::class, 'measures_type', 'id');
    }

    public function type_measures() {
        return $this->hasOne(aux_type_measures::class, 'id', 'measures_type');
    }

    protected $guarded = [];
    protected $fillable = ['name', 'unit_price', 'stock_quantity', 'observation', 'measures_type'];
}
