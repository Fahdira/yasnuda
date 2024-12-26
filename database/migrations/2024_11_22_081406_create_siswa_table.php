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
            $table->bigInteger('NISN')->unique();
            $table->string('nama');
            $table->string('tmp_lhr');
            $table->date('tgl_lhr');
            $table->string('warga');
            $table->string('agama');
            $table->string('jenis');
            $table->integer('anak_ke');
            $table->integer('dari_br');
            $table->string('asal_sklh');
            $table->string('keb_khusus')->nullable()->default('-');
            $table->string('keb_dis')->nullable()->default('-');
            $table->string('daftar_ke');
            $table->string('daftar_pes');
            $table->string('infaq')->nullable()->default('-');
            $table->string('sumber');
            $table->string('status');
            $table->boolean('status_bayar');
            $table->unsignedBigInteger('tahun_ajrn');
            $table->unsignedBigInteger('id_guest');
            $table->timestamps();

            $table->foreign('tahun_ajrn')
                ->references('id_pendaftaran')
                ->on('pendaftaran')      
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
