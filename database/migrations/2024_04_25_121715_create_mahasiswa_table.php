<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("Prodi_id")->unsigned();
            $table->foreign("Prodi_id")->references("id")->on("prodi");
            $table->string("Nama");
            $table->string("NIK")->unique();
            $table->date("Tanggal_lahir");
            $table->text("Alamat")->nullable();
            $table->enum("Gender",["L","P"]);
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
