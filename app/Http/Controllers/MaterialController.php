<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $search = request('search');
        if($search) {
            $materials = Material::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($search) . '%'])->get();
        } else {
            $materials = Material::orderBy('name', 'asc')->get();
        }

        return view('materials.index', compact('materials'), ['materials' => $materials, 'search' => $search]);
    }

    public function create()
    {
        return view('materials.create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'name' => 'required|string',
            'unit_price' => 'required',
            'stock_quantity' => 'required',
            'measures_type' => 'required|string',
            'observation' => 'nullable|string',
        ]);

        Material::create($request->all());

        return redirect()->route('materials.index');
    }

    public function show(string $id)
    {
        $material = Material::findOrFail($id);
        return view('materials.show', compact('material'));
    }

    public function edit(string $id)
    {
        $material = Material::findOrFail($id);
        return view('materials.edit', compact('material'));
    }

    public function update(Request $request, string $id)
    {
        $request ->validate([
            'name' => 'required|string',
            'unit_price' => 'required',
            'stock_quantity' => 'required',
            'measures_type' => 'required|string',
            'observation' => 'nullable|string',
        ]);

        $material = Material::findOrFail($id);

        $material->update($request->all());

        return redirect()->route('materials.index');
    }

    public function destroy(string $id)
    {
        $material = Material::findOrFail($id);
        $material->delete();
        return redirect()->route('materials.index');
    }
}
