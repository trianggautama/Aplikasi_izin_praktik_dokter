<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemohonanSuratRekomendasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemohonan_surat_rekomendasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permohonan__s_i_p_id');
            $table->string('nomor_telepon', 14);
            $table->string('jam_praktik', 100);
            $table->foreign('permohonan__s_i_p_id')->references('id')->on('permohonan__s_i_p_s')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemohonan_surat_rekomendasis');
    }
}
