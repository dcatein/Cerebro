<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('assunto');
            $table->integer('tipo');
            $table->text('info');
            $table->float('classificacao')->nullable();
        });

        Schema::create('palavrasChave', function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->char('palavra');
            $table->integer('envio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('envios');
        Schema::dropIfExists('palavrasChave');
    }
}
