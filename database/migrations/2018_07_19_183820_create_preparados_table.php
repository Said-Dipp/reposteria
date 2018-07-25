<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreparadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preparados', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->time('vencimiento')->nullable();
            $table->integer('cantidad')->nullable();
            $table->string('estado');
            $table->integer('producto_id')->nullable();
            $table->integer('pedido_id')->nullable();
            $table->integer('users_id')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('preparados');
    }
}
