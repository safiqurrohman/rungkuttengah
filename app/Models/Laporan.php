<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';
    protected $fillable = ['id', 'id_custemer', 'id_treatment', 'harga', 'komisi', 'tanggal'];

    protected $dates = ['created_at'];

    public function customer()
    {
        return $this->belongsTo(Custemer::class, 'id_custemer');
    }

    public function karyawan()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'id_treatment');
    }
}
