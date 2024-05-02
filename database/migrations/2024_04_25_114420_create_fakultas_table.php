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
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("Dekan_id")->unsigned();
            $table->foreign("Dekan_id")->references("id")->on("dosen");
            $table->string("Nama");
            $table->string("Telp_number");
            $table->text("Deskripsi")->nullable();

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fakultas');
    }
};
