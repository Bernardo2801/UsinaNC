<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-1 focus:ring-red-700 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
