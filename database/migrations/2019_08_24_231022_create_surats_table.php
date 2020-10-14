<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mhs_id')->unsigned();
            $table->string('jenis_surat');
            $table->string('no_surat')->default(NULL);
            $table->string('status');
            $table->tinyInteger('proses')->default(0);
            $table->string('keterangan')->default(NULL);
            $table->date('tggl_surat')->default(NULL);
            $table->timestamps();

            $table->foreign('mhs_id')->references('id')->on('mahasiswas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surats');
    }
}
