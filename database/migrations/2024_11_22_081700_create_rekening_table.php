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
        Schema::create('rekening', function (Blueprint $table) {
            $table->bigIncrements('id_rekening');
            $table->string('nama');
            $table->string('no_rek', 20);
            $table->string('code');
            $table->unsignedBigInteger('bank_id');
            $table->timestamps();

            $table->foreign('bank_id')
                ->references('code')
                ->on('bank')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekening');
    }
};
