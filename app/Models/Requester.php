<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Solicitation;

class Requester extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['type_requester', 'name_requester'];

    public function solicitation() {

        return $this->belongsTo(Solicitation::class);
    }
}
