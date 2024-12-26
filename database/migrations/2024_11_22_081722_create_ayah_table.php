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
        Schema::create('ayah', function (Blueprint $table) {
            $table->bigInteger('NIK')->primary();
            $table->unsignedBigInteger('NIK_siswa');
            $table->string('nama');
            $table->string('pekerjaan');
            $table->string('pendidikan');
            $table->string('penghasilan');
            $table->string('status');
            $table->string('warga');
            $table->string('agama');
            $table->string('tmp_lhr');
            $table->date('tgl_lhr');
            $table->string('ktp');
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
        Schema::dropIfExists('ayah');
    }
};
