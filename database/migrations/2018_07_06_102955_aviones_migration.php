<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AvionesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aviones', function (Blueprint $table) {
            $table->increments('serie');
            $table->string('modelo');
            $table->float('longitud');
            $table->integer('capacidad');
            $table->integer('velocidad');
            $table->integer('alcance');
            $table->integer('fabricante_id')->unsigned();
            $table->foreign('fabricante_id')->references('id')->on('fabricantes');
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
        Schema::dropIfExists('aviones');
    }
}
