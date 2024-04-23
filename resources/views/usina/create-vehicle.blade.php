@extends('layouts.main')

@section('title', 'Usina (Adicionar Veículo)')

@section('content')

<div class="py-12">
    <div class="px-4 sm:w-2/3 lg:w-1/2 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="rounded-lg shadow-lg bg-gray-800 py-10 md:py-12 px-4 md:px-6">
            <div class="mb-4">
                <h1 class="inline-flex items-center px-4 py-2 font-semibold text-mds text-white uppercase tracking-widest">Adicionar novo veículo</h1>
            </div>
            <div>
                <form action="/addVehicle" method="POST" class="form-control w-full px-3 py-1.5">
                @csrf
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Modelo</label>
                        <input type="text" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Digite aqui o modelo do veículo...">
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Tipo</label>
                        <input type="text" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Informe o tipo deste veículo...">
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Placa</label>
                        <input type="text" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Informe a placa...">
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Chassi</label>
                        <input type="text" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Informe o chassi...">
                    </div>
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 transition ease-in-out duration-150 mt-4" value="Adicionar novo motorista">
                        <ion-icon name="add-outline" class="text-[26px] mr-2"></ion-icon>
                        Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
