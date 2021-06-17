<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proves', function (Blueprint $table) {
            $table->id();
            $table->text('ciP');
            $table->text('nombreP');                                   
            $table->text('telefonoP');
            $table->date('fecha_entrega'); 
            $table->text('pagoAl');
            $table->double('montoRecibido');
             $table->double('montoAdeudado');
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
        Schema::dropIfExists('proves');
    }
}
