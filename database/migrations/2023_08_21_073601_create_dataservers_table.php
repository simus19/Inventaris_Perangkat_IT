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
        Schema::create('dataservers', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->length(50);
            $table->string('alamatip')->length(15);
            $table->string('namaserver')->length(50);
            $table->string('memori')->length(50);
            $table->string('prosesor')->length(50);
            $table->string('hardisk')->length(50);
            $table->string('statushardisk')->length(50);
            $table->date('tanggalupdate')->length();
            $table->string('fungsiserver')->length(50);
            $table->string('keterangan')->length(50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataservers');
    }
};
