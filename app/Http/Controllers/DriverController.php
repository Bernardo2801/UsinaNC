<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $search = request('search');
        if($search) {
            $drivers = Driver::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($search) . '%'])->get();
        } else {
            $drivers = Driver::orderBy('name', 'asc')->get();
        }

        return view('drivers.index', compact('drivers'), ['drivers' => $drivers, 'search' => $search]);
    }

    public function create()
    {
        return view('drivers.create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'name' => 'required|string',
            'cpf' => 'required|string|size:14',
            'cnh' => 'required|integer',
            'type_cnh' => 'required|array',
            'registration' => 'required|integer',
            'observation' => 'nullable|string',
        ], [
            'type_cnh.required' => 'Por favor, preencha o TIPO da carteira do motorista.'
        ]);

        $mergedTypeCnh = implode(', ', $request->type_cnh);
        $request['type_cnh'] = json_encode($mergedTypeCnh);

        Driver::create($request->all());

        return redirect()->route('drivers.index');
    }

    public function show($id)
    {
        $driver = Driver::findOrFail($id);
        return view('drivers.show', compact('driver'));
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
            'cpf' => 'required|string|size:14',
            'cnh' => 'required|integer',
            'type_cnh' => 'required|array',
            'registration' => 'required|integer',
            'observation' => 'nullable|string',
        ], [
            'type_cnh.required' => 'Por favor, preencha o TIPO da carteira do motorista.'
        ]);

        $mergedTypeCnh = implode(', ', $request->type_cnh);
        $request['type_cnh'] = json_encode($mergedTypeCnh);

        $driver = Driver::findOrFail($id);

        $driver->update($request->all());

        return redirect()->route('drivers.index');
    }

    public function destroy(string $id)
    {
        $driver = Driver::findOrFail($id);
        $driver->delete();
        return redirect()->route('drivers.index');
    }
}
