@extends('layouts.main')

@section('title', 'Usina Novacap')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <div class="mb-4">
                        <a href="/" class="bg-blue-800 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Criar solicitações</a>
                    </div>

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nº Processo SEI</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Orgão</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Material solicitado</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Quantidade solicitada</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--@ foreach($students as $student)-->
                            <tr>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">36213612</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">Adm. Samambaia</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">TERRA</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">1 tonelada</td>

                                <td class="border px-4 py-2 text-center">
                                    <div class="flex justify-center">

                                        <a href="/" class="text-white transition hover:text-blue-600 py-2 px-4">
                                            <ion-icon name="eye" size="large"></ion-icon>
                                        </a>

                                        <a href="/" class="text-white transition hover:text-blue-600 py-2 px-4 mr-2">
                                            <ion-icon name="create" size="large"></ion-icon>
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

<script>
    function confirmDelete(id) {
        alertify.confirm("This is a confirm dialog.", function (e) {
            if (e) {
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = `/students/${id}`;
                form.innerHTML = '@csrf @method("DELETE")';
                document.body.appendChild(form);
                form.submit();
            } else {
                alertify.error('Cancel');
                return false;
            }
        });
    }
</script>

@endsection
