@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-light dark:text-dark']) }}>
    {{ $value ?? $slot }}
</label>
