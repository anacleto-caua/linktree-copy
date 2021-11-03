<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Username -->
            <x-input atrib="username"/>

            <!-- Email Address -->
            <x-input atrib="email" type="email"/>

            <!-- Password -->
            <x-input atrib="password" type="password"/>

            <!-- Confirm Password -->
            <x-input title="Confirm Password" atrib="password_confirmation" type="password"/>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button.submit class="ml-4">
                    {{ __('Register') }}
                </x-button.submit>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
