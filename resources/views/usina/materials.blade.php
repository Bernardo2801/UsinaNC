@extends('layouts.main')

@section('title', 'Materiais')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
            <div class="bg-gray-800 border-b border-gray-200">

                <div class="mb-4">
                    <a href="/adicionar-material" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 transition ease-in-out duration-150"><ion-icon name="add-outline" class="text-[26px] mr-2"></ion-icon>Adicionar Material</a>
                </div>

                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 font-semibold text-white tracking-widest text-center uppercase">Material</th>
                            <th class="px-4 py-2 font-semibold text-white tracking-widest text-center uppercase">Preço unitário</th>
                            <th class="px-4 py-2 font-semibold text-white tracking-widest text-center uppercase">Quantidade Estoq.</th>
                            <th class="px-4 py-2 font-semibold text-white tracking-widest text-center uppercase">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--@ foreach($students as $student)-->
                        <tr>
                            <td class="border px-4 py-2 text-white text-center">Brita</td>
                            <td class="border px-4 py-2 text-white text-center">R$ 7.500,00 </td>
                            <td class="border px-4 py-2 text-white text-center">2 Toneladas</td>

                            <td class="border px-4 py-2 text-center">
                                <div class="flex justify-center">

                                    <a href="#" class="text-white transition hover:text-blue-600 py-2 px-4">
                                        <ion-icon name="eye" size="large"></ion-icon>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <!--@ endforeach -->
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

@endsection
