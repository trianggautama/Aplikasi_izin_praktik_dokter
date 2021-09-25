<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inboxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permohonan__s_i_p_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('biodata_diri_id');
            $table->tinyInteger('is_read')->default(0);
            $table->string('catatan')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('inboxes');
    }
}
