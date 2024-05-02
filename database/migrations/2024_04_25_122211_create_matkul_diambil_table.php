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
        Schema::create('matkul_diambil', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("Matkul_id")->unsigned();
            $table->foreign("Matkul_id")->references("id")->on("matakuliah");
            $table->bigInteger("Mahasiswa_id")->unsigned();
            $table->foreign("Mahasiswa_id")->references("id")->on("mahasiswa");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkul_diambil');
    }
};
