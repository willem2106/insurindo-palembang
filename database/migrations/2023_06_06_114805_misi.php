<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Misi extends Migration
{
            /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misi', function (Blueprint $table) {
            $table->id();
            $table->string('konten');
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
        Schema::dropIfExists('misi');
    }
}
