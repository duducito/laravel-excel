<?php

namespace App\Http\Controllers;

use App\Models\produccione;
use Illuminate\Http\Request;
use DB;
class ProduccioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $msj='';
       $contratista=DB::select('select * from contratistas');
        return view('inicio.produccionesZafrero',compact('msj','contratista'));
      
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
        
        $produccione=new Produccione;
        if(is_numeric($request->ci))
               {
                $array = explode("--", $request->ciC);
               
                $produccione->codZ=$request->ci;
                $produccione->ciC=$request->ciC;
                }else
                {
                    $msj='dato de CI es numerico';
                  $contratista=DB::select('select * from contratistas');
            return view('inicio.produccionesZafrero',compact('msj','contratista')); 
                }
           $produccione->produccion=$request->produccion;
             $produccione->preciocaja=$request->caja;
             $produccione->valorado=$request->produccion*$request->caja;
             $produccione->fecha=$request->fecha;
             $produccione->preciocaja=$request->caja;
             $produccione->save();
       $msj='Produccion ingresada Satisfactoriamente';
        $contratista=DB::select('select * from contratistas');
        return view('inicio.produccionesZafrero',compact('msj','contratista'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produccione  $produccione
     * @return \Illuminate\Http\Response
     */
    public function show(produccione $produccione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produccione  $produccione
     * @return \Illuminate\Http\Response
     */
    public function edit(produccione $produccione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produccione  $produccione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produccione $produccione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produccione  $produccione
     * @return \Illuminate\Http\Response
     */
    public function destroy(produccione $produccione)
    {
        //
    }
}
