<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Publik\Homekelurahan;
use App\Livewire\Publik\Produkumkm;
use App\Livewire\Publik\Katalogproduk;

Auth::routes();

// Route untuk pengunjung 
Route::get('/', Homekelurahan::class)->name('homekelurahan');
Route::get('/umkm', Produkumkm::class)->name('umkm');
Route::get('/kataproduk', Katalogproduk::class)->name('kataproduk');


// route untuk admin 
Route::get('/admin', function () {
    return view('auth.login');
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', Beranda::class)->middleware(['auth'])->name('dashboard');
// Route::get('/pekerjaan', Pekerjaan::class)->middleware(['auth'])->name('pekerjaan');
// Route::get('/user', User::class)->middleware(['auth'])->name('karyawan');
// Route::get('/laporan', Custemer::class)->middleware(['auth'])->name('laporan');
