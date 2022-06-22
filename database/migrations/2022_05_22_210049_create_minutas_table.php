<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minutas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fecha');
            $table->string('lugar');
            $table->string('de');
            $table->string('para',300);
            $table->string('asunto',300);
            $table->string('saludo',1000);
            $table->string('lista',400);
            $table->string('agenda',2000);
            $table->string('temas',2000);
            $table->string('acuerdos',2000);
            $table->string('acciones',2000);
            $table->string('firma');
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
        Schema::dropIfExists('minutas');
    }
}