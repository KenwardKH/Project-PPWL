<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public function jadwal()
    {
        return $this->belongsTo(Jadwal_Konser::class, 'id_acara');
    }
    protected $table = 'tickets';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id_acara',
        'nama',
        'id_user',
        'nomor_hp',
        'jumlah',
        'additional',
    ];
}
