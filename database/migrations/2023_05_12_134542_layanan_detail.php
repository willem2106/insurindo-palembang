<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LayananDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_main');
            $table->foreign('id_main')->references('id')->on('layanan_main')->onDelete('cascade');
            $table->string('judul');
            $table->text('konten');
            $table->string('gambar_path');
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
        Schema::dropIfExists('layanan_detail');
    }
}
