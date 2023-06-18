<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KarirDetailSyarat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karir_detail_syarat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_main');
            $table->foreign('id_main')->references('id')->on('karir_main')->onDelete('cascade');
            $table->string('syarat');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karir_detail_syarat');
    }
}
