<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersyaratansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persyaratans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('surat_id')->unsigned();
            $table->string('nama_syarat');
            $table->string('file_berkas');
            $table->timestamps();

            $table->foreign('surat_id')->references('id')->on('surats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persyaratans');
    }
}
