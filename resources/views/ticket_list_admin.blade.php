<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ticket List') }}
        </h2>
    </x-slot>

    <style>
        button {
            padding: 10px;
            background-color: red;
            border-radius: 10px;
            color: white;
        }
        .py-12 .max-w-7xl {
            max-width: 100%;
            display: flex;
            justify-content: center
        }
        .judul{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 60px;
            margin-top: 60px;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                    <div class="judul">
                        <h1 class="text-4xl font-semibold mb-6">Ticket List</h1>
                    </div>
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">ID</th>
                                        <th class="px-4 py-2">ID Acara</th>
                                        <th class="px-4 py-2">Nama Pemesan</th>
                                        <th class="px-4 py-2">ID User</th>
                                        <th class="px-4 py-2">Jumlah</th>
                                        <th class="px-4 py-2">Additional</th>
                                        <th class="px-4 py-2">Tanggal Pemesanan</th>
                                        <th class="px-4 py-2">Status</th>
                                        <th class="px-4 py-2">Bukti Transfer</th>
                                        <th class="px-4 py-2">Konfirmasi</th>
                                        <th class="px-4 py-2">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ticket as $tickets)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $tickets->id }}</td>
                                            <td class="border px-4 py-2">{{ $tickets->id_acara }}</td>
                                            <td class="border px-4 py-2">{{ $tickets->nama }}</td>
                                            <td class="border px-4 py-2">{{ $tickets->id_user }}</td>
                                            <td class="border px-4 py-2">{{ $tickets->jumlah }}</td>
                                            <td class="border px-4 py-2">{{ $tickets->additional }}</td>
                                            <td class="border px-4 py-2">{{ $tickets->created_at }}</td>
                                            <td class="border px-4 py-2">
                                                @if ($tickets->sudah_dibayar == 'Sudah')
                                                    Sudah Dibayar
                                                @elseif($tickets->bukti_trf == null)
                                                    Belum Dibayar
                                                @else
                                                    Menunggu Konfirmasi
                                                @endif
                                            </td>
                                            <td class="border px-4 py-2">
                                                <img src="{{ asset('images/bukti_trf/' . $tickets->bukti_trf) }}"
                                                    alt="" width="200px"
                                                    onclick="openModal('imageModal{{ $tickets->id }}')">
                                            </td>
                                            <div id="imageModal{{ $tickets->id }}" class="modal"
                                                style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.9);">
                                                <span class="close"
                                                    style="position: absolute; top: 15px; right: 35px; color: #f1f1f1; font-size: 40px; font-weight: bold; transition: 0.3s;"
                                                    onclick="closeModal('imageModal{{ $tickets->id }}')">&times;</span>
                                                <img class="modal-content"
                                                    src="{{ asset('images/bukti_trf/' . $tickets->bukti_trf) }}"
                                                    style="margin: auto; display: block; width: 80%; max-width: 700px;">
                                            </div>
                                            <td class="border px-4 py-2">
                                                @if($tickets->bukti_trf == NULL)

                                                @else
                                                    <form action="{{ route('ubah_status', ['id' => $tickets->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $tickets->id }}">
                                                    <button type="submit">Konfirmasi</button>
                                                    </form>
                                                @endif
                                                
                                            </td>
                                            <td class="border px-4 py-2">
                                                <form action="{{route('delete_ticket_status',['id' => $tickets->id])}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $tickets->id }}">
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
<script>
    function confirmDelete(userId) {
        if (confirm('Are you sure you want to delete this user?')) {
            document.getElementById('deleteForm_' + userId).submit();
        }
    }
</script>
<script>
    function openModal(modalId) {
        var modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = "block";
        } else {
            console.error("Modal with ID '" + modalId + "' not found.");
        }
    }


    function closeModal(modalId) {
        var modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = "none";
        } else {
            console.error("Modal with ID '" + modalId + "' not found.");
        }
    }
</script>
