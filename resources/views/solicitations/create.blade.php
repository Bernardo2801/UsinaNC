@extends('layouts.main')

@section('title', 'Usina (Adicionar Solicitação)')

@section('content')

    <div class="py-12">
        <div class="px-4 sm:w-2/3 lg:w-1/2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="rounded-lg shadow-lg bg-gray-800 py-10 md:py-12 px-4 md:px-6">
                <div class="mb-6 -mt-8 -ml-1.4">
                    <a href="{{ route('solicitations.index') }}"
                        class="inline-flex items-center px-3 py-1.5 font-semibold text-sm text-white uppercase tracking-widest"><ion-icon
                            name="arrow-back" class="text-[26px] mr-2"></ion-icon>Voltar</a>
                </div>
                <div class="mb-2">
                    <h3 class="px-3 py-1.5 font-semibold text-sm text-white uppercase tracking-widest">Preencha os campos
                        para adiconar nova solicitação.</h3>
                </div>
                <form method="POST" action="{{ route('solicitations.store') }}" class="form-control w-full px-3 py-1.5">

                    @csrf
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Selecione o
                            Solicitante</label>
                        <select name="requester_id" id="requester_id"
                            class="mt-1 block w-full py-2.3 px-0 text-sm text-blue-600 dark:text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600">
                            <option class="dark:bg-gray-600" value=""></option>
                            @foreach ($requesters as $requester)
                                <option class="dark:bg-gray-600" value="{{ $requester->id }}">
                                    {{ $requester->name_requester }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Selecione o
                            Material</label>
                        <select name="material_id" id="material_id"
                            class="mt-1 block w-full py-2.3 px-0 text-sm text-blue-600 dark:text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600">
                            <option class="dark:bg-gray-600" value=""></option>
                            @foreach ($materials as $material)
                                <option class="dark:bg-gray-600" value="{{ $material->id }}">{{ $material->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Preço atual</label>
                        <input type="number" step="0.01"
                            class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600"
                            placeholder="Informe o preço atual do material de acordo com sua medida..."
                            name="unit_price"
                            required>
                    </div>
                    <div class="form-group mb-6" x-data>
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">N° Processo
                            Sei</label>
                        <input type="text" maxlength="22"
                            class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600"
                            placeholder="Digite o Nº do Processo Sei..."
                            x-mask="99999-99999999/9999-99"
                            name="sei_number"
                            required>
                    </div>
                    <div class="form-group mb-6">
                        <label for="text" class="block text-sm font-medium text-gray-300 uppercase">Quantidade</label>
                        <input type="number" step="0.01" min="0.01"
                            class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600"
                            placeholder="Informe a quantidade solicitada..."
                            name="requested_quantity"
                            required>
                    </div>
                    <div class="form-group mb-6">
                        <label for="text" class="block text-sm font-medium text-gray-300 uppercase">Data</label>
                        <input type="date" step="0.01" min="0.01"
                            class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600"
                            placeholder="Informe a data que foi solicitado..."
                            name="date_solicitation"
                            required>
                    </div>
                    <div class="form-group mb-6">
                        <label for="text" class="block text-sm font-medium text-gray-300 uppercase mb-2">Status</label>
                        <div class="flex flex-wrap">
                            <div class="flex items-center me-4">
                                <input checked id="yellow-radio" type="radio" value="Aguardando" name="status"
                                    class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="yellow-radio"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aguardando</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="teal-radio" type="radio" value="Iniciado" name="status"
                                    class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="teal-radio"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Iniciado</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="orange-radio" type="radio" value="Em processo" name="status"
                                    class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="orange-radio"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Em processo</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="green-radio" type="radio" value="Finalizado" name="status"
                                    class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="green-radio"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Finalizado</label>
                            </div>
                            <div class="flex items-center me-2">
                                <input id="red-radio" type="radio" value="Cancelado" name="status"
                                    class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="red-radio"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cancelado</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Selecione o
                            Motorista</label>
                        <select name="driver_id" id="driver_id"
                            class="mt-1 block w-full py-2.3 px-0 text-sm text-blue-600 dark:text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600">
                            <option class="dark:bg-gray-600" value=""></option>
                            @foreach ($drivers as $driver)
                                <option class="dark:bg-gray-600" value="{{ $driver->id }}">{{ $driver->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Selecione o
                            Veiculo</label>
                        <select name="vehicle_id" id="vehicle_id"
                            class="mt-1 block w-full py-2.3 px-0 text-sm text-blue-600 dark:text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600">
                            <option class="dark:bg-gray-600" value=""></option>
                            @foreach ($vehicles as $vehicle)
                                <option class="dark:bg-gray-600" value="{{ $vehicle->id }}">{{ $vehicle->vehicle_model }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-300 uppercase">Observação</label>
                    <textarea id="message" name="observation" rows="4" maxlength="320"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Caso exista alguma observação sobre esta solicitação, escreva aqui..."></textarea>

                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 transition ease-in-out duration-150 mt-4"
                        value="Adicionar nova solicitação">
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
