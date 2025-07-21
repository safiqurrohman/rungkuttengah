<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Custemer extends Model
{
    use HasFactory;

    protected $table = 'custemer';
    protected $primaryKey = 'id'; 

    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'id_treatment'); 
    }

    public function karyawan()
    {
        return $this->belongsTo(User::class, 'id_karyawan');
    }

    protected $fillable = ['nama', 'phone', 'address', 'id_karyawan', 'id_treatment'];


}
