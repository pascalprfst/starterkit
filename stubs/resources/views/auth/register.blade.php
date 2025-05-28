<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="space-y-4">
            <x-input :label="__('Name')" id="name" name="name" required/>

            <x-input type="email" :label="__('Email')" id="email" name="email" required/>

            <x-input type="password" :label="__('Password')" id="password" name="password" required/>

            <x-input type="password" :label="__('Confirm Password')" id="password_confirmation" name="password_confirmation" required/>

            <div class="flex items-center justify-end">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </div>
    </form>
</x-guest-layout>
