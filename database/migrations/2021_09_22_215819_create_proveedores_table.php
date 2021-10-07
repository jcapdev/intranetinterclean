<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->id('id_proveedor');
            $table->string('pais_proveedor');
            $table->string('Estado_proveedor');
            $table->string('nombre_proveedor');
            $table->string('rfc_proveedor');
            $table->string('tipo_proveedor');
            $table->string('direccion_proveedor');
            $table->string('cp_proveedor');
            $table->string('telefono_proveedor');
            $table->string('forma_pago_proveedor');
            $table->string('descripcion');
            $table->string('servicio');
            $table->string('productos');
            $table->string('tiposrevioprop');
            $table->string('eliminar');
            $table->string('municipio');
            $table->string('correo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedor');
    }
}
