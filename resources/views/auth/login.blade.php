<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- CPF Address -->
        <div x-data>
            <x-input-label for="cpf" :value="__('CPF')" />
            <x-text-input id="cpf"
            class="block mt-1 w-full"
            type="text"
            name="cpf"
            required autocomplete="new-cpf"
            x-mask="999.999.999-99"
            :value="old('cpf')" required autofocus autocomplete="cpf" />
            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-500 shadow-sm focus:ring-blue-500" name="remember">
                <span class="ms-2 text-sm text-gray-300">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-xs text-gray-300 hover:text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-8" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
                <a class="underline text-xs text-gray-300 hover:text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                    {{('Ainda não tem uma conta?')}}
                </a>
            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
