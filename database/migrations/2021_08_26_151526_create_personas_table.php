<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('nro_docu', 10);
            $table->string('domicilio', 250);
            $table->tinyInteger('id_localidad');
            $table->string('tel_fijo', 20)->nullable();
            $table->string('tel_laboral', 20)->nullable();
            $table->string('tel_celular', 20)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('observaciones', 200)->nullable();
            $table->string('legajo', 20)->nullable();
            $table->decimal('ingresos', 8, 2);
            $table->tinyInteger('id_organismo');
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
        Schema::dropIfExists('personas');
    }
}
