<?php

namespace App\Http\Controllers;

use App\Models\agregar;
use Illuminate\Http\Request;
use App\Models\Almacen;
use DB;

class AgregarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $medi= DB::select('select codigoM from medidas ');
        $cate=DB::select('select codigoC from categorias ');
        $msj="";
        $lista= DB::select('select * from products');
      
        return view('listas.listaagregarproductos',compact('medi','cate','msj','lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
         $pro= DB::select('select * from products where id="'.$id.'"');
         if($pro!=null)
         {

         
                 $sto= DB::select('select * from stocks where codP="'.$pro[0]->codigoP.'"');
               
                //dd($pro);
                $agregaArticulo=DB::select('select * from almacens where codP="'.$pro[0]->codigoP.'"');
                $medida=DB::select('select * from medidas where codigoM="'.$pro[0]->codigoM.'"');
                if($agregaArticulo==null)
                {
                    $agrega=new Almacen; //introduce nuevos articulos al almacen
                      $sto= DB::select('select * from stocks where codP="'.$pro[0]->codigoP.'"');
                    $agrega->codM=$pro[0]->codigoM;
                   
                    $agrega->codP=$pro[0]->codigoP;
                    $agrega->codC=$pro[0]->codigoC;
                    $agrega->receptor='vendedor';   
                    $agrega->observacion='nada';
                    $agrega->nombreP=$pro[0]->nombre;
                     $agrega->cantStock=$sto[0]->stock;
                      $agrega->cantiAgregada='0';
                       $agrega->medidaMayor=$medida[0]->mayor;
                        $agrega->total='0';
                        $agrega->fecha=date('d-m-y');
                        $agrega->save();
                }
                else
                {
                    
                }
                $msj='El producto fue eliminado, si no edita presione Aceptar';
                DB::table('products')->where('id', '=',$id)->delete();
                return view('inicio.producto',compact('pro','msj'));
            }
            else
            {
                $msj='El producto fue eliminado... no existe';
               
                return view('principal',compact('pro','msj'));
            }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        dd($request);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\agregar  $agregar
     * @return \Illuminate\Http\Response
     */
    public function show(agregar $agregar)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\agregar  $agregar
     * @return \Illuminate\Http\Response
     */
    public function edit(agregar $agregar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\agregar  $agregar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agregar $agregar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\agregar  $agregar
     * @return \Illuminate\Http\Response
     */
    public function destroy(agregar $agregar)
    {
        //
    }
}
