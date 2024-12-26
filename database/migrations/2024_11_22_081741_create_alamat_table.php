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
        Schema::create('alamat', function (Blueprint $table) {
            $table->unsignedBigInteger('NIK_siswa')->primary();
            $table->string('alamat');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten/kota');
            $table->string('provinsi');
            $table->timestamps();

            $table->foreign('NIK_siswa')
                ->references('NIK_siswa')
                ->on('siswa')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat');
    }
};
