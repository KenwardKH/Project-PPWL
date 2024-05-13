
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Jadwal Konser') }}
        </h2>
    </x-slot>
    <style>
        .py-12 .max-w-7xl {
            max-width: 100%;
        }
        tbody tr td button{
            padding: 10px;
            background-color: red;
            border-radius: 10px;
            color: white
        }
        .btn {
            padding: 10px;
            font-size: 24;
            background-color: green;
            border-radius: 10px;
            color: white
        }
        .judul {
            display: flex;
            justify-content: space-between
        }
        img {
            width: 400px
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <div class="judul">
                            <h1 class="text-2xl font-semibold mb-6">List Konser</h1>
                            <a href="add_jadwal_konser"><button class="btn"><h3>+ Tambah Jadwal Konser</h3></button></a>
                        </div>
                        
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
                                        <th class="px-4 py-2">Update</th>
                                        <th class="px-4 py-2">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jadwal_konsers as $jadwal)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $jadwal->id }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->nama }}</td>
                                            <td class="border px-4 py-2"><img src="{{ asset('images/poster/' . $jadwal->gambar) }}" alt="gambar"></td>
                                            <td class="border px-4 py-2">{{ $jadwal->artis }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->harga }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->tanggal_konser }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->waktu_mulai }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->waktu_berakhir }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->lokasi }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->created_at }}</td>
                                            <td class="border px-4 py-2">{{ $jadwal->updated_at }}</td>
                                            <td class="border px-4 py-2">
                                                <a href="{{ route('edit_jadwal_konser', $jadwal->id)}}">
                                                    <button>Update</button>
                                                </a>
                                                
                                            </td>
                                            <td class="border px-4 py-2">
                                                <form action="{{route('delete-jadwal_konser',['id' => $jadwal->id])}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $jadwal->id }}">
                                                    <button type="submit">Delete</button>
                                                </form>
                                            </td>
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




