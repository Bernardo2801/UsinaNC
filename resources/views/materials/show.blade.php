@extends('layouts.main')

@section('title', 'Usina (Show material)')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

                <div class="mb-6">
                    <a href="{{ route('materials.index') }}"
                        class="inline-flex items-center px-3 py-1.5 font-semibold text-sm text-white uppercase tracking-widest"><ion-icon
                            name="arrow-back" class="text-[26px] mr-2"></ion-icon>Voltar</a>
                </div>

                <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 px-3 py-1.5">
                    <div class="w-full h-max rounded-xl">
                        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Material</dt>
                                <dd class="text-lg font-semibold">{{ $material->name }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Preço unitário</dt>
                                <dd class="text-lg font-semibold">R${{ number_format($material->unit_price, 2, ',', '.') }}
                                </dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Quantidade disponível
                                </dt>
                                <dd class="text-lg font-semibold">{{ $material->stock_quantity }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Medida</dt>
                                <dd class="text-lg font-semibold">{{ $material->measures_type }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Data de cadastro
                                </dt>
                                <dd class="text-lg font-semibold">
                                    {{ date('d/m/Y - H:i:s', strtotime($material->created_at)) }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Ultima edição:
                                </dt>
                                <dd class="text-lg font-semibold">
                                    {{ date('d/m/Y - H:i:s', strtotime($material->updated_at)) }}</dd>
                            </div>
                            <div></div> <!-- Somente p adicionar divider abaixo da div placa -->
                        </dl>
                    </div>

                    <div class="w-full h-max rounded-xl">
                        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                @can('access')
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Ações</dt>
                                <dd class="text-lg font-semibold">
                                    <div>
                                        <a href="{{ route('materials.edit', $material->id) }}"
                                            class="text-gray-200 transition hover:text-blue-600 py-1 mr-2 active:text-blue-800">
                                            <ion-icon name="create" style="font-size: 28px;"></ion-icon>
                                        </a>
                                        <button type="button"
                                            onclick="confirmDelete({{ $material->id }}, '{{ $material->name }}')"
                                            class="text-red-600 hover:text-red-700 focus:text-red-800 active:text-red-900 focus focus:outline-none transition ease-in-out duration-150
                                        py-1 px-2"><ion-icon
                                                name="trash" style="font-size: 28px;"></ion-icon>
                                        </button>
                                    </div>
                                </dd>
                                @endcan
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400 uppercase">Observações:</dt>
                                <dd class="text-lg font-semibold">{{ $material->observation }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id, name) {
            alertify.confirm(`Tem certeza que deseja EXCLUIR ${name}?`, function(e) {
                if (e) {
                    let form = document.createElement('form')
                    form.method = 'POST'
                    form.action = `/materials/${id}`
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
