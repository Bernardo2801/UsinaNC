@extends('layouts.main')

@section('title', 'Usina (Show solicitacao)')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

                <div class="mb-6">
                    <a href="{{ route('solicitations.index') }}"
                        class="inline-flex items-center px-3 py-1.5 font-semibold text-sm text-white uppercase tracking-widest"><ion-icon
                            name="arrow-back" class="text-[26px] mr-2"></ion-icon>Voltar</a>
                </div>

                <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 px-3 py-1.5">
                    <div class="w-full h-max rounded-xl">
                        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Nº Processo SEI</dt>
                                <dd class="text-lg font-semibold">{{ $solicitation->sei_number }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Nome orgão</dt>
                                <dd class="text-lg font-semibold">{{ $solicitation->requester->name_requester }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Material solicitado
                                </dt>
                                <dd class="text-lg font-semibold">{{ $solicitation->material->name }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Preço</dt>
                                <dd class="text-lg font-semibold">{{ $solicitation->unit_price }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Quantidade solicitada
                                </dt>
                                <dd class="text-lg font-semibold">{{ $solicitation->requested_quantity }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Data da solicitação
                                </dt>
                                <dd class="text-lg font-semibold">
                                    {{ date('d/m/Y', strtotime($solicitation->date_solicitation)) }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Status</dt>
                                <dd class="text-lg font-semibold">{{ $solicitation->status }}</dd>
                            </div>
                            <div></div> <!-- Somente p adicionar divider abaixo da div placa -->
                        </dl>
                    </div>

                    <div class="w-full h-max rounded-xl">
                        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Motorista responsável
                                </dt>
                                <dd class="text-lg font-semibold">{{ $solicitation->driver->name }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Veículo utilizado
                                </dt>
                                <dd class="text-lg font-semibold">{{ $solicitation->vehicle->vehicle_model }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                @can('access')
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Ações</dt>
                                    <dd class="text-lg font-semibold">
                                        <a href="{{ route('solicitations.edit', $solicitation->id) }}"
                                            class="text-gray-200 transition hover:text-blue-600 py-1 mr-2 active:text-blue-800">
                                            <ion-icon name="create" style="font-size: 28px;"></ion-icon>
                                        </a>
                                        <button type="button"
                                            onclick="confirmDelete({{ $solicitation->id }}, '{{ $solicitation->sei_number }}')"
                                            class="text-red-600 hover:text-red-700 focus:text-red-800 active:text-red-900 focus focus:outline-none transition ease-in-out duration-150
                                            py-1 px-2"><ion-icon
                                                name="trash" style="font-size: 28px;"></ion-icon>
                                        </button>
                                </div>
                                @endcan
                                <div class="flex flex-col py-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Observações:</dt>
                                    <dd class="text-lg font-semibold">{{ $solicitation->observation }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function confirmDelete(id, solicitation) {
                alertify.confirm(`Tem certeza que deseja EXCLUIR ${solicitation}?`, function(e) {
                    if (e) {
                        let form = document.createElement('form')
                        form.method = 'POST'
                        form.action = `/solicitations/${id}`
                        form.innerHTML = '@csrf @method('DELETE')'
                        document.body.appendChild(form)
                        form.submit()
                    } else {
                        return false
                    }
                })
            }
        </script>

    @endsection
