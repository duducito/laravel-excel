<?php

namespace App\Http\Controllers;

use App\Models\compra;
use Illuminate\Http\Request;
use DB;
class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        ciZ nombre  codigoP precio  medida  cantidad    pagoAl  fecha
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$codP)
    {
        
        //return 'estoy en store de compras'.$p;

       
        $canti=DB::select('select * from carritos '); //SELECCIONO TODO DE CARRITO

        $msj='Venta realizada, ahora carro vacio....';

        foreach($canti as $ca)
        {
            $st=DB::select('select stock from stocks where codP="'.$ca->codigoP.'"');
          
           $verifica_medida=DB::select('select * from medidas where codigoM="'.$ca->codigoM.'" and mayor="'.$ca->medida.'"');
           $vpp= DB::select('select * from products where codigoP="'.$ca->codigoP.'"');
          
           if($verifica_medida!=null)
           {
                
               
              // dd($vpp);// llamo para veriicar precio  dd($vpp);
              
                $res=$st[0]->stock-($ca->cantidad*$verifica_medida[0]->unidMayor);
               
                if($ca->precio!=$vpp[0]->precio_mayor)
                {
                     $codigos= DB::select('select p.ciP,m.codigoM,c.codigoC from proves as p,categorias as c,medidas as m');
       // dd($codigos);
                     $productos= DB::select('select * from products');
                    $lista=  DB::select('select p.*,s.stock from products as p,stocks as s where p.codigoP=s.codP');   
                    $msj='la venta no se realizo porque uno de los  PRECIO estaba mal';
                    return view('listas.listadoProductos',compact('codigos','msj','lista'));
      
                }

           }else
           {
            $res=$st[0]->stock-$ca->cantidad;
           }
            
           
            
            if($res<0)
            {
                $res=0;
            }

           
            DB::table('stocks')
        ->where('codP', $ca->codigoP)  // find your user by their email
        
        ->update(['stock' => $res]);
        if($res<5)
        {
             $msj='Venta realizada, ahora carro vacio..controle sus productos tiene menos de 5 en algunos productos';
        }    
       }
         $c=DB::select('insert into compras select * from carritos ');
        DB::table('carritos')->delete();

      
        /* para volver a la lista de productos, ya con la venta realizada y vaciado el carro*/

         
        
        $codigos= DB::select('select p.ciP,m.codigoM,c.codigoC from proves as p,categorias as c,medidas as m');
       // dd($codigos);
        $productos= DB::select('select * from products');
          $lista=DB::select('select p.*,s.stock from products as p,stocks as s where p.codigoP=s.codP');   
        if($productos==null)
        {
            //dd($productos==null);
        return view('listas.listadoProductos',compact('codigos','msj','lista'));
        }
        else{
        return view('listas.listadoProductos',compact('productos','lista','msj'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(compra $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, compra $compra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(compra $compra)
    {
        //
    }
}
