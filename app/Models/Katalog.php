<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Katalog extends Model
{
    use HasFactory; 

    protected $table = 'katalog'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key

    protected $fillable = [
        'produk_id', 'nama_produk', 'deskripsi', 'harga', 'foto', 'jam_buka', 'jam_tutup', 'latitude', 'longitude'
    ];

    public function produk()
    {
        return $this->belongsTo(Umkm::class);
    }

    // public function kategori()
    // {
    //     return $this->belongsTo(Kategori::class);
    // }
}
