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
        Schema::create('portofolio_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tingkat_pendidikan');
            $table->string('institusi');
            $table->string('jurusan');
            $table->string('tahun_mulai');
            $table->string('tahun_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolio_pendidikan');
    }
};
