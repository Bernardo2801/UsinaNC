<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NavController extends Controller
{
    // view page home
    public function welcome()
    {
        return view('welcome');
    }

    // view page SOLICITACOES
            public function request()
            {
                return view('usina.request');
            }
            public function createRequest()
            {
                return view('usina.create.create-request');
            }
            public function showRequest()
            {
                return view('usina.show.show-request');
            }
            public function editRequest()
            {
                return view('usina.edit.edit-request');
            }

    // view page solicitantes
            public function requesters()
            {
                return view('usina.requesters');
            }
            public function createRequesters()
            {
                return view('usina.create.create-requesters');
            }
            public function showRequesters()
            {
                return view('usina.show.show-requesters');
            }
            public function editRequesters()
            {
                return view('usina.edit.edit-requesters');
            }

    // view page materiais
            public function materials()
            {
                return view('usina.materials');
            }
            public function createMaterials()
            {
                return view('usina.create.create-materials');
            }
            public function showMaterials()
            {
                return view('usina.show.show-materials');
            }
            public function editMaterials()
            {
                return view('usina.edit.edit-materials');
            }



    // view page motorista
            public function driver()
            {
                return view('usina.driver');
            }
            public function createDriver()
            {
                return view('usina.create.create-driver');
            }
            public function showDriver()
            {
                return view('usina.show.show-driver');
            }
            public function editDriver()
            {
                return view('usina.edit.edit-driver');
            }

    // view page veiculo
            public function vehicle()
            {
                return view('usina.vehicle');
            }
            public function createVehicle()
            {
                return view('usina.create.create-vehicle');
            }
            public function showVehicle()
            {
                return view('usina.show.show-vehicle');
            }
            public function editVehicle()
            {
                return view('usina.edit.edit-vehicle');
            }
}
