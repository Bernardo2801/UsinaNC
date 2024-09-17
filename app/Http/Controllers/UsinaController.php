<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Material;
use App\Models\Vehicle;
use App\Models\Requester;
use App\Models\Solicitation;

class UsinaController extends Controller
{
    // view page home
    public function welcome(Request $request)
    {

        $status = $request->input('status');

        $totalVehicles = Vehicle::count();
        $totalDrivers = Driver::count();
        $totalMaterials = Material::count();
        $totalRequesters = Requester::count();

        if ($status) {
            $solicitations = Solicitation::where('status', $status)->latest()->take(5)->get();
        } else {
            $solicitations = Solicitation::latest()->take(5)->get();
        }

        return view('welcome', compact('totalVehicles', 'totalDrivers', 'totalMaterials', 'totalRequesters', 'solicitations', 'status'));
    }
}
