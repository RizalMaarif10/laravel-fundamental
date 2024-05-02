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
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("Prodi_id")->unsigned();
            $table->foreign("Prodi_id")->references("id")->on("prodi");
            $table->bigInteger("Dosen_id")->unsigned();
            $table->foreign("Dosen_id")->references("id")->on("dosen");
            $table->string("Nama");
            $table->datetime("Waktu");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matakuliah');
    }
};
