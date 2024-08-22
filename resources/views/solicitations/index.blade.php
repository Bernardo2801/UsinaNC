@extends('layouts.main')

@section('title', 'Usina (Solicitações)')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-50 dark:bg-slate-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

                <div class="flex items-center justify-between mb-4 tracking-widest mb-8">
                    <div>
                        <a href="{{ route('requests.create') }}"
                        class="inline-flex items-center p-4 bg-slate-50 dark:bg-slate-600 shadow-xl border border-transparent rounded-md font-semibold text-sm text-slate-800 dark:text-white uppercase tracking-widest hover:bg-gray-200 dark:hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 transition ease-in-out duration-150 h-16"><ion-icon
                                name="add-outline" class="text-[26px] mr-2"></ion-icon>Adicionar solicitação</a>
                    </div>

                    <form class="max-w-md w-96">
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-slate-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 ps-10 text-sm text-slate-800 shadow-xl dark:text-gray-900 border border-gray-300 rounded-lg bg-slate-50 dark:bg-slate-600 focus:ring-blue-500 focus:border-blue-500 hover:bg-gray-200 dark:hover:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-16"
                                placeholder="Pesquise N° Processo SEI..." required />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-3.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm px-4 py-2 dark:bg-blue-950 dark:hover:bg-blue-750 dark:focus:ring-blue-600">Pesquisar</button>
                        </div>
                    </form>
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-sm text-gray-700 uppercase bg-slate-300 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col"
                                    class="px-4 py-2 font-semibold text-slate-800 dark:text-white tracking-widest uppercase">
                                    Nº Processo SEI
                                </th>
                                <th scope="col"
                                    class="px-4 py-2 font-semibold text-slate-800 dark:text-white tracking-widest uppercase">
                                    Nome órgão
                                </th>
                                <th scope="col"
                                    class="px-4 py-2 font-semibold text-slate-800 dark:text-white tracking-widest uppercase">
                                    Material solicitado
                                </th>
                                <th scope="col"
                                    class="px-4 py-2 font-semibold text-slate-800 dark:text-white tracking-widest uppercase">
                                    Quantidade solicitada
                                </th>
                                <th scope="col"
                                    class="px-4 py-2 font-semibold text-slate-800 dark:text-white tracking-widest uppercase">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-4 py-2 font-semibold text-slate-800 dark:text-white tracking-widest uppercase">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-4 py-2 text-slate-800 dark:text-white">
                                    36213612
                                </th>
                                <td class="px-4 py-2 text-slate-800 dark:text-white">
                                    Adm. Samambaia
                                </td>
                                <td class="px-4 py-2 text-slate-800 dark:text-white">
                                    Terra
                                </td>
                                <td class="px-4 py-2 text-slate-800 dark:text-white">
                                    1 tonelada
                                </td>
                                <td class="px-4 py-2 text-slate-800 dark:text-white">
                                    Entregue
                                </td>
                                <td class="px-4 py-2 text-white text-right">
                                    <a href="{{ route('requests.show') }}"
                                        class="text-slate-800 dark:text-white transition hover:text-blue-600 py-1 px-2 active:text-blue-800">
                                        <ion-icon name="eye" style="font-size: 28px;"></ion-icon>
                                    </a>
                                    <a href="{{ route('requests.edit') }}"
                                        class="text-slate-800 dark:text-white transition hover:text-blue-600 py-1 px-2 active:text-blue-800">
                                        <ion-icon name="create" style="font-size: 28px;"></ion-icon>
                                    </a>
                                    <button type="button"
                                        class="text-red-600 hover:text-red-700 focus:text-red-800 active:text-red-900 focus focus:outline-none transition ease-in-out duration-150
                            py-1 px-2"><ion-icon
                                            name="trash" style="font-size: 28px;"></ion-icon>
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
