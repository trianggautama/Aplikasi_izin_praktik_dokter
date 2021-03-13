<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKuasaPrakteksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_kuasa_prakteks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('surat_kuasa_id');
            $table->string('tempat_praktek');
            $table->text('alamat');
            $table->string('jadwal_praktek');
            $table->foreign('surat_kuasa_id')->references('id')->on('surat_kuasas')->onDelete('cascade');
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
        Schema::dropIfExists('surat_kuasa_prakteks');
    }
}
