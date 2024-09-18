@extends('layouts.main')

@section('title', 'Usina (Adicionar Veículo)')

@section('content')

    <div class="py-12">
        <div class="px-4 sm:w-2/3 lg:w-1/2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="rounded-lg shadow-lg bg-slate-50 dark:bg-slate-800 py-10 md:py-12 px-4 md:px-6">
                <div class="mb-6 -mt-8 -ml-1.4">
                    <a href="{{ route('vehicles.index') }}"
                        class="inline-flex items-center px-3 py-1.5 bg-slate-50 dark:bg-slate-600 shadow-xl border border-transparent rounded-md font-semibold text-sm text-slate-800 dark:text-white uppercase tracking-widest"><ion-icon
                            name="arrow-back" class="text-[26px] mr-2"></ion-icon>Voltar</a>
                </div>
                <div class="mb-2">
                    <h3 class="px-3 py-1.5 font-semibold text-sm text-slate-800 dark:text-white uppercase tracking-widest">Preencha os campos
                        para adiconar novo veículo.</h3>
                </div>

                <form method="POST" action="{{ route('vehicles.store') }}" class="form-control w-full px-3 py-1.5">
                    @csrf
                    <div class="form-group mb-6">

                        <label for="title" class="block text-sm font-medium text-slate-800 dark:text-gray-300 uppercase">Modelo</label>
                        <input type="text" name="vehicle_model" id="vehicle_model"
                            class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600"
                            placeholder="Digite aqui o modelo do veículo..." required>


                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-slate-800 dark:text-gray-300 uppercase">Tipo</label>
                        <input type="text" name="vehicle_type" id="vehicle_type"
                            class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600"
                            placeholder="Informe o tipo deste veículo..." required>
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-slate-800 dark:text-gray-300 uppercase">Placa</label>

                        <input type="text" name="plate" id="plate" maxlength="7"
                            class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600"
                            placeholder="Informe a placa..." required>
                        <small class="text-gray-600">Se a placa for antiga, não utilize o hífen (-).</small>
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-slate-800 dark:text-gray-300 uppercase">Chassi</label>

                        <input type="text" name="chassi" id="chassi" maxlength="17"
                            class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600"
                            placeholder="Informe o chassi..." required>
                    </div>

                    <label for="message" class="block text-sm font-medium text-slate-800 dark:text-gray-300 uppercase">Observação</label>
                    <textarea id="observation" name="observation" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Caso exista alguma observação sobre este veículo, escreva aqui..."></textarea>

                    <button type="submit"
                        class="inline-flex items-center px-3 py-1.5 bg-gray-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 transition ease-in-out duration-150 mt-4"
                        value="Adicionar novo veiculo...">
                        <ion-icon name="add-outline" class="text-[26px] mr-2"></ion-icon>
                        Adicionar</button>

                    @if ($errors->any())
                        <div class="mt-4">
                            @foreach ($errors->all() as $error)
                                <span
                                    class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300 uppercase">{{ $error }}</span><br>
                            @endforeach
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
