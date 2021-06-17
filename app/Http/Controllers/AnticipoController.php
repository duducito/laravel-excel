<?php

namespace App\Http\Controllers;

use App\Models\anticipo;
use Illuminate\Http\Request;
use DB;
class AnticipoController extends Controller
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
        return view('inicio.anticipos',compact('msj','contratista'));
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
        
        $anticipo=new anticipo;
                if(is_numeric($request->ci))
                   {
                    $array = explode("--", $request->ciC);
                    $anticipo->ciz=$request->ci;
                    $anticipo->ciC=$array[0];
                    }else
                    {
                        $msj='dato de CI es numerico';
                      $contratista=DB::select('select * from contratistas');                                                 return view('inicio.anticipos',compact('msj','contratista')); 
                    }
                    
        $anticipo->anticipo=$request->montoanti;
        $anticipo->detalle=$request->detalle;
        $anticipo->fecha=$request->fecha;
        $anticipo->descripcion=$request->descripcion;
        
        $anticipo->save();
        $msj='Anticipo Registrado Correctamente';
        $contratista=DB::select('select * from contratistas');
        return view('inicio.anticipos',compact('msj','contratista'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anticipo  $anticipo
     * @return \Illuminate\Http\Response
     */
    public function show(anticipo $anticipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anticipo  $anticipo
     * @return \Illuminate\Http\Response
     */
    public function edit(anticipo $anticipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anticipo  $anticipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anticipo $anticipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anticipo  $anticipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(anticipo $anticipo)
    {
        //
    }
}
