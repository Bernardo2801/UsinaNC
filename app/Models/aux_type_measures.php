<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Material;

class aux_type_measures extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function material() {

        return $this->belongsTo(Material::class);

    }
}
