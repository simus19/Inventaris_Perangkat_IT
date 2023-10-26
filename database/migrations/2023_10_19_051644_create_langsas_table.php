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
        Schema::create('langsas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perangkat')->length(50);
            $table->string('merk')->length(50);
            $table->string('tipe')->length(50);
            $table->string('koordinat_longtitude')->length(50);
            $table->string('koordinat_langtitude')->length(50);
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('langsas');
    }
};
