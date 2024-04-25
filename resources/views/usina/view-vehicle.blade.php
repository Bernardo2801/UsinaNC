@extends('layouts.main')

@section('title', 'Usina (Show vehicle)')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

            <div class="mb-6 -ml-1.4">
                <a href="/veiculo" class="inline-flex items-center px-3 py-1.5 font-semibold text-sm text-white uppercase tracking-widest"><ion-icon name="arrow-back" class="text-[26px] mr-2"></ion-icon>Voltar</a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-left rtl:text-right text-blue-100 dark:text-blue-100">
                    <thead class="text-white uppercase bg-blue-950 dark:text-white">
                        <tr>
                            <th scope="col" class="px-4 py-4 font-semibold text-white tracking-widest uppercase">
                                Modelo
                            </th>
                            <th scope="col" class="px-4 py-4 font-semibold text-white tracking-widest uppercase">
                                Tipo
                            </th>
                            <th scope="col" class="px-4 py-4 font-semibold text-white tracking-widest uppercase">
                                Chassi
                            </th>
                            <th scope="col" class="px-4 py-4 font-semibold text-white tracking-widest uppercase">
                                Placa
                            </th>
                            <th scope="col" class="px-4 py-4 font-semibold text-white tracking-widest uppercase text-end">
                                Ação
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-blue-800 border-b border-blue-900">
                            <th scope="row" class="px-4 py-8 text-white font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                Volvo FH-540
                            </th>
                            <td class="px-4 py-8 text-white">
                                Cavalo mecanico
                            </td>
                            <td class="px-4 py-8 text-white">
                                65a29cv32765h1j7p
                            </td>
                            <td class="px-4 py-8 text-white">
                                CAP0N22
                            </td>
                            <td class="px-4 py-8 text-white text-end">
                                <a href="#" class="font-medium text-white hover:underline">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
