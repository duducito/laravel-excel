<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            
            $table->id();
            $table->text('codigoV');
            $table->text('codigoP');
            $table->text('ciZ');
            $table->text('codigoM');
            $table->text('codigoC');
            $table->text('nombre');
            
            $table->double('precio');
            $table->text('medida');
            $table->Integer('cantidad');
            $table->text('pagoAl');
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
        Schema::dropIfExists('carritos');
    }
}
