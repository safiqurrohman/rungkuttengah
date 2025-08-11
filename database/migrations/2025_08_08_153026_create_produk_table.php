<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->string('nama_umkm');
            $table->string('pemilik');
            $table->text('deskripsi');
            $table->string('foto')->nullable();
            $table->string('alamat');

                        
            // Kontak tambahan
            $table->string('wa');
            $table->string('email')->nullable();
            $table->string('ig')->nullable();

            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
