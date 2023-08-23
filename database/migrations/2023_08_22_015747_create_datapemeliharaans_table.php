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
            $table->string('merk')->length(50);
            $table->string('tipe')->length(50);
            $table->integer('sn')->length(20);
            $table->string('tahun_pasanghar')->length(50);
            $table->string('tgl_kirim')->length(50);
            $table->string('metode')->length(50);
            $table->string('status')->length(50);
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
