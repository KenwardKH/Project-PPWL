<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-orange-300 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-orange-500 dark:bg-orange-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white dark:text-gray-100">
                    {{ __("Welcum Admin-san!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

