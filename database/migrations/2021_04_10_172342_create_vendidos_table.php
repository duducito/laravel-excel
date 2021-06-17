<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendidosTable extends Migration
{
    /**
     * Run the migrations.
     *CODV  CODIGOM CODIGOP CODIGOC CI-ZAFRERO  CI-PROVEEDOR    M-PAGO  NOMBREPRODUCTO  CANTIDAD    PRECIO  MONTO-TOTAL FECHA   MEDIDA
     * @return void
     */
    public function up()
{
        Schema::create('vendidos', function (Blueprint $table) {
            $table->id();
            $table->text('codV');
            $table->text('codM');
            $table->text('codP');
            $table->text('codC');
            $table->text('codZ');
            $table->text('metodoP');
            $table->text('nombreP');
            $table->Integer('cantidad');
            $table->text('precio');
            $table->double('total');
            $table->text('medida');
             $table->date('fecha');
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
        Schema::dropIfExists('vendidos');
    }
}
