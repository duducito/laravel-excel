<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngreProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingre_productos', function (Blueprint $table) {
            $table->id();
            $table->text('ciProvedor')->nullable();
             $table->text('codigoP');
             $table->text('codigoM');
             $table->text('codigoC');
              $table->text('nombre');
              $table->integer('cantidad');
              $table->text('Unid');
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
        Schema::dropIfExists('ingre_productos');
    }
}
