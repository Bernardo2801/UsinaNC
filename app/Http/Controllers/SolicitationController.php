<?php

namespace App\Http\Controllers;

use App\Models\Solicitation;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Requester;
use App\Models\Material;
use App\Models\Vehicle;

class SolicitationController extends Controller
{
    public function index()
    {
        $search = request('search');

        if ($search) {
            $solicitations = Solicitation::whereRaw('LOWER(sei_number) LIKE ?', ['%' . strtolower($search) . '%'])->get();
        } else {
            $solicitations = Solicitation::orderBy('sei_number', 'asc')->get();
        }

        return view('solicitations.index', compact('solicitations', 'search'));
    }

    public function create()
    {
        $requesters = Requester::all();
        $materials = Material::all();
        $drivers = Driver::all();
        $vehicles = Vehicle::all();

        return view('solicitations.create', compact('requesters', 'materials', 'drivers', 'vehicles'));
    }

    public function store(Request $request)
    {
        // Validação dos dados recebidos do formulário
        $request->validate([
            'requester_id' => 'required|exists:requesters,id',
            'material_id' => 'required|exists:materials,id',
            'unit_price' => 'required',
            'sei_number' => 'required',
            'requested_quantity' => 'required',
            'date_solicitation' => 'required|date',
            'status' => 'required|string',
            'driver_id' => 'required|exists:drivers,id',
            'vehicle_id' => 'required|exists:vehicles,id',
        ]);

        // Criação da nova solicitação
        Solicitation::create($request->all());

        // Redirecionar de volta para a lista de solicitações com uma mensagem de sucesso
        return redirect()->route('solicitations.index');
    }

    public function show(string $id)
    {
        $solicitation = Solicitation::findOrFail($id);
        return view('solicitations.show', compact('solicitation'));
    }

    public function edit(string $id)
    {
        $solicitation = Solicitation::findOrFail($id);
        $requesters = Requester::all();
        $materials = Material::all();
        $drivers = Driver::all();
        $vehicles = Vehicle::where('availability','Disponível')->get();

        $solicitation = Solicitation::findOrFail($id);
        return view('solicitations.edit', compact('solicitation', 'requesters', 'materials', 'drivers', 'vehicles'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'requester_id' => 'required|exists:requesters,id',
            'material_id' => 'required|exists:materials,id',
            'unit_price' => 'required|numeric',
            'sei_number' => 'required|string',
            'requested_quantity' => 'required|numeric',
            'date_solicitation' => 'required|date',
            'status' => 'required|string',
            'driver_id' => 'required|exists:drivers,id',
            'vehicle_id' => 'required|exists:vehicles,id',
        ]);

        $solicitation = Solicitation::findOrFail($id);
        $solicitation->update($request->all());

        return redirect()->route('solicitations.index');
    }

    public function destroy(string $id)
    {
        $solicitation = Solicitation::findOrFail($id);
        $solicitation->delete();
        return redirect()->route('solicitations.index');
    }
}
