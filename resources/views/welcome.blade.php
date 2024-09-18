@extends('layouts.main')

@section('title', 'Home Usina')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-4 gap-4 text-center">
            <a href="{{ route('vehicles.index') }}">
                <div
                    class="transition transform hover:scale-105 bg-white dark:bg-slate-600 hover:bg-gray-100 dark:hover:bg-gray-600 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                    <h1 class="px-4 py-2 font-semibold text-slate-800 dark:text-white tracking-widest uppercase">Veículo</h1>
                    <span class="text-slate-800 dark:text-white"><ion-icon name="car-outline"
                            style="font-size: 92px;"></ion-icon></span>
                    <p class="px-4 py-2 text-slate-800 dark:text-white">{{ $totalVehicles }} ao total</p>
                </div>
            </a>
            <a href="{{ route('drivers.index') }}">
                <div
                    class="transition transform hover:scale-105 bg-white dark:bg-slate-600 hover:bg-gray-100 dark:hover:bg-gray-600 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                    <h1 class="px-4 py-2 font-semibold text-slate-800 dark:text-white tracking-widest uppercase">Motorista
                    </h1>
                    <span class="text-slate-800 dark:text-white"><ion-icon name="person-outline"
                            style="font-size: 92px;"></ion-icon></span>
                    <p class="px-4 py-2 text-slate-800 dark:text-white">{{ $totalDrivers }} ao total</p>
                </div>
            </a>
            <a href="{{ route('materials.index') }}">
                <div
                    class="transition transform hover:scale-105 bg-white dark:bg-slate-600 hover:bg-gray-100 dark:hover:bg-gray-600 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                    <h1 class="px-4 py-2 font-semibold text-slate-800 dark:text-white tracking-widest uppercase">Materiais
                    </h1>
                    <span class="text-slate-800 dark:text-white"><ion-icon name="construct-outline"
                            style="font-size: 92px;"></ion-icon></span>
                    <p class="px-4 py-2 text-slate-800 dark:text-white">{{ $totalMaterials }} ao total</p>
                </div>
            </a>
            <a href="{{ route('requesters.index') }}">
                <div
                    class="transition transform hover:scale-105 bg-white dark:bg-slate-600 hover:bg-gray-100 dark:hover:bg-gray-600 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                    <h1 class="px-4 py-2 font-semibold text-slate-800 dark:text-white tracking-widest uppercase">
                        Solicitantes</h1>
                    <span class="text-slate-800 dark:text-white"><ion-icon name="person-outline"
                            style="font-size: 92px;"></ion-icon></span>
                    <p class="px-4 py-2 text-slate-800 dark:text-white">{{ $totalRequesters }} ao total</p>
                </div>
            </a>
        </div>
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid gap-4">
                <div
                    class="bg-white dark:bg-slate-600 hover:bg-gray-100 dark:hover:bg-gray-600 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <form action="{{ route('welcome') }}" method="GET" class="mb-4">
                            @csrf
                            <div class="form-group mb-6">
                                <label for="status" class="block text-sm font-medium text-gray-300 uppercase">Filtre por
                                    status</label>
                                <select name="status" id="status"
                                    class="mt-1 block w-full py-2.3 px-0 text-sm text-blue-600 dark:text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600">
                                    <option class="dark:bg-gray-600" value="">Todos</option>
                                    <option class="dark:bg-gray-600" value="Aguardando"
                                        {{ request('status') == 'Aguardando' ? 'selected' : '' }}>
                                        Aguardando</option>
                                    <option class="dark:bg-gray-600" value="Iniciado"
                                        {{ request('status') == 'Iniciado' ? 'selected' : '' }}>Iniciado
                                    </option>
                                    <option class="dark:bg-gray-600" value="Finalizado"
                                        {{ request('status') == 'Finalizado' ? 'selected' : '' }}>
                                        Finalizado</option>
                                    <option class="dark:bg-gray-600" value="Cancelado"
                                        {{ request('status') == 'Cancelado' ? 'selected' : '' }}>
                                        Cancelado</option>
                                </select>
                                <button type="submit"
                                    class="mt-2 px-4 py-2 bg-blue-500 text-white rounded">Filtrar</button>
                            </div>
                        </form>

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
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-2 font-semibold text-slate-800 dark:text-white tracking-widest uppercase">

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solicitations as $solicitation)
                                    <tr
                                        class="bg-white border-b dark:bg-slate-600 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <td scope="row" class="px-4 py-2 text-slate-800 dark:text-white">
                                            {{ $solicitation->sei_number }}
                                        </td>
                                        <td scope="row" class="px-4 py-2 text-slate-800 dark:text-white">
                                            {{ $solicitation->requester->name_requester }}
                                        </td>
                                        <td class="px-4 py-2 text-slate-800 dark:text-white">
                                            @if ($solicitation->status == 'Aguardando')
                                                <span class="bg-yellow-500 px-2 py-1 rounded">{{ $solicitation->status }}
                                                </span>
                                            @elseif($solicitation->status == 'Iniciado')
                                                <span
                                                    class="bg-blue-500 px-2 py-1 rounded">{{ $solicitation->status }}</span>
                                            @elseif($solicitation->status == 'Finalizado')
                                                <span
                                                    class="bg-green-500 px-2 py-1 rounded">{{ $solicitation->status }}</span>
                                            @elseif($solicitation->status == 'Cancelado')
                                                <span
                                                    class="bg-red-500 px-2 py-1 rounded">{{ $solicitation->status }}</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-2 text-slate-800 dark:text-white">
                                            <a href="{{ route('solicitations.show', $solicitation->id) }}"
                                                class="text-slate-800 dark:text-white transition hover:text-blue-600 py-1 px-2 active:text-blue-800">
                                                <ion-icon name="eye" style="font-size: 28px;"></ion-icon>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
