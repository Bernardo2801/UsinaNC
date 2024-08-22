@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-medium text-blue-600']) }}>
    {{ $value ?? $slot }}
</label>
