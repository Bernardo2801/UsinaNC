<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{

    public function index()
    {
        return view('usina.driver');
    }

    public function create()
    {
        return view('usina.create.create-driver');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Driver $driver)
    {
        return view('usina.show.show-driver');
    }

    public function edit(Driver $driver)
    {
        return view('usina.edit.edit-driver');
    }

    public function update(Request $request, Driver $driver)
    {
        //
    }

    public function destroy(Driver $driver)
    {
        //
    }
}
