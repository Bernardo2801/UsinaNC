@extends('layouts.main')

@section('title', 'Usina (Adicionar Solicitantes)')

@section('content')

<div class="py-12">
    <div class="px-4 sm:w-2/3 lg:w-1/2 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="rounded-lg shadow-lg bg-gray-800 py-10 md:py-12 px-4 md:px-6">
            <div class="mb-6 -mt-8 -ml-1.4">
                <a href="/solicitantes" class="inline-flex items-center px-3 py-1.5 font-semibold text-sm text-white uppercase tracking-widest"><ion-icon name="arrow-back" class="text-[26px] mr-2"></ion-icon>Voltar</a>
            </div>
            <div class="mb-2">
                <h3 class="px-3 py-1.5 font-semibold text-sm text-white uppercase tracking-widest">Preencha os campos para adiconar novo solicitante.</h3>
            </div>
                <form action="/addRequester" method="POST" class="form-control w-full px-3 py-1.5">
                @csrf
                    <div class="form-group mb-6">
                        <h3 class="block mb-5 text-sm font-medium text-gray-300 uppercase">Tipo</h3>
                        <ul class="grid w-full gap-2 md:grid-cols-2">
                            <li>
                                <input checked type="radio" id="public-departament" name="hosting" value="public-departament" class="hidden peer" required />

                                <label for="public-departament" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold text-white">Orgão Público</div>
                                        <div class="w-full">Orgãos Públicos consiste em orgãos que tenham sede fora da NovaCap.</div>
                                    </div>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="internal-departament" name="hosting" value="internal-departament" class="hidden peer">
                                <label for="internal-departament" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold text-white">Departamento Interno</div>
                                        <div class="w-full">Departamento Interno consiste em orgãos que tenham sede fora da NovaCap.</div>
                                    </div>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Nome</label>
                        <input type="text" maxlength="100" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Nome do orgão ou departamento interno. Ex: DEINF ou Adm. Samambaia..."
                        required>
                    </div>

                    <label for="message" class="block mb-2 text-sm font-medium text-gray-300 uppercase">Observação</label>
                    <textarea id="message" rows="4" maxlength="320" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Caso exista alguma observação sobre este solicitante, escreva aqui..."></textarea>

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
