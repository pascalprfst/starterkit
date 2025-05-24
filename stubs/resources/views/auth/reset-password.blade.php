<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="space-y-4">

            <x-input type="email" :label="__('Email')" id="email" name="email" required/>

            <x-input type="password" :label="__('Password')" id="password" name="password" required/>

            <x-input type="password" :label="__('Confirm Password')" id="password_confirmation" name="password_confirmation" required/>

            <div class="flex items-center justify-end">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </div>
    </form>
</x-guest-layout>
