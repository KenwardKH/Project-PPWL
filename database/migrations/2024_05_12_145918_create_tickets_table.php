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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_acara');
            $table->unsignedBigInteger('id_user');
            $table->string('nama')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->unsignedInteger('jumlah')->default(0);
            $table->string('additional')->nullable();
            $table->enum('sudah_dibayar', ['Belum', 'Sudah'])->default('Belum');
            $table->timestamps();
            $table->string('bukti_trf')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_acara')->references('id')->on('jadwal_konser')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
