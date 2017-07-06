<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nome', 255);
            $table->string('email');
            $table->string('telefone', 14);                        
            $table->string('celular', 15)->nullable();            
            $table->string('documento', 20);
            $table->string('rg', 15)->nullable();
            $table->string('cep', 15);
            $table->string('municipio', 75)->nullable();
            $table->string('uf', 155)->nullable();
            $table->text('endereco', 155)->nullable();
            $table->string('cliente_directory', 255)->nullable();
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
       Schema::dropIfExists('clientes');
    }
}
