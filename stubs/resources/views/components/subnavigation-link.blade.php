@props(['active' => false])

@php
    $baseClasses = 'py-3 cursor-pointer font-medium transition-colors duration-300';
    $activeClasses = 'border-b-2 border-blue-600 font-bold text-blue-600';
    $inactiveClasses = 'text-gray-500 hover:text-gray-600 hover:border-b-2 hover:border-gray-600';

    $finalClasses = $active
        ? "$baseClasses $activeClasses"
        : "$baseClasses $inactiveClasses";
@endphp

<a {{ $attributes->merge(['class' => $finalClasses]) }}>
    {{ $slot }}
</a>
