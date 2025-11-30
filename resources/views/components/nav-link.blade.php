@props(['active'])

@php
$classes = ($active ?? false)
        ? 'px-3 py-2 text-gray-900 border-b-2 border-red-500 font-medium'
        : 'px-3 py-2 text-gray-600 hover:text-gray-900 hover:border-gray-300 border-b-2 border-transparent transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
