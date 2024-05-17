<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalKonserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwal_konsers')->truncate(); // Menghapus data yang sudah ada, bisa disesuaikan dengan kebutuhan

        DB::table('jadwal_konsers')->insert([
            "id" => 1,
            "nama" => 'Music Festival',
            "gambar" => 'raisa.jpg',
            "artis" => 'Raisa',
            "harga" => 100000,
            "tanggal_konser" => '2024-06-24',
            "waktu_mulai" => '18:00:00',
            "waktu_berakhir" => '22:00:00',
            "lokasi" => 'Jalan Pengadilan Lapangan Benteng',
            "created_at" => now(),
            "updated_at" => now()
        ]);

        DB::table('jadwal_konsers')->insert([
            "id" => 2,
            "nama" => 'Music Time',
            "gambar" => 'download.jpg',
            "artis" => 'Babymetal',
            "harga" => 200000,
            "tanggal_konser" => '2024-08-4',
            "waktu_mulai" => '13:00:00',
            "waktu_berakhir" => '15:00:00',
            "lokasi" => 'Regale',
            "created_at" => now(),
            "updated_at" => now()
        ]);

        DB::table('jadwal_konsers')->insert([
            "id" => 3,
            "nama" => 'The Nights',
            "gambar" => 'music.jpg',
            "artis" => 'Eminem',
            "harga" => 240000,
            "tanggal_konser" => '2024-12-14',
            "waktu_mulai" => '19:00:00',
            "waktu_berakhir" => '22:00:00',
            "lokasi" => 'Gedung Auditorium USU',
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}
