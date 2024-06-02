<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Jadwal Konser') }}
        </h2>
    </x-slot>
    <style>
        input {
            color-scheme: dark;
        }

        .judul {
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
                            <h1 class="text-2xl font-semibold mb-6">Edit Jadwal Konser</h1>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <form action={{ route('update-jadwal_konser', $jadwal->id)}} enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="p-4 md:p-5 flex flex-col gap-4">
                                        <input type="hidden" name="id" value="{{ $jadwal->id }}">
                                        Nama
                                        <input type="text" placeholder="Nama Acara" name="nama"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off" value="{{ $jadwal->nama }}">
                                        Gambar Poster
                                        <input id="img_file" type="file" onChange="img_pathUrl(this);" placeholder="Gambar Poster" name="gambar"
                                            accept="image/png, image/jpeg, image/jpg"
                                            class="rounded-md bg-gray-900 border-none text-white isi"
                                            autocomplete="off" value="{{ $jadwal->gambar }}">
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                        <img src="{{ asset('images/poster/' . $jadwal->gambar) }}" id="img_url" alt="gambar menu" style="width:200px;">
                                        Artis/Band
                                        <input type="text" placeholder="Artis/Band" name="artis"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off" value="{{ $jadwal->artis }}">
                                        Harga
                                        <input type="number" placeholder="Harga Tiket" name="harga"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off" value="{{ $jadwal->harga }}" id>
                                        Tanggal Konser
                                        <input type="date" name="tanggal_konser"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off" value="{{ $jadwal->tanggal_konser }}">
                                        Waktu Mulai
                                        <input type="time" name="waktu_mulai"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off" value="{{ $jadwal->waktu_mulai }}">
                                        Waktu Berakhir
                                        <input type="time" name="waktu_berakhir"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off" value="{{ $jadwal->waktu_berakhir }}">
                                        Tanggal Posting
                                        <input type="date" name="tanggal_posting"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off" value="{{ $jadwal->tanggal_posting }}">
                                        Tanggal Akhir
                                        <input type="date" name="tanggal_akhir"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off" value="{{ $jadwal->tanggal_akhir }}">
                                        Lokasi
                                        <input type="text" placeholder="Lokasi" name="lokasi"
                                            class="rounded-md bg-gray-900 border-none text-white isi" required
                                            autocomplete="off" value="{{ $jadwal->lokasi }}">
                                        <button type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">CHANGE</button>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function img_pathUrl(input){
            $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
        }
    </script>
    <script>
        var inputBox = document.getElementById("inputBox");

        var invalidChars = [
            "-",
            "+",
            "e",
        ];

        inputBox.addEventListener("keydown", function(e) {
            if (invalidChars.includes(e.key)) {
                e.preventDefault();
            }
        });
    </script>

</x-app-layout>
