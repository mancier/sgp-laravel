<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numero_processo')->unique();
            $table->string('nome_processo', 255);
            $table->integer('clientes_id')->unsigned();
            $table->foreign('clientes_id')->references('id')->on('clientes');
            $table->string('requerendo', 125)->nullable();
            $table->string('requerendo_tipo', 11)->nullable();
            $table->string('vara', 75);
            $table->string('comarca', 50)->nullable();
            $table->string('valor_causa', 20);
            $table->timestamps();
        });

        Schema::table('processos', function($table){
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
        Schema::dropIfExists('processos');
    }
}
