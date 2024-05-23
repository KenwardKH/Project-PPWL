<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div>
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
        </a>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label  for="email" :value="__('E-Mail')" class="text-white"/>
            <x-text-input id="email" class="block mt-1 w-full text-black" type="email" name="email" :value="old('email')" required autofocus placeholder="Masukkan E-Mail Anda" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-white"/>

            <x-text-input id="password" class="block mt-1 w-full text-black"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="Masukkan Password Anda" />
                            

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-orange-600 shadow-sm focus:ring-orange-500 dark:focus:ring-orange-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-white dark:text-gray-100">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mb-4">
            @if (Route::has('password.request'))
                <a class="mr-4 underline text-sm text-white dark:text-gray-100 hover:text-orange-100 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}" style="text-decoration: none">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button type="submit" class="px-4 py-2 bg-zinc-600 text-white rounded-md shadow-md hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</x-guest-layout>
