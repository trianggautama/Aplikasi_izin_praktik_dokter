<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLampiranFarmasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiran_farmasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permohonan_farmasi_id');
            $table->string('surat_rekomendasi_dinkes', 100)->nullable();
            $table->string('surat_rekomendasi_pafi', 100)->nullable();
            $table->string('str', 100)->nullable();
            $table->string('surat_izin_tempat_kerja', 100)->nullable();
            $table->string('izin_operasional', 100)->nullable();
            $table->string('npwp', 100)->nullable();
            $table->string('foto', 100)->nullable();
            $table->string('surat_keterangan_sehat', 100)->nullable();
            $table->string('ijazah', 100)->nullable();
            $table->string('surat_pernyataan_permohonan', 100)->nullable();
            $table->string('surat_pernyataan_mengikuti_uud', 100)->nullable();
            $table->string('nib', 100)->nullable();
            $table->string('ktp', 100)->nullable();
            $table->foreign('permohonan_farmasi_id')->references('id')->on('permohonan_farmasis')->onDelete('cascade');
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
        Schema::dropIfExists('lampiran_farmasis');
    }
}
