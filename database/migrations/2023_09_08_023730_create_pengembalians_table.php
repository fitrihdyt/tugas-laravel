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
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pengembalian', 11);
            $table->date('tanggal_pengembalian');
            $table->integer('denda', 11);
            $table->unsignedBigInteger('id_buku', 11);
            $table->foreign('id_buku')->references('id')->on('anggotas');
            $table->unsignedBigInteger('id_anggota', 11);
            $table->foreign('id_anggota')->references('id')->on('anggotas');
            $table->unsignedBigInteger('id_petugas', 11);
            $table->foreign('id_petugas')->references('id')->on('petugass');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};