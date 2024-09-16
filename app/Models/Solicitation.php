<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Driver;
use App\Models\Requester;
use App\Models\Material;
use App\Models\Vehicle;

class Solicitation extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [
        'requester_id',
        'material_id',
        'driver_id',
        'vehicle_id',
        'unit_price',
        'sei_number',
        'requested_quantity',
        'date_solicitation',
        'status',
        'observation',
    ];

    // Relacionamento com requester
    public function requester()
    {
        return $this->belongsTo(Requester::class);
    }

    // Relacionamento com Material
    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    // Relacionamento com Motorista
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    // Relacionamento com Veiculo
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
