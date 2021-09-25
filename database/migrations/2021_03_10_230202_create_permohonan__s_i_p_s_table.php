<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanSIPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan__s_i_p_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biodata_diri_id');
            $table->date('tahun_kelulusan');
            $table->string('nomor_str', 100);
            $table->string('nomor_rekomendasi', 100);
            $table->string('tempat_praktik', 100);
            $table->text('alamat_tujuan');
            $table->string('tempat_ttd', 100);
            $table->tinyInteger('status')->default(0);
            $table->date('verif_admin')->nullable();
            $table->tinyInteger('status_verif_admin')->nullable();
            $table->date('verif_petugas_proses')->nullable();
            $table->tinyInteger('status_verif_petugas_proses')->nullable();
            $table->date('verif_kasi')->nullable();
            $table->tinyInteger('status_verif_kasi')->nullable();
            $table->date('verif_kabid')->nullable();
            $table->tinyInteger('status_verif_kabid')->nullable();
            $table->date('verif_sekretaris')->nullable();
            $table->tinyInteger('status_verif_sekretaris')->nullable();
            $table->date('verif_kepala_dinas')->nullable();
            $table->tinyInteger('status_verif_kepala_dinas')->nullable();
            $table->foreign('biodata_diri_id')->references('id')->on('biodata_diris')->onDelete('cascade');
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
        Schema::dropIfExists('permohonan__s_i_p_s');
    }
}
