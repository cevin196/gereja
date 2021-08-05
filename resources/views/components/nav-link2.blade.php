@props(['active'])

@php
$classes = ($active ?? false)
            ? 'pr-20 pl-10 py-3 bg-gray-200 text-black hover:bg-gray-200 hover:text-black'
            : 'pr-20 pl-10 py-3 hover:bg-gray-200 hover:text-black';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
