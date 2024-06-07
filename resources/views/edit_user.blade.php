<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Member') }}
        </h2>
    </x-slot>
    <style>
        input {
            color-scheme: dark;
        }
        .judul{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <div class="judul">
                            <h1 class="text-2xl font-semibold mb-6">Edit Member</h1>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <form action="{{ route('update-user') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="p-4 md:p-5 flex flex-col gap-4">
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        Name
                                        <input type="text" placeholder="name" name="name"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off" value="{{ $user->name}}">
                                        Email
                                        <input type="text" placeholder="email" name="email"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off" value="{{ $user->email }}">
                                        <button type="submit"
                                            class="text-white bg-emerald-700 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">CHANGE</button>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
