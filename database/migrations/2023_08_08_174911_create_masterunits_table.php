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
        Schema::create('masterunits', function (Blueprint $table) {
            $table->id();
            $table->string('unitcode')->length(5);
            $table->string('alamat')->length(150);
            $table->string('busarea')->length(6);
            $table->string('koodinat')->length(50);
            $table->integer('levelunit')->length(5);
            $table->string('keterangan')->length(50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masterunits');
    }
};
