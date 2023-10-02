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
        Schema::create('datapemeliharaans', function (Blueprint $table) {
            $table->id();
            $table->string('perangkat')->length(50);
            $table->string('jenis_kegiatan')->length(50);
            $table->date('tgl_mulai')->length();
            $table->date('tgl_selesai')->length();
            $table->string('waktu')->length(50);
            $table->string('pelaksana')->length(50);
            $table->string('lokasi')->length(50);
            $table->string('evidence')->length(50);
            $table->string('kebutuhan_item')->length(50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapemeliharaans');
    }
};
