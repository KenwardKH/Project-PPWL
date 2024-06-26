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
        // DB::table('jadwal_konser')->truncate(); // Menghapus data yang sudah ada, bisa disesuaikan dengan kebutuhan

        DB::table('jadwal_konser')->insert([
            "id" => 1,
            "nama" => 'Music Festival',
            "gambar" => 'raisa.jpg',
            "artis" => 'Raisa',
            "harga" => 100000,
            "tanggal_konser" => '2024-06-24',
            "waktu_mulai" => '18:00:00',
            "waktu_berakhir" => '22:00:00',
            "tanggal_posting" => '2024-04-20',
            "tanggal_akhir" => '2024-06-20',
            "lokasi" => 'Jalan Pengadilan Lapangan Benteng',
            "created_at" => now(),
            "updated_at" => now()
        ]);

        DB::table('jadwal_konser')->insert([
            "id" => 2,
            "nama" => 'Music Time',
            "gambar" => 'BabyMetal.jpg',
            "artis" => 'Baby Metal',
            "harga" => 250000,
            "tanggal_konser" => '2024-08-4',
            "waktu_mulai" => '13:00:00',
            "waktu_berakhir" => '15:00:00',
            "tanggal_posting" => '2024-04-20',
            "tanggal_akhir" => '2024-06-20',
            "lokasi" => 'Regale',
            "created_at" => now(),
            "updated_at" => now()
        ]);

        DB::table('jadwal_konser')->insert([
            "id" => 3,
            "nama" => 'The Nights',
            "gambar" => 'music.jpg',
            "artis" => 'Eminem',
            "harga" => 300000,
            "tanggal_konser" => '2024-12-14',
            "waktu_mulai" => '19:00:00',
            "waktu_berakhir" => '22:00:00',
            "tanggal_posting" => '2024-07-20',
            "tanggal_akhir" => '2024-09-20',
            "lokasi" => 'Gedung Auditorium USU',
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}
