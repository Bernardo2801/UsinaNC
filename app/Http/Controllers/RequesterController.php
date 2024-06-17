<?php

namespace App\Http\Controllers;

use App\Models\Requester;
use Illuminate\Http\Request;

class RequesterController extends Controller
{
    public function index()
    {
        $search = request('search');
        if ($search) {
            $requesters = Requester::whereRaw('LOWER(name_requester) LIKE ?', ['%' . strtolower($search) . '%'])->get();
        } else {
            $requesters = Requester::orderBy('name_requester', 'asc')->get();
        }

        return view('requesters.index', compact('requesters'), ['requesters' => $requesters, 'search' => $search]);
    }

    public function create()
    {
        return view('requesters.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type_requester' => 'required|string',
            'name_requester' => 'required|string',
            'departament_boss' => 'required|string',
            'observation' => 'nullable|string'
        ]);

        Requester::create($request->all());

        return redirect()->route('requesters.index');
    }

    public function show(string $id)
    {
        $requester = Requester::findOrFail($id);
        return view('requesters.show', compact('requester'));
    }

    public function edit(string $id)
    {
        $requester = Requester::findOrFail($id);
        return view('requesters.edit', compact('requester'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'type_requester' => 'required|string',
            'name_requester' => 'required|string',
            'departament_boss' => 'required|string',
            'observation' => 'nullable|string'
        ]);

        $requester = Requester::findOrFail($id);

        $requester->update($request->all());

        return redirect()->route('requesters.index');
    }

    public function destroy(string $id)
    {
        $requester = Requester::findOrFail($id);
        $requester->delete();
        return redirect()->route('requesters.index');
    }
}
