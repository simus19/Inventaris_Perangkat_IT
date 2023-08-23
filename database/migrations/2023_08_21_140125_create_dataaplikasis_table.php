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
        Schema::create('dataaplikasis', function (Blueprint $table) {
            $table->id();
            $table->string('ip_aplikasi')->length(15);
            $table->string('nama_aplikasi')->length(20);
            $table->string('deskripsi')->length(150);
            $table->integer('tahun_buat')->length(4);
            $table->string('bahasaprogram')->length(50);
            $table->string('database')->length(50);
            $table->string('user')->length(50);
            $table->string('status')->length(50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataaplikasis');
    }
};
