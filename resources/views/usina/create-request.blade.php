@extends('layouts.main')

@section('title', 'Usina (Adicionar Solicitação)')

@section('content')

<div class="py-12">
    <div class="px-4 sm:w-2/3 lg:w-1/2 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="rounded-lg shadow-lg bg-gray-800 py-10 md:py-12 px-4 md:px-6">
            <div class="mb-6 -mt-8 -ml-1.4">
                <a href="/solicitacao" class="inline-flex items-center px-3 py-1.5 font-semibold text-sm text-white uppercase tracking-widest"><ion-icon name="arrow-back" class="text-[26px] mr-2"></ion-icon>Voltar</a>
            </div>
            <div class="mb-2">
                <h3 class="px-3 py-1.5 font-semibold text-sm text-white uppercase tracking-widest">Preencha os campos para adiconar nova solicitação.</h3>
            </div>
                <form action="/addSolicitation" method="POST" class="form-control w-full px-3 py-1.5">
                @csrf
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Requester ID</label>
                        <input type="text" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Requester ID...">
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Material ID</label>
                        <input type="text" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Material ID...">
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Preço atual</label>
                        <input type="number" step="0.01" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Informe o preço atual do material de acordo com sua medida..."
                        required>
                    </div>
                    <div class="form-group mb-6" x-data>
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">N° Processo Sei</label>
                        <input type="text" maxlength="22" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Digite o Nº do Processo Sei..."
                        name="sei-process"
                        x-mask="99999-99999999/9999-99"
                        required>
                    </div>
                    <div class="form-group mb-6">
                        <label for="text" class="block text-sm font-medium text-gray-300 uppercase">Quantidade</label>
                        <input type="number" step="0.01" min="0.01" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Informe a quantidade solicitada..."
                        required>
                    </div>
                    <div class="form-group mb-6">
                        <label for="text" class="block text-sm font-medium text-gray-300 uppercase">Data</label>
                        <input type="date" step="0.01" min="0.01" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Informe a data que foi solicitado..."
                        required>
                    </div>
                    <div class="form-group mb-6">
                        <label for="text" class="block text-sm font-medium text-gray-300 uppercase mb-2">Status</label>
                        <div class="flex flex-wrap">
                            <div class="flex items-center me-4">
                                <input checked id="yellow-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="yellow-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aguardando</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="teal-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="teal-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Iniciado</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="orange-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="orange-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Em processo</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="green-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="green-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Finalizado</label>
                            </div>
                            <div class="flex items-center me-2">
                                <input id="red-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="red-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cancelado</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-6">

                        <label for="text" class="block text-sm font-medium text-gray-300 uppercase">Motorista responsável</label>
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select id="underline_select" class="block py-2.3 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600 peer mb-6"
                        required>
                            <option selected class="block text-sm font-medium bg-gray-600 text-gray-300">Selecione o motorista responsável por fazer a entrega...</option>
                            <option value="1" class="text-gray-300 bg-gray-600">Motorista1</option>
                            <option value="2" class="text-gray-300 bg-gray-600">Motorista2</option>
                            <option value="3" class="text-gray-300 bg-gray-600">Motorista3</option>
                            <option value="4" class="text-gray-300 bg-gray-600">Motorista4</option>
                        </select>

                    <div class="form-group mb-6">
                        <label for="text" class="block text-sm font-medium text-gray-300 uppercase">Veículo utilizado</label>
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select id="underline_select" class="block py-2.3 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600 peer mb-6"
                        required>
                            <option selected class="block text-sm font-medium bg-gray-600 text-gray-300">Selecione o veículo que será utilizado na entrega</option>
                            <option value="1" class="text-gray-300 bg-gray-600">Veículo1</option>
                            <option value="2" class="text-gray-300 bg-gray-600">Veículo2</option>
                            <option value="3" class="text-gray-300 bg-gray-600">Veículo3</option>
                            <option value="4" class="text-gray-300 bg-gray-600">Veículo4</option>
                        </select>

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
