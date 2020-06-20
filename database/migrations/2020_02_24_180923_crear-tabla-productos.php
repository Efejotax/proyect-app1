<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->timestamps();
            $table->string('Título')->nullable();
            $table->string('Descripción')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // ojo con estas líneas a la hora de generar las tablas !!!
        Schema::dropIfExists('productos');
         //Schema::table('productos', function(Blueprint$table) {
        $table->dropColumn(['Título', 'Descripción']);
    });
    }
}
