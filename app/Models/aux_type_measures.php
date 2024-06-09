<?php

namespace App\Models;

use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aux_type_measures extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['measures_type'];
}
