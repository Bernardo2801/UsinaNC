@extends('layouts.main')

@section('title', 'Usina (Motoristas)')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

        <div class="flex items-center justify-between mb-4 tracking-widest mb-8">
            <div>
                <a href="{{ route('usina.create-driver') }}" class="inline-flex items-center p-4 bg-gray-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 transition ease-in-out duration-150 h-16"><ion-icon name="add-outline" class="text-[26px] mr-2"></ion-icon>Adicionar motorista</a>
            </div>

            <form class="max-w-md w-96">
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-16" placeholder="Pesquise nome, matricula..." required />
                    <button type="submit" class="text-white absolute end-2.5 bottom-3.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm px-4 py-2 dark:bg-blue-950 dark:hover:bg-blue-750 dark:focus:ring-blue-600">Pesquisar</button>
                </div>
            </form>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-2 font-semibold text-white tracking-widest uppercase">
                            Nome
                        </th><th scope="col" class="px-4 py-2 font-semibold text-white tracking-widest uppercase">
                            Matricula
                        </th>
                        <th scope="col" class="px-4 py-2 font-semibold text-white tracking-widest uppercase">
                            Categoria
                        </th>
                        <th scope="col" class="px-4 py-2 font-semibold text-white tracking-widest uppercase">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-4 py-2 text-white">
                            Erick Henry Diogo Ramos
                        </th>
                        <td class="px-4 py-2 text-white ">
                            P9L1X327
                        </td>
                        <td class="px-4 py-2 text-white ">
                            ABC
                        </td>
                        <td class="px-4 py-2 text-white text-right">
                            <a href="{{ route('usina.show-driver') }}"  class="text-gray-200 transition hover:text-blue-600 py-1 px-2 active:text-blue-800">
                                <ion-icon name="eye" style="font-size: 28px;"></ion-icon>
                            </a>
                            <a href="{{ route('usina.edit-driver') }}"  class="text-gray-200 transition hover:text-blue-600 py-1 px-2 active:text-blue-800">
                                <ion-icon name="create" style="font-size: 28px;"></ion-icon>
                            </a>
                            <button type="button" class="text-red-600 hover:text-red-700 focus:text-red-800 active:text-red-900 focus focus:outline-none transition ease-in-out duration-150
                            py-1 px-2"><ion-icon name="trash" style="font-size: 28px;"></ion-icon>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection
