<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Solicitation;

class Material extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['name', 'id_aux_type_measures', 'unit_price', 'stock_quantity'];

    public function type_measures() {

        return $this->hasOne(aux_type_measures::class);

    }

    public function solicitation() {

        return $this->belongsTo(Solicitation::class);

    }
}

