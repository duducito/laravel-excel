<?php

namespace App\Http\Controllers;

use App\Models\vender;
use App\Models\product;
use Illuminate\Http\Request;
use DB;
Use Session;
Use Redirect;
use App\Models\carrito;
class VenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msj="";
        $codigos= DB::select('select p.ciP,m.codigoM,c.codigoC from proves as p,categorias as c,medidas as m');
       // dd($codigos);
        
        $productos= DB::select('select * from products');
        //$stock= DB::select('select * from stocks');
          $lista= DB::select('select p.*,s.stock from products as p,stocks as s where p.codigoP=s.codP');
          
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
    public function store(Request $request)
    {
        /*CI-ZAFRE
        NOMBRE</
        CODIGO</
        PRECIO</
        MEDIDA</
        CANTIDAD
        PAGO AL:*/
       // $pro= DB::select('select * from products where codigoP="'.$request->codigoP.'"');
       
        
        // dd($desc_item);
        $medi=DB::select('select * from medidas where codigoM="'.$request->codigoM.'"');
        
    $cp= DB::select('select codigoP from carritos where codigoP="'.$request->codigo.'"');
     //dd($cp);
       $venta=0;
       if($request->medida==$medi[0]->mayor)
       {
        $veficastock=DB::select('select * from stocks where codP="'.$request->codigo.'" and stock<="'.$request->cantidad*$medi[0]->unidMayor.'"');
       }
       else
       {
        $veficastock=DB::select('select * from stocks where codP="'.$request->codigo.'" and stock<="'.$request->cantidad.'"');
       }
       
        if($cp==null && $veficastock==null)
        {
            $cv=DB::select('select max(codigoV) as v from compras ');
               
                if($cv==null)
                {
                    
                  $venta=1;  
                }
                else
                {
                   // dd($cv[0]->v);
                    $venta=$cv[0]->v+1;

                }
                
               
               
                
                $car=new carrito;
                $car->codigoV=$venta;
                $car->codigoM=strtoupper($request->codigoM);
                $car->codigoC=strtoupper($request->codigoC);
                 if($request->ciZ==null)
                {
                   $request->ciZ='N-CI';
                   $car->ciZ=strtoupper($request->ciZ); 
                }
                
                $car->nombre=strtoupper($request->nombre);
                $car->codigoP=strtoupper($request->codigo);
                $car->precio=strtoupper($request->precio);
                $car->medida=strtoupper($request->medida);
                $car->cantidad=$request->cantidad;
                if($request->ciZ=='N-CI' && strtoupper($request->pago)=='CONTADO')
                {
                 $car->pagoAl=strtoupper($request->pago);   
                }
                else
                {
                    if(strtoupper($request->pago)=='CREDITO' && $request->ciZ=='N-CI')
                    {
                        $msj='si el pago es al CREDITO, DEBE HABER UN CI DEL ZAFRERO, INGRESE NUEVAMENTE PRODUCTO AL CARRO';
                        $codigos= DB::select('select p.ciP,m.codigoM,c.codigoC from proves as p,categorias as c,medidas as m');
                
                        $lista= DB::select('select p.*,s.stock from products as p,stocks as s where p.codigoP=s.codP');
                     return view('listas.listadoProductos',compact('codigos','msj','lista'));  
                    }


                    
                }
                $car->pagoAl=$request->pago;
                $zafre=DB::select('select * from zafreros where ciZ="'.$request->ciZ.'"');
                if($zafre==null && $request->pago=="CREDITO")
                {
                  $msj='No existe el zafrero en la base de datos, ingreselo por favor.....';
                        $codigos= DB::select('select p.ciP,m.codigoM,c.codigoC from proves as p,categorias ==""as c,medidas as m');
                
                        $lista= DB::select('select p.*,s.stock from products as p,stocks as s where p.codigoP=s.codP');
                     return view('listas.listadoProductos',compact('codigos','msj','lista'));   
                }
                $car->ciZ=$request->ciZ;
                $car->fecha=date('Y-m-d');
                $car->save();

                $msj="Producto Agregado al Carro";
                $codigos= DB::select('select p.ciP,m.codigoM,c.codigoC from proves as p,categorias as c,medidas as m');
                
              $lista= DB::select('select p.*,s.stock from products as p,stocks as s where p.codigoP=s.codP');
                return view('listas.listadoProductos',compact('codigos','msj','lista'));
    }
    else
    {
       $msj="El carro Ya tiene Ese Producto o la cantidad es mayor a la existente"; 
       $codigos= DB::select('select p.ciP,m.codigoM,c.codigoC from proves as p,categorias as c,medidas as m');
                
               $lista= DB::select('select p.*,s.stock from products as p,stocks as s where p.codigoP=s.codP');
                return view('listas.listadoProductos',compact('codigos','msj','lista'));
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vender  $vender
     * @return \Illuminate\Http\Response
     */
    public function show(vender $vender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vender  $vender
     * @return \Illuminate\Http\Response
     */
    public function edit(vender $vender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vender  $vender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vender $vender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vender  $vender
     * @return \Illuminate\Http\Response
     */
    public function destroy(vender $vender)
    {
        //
    }
}
