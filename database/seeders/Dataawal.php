<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Katalog;

class Dataawal extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'telp' => '087777777777',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('123456789'),
         ]);

         
        $kategoris = ['Makanan', 'Minuman', 'Kerajinan', 'Aksesoris'];
        foreach ($kategoris as $nama) {
            Kategori::create([
                'nama_kategori' => $nama,
            ]);
        }

        // UMKM list
        $produk = [
            [
                'kategori_id' => 2,
                'nama_umkm' => 'bakso mang aki',
                'pemilik' => 'Farhan',
                'deskripsi' => 'Menjual bakso mang aki,  dengan sambal khas.',
                'foto' => 'umkm/default.jpeg',
                'alamat' => 'Jl. Mawar No. 19, Gunung Anyar',
                'wa' => '081234567880',
                'email' => 'bakso mang aki@gmail.com',
                'ig' => 'bakso mang aki',
                'status' => 'aktif',
                'latitude' => -7.321111,
                'longitude' => 112.734567,
            ],
            [
                'kategori_id' => 4,
                'nama_umkm' => 'Kopi Santai',
                'pemilik' => 'Dewi',
                'deskripsi' => 'Kedai kopi kekinian dengan biji pilihan dari petani lokal.',
                'foto' => 'umkm/default.jpeg',
                'alamat' => 'Jl. Melati No. 5, Tenggilis',
                'wa' => '081234567891',
                'email' => 'kopisantai@gmail.com',
                'ig' => null, // IG opsional
                'status' => 'aktif',
                'latitude' => -7.322222,
                'longitude' => 112.735678,
            ],
            [
                'kategori_id' => 1,
                'nama_umkm' => 'Kerajinan Bambu',
                'pemilik' => 'Andi',
                'deskripsi' => 'Kerajinan tangan dari bambu ramah lingkungan.',
                'foto' => 'umkm/default.jpeg',
                'alamat' => 'Jl. Kenanga No. 8, Wonokromo',
                'wa' => '081234567892',
                'email' => 'kerajinankayu@gmail.com',
                'ig' => 'bambu_craft',
                'status' => 'aktif',
                'latitude' => -7.323333,
                'longitude' => 112.736789,
            ],
            [
                'kategori_id' => 3,
                'nama_umkm' => 'Aksesoris Cantik',
                'pemilik' => 'Siti',
                'deskripsi' => 'Menjual berbagai aksesoris cantik dan unik.',
                'foto' => 'umkm/default.jpeg',
                'alamat' => 'Jl. Anggrek No. 12, Sukolilo',
                'wa' => '081234567893',
                'email' => null, // Email opsional
                'ig' => 'aksesoriscantik',
                'status' => 'aktif',
                'latitude' => -7.324444,
                'longitude' => 112.737890,
            ],
        ];

        // Simpan UMKM & produknya
        foreach ($produk as $umkmData) {
            $produk = Produk::create($umkmData);

            // Setiap UMKM punya 5 produk
            for ($i = 1; $i <= 3; $i++) {
                katalog::create([
                    'produk_id' => $produk->id,
                    // 'kategori_id' => rand(1, count($kategoris)),
                    'nama_produk' => "Produk {$i} - {$produk->nama_umkm}",
                    'deskripsi' => "Deskripsi untuk produk {$i} dari {$produk->nama_umkm}.",
                    'harga' => rand(10000, 50000),
                    'foto' => 'produk/default.jpeg',
                    'jam_buka' => '08:00:00',
                    'jam_tutup' => '20:00:00',
                    'latitude' => $produk->latitude,
                    'longitude' => $produk->longitude,
                ]);
            }
        }
    }
}
