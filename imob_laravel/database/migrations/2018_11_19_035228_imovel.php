<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Imovel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoimovel');
            $table->string('classificacao');
            $table->string('situacao');
            $table->float('areatotal', 9, 2);
            $table->float('valorimovel', 9, 2);
            $table->float('valorcondominio',9, 2);
            $table->integer('sala');
            $table->integer('quarto');
            $table->integer('banheiro');
            $table->integer('garagem');
            $table->integer('areaservico');
            $table->integer('salajantar');
            $table->integer('salaestar');
            $table->integer('idadeimovel');
            $table->float('iptu',9, 2);
            $table->text('obs');
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
