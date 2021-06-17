<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MedidaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\VenderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\inicio;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ZafreroController;
use App\Http\Controllers\ProduccioneController;
use App\Http\Controllers\AnticipoController;
use App\Http\Controllers\AgregarController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\KardexController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\MercaderiaController;
use App\Http\Controllers\ingreProductoController;
use App\Http\Controllers\ProveController;
use App\Http\Controllers\ContratistaController;

/*
|----------------------------------------z----------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Route::get('principal', function () {
    return view('edu1');
});
Route::get('principal/{curso}', function ($curso) {
    return "bienvenido al $curso";
});
Route::get('principal/{curso}/{cate}', function ($curso,$cate=null) {
    return "bienvenido al $curso"; cate seria null
});

*/

Route::get('/', inicio::class);

Route::resource('producto',ProductController::class);
Route::resource('contratista',ContratistaController::class);
Route::resource('imprimir',ingreProductoController::class);
Route::resource('provee',ProveController::class);

Route::resource('reporte',ReportesController::class);
Route::resource('categoria',CategoriaController::class);
Route::resource('medida',MedidaController::class);
Route::resource('vender',VenderController::class);
Route::get('carrito/{id}',[CarritoController::class,'store'])->name('carrito.store');
Route::get('usuario',[LoginController::class,'create'])->name('usuario.create');
Route::get('mostrar',[ZafreroController::class,'update'])->name('mostrar.update');
Route::get('vercontra',[ContratistaController::class,'show'])->name('mostrar.show');
//Route::resource('carrito',CarritoController::class);
//Route::get('carrito/vender',VenderController::class);

Route::get('elim/{id}',[CarritoController::class,'destroy'])->name('elim.destroy');
Route::get('borra/{id}',[ProductController::class,'destroy'])->name('borra.destroy');
Route::get('medidaborra/{id}',[MedidaController::class,'destroy'])->name('medidaborra.destroy');
Route::get('elimina/{id}',[CategoriaController::class,'destroy'])->name('elimina.destroy');
Route::resource('principal', LoginController::class);
Route::get('muestraCarro',[CarritoController::class,'show'])->name('muestraCarro.show');
Route::get('compras/{codP}',[CompraController::class,'store'])->name('compras.store');
Route::get('suma/{id}',[AgregarController::class,'create'])->name('suma.create');
Route::resource('zafrero',ZafreroController::class);
Route::resource('produccion',ProduccioneController::class);
Route::resource('anticipo',AnticipoController::class);
Route::resource('agregar',AgregarController::class);
Route::resource('kardex',StockController::class);
Route::resource('mirakardex',KardexController::class);
Route::get('vaciar',[CarritoController::class,'update'])->name('vaciar.update');