<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Jadwal Konser') }}
        </h2>
    </x-slot>
    <style>
        input{
            color-scheme:dark;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <h1 class="text-2xl font-semibold mb-6">Tambah Jadwal Konser</h1>
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <form action="/add_jadwal_konser" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="p-4 md:p-5 flex flex-col gap-4">
                                        Nama
                                        <input type="text" placeholder="Nama Acara" name="nama"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off">
                                        Gambar Poster
                                        <input type="file" placeholder="Gambar Poster" name="gambar" accept="image/png, image/jpeg, image/jpg"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off">
                                        Artis/Band
                                        <input type="text" placeholder="Artis/Band" name="artis"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off">
                                        Harga
                                        <input type="number" placeholder="Harga Tiket" name="harga"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off">
                                        Tanggal Konser
                                        <input type="date" name="tanggal_konser"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off">
                                        Waktu Mulai
                                        <input type="time" name="waktu_mulai"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off">
                                        Waktu Berakhir
                                        <input type="time" name="waktu_berakhir"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off">
                                        Tanggal Posting
                                        <input type="date" name="tanggal_posting"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off">
                                        Tanggal akhir
                                        <input type="date" name="tanggal_akhir"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off">
                                        Lokasi
                                        <input type="text" placeholder="Lokasi" name="lokasi"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off">
                                        <button type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ADD</button>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
