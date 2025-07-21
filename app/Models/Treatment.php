<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $table = 'treatment'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key

    public function custemers()
    {
        return $this->hasMany(Custemer::class, 'id');
    }


    protected $fillable = [
        'nama',
        'kategori',
        'harga',
    ];
}
