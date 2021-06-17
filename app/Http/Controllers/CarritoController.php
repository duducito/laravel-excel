<?php

namespace App\Http\Controllers;

use App\Models\carrito;
use Illuminate\Http\Request;
use DB;
use RedirectTo;
class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'estoy en index de CarritoController';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        
     
      $msj="";
      if(is_numeric($id))
      {
        $pro= DB::select('select * from products where id="'.$id.'"');
      
      $medida= DB::select('select * from medidas where codigoM="'.$pro[0]->codigoM.'"');
      //dd($medida);
       return view('vender',compact('medida','pro','msj'));
     }
       else{
        return redirect('/');
       }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(carrito $carrito)
    {
        $listacarro= DB::select('select * from carritos');
        $msj="";
        $codigos= DB::select('select p.ciP,m.codigoM,c.codigoC from proves as p,categorias as c,medidas as m');
       // dd($codigos);
        $productos= DB::select('select * from products');
          $lista= DB::select('select p.*,s.stock from products as p,stocks as s where p.codigoP=s.codP');
        if($listacarro==null)
        {
            $msj="El carro esta vacio, no tiene ningun producto...";
            return view('listas.listadoProductos',compact('codigos','msj','lista'));
        }
        else
        {
            $lista= DB::select('select * from carritos');
        return view('listas.listaCarrito',compact('lista','msj'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carrito $carrito)
    {
        DB::table('carritos')->delete();
        $medi= DB::select('select codigoM from medidas ');

        $cate=DB::select('select codigoC from categorias ');
        $msj="TODOS LOS ELEMENTOS DEL CARRO HAN SIDO VACIADOS..";
        $lista= DB::select('select * from products');
      
        return view('listas.lista_productos',compact('medi','cate','msj','lista'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(carrito $carrito,$id)
    {
        DB::table('carritos')->where('id', '=',$id)->delete();
        
        return redirect()->route("muestraCarro.show");
    }
}
