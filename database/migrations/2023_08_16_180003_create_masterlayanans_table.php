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
        Schema::create('masterlayanans', function (Blueprint $table) {
            $table->id();
            $table->string('unitcode')->length(5);
            $table->string('busarea')->length(6);
            $table->string('namaunit')->length(50);
            $table->integer('levelunit')->length(5);
            $table->string('alamat')->length(150);
            $table->string('jenislayanan')->length(50);
            $table->string('sid')->length(20);
            $table->string('bandwith')->length(50);
            $table->string('ipgateway')->length(50);
            $table->string('status')->length(50);
            $table->string('koordinat')->length(50);
            $table->string('keterangan')->length(150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masterlayanans');
    }
};
