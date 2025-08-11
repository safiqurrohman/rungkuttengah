<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    protected $fillable = [
        'kategori_id', 'nama_umkm', 'pemilik', 'deskripsi', 'alamat', 'foto', 'wa', 'email', 'ig', 'status', 'latitude', 'longitude'
    ];
}
