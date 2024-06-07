<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('drivers.index', compact('drivers'));
    }

    public function create()
    {
        return view('drivers.create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'name' => 'required|string',
            'cpf' => 'required|string|size:11',
            'cnh' => 'required|string|size:9',
            'type_cnh' => 'required|string',
            'registration' => 'required|string',
            'observation' => 'nullable|string',
        ]);

        Driver::create($request->all());

        return redirect()->route('drivers.index');
    }

    public function show(string $id)
    {
        $driver = Driver::all();
        return view('drivers.show', compact('drivers'));
    }

    public function edit(string $id)
    {
        $driver = Driver::findOrFail($id);
        return view('drivers.edit', compact('driver'));
    }

    public function update(Request $request, string $id)
    {
        $request ->validate([
            'name' => 'required|string',
            'cpf' => 'required|string|size:11',
            'cnh' => 'required|string|size:9',
            'type_cnh' => 'required|string',
            'registration' => 'required|string',
        ]);

        $driver = Driver::findOrFail($id);

        $driver->update($request->all());

        return redirect()->route('drivres.index');
    }

    public function destroy(string $id)
    {
        $driver = Driver::findOrFail($id);
        $driver->delete();
        return redirect()->route('drivers.index');
    }
}
