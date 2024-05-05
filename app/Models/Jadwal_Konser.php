<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal_Konser extends Model
{
    use HasFactory;

    protected $table = 'jadwal_konsers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'gambar',
        'artis',
        'harga',
        'tanggal_konser',
        'waktu_mulai',
        'waktu_berakhir',
        'lokasi',
    ];
}
