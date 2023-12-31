<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="ani">Merci de vous inscrire</div>

        <!-- Name -->
        <div class="gt">
            <x-input-label for="name"  />
            <x-text-input id="name" class="block mt-1 w-full td" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" required placeholder="Entrez votre nom" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4 gt">
            <x-input-label for="email" />
            <x-text-input id="email" class="block mt-1 w-full td" type="email" name="email" :value="old('email')" required autocomplete="username"  required placeholder="Entrez votre e-mail"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 gt">
            <x-input-label for="password" />

            <x-text-input id="password" class="block mt-1 w-full td"
                            type="password"
                            name="password"
                            required autocomplete="new-password" 
                            required placeholder="Entrez votre mot de passe"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 gt">
            <x-input-label for="password_confirmation"  />

            <x-text-input id="password_confirmation" class="block mt-1 w-full td"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" 
                            required placeholder="Confirmer votre mot de passe"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <!-- <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a> -->

            <x-primary-button class="ml-4 edw">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
