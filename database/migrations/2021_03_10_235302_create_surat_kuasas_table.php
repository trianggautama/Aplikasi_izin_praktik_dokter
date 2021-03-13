<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKuasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_kuasas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permohonan__s_i_p_id');
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
        Schema::dropIfExists('surat_kuasas');
    }
}
