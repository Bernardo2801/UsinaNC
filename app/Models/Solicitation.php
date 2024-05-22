<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\models\Driver;
use app\models\Material;
use app\models\Requester;
use app\models\Vehicle;

class Solicitation extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable =['id_requester', 'id_material', 'unit_price', 'sei_number', 'requested_quantity', 'date_solicitation', 'status', 'id_driver', 'id_vehicle'];

    public function driver(){
        return $this->hasOne(Driver::class);
    }

    public function material() {
        return $this->hasOne(Material::class);
    }

    public function requester() {
        return $this->hasOne(Requester::class);
    }

    public function vehicle() {
        return $this->hasOne(Vehicle::class);
    }
}
