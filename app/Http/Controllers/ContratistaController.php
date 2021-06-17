<?php

namespace App\Http\Controllers;

use App\Models\contratista;
use Illuminate\Http\Request;
use DB;
class ContratistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $msj='';

       return view('inicio.contratista',compact('msj'));
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
       $listacontra=DB::select('select * from contratistas');
        
         $existe= DB::select('select * from contratistas where ciC="'.$request->ciC.'"');
         if($existe==null)
         {
                 $contratista=new contratista;
               if(is_numeric($request->ciC))
               {
                $contratista->ciC=$request->ciC;
                }else
                {
                    $msj='dato de CI es numerico';
                  return view('inicio.contratista',compact('msj','listacontra'));  
                }
                    
                    $contratista->nombreC=$request->nombreC;
                if(is_numeric($request->telefonoC))
                   {
                    $contratista->telefono=$request->telefonoC;
                }
                else
                {
                    $msj='dato de TEL es numerico';
                  return view('inicio.zafreros',compact('msj','listacontra'));  
                }
                
                 $contratista->direccion=$request->direccionC;
                  $contratista->fecha=$request->fechaC;
                  $contratista->centro=$request->centro;
                  $contratista->save();  
                  $msj='Registro Ingresado Correctamente';
                  return view('inicio.contratista',compact('msj','listacontra'));  
                
            }
            else
            {
                $msj='El contratista ya ha sido registrado...';
                  return view('inicio.contratista',compact('msj','listacontra')); 
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contratista  $contratista
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
     
      
       if($request->fechaInicial<>"" and $request->fechaFinal<>"")
        {
          $dato= DB::select('select * from contratistas where ciC="'.$request->menu.'"');
                $compras= DB::select('select * from compras,zafreros,contratistas where zafreros.ciZ=compras.ciZ and zafreros.ciC=contratistas.ciC and contratistas.ciC="'.$request->menu.'" and compras.fecha>"' .$request->fechaInicial.'" and compras.fecha<="'.$request->fechaFinal.'"');
        $produccion= DB::select('select * from producciones where ciC="'
            .$request->menu.'" and fecha>"' 
            .$request->fechaInicial.
            '" and fecha<="'
            .$request->fechaFinal.'"');
                 
                 $anticipos= DB::select('select * from anticipos where ciC="'.$request->menu.'" and fecha>"' .$request->fechaInicial.'" and fecha<="'.$request->fechaFinal.'"');
                //DD($produccion);
                
                return view('kardex.kardexuncontratista',compact('dato','compras','produccion','anticipos'));     
        }
        else
        {
            $dato= DB::select('select * from contratistas where ciC="'.$request->menu.'"');
                $compras= DB::select('select * from compras,zafreros,contratistas where zafreros.ciZ=compras.ciZ and zafreros.ciC=contratistas.ciC and contratistas.ciC="'.$request->menu.'"');
                 $produccion= DB::select('select * from producciones where ciC="'.$request->menu.'"');
                 $anticipos= DB::select('select * from anticipos where ciC="'.$request->menu.'"');
               
                
                return view('kardex.kardexuncontratista',compact('dato','compras','produccion','anticipos'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contratista  $contratista
     * @return \Illuminate\Http\Response
     */
    public function edit(contratista $contratista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contratista  $contratista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contratista $contratista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contratista  $contratista
     * @return \Illuminate\Http\Response
     */
    public function destroy(contratista $contratista)
    {
        //
    }
}
