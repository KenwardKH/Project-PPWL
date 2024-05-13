<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->truncate(); // Menghapus data yang sudah ada, bisa disesuaikan dengan kebutuhan

        DB::table('tickets')->insert([
            "id" => 1,
            "nama_acara" => 'Music Time',
            "nama" => 'Asep',
            "email" => 'asep@gmail.com',
            "nomor_hp" => 3254633423,
            "jumlah" => '2',
            "additional" => '',
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}
