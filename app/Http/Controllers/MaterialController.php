<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        return view('usina.materials');
    }

    public function create()
    {
        return view('usina.create.create-materials');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(material $material)
    {
        return view('usina.show.show-materials');
    }

    public function edit(material $material)
    {
        return view('usina.edit.edit-materials');
    }

    public function update(Request $request, material $material)
    {
        //
    }

    public function destroy(material $material)
    {
        //
    }
}
