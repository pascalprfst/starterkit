@props(['active' => false])

@php
    $baseClasses = 'px-8 py-2 cursor-pointer border-gray-200 transition-colors duration-300';

    if($active) {
        $baseClasses .= ' text-white bg-black';
    }
    else {
        $baseClasses .= ' hover:bg-gray-300';
    }
@endphp

<a {{ $attributes->merge(['class' => $baseClasses]) }}>
    {{$slot}}
</a>
