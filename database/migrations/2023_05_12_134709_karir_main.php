<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KarirMain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karir_main', function (Blueprint $table) {
            $table->id();
            $table->string('karir');
            $table->string('kategori');
            $table->string('tipe');
            $table->string('lokasi');
            $table->text('keterangan');
            $table->text('gaji');
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
        Schema::dropIfExists('karir_main');
    }
}
