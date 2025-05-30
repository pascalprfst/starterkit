<!DOCTYPE html>
<html class="overflow-hidden" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body class="font-sans antialiased">
<x-toast/>
<div class="min-h-screen bg-slate-50 flex">
    <x-sidebar/>
    <div class="w-full">
        <x-header/>
        <main class="overflow-y-auto h-[calc(100vh-48px)]">
            {{ $slot }}
        </main>
    </div>
</div>
@livewireScripts
</body>
</html>
