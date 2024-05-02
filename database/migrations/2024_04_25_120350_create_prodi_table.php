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
        Schema::create('prodi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("Fakultas_id")->unsigned();
            $table->foreign("Fakultas_id")->references("id")->on("fakultas");
            $table->string("Nama");
            $table->enum('Jejang', ["D3", "S1", "S2"])->default("S1");
            $table->bigInteger("Kaprodi_id")->unsigned();
            $table->foreign("Kaprodi_id")->references("id")->on("dosen");
            $table->string("Telp_number");
            $table->text("Deskripsi")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodi');
    }
};
