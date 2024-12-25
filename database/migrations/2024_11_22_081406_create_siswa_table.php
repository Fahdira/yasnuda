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
        Schema::create('siswa', function (Blueprint $table) {
            $table->unsignedbigInteger('NIK_siswa')->primary();
            $table->unsignedbigInteger('NISN', 20)->unique();
            $table->string('nama');
            $table->string('tmp_lhr');
            $table->date('tgl_lhr');
            $table->string('warga');
            $table->string('agama');
            $table->string('jenis');
            $table->integer('anak_ke');
            $table->integer('dari_br');
            $table->string('asal_sklh');
            $table->string('keb_khusus');
            $table->string('keb_dis');
            $table->string('daftar_ke');
            $table->string('daftar_pes');
            $table->string('infaq');
            $table->string('sumber');
            $table->boolean('status');
            $table->boolean('status_bayar');
            $table->unsignedBigInteger('id_guest');
            $table->timestamps();

            $table->foreign('id_guest')
                ->references('id_guest')
                ->on('guest')      
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
