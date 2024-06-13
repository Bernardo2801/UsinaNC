<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requester extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['type_requester', 'name_requester', 'departament_boss', 'observation'];
}
