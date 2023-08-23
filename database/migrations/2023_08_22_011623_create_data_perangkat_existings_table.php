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
        Schema::create('data_perangkat_existings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perangkat')->length(50);
            $table->string('merk')->length(50);
            $table->string('tipe')->length(50);
            $table->string('sn')->length(20);
            $table->string('tahun_pasangex')->length(50);
            $table->string('tahun_bongkar')->length(50);
            $table->string('keterangan')->length(50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_perangkat_existings');
    }
};