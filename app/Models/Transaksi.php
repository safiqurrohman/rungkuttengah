<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = ['id_custemer', 'id', 'id_treatment'];

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

