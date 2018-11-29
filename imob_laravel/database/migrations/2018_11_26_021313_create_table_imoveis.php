<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImoveis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('imovels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoimovel');
            $table->string('classificacao');
            $table->string('situacao');
            $table->float('areatotal', 9, 2);
            $table->float('valorimovel', 9, 2);
            $table->float('valorcondominio',9, 2);
            $table->integer('suite');
            $table->integer('quarto');
            $table->integer('banheiro');
            $table->integer('garagem');
            $table->integer('areaservico');
            $table->integer('salajantar');
            $table->integer('salaestar');
            $table->integer('idadeimovel');
            $table->float('iptu',9, 2);
            $table->text('obs');
            $table->string('cep');
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');
            $table->string('ibge');
            $table->string('complemento');
            $table->string('quadra');
            $table->string('lote');

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
        Schema::dropIfExists('imovels');
    }
}