<?php

namespace App\Http\Controllers;

use App\Models\zafrero;
use Illuminate\Http\Request;
use DB;
class ZafreroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msj='';
        $listazafre=DB::select('select * from zafreros');
        $contratista=DB::select('select * from contratistas');
        return view('inicio.zafreros',compact('msj','listazafre','contratista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $listazafre=DB::select('select * from zafreros');
        
         $existe= DB::select('select * from zafreros where ciZ="'.$request->ci.'"');
         if($existe==null)
         {
                 $zafrero=new zafrero;
               if(is_numeric($request->ci))
               {
                $array = explode("--", $request->ciC);
                $zafrero->ciz=$request->ci;
                $zafrero->ciC=$array[0];
                }else
                {
                    $msj='dato de CI es numerico';
                  $contratista=DB::select('select * from contratistas');
        return view('inicio.zafreros',compact('msj','listazafre','contratista')); 
                }
                    
                    $zafrero->nombreZ=$request->nombre;
                    
                if(is_numeric($request->telefono))
                   {
                    $zafrero->telefono=$request->telefono;
                }
                else
                {
                    $msj='dato de TEL es numerico';
                  $contratista=DB::select('select * from contratistas');
        return view('inicio.zafreros',compact('msj','listazafre','contratista')); 
                }
                
                 $zafrero->direccion=$request->direccion;
                  $zafrero->fecha=$request->fecha;
                  $zafrero->comunidad=$request->comunidad;
                  $zafrero->save();  
                  $msj='Registro Ingresado Correctamente';
                  $contratista=DB::select('select * from contratistas');
        return view('inicio.zafreros',compact('msj','listazafre','contratista'));  
                
            }
            else
            {
                $msj='El zafrero ya ha sido registrado...';
                  $contratista=DB::select('select * from contratistas');
        return view('inicio.zafreros',compact('msj','listazafre','contratista')); 
            }
        }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\zafrero  $zafrero
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\zafrero  $zafrero
     * @return \Illuminate\Http\Response
     */
    public function edit(zafrero $zafrero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\zafrero  $zafrero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, zafrero $zafrero)
    {
        $dato= DB::select('select * from zafreros where ciZ="'.$request->menu.'"');
        $compras= DB::select('select * from compras where ciZ="'.$request->menu.'"');
         $produccion= DB::select('select * from producciones where codZ="'.$request->menu.'"');
         $anticipos =DB::select('select * from anticipos where ciZ="'.$request->menu.'"');
       
        return view('kardex.kardexUnZafrero',compact('dato','compras','produccion','anticipos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\zafrero  $zafrero
     * @return \Illuminate\Http\Response
     */
    public function destroy(zafrero $zafrero)
    {
        //
    }
}
