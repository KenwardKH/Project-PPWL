<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_konser', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->string('gambar')->nullable();
            $table->string('artis')->nullable();
            $table->unsignedInteger('harga')->default(0);
            $table->date('tanggal_konser');
            $table->time('waktu_mulai');
            $table->time('waktu_berakhir');
            $table->string('lokasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_konser');
    }
};
