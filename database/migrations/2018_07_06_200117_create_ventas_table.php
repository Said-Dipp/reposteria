<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->decimal('total')->nullable();
            $table->decimal('descuento')->nullable();
            $table->decimal('total_importe')->nullable();
            $table->decimal('iva')->nullable();
            $table->string('estado');
            $table->integer('cliente_id')->nullable();
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
        Schema::drop('ventas');
    }
}
