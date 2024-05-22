
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Jadwal Konser') }}
        </h2>
    </x-slot>
    <style>
        .py-12 .max-w-7xl {
            max-width: 100%;
            display: flex;
            justify-content: center
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
            color: white;
            margin-top: 60px;
        }
        .judul {
            display: flex;
            justify-content: center;
            padding-top: 60px;
        }
        .add-konser {
            display: flex;
            flex-direction: row-reverse;
            margin-bottom: 25px;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <div class="judul">
                            <h1 class="text-4xl font-semibold">List Konser</h1>
                        </div>
                        <div class="add-konser">
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
                                        <th class="px-4 py-2">Update</th>
                                        <th class="px-4 py-2">Delete</th>
                                        <th class="px-4 py-2">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jadwal_konsers as $jadwal)
                                        <tr>
                                            <td class="border px-4 py-2"><h2 class="text-center">{{ $jadwal->id }}</h2></td>
                                            <td class="border px-4 py-2"><h2 class="text-center">{{ $jadwal->nama }}</h2></td>
                                            <td class="border px-4 py-2"><img src="{{ asset('images/poster/' . $jadwal->gambar) }}" alt="gambar" style="width:150px"></td>
                                            <td class="border px-4 py-2"><h2 class="text-center">{{ $jadwal->artis }}</h2></td>
                                            <td class="border px-4 py-2">
                                                <a href="{{ route('edit_jadwal_konser', $jadwal->id)}}">
                                                    <button class="bg-lime-600 ">Update</button>
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
                                            <td class="border px-4 py-2">
                                            <a href="#" class="open-modal" data-id="{{ $jadwal->id }}" data-name="{{ $jadwal->nama }}" data-artist="{{ $jadwal->artis }}" data-price="Rp{{ number_format($jadwal->harga, 0, ',', '.') }}" data-date="{{ $jadwal->tanggal_konser }}" data-start="{{ $jadwal->waktu_mulai }}" data-end="{{ $jadwal->waktu_berakhir }}" data-posted="{{ $jadwal->tanggal_posting }}" data-end-date="{{ $jadwal->tanggal_akhir }}" data-location="{{ $jadwal->lokasi }}" data-created="{{ $jadwal->created_at }}" data-updated="{{ $jadwal->updated_at }}" data-image="{{ asset('images/poster/' . $jadwal->gambar) }}">
                                                <button class="bg-blue-500">Details</button>
                                            </a>
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
    <style>
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            padding-top: 60px; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
            color: white;
        }
    
        .modal-content {
            background-color: #202c34;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #202c34;
            width: 60%; 
        }
    
            
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
                text-decoration: none;
            cursor: pointer;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 8px;
        }

        table td:first-child {
            width: 150px;
        }
    </style>
    
    <div id="concertModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div style="display: flex; flex-direction: row;">
                <div style="padding-right: 23px;">
                    <img id="modal-image" src="" alt="Concert Poster" style="width:400px; height: auto;">
                </div>
                <div style="padding-top: 10px;">
                    <h2 style="">Concert Details</h2>
                    <table style="border-collapse: collapse;">
                        <tr><td><strong>ID</strong></td><td>:</td><td id="modal-id"></td></tr>
                        <tr><td><strong>Name:</strong></td><td>:</td><td id="modal-name"></td></tr>
                        <tr><td><strong>Artist:</strong></td><td>:</td><td id="modal-artist"></td></tr>
                        <tr><td><strong>Price:</strong></td><td>:</td><td id="modal-price"></td></tr>
                        <tr><td><strong>Concert Date:</strong></td><td>:</td><td id="modal-date"></td></tr>
                        <tr><td><strong>Start Time:</strong></td><td>:</td><td id="modal-start"></td></tr>
                        <tr><td><strong>End Time:</strong></td><td>:</td><td id="modal-end"></td></tr>
                        <tr><td><strong>Posted Date:</strong></td><td>:</td><td id="modal-posted"></td></tr>
                        <tr><td><strong>End Date:</strong></td><td>:</td><td id="modal-end-date"></td></tr>
                        <tr><td><strong>Location:</strong></td><td>:</td><td id="modal-location"></td></tr>
                        <tr><td><strong>Created At:</strong></td><td>:</td><td id="modal-created"></td></tr>
                        <tr><td><strong>Updated At:</strong></td><td>:</td><td id="modal-updated"></td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var modal = document.getElementById('concertModal');
            var span = document.getElementsByClassName('close')[0];
            var openModalLinks = document.getElementsByClassName('open-modal');
    
            Array.prototype.forEach.call(openModalLinks, function(link) {
                link.onclick = function(event) {
                    event.preventDefault();
                    document.getElementById('modal-id').innerText = this.dataset.id;
                    document.getElementById('modal-name').innerText = this.dataset.name;
                    document.getElementById('modal-artist').innerText = this.dataset.artist;
                    document.getElementById('modal-price').innerText = this.dataset.price;
                    document.getElementById('modal-date').innerText = this.dataset.date;
                    document.getElementById('modal-start').innerText = this.dataset.start;
                    document.getElementById('modal-end').innerText = this.dataset.end;
                    document.getElementById('modal-posted').innerText = this.dataset.posted;
                    document.getElementById('modal-end-date').innerText = this.dataset.endDate;
                    document.getElementById('modal-location').innerText = this.dataset.location;
                    document.getElementById('modal-created').innerText = this.dataset.created;
                    document.getElementById('modal-updated').innerText = this.dataset.updated;
                    document.getElementById('modal-image').src = this.dataset.image;
                    modal.style.display = 'block';
                };
            });
    
            span.onclick = function() {
                modal.style.display = 'none';
            };
    
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            };
        });
    </script>
    
    
</x-app-layout>




