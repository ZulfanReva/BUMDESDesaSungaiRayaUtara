<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('profil_desas', function (Blueprint $table) {
            $table->id();
            $table->text('sejarah_desa')->nullable();
            $table->text('visi_misi')->nullable();
            $table->text('fasilitas_desa')->nullable();
            $table->text('prestasi_desa')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_desas');
    }
};
