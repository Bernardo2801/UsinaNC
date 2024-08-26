@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-medium text-black-50 dark:text-blue-600']) }}>
    {{ $value ?? $slot }}
</label>
