<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        return view('usina.vehicle');
    }

    public function create()
    {
        return view('usina.create.create-vehicle');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(vehicle $vehicle)
    {
        return view('usina.show.show-vehicle');
    }

    public function edit(vehicle $vehicle)
    {
        return view('usina.edit.edit-vehicle');
    }

    public function update(Request $request, vehicle $vehicle)
    {
        //
    }

    public function destroy(vehicle $vehicle)
    {
        //
    }
}
