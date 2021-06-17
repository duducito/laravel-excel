<?php

namespace App\Http\Controllers;

use App\Models\Reportes;
use App\Models\elementos;
use Illuminate\Http\Request;
use DB;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reportes.informes');
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
       //dd($request);
        switch($request->a)
        {
        case 1:
           
              
                    if($request->fechaInicial<>"" and $request->fechaFinal<>"")
                    {
                            $con="SELECT * FROM compras where pagoAl='CREDITO' and fecha>='".$request->fechaInicial."' and fecha<='".$request->fechaFinal."'";
                        return view('reportes.lotesvendidos',compact('con','request'));
                        
                    }
                    else
                    {
                    $con="SELECT * FROM compras where pagoAl='CREDITO'";

                        return view('reportes.lotesvendidos',compact('con','request'));
                    
                    }
                
           break;
       
        case 2:
       
              
                         if($request->fechaInicial<>"" and $request->fechaFinal<>"")
                             {
                            $con="SELECT * FROM compras where pagoAl='CONTADO' and fecha>='".$request->fechaInicial."' and fecha<='".$request->fechaFinal."'";
                        return view('reportes.lotesvendidos',compact('con','request'));
                        
                    }
                    else
                    {
                    $con="SELECT * FROM compras where pagoAl='CONTADO'";

                        return view('reportes.lotesvendidos',compact('con','request'));
                    
                    }
                    
            
          
            break;
            case 3:
           
              
                         if($request->fechaInicial<>"" and $request->fechaFinal<>"")
                             {

                                $con="SELECT * FROM producciones where fecha>='".$request->fechaInicial."' and fecha<='".$request->fechaFinal."'";
                        return view('reportes.produccion',compact('con','request'));     
                             }
                        else
                        {
                          $con="SELECT * FROM producciones"; 
                          return view('reportes.produccion',compact('con','request'));   
                        }
                    
            break;
        case 4:
            

            if($request->fechaInicial<>"" and $request->fechaFinal<>"")
                             {

                                $con="SELECT * FROM anticipos where fecha>='".$request->fechaInicial."' and fecha<='".$request->fechaFinal."'";
                        return view('reportes.anticipos',compact('con','request'));     
                             }
                        else
                        {
                          $con="SELECT * FROM anticipos"; 
                          return view('reportes.anticipos',compact('con','request'));   
                        }
            break;
        
         case 5:
         

                    $zafrero=DB::select('select * from zafreros'); 
                          
                          return view('inicio.eligezafrero',compact('zafrero'));   
                       
            break;

             case 6:
            

            if($request->fechaInicial<>"" and $request->fechaFinal<>"")
                             {

                               
                              

                            $con=" select *, sum(e.cantidad) as cantenv,p.precio_mayor,p.Pproductok FROM elementos as e,products as p where e.fecha>='".$request->cafechaInicial."' and e.fecha<='".$request->fechaFinal."' and p.codigoP=e.codigoP  group by e.codigoP";
                                return view('kardex.kardexcontable',compact('con','request'));   


                             }
                        else
                        {
                            $stock="select *, sum(s.stock) as cantst FROM stocks as s,products as p where p.codigoP=s.codP group by s.codP";
                                                                                                                                     
                            $con="select sum(e.cantidad) as cantenv,e.codigoP,e.nombre,p.precio_mayor,P.Pproducto FROM elementos as e,products as p where p.codigoP=e.codigoP group by e.codigoP";
                           
                                return view('kardex.kardexcontable',compact('con','request','stock'));    
                        }
            break;
            case 7:
         
                    if($request->fechaInicial<>"" and $request->fechaFinal<>"")
                {

                    $consumo=DB::select('select compras.codigoV,compras.codigoP,compras.ciZ,zafreros.nombreZ,compras.codigoM,compras.codigoC,compras.nombre,compras.precio,compras.medida,compras.cantidad,compras.pagoAl,compras.fecha,contratistas.ciC,contratistas.nombreC from compras,zafreros,contratistas where>="'.$request->fechaInicial.'" and e.fecha<="'.$request->fechaFinal.'" and contratistas.ciC=zafreros.ciC and compras.ciZ=zafreros.ciZ '); 
                         //dd($consumo);
                            $msj='';
                          return view('kardex.kardexconsumocontratista',compact('consumo','msj'));
                    }else
                    {
                         $consumo=DB::select('select compras.codigoV,compras.codigoP,compras.ciZ,zafreros.nombreZ,compras.codigoM,compras.codigoC,compras.nombre,compras.precio,compras.medida,compras.cantidad,compras.pagoAl,compras.fecha,contratistas.ciC,contratistas.nombreC from compras,zafreros,contratistas where contratistas.ciC=zafreros.ciC and compras.ciZ=zafreros.ciZ '); 
                         //dd($consumo);
                            $msj='';
                          return view('kardex.kardexconsumocontratista',compact('consumo','msj'));
                    }
                       
            break;
             case 8:
         

                    $contratista=DB::select('select * from contratistas'); 
                          
                          return view('inicio.eligecontratista',compact('contratista'));   
                       
            break;

                    
   }     
   
}
    /**
     * Display the specified resource.
     *codigoV   codigoP ciZ codigoM codigoC nombre  precio  medida  cantidad    pagoAl  fecha

     * @param  \App\Models\Reportes  $reportes
     * @return \Illuminate\Http\Response
     */
    public function show(Reportes $reportes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reportes  $reportes
     * @return \Illuminate\Http\Response
     */
    public function edit(Reportes $reportes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reportes  $reportes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reportes $reportes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reportes  $reportes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reportes $reportes)
    {
        //
    }
}
