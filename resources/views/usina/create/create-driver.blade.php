@extends('layouts.main')

@section('title', 'Usina (Adicionar motoristas)')

@section('content')

<div class="py-12">
    <div class="px-4 sm:w-2/3 lg:w-1/2 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="rounded-lg shadow-lg bg-gray-800 py-10 md:py-12 px-4 md:px-6">
            <div class="mb-6 -mt-8 -ml-1.4">
                <a href="{{ route('usina.driver') }}" class="inline-flex items-center px-3 py-1.5 font-semibold text-sm text-white uppercase tracking-widest"><ion-icon name="arrow-back" class="text-[26px] mr-2"></ion-icon>Voltar</a>
            </div>
            <div class="mb-2">
                <h3 class="px-3 py-1.5 font-semibold text-sm text-white uppercase tracking-widest">Preencha os campos para adiconar novo motorista.</h3>
            </div>
                <form action="/addDriver" method="POST" class="form-control w-full px-3 py-1.5">
                @csrf
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Nome</label>
                        <input type="text" maxlength="80" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Digite aqui o nome do motorista..."
                        required>
                    </div>
                    <div class="form-group mb-6" x-data>
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Cnh</label>
                        <input type="text" maxlength="9" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Informe qual o número da CNH..."
                        name="cnh"
                        x-mask="999999999"
                        required>
                    </div>
                    <div class="form-group mb-6" x-data>
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">Cpf</label>
                        <input type="text" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Informe qual o CPF..."
                        name="cpf"
                        x-mask="999.999.999-99"
                        required>
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase mb-2">Selecione a categoria da carteira do motorista</label>
                        <div class="flex">
                            <div class="flex items-center me-4">
                                <input checked id="inline-b-radio" type="radio" value="b" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-b-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">B</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="inline-c-radio" type="radio" value="c" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-c-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">C</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="inline-d-radio" type="radio" value="d" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-d-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">D</label>
                            </div>
                            <div class="flex items-center">
                                <input id="inline-e-radio" type="radio" value="e" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-e-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">E</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-300 uppercase">N° Sei</label>
                        <input type="text" maxlength="11" class="block w-full py-2.3 px-0 text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600" placeholder="Digite o Nº Sei do motorista..."
                        required>
                    </div>

                    <label for="message" class="block mb-2 text-sm font-medium text-gray-300 uppercase">Observação</label>
                    <textarea id="message" rows="4" maxlength="320" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Caso exista alguma observação sobre este motorista, escreva aqui..."></textarea>

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
