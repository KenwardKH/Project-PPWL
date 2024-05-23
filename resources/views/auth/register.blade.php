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
            <x-input-label for="name" :value="__('Name')" class="text-white" />
            <x-text-input id="name" class="block mt-1 w-full text-black" type="text" name="name" :value="old('name')" required autofocus placeholder="Masukkan Nama Anda" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('E-Mail')" class="text-white"/>
            <x-text-input id="email" class="block mt-1 w-full text-black" type="email" name="email" :value="old('email')" required placeholder="Masukkan E-Mail Anda" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-white"/>

            <x-text-input id="password" class="block mt-1 w-full text-black"
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                            placeholder="Masukkan Password Anda" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full text-black"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Konfirmasi Password Anda" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="mr-4 underline text-sm text-white dark:text-gray-100 hover:text-orange-100 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}"style="text-decoration: none"style="text-decoration: none" style="text-decoration: none">
                {{ __('Already registered?') }}
            </a>

            <button type="submit" class="px-4 py-2 bg-zinc-600 text-white rounded-md shadow-md hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                {{ __('Register') }}
           <button>
        </div>
    </form>
</x-guest-layout>

