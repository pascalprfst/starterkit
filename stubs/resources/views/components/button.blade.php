@props([
    'href' => null, 'danger' => false, 'secondary' => false, 'outline' => false, 'uppercase' => false,  'size' => 'base',
])

@php
    $sizeClasses = match($size) {
        'small' => 'px-3 py-2 text-xs',
        'large' => 'px-5 py-4 text-base',
        default => 'px-4 py-3 text-sm',
    };

    $baseClasses = 'inline-flex items-center rounded-sm font-medium tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150 ' . $sizeClasses;
    $baseColors = 'text-white bg-black hover:bg-gray-800 focus:bg-gray-800 active:bg-gray-900 disabled:bg-gray-300 disabled:text-gray-100 focus:ring-gray-700';

    $classes = $baseClasses . ' ' .
                ($danger ? 'text-white bg-red-500 hover:bg-red-600 focus:bg-red-600 active:bg-red-700 disabled:bg-red-200 disabled:text-red-50 focus:ring-red-500' :
                ($secondary ? 'text-gray-800 bg-gray-200 hover:bg-gray-300 focus:bg-gray-300 active:bg-gray-400 disabled:bg-gray-100 disabled:text-gray-300 focus:ring-gray-300' :
                ($outline ? 'text-gray-700 relative bg-white hover:bg-black hover:text-white focus:bg-gray-700 focus:text-white active:bg-gray-800 disabled:text-gray-300 disabled:bg-transparent before:disabled:border-gray-300 focus:ring-gray-700 before:absolute before:inset-0 before:border before:border-gray-700 before:rounded-sm' : $baseColors))) . ' ' .
                ($uppercase ? 'uppercase' : '');

@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'submit', 'class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
