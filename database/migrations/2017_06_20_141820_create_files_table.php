<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {       
            $table->increments('id');
            $table->string('nome');
            $table->integer('clientes_id')->unsigned();
            $table->foreign('clientes_id')->references('id')->on('clientes');
            $table->bigInteger('processos_id')->unsigned();
            $table->foreign('processos_id')->references('id')->on('processos');
            $table->string('caminho', 255);
            $table->timestamps();
        });

        Schema::table('files', function ($table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
