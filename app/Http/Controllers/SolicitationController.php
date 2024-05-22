<?php

namespace App\Http\Controllers;

use App\Models\Solicitation;
use Illuminate\Http\Request;

class SolicitationController extends Controller
{
    public function index()
    {
        return view('usina.request');
    }

    public function create()
    {
        return view('usina.create.create-request');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(solicitation $solicitation)
    {
        return view('usina.show.show-request');
    }

    public function edit(solicitation $solicitation)
    {
        return view('usina.edit.edit-request');
    }

    public function update(Request $request, solicitation $solicitation)
    {
        //
    }

    public function destroy(solicitation $solicitation)
    {
        //
    }
}
