<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            // $table->id('idIncidencias');
            $table->id();
            $table->string('fechaIncidencia'); 
            $table->string('idSucursal'); 
            $table->string('nombreProsInc');
            $table->string('descripcion');
            $table->string('estatusIncidencia');
            $table->string('urlDocumentoInc'); 
            $table->string('NomDocInc');
            $table->string('idUsarioRegInc');
            $table->string('prioridad'); 


            // $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidencias');
    }
}
