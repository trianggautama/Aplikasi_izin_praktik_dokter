<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLampiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampirans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permohonan__s_i_p_id');
            $table->string('surat_rekomendasi_dinkes', 100)->nullable();
            $table->string('surat_rekomendasi_organisasi', 100)->nullable();
            $table->string('surat_persetujuan_pimpinan', 100)->nullable();
            $table->string('izin_operasional', 100)->nullable();
            $table->string('NIB', 100)->nullable();
            $table->string('ijazah', 100)->nullable();
            $table->string('str', 100)->nullable();
            $table->string('ktp', 100)->nullable();
            $table->string('npwp', 100)->nullable();
            $table->string('foto', 100)->nullable();
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
        Schema::dropIfExists('lampirans');
    }
}
