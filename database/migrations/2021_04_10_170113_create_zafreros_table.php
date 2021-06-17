<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZafrerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zafreros', function (Blueprint $table) {
            $table->id();
            $table->text('ciC');
            $table->text('ciZ');
            $table->text('nombreZ');                                   
            $table->text('telefono');
             $table->text('direccion');
              $table->date('fecha');
               $table->text('comunidad');
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
        Schema::dropIfExists('zafreros');
    }
}
