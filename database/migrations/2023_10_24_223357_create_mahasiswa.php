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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->integer('nim');
            $table->string('nama');
            $table->string('status');
            $table->string('departemen');
            $table->string('fakultas');
            $table->string('angkatan');
            $table->string('jalur masuk');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('alamat');
            $table->string('foto');
            $table->foreignId('dsn_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
