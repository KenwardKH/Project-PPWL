<x-guest-layout>
    <div>
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
        </a>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full text-black" type="text" name="name" :value="old('name')" required autofocus placeholder="Masukkan Nama Anda" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('E-Mail')" />
            <x-text-input id="email" class="block mt-1 w-full text-black" type="email" name="email" :value="old('email')" required placeholder="Masukkan E-Mail Anda" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full text-black"
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                            placeholder="Masukkan Password Anda" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full text-black"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Konfirmasi Password Anda" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="mr-4 underline text-sm text-gray-600 dark:text-gray-400 hover:text-orange-500 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}"style="text-decoration: none"style="text-decoration: none" style="text-decoration: none">
                {{ __('Already registered?') }}
            </a>

            <button type="submit" class="px-4 py-2 bg-gray-900 text-white rounded-md shadow-md hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                {{ __('Register') }}
           <button>
        </div>
    </form>
</x-guest-layout>

