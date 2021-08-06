<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLampiranBidansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiran_bidans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permohonan_bidan_id');
            $table->string('surat_rekomendasi_dinkes', 100)->nullable();
            $table->string('surat_keterangan_bekerja', 100)->nullable();
            $table->string('surat_pernyataan_mengikuti_uud', 100)->nullable();
            $table->string('surat_keterangan_sehat', 100)->nullable();
            $table->string('surat_rekomendasi_IBI', 100)->nullable();
            $table->string('kartu_anggota', 100)->nullable();
            $table->string('str', 100)->nullable();
            $table->string('surat_pernyataan_permohonan', 100)->nullable();
            $table->string('surat_izin_atasan_langsung', 100)->nullable();
            $table->string('ijazah', 100)->nullable();
            $table->string('ktp', 100)->nullable();
            $table->string('npwp', 100)->nullable();
            $table->string('foto', 100)->nullable();
            $table->foreign('permohonan_bidan_id')->references('id')->on('permohonan_bidans')->onDelete('cascade');
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
        Schema::dropIfExists('lampiran_bidans');
    }
}
