<?php

namespace App\Http\Controllers;

use App\Models\Solicitation;
use Illuminate\Http\Request;

class SolicitationController extends Controller
{
    public function index()
    {
        $search = request('search');
        if ($search) {
            $solicitations = Solicitation::whereRaw('LOWER() LIKE ?', ['%' . strtolower($search) . '%'])->get();
        } else {
            $solicitations = Solicitation::orderBy('', 'asc')->get();
        }

        return view('solicitations.index', compact('solicitations'), ['solicitations' => $solicitations, 'search' => $search]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
