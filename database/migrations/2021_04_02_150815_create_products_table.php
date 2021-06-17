<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('ciProvedor')->nullable();
             $table->text('codigoP');
             $table->text('codigoM');
             $table->text('codigoC');
             $table->double('Pproducto');
              $table->text('nombre');
              $table->integer('cantidad');
             
               $table->double('precio_unidad');
                $table->double('precio_mayor');
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
        Schema::dropIfExists('products');
    }
}
