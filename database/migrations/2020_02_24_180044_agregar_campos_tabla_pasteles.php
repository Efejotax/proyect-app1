<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarCamposTablaPasteles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('pasteles', function(Blueprint$table) {
$table->string('nombre')->nullable();
$table->string('sabor')->nullable();
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('pasteles', function(Blueprint$table) {
$table->dropColumn(['nombre', 'sabor']);
});
    }
}
