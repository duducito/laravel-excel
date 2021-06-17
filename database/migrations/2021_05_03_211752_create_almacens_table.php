<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacens', function (Blueprint $table) {
            $table->id();
            $table->text('codM');
            $table->text('codP');
            $table->text('codC');
           $table->text('receptor');
            $table->text('observacion');
            $table->text('nombreP');
            $table->Integer('cantStock');
            $table->double('cantiAgregada');
            $table->text('medidaMayor');
            $table->double('total');
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
        Schema::dropIfExists('almacens');
    }
}
