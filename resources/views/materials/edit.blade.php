@extends('layouts.main')

@section('title', 'Usina (Editar Materials)')

@section('content')

    <div class="py-12">
        <div class="px-4 sm:w-2/3 lg:w-1/2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="rounded-lg shadow-lg bg-gray-800 py-10 md:py-12 px-4 md:px-6">
                <div class="mb-6 -mt-8 -ml-1.4">
                    <a href="{{ route('materials.index') }}"
                        class="inline-flex items-center px-3 py-1.5 font-semibold text-sm text-white uppercase tracking-widest"><ion-icon
                            name="arrow-back" class="text-[26px] mr-2"></ion-icon>Voltar</a>
                </div>
                <div class="mb-2">
                    <h3 class="px-3 py-1.5 font-semibold text-sm text-white uppercase tracking-widest">Preencha os campos
                        para adiconar novo material.</h3>
                </div>
                <form method="POST" action="{{ route('materials.update', $material->id) }}" class="form-control w-full px-3 py-1.5">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Nome</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $material->name) }}"
                            class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600"
                            placeholder="Digite aqui o nome do material..." required>
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase mb-2">Selecione a
                            medida</label>
                        <ul
                            class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input type="radio" name="measures_type" id="measures_type" value="T"

                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-tonelada"
                                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tonelada
                                        (T)</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input type="radio" name="measures_type" id="measures_type" value="KG"

                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-quilograma"
                                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Quilograma
                                        (KG)</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input type="radio" name="measures_type" id="measures_type" value="G"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-grama"
                                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Grama
                                        (G)</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Preço por
                            medida</label>
                        <input type="number" name="unit_price" id="unit_price" step="0.01" min="0.01" value="{{ old('unit_price', $material->unit_price) }}"
                            class="block w-full p-2.5 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600"
                            placeholder="Informe o preço de tal medida..." required>
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Quantidade disponível</label>
                        <input type="number" name="stock_quantity" id="stock_quantity" step="0.01" min="0.01" value="{{ old('stock_quantity', $material->stock_quantity) }}"
                            class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600"
                            placeholder="Informe a quantidade disponível em estoque..." required>
                    </div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-300 uppercase">Observação</label>
                    <textarea id="observation" name="observation" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Caso exista alguma observação sobre este material, escreva aqui...">{{ old('observation', $material->observation) }}</textarea>
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 transition ease-in-out duration-150 mt-4"
                        value="Editar material">
                        <ion-icon name="add-outline" class="text-[26px] mr-2"></ion-icon>
                        Adicionar</button>
                    @if ($errors->any())
                        <div class="mt-4">
                            @foreach ($errors->all() as $error)
                                <span
                                    class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ $error }}</span><br>
                            @endforeach
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
