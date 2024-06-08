<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['name', 'cpf', 'cnh', 'type_cnh', 'registration', 'observation'];

}
