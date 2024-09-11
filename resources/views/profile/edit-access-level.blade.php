@extends('layouts.main')
@section('title', 'Usina Novacap')
@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-slate-50 dark:bg-slate-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-blue-600">
                                Editar Nível de Acesso
                            </h2>

                            <p class="mt-1 text-sm text-slate-800 dark:text-white">
                                Selecione o usuário e defina o nível de acesso.
                            </p>
                        </header>

                        <form method="post" action="{{ route('users.update-access-level') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')

                            <div>
                                <x-input-label for="user_id" :value="__('Usuário')" />
                                <select id="user_id" name="user_id"
                                    class="mt-1 block w-full py-2.3 px-0 text-sm text-blue-600 dark:text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" class="dark:bg-gray-600">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('user_id')" />
                            </div>

                            <div>
                                <x-input-label for="access_level" :value="__('Nível de Acesso')" />
                                <select id="access_level" name="access_level"
                                    class="block w-full py-2.3 px-0 text-sm text-blue-600 dark:text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 focus-text-white focus-border-blue-600">
                                    <option value="user" class="dark:bg-gray-600">Visualizador</option>
                                    <option value="admin" class="dark:bg-gray-600">Administrador</option>
                                </select>
                                <x-input-error :messages="$errors->get('access_level')" class="mt-2" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Salvar') }}</x-primary-button>

                                @if (session('status') === 'profile-access-update')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-blue-600">{{ __('Atualizado com sucesso.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
