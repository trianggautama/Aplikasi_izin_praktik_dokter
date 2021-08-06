<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanBidansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_bidans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biodata_diri_id');
            $table->date('tahun_kelulusan');
            $table->string('no_str');
            $table->string('no_rekomendasi');
            $table->string('tempat_praktik');
            $table->string('alamat_praktik');
            $table->string('telepon_praktik');
            $table->string('jam_praktik');
            $table->tinyInteger('status')->default(0);
            $table->date('verif_admin')->nullable();
            $table->date('verif_petugas_proses')->nullable();
            $table->date('verif_kasi')->nullable();
            $table->date('verif_kabid')->nullable();
            $table->date('verif_sekretaris')->nullable();
            $table->date('verif_kepala_dinas')->nullable();
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
        Schema::dropIfExists('permohonan_bidans');
    }
}
