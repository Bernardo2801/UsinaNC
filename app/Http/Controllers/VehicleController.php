<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $search = request('search');
        if($search) {
            $vehicles = Vehicle::whereRaw('LOWER(vehicle_model) LIKE ?', ['%' . strtolower($search) . '%'])->get();
        } else {
            $vehicles = Vehicle::orderBy('vehicle_model', 'asc')->get();
        }

        return view('vehicles.index', compact('vehicles'), ['vehicles' => $vehicles, 'search' => $search]);
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'vehicle_model' => 'required|string',
            'vehicle_type' => 'required|string',
            'chassi' => 'required|string|size:17',
            'plate' => 'required|string|size:7',
            'observation' => 'nullable|string',
        ]);

        Vehicle::create($request->all());

        return redirect()->route('vehicles.index');
    }

    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, string $id)
    {
        $request ->validate([
            'vehicle_model' => 'required|string',
            'vehicle_type' => 'required|string',
            'chassi' => 'required|string|size:17',
            'plate' => 'required|string|size:7',
            'observation' => 'nullable|string',
        ]);

        $vehicle = Vehicle::findOrFail($id);

        $vehicle->update($request->all());

        return redirect()->route('vehicles.index');
    }

    public function destroy(string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        return redirect()->route('vehicles.index');
    }
}
