
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Jadwal Konser') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <h1 class="text-2xl font-semibold mb-6">User List</h1>
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">ID</th>
                                        <th class="px-4 py-2">Nama Konser</th>
                                        <th class="px-4 py-2">Gambar Poster</th>
                                        <th class="px-4 py-2">Artis</th>
                                        <th class="px-4 py-2">Harga</th>
                                        <th class="px-4 py-2">Tanggal Konser</th>
                                        <th class="px-4 py-2">Waktu Mulai</th>
                                        <th class="px-4 py-2">Waktu Berakhir</th>
                                        <th class="px-4 py-2">Lokasi</th>
                                        <th class="px-4 py-2">Dibuat Tanggal</th>
                                        <th class="px-4 py-2">Diupdate Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jadwal_konsers as $jadwal)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $jadwal->id }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->nama }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->gambar }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->artis }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->harga }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->tanggal_konser }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->waktu_mulai }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->waktu_berakhir }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->lokasi }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->created_at }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->updated_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>




