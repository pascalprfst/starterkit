<x-app-layout>
    <x-subnavigation>
        <x-subnavigation-link href="{{route('admin.users')}}" active="{{Route::is('admin.users')}}">
            Nutzerverwaltung
        </x-subnavigation-link>
        <x-subnavigation-link href="#" active="{{Route::is('admin.roles')}}">
            Rechteverwaltung
        </x-subnavigation-link>
    </x-subnavigation>
</x-app-layout>
