<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class Dataawal extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        User::create(
        ['name' => 'admin',
            'telp' => '087777777777',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
         ]);
    }
}
