@extends('layouts.main')

@section('title', 'Adicionar Material')

@section('content')

<div class="py-12">
    <div class="px-4 sm:w-2/3 lg:w-1/2 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="rounded-lg shadow-lg bg-gray-800 py-10 md:py-12 px-4 md:px-6">
            <div class="mb-4">
                <h1 class="inline-flex items-center px-4 py-2 font-semibold text-mds text-white uppercase tracking-widest">Adicionar novo motorista</h1>
            </div>
            <div>
                <form action="/addDriver" method="POST" class="form-control w-full px-3 py-1.5">
                @csrf
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Material</label>
                        <input type="text"
                        id="material"
                        name="material"
                        placeholder="Digite aqui o nome do material..."
                        class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600">
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Preço</label>
                        <input type="number"
                        min="0" step="0.01"
                        id="value"
                        name="value"
                        placeholder="Digite o preço..."
                        class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600">
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Medida</label>
                        <input type="text"
                        id="measure"
                        name="measure"
                        placeholder="Informe qual a medida que deve ser utilizada..."
                        class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600">
                    </div>

                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Selecione uma medida</label>
                        <select id="measure" class="block w-full py-2.3 px-0 text-sm text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600">
                            <option selected class="bg-gray-600">Selecione uma medida</option>
                            <option value="T" class="bg-gray-600">Tonelada</option>
                            <option value="KG" class="bg-gray-600">Quilos</option>
                            <option value="G" class="bg-gray-600">Gramas</option>
                        </select>
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Quantidade</label>
                        <input type="number"
                        min="0" step="0.01"
                        id="quantity"
                        name="quantity"
                        placeholder="Informe em números a quantidade desejada..."
                        class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600">
                    </div>
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
