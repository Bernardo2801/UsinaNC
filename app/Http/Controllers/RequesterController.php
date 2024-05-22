<?php

namespace App\Http\Controllers;

use App\Models\Requester;
use Illuminate\Http\Request;

class RequesterController extends Controller
{
    public function index()
    {
        return view('usina.requesters');
    }

    public function create()
    {
        return view('usina.create.create-requesters');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(requester $requester)
    {
        return view('usina.show.show-requesters');
    }

    public function edit(requester $requester)
    {
        return view('usina.edit.edit-requesters');
    }

    public function update(Request $request, requester $requester)
    {
        //
    }

    public function destroy(requester $requester)
    {
        //
    }
}
