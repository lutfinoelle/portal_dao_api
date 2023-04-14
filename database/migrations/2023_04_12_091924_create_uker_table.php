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
        Schema::create('uker', function (Blueprint $table) {
            $table->id();
            $table->char('kode_uker');
            $table->string('nama_uker');
            $table->string('uker_induk');
            $table->char('tipe_uker');
            $table->string('kode_kanwil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uker');
    }
};
