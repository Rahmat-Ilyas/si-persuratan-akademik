<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParafsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parafs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('surat_id')->unsigned();
            $table->string('file_paraf');
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
        Schema::dropIfExists('parafs');
    }
}
