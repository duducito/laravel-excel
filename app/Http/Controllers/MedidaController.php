<?php

namespace App\Http\Controllers;

use App\Models\medida;
use Illuminate\Http\Request;
use DB;
class MedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $medida= DB::select('select * from medidas');
       $msj="";
       //dd($medida);
       return view('inicio.medida',compact('medida','msj'));
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
      /*$table->text('codigoM');
            $table->text('mayor');
            $table->text('menor');*/

            $buscarCodigo=DB::select('select codigoM from medidas where codigoM="'.$request->codigoM.'"');
            $codigos= DB::select('select codigoM from medidas where codigoM="'.$request->codigoM.'"');
            $medida=DB::select('select * from medidas');
            if($buscarCodigo==null)
            {        
                //dd(is_numeric($request->mayor));
                if($request->mayor!="" and $request->menor!="")
                {
                $medida=new medida;
                $medida->codigoM=strtoupper($request->codigoM);
                $medida->mayor=strtoupper($request->mayor);
                $medida->menor=strtoupper($request->menor);
                $medida->unidMayor=$request->unimayor;
                $medida->save();
                $codigos= DB::select('select codigoP from products');
                $msj='Se Registro Correctamente';
                return view('inicio.medida',compact('codigos','msj','medida'));
                }else
                    {
                    $codigos= DB::select('select codigoP from products');
                    $msj='Hay datos vacios'; 
                    return view('inicio.medida',compact('codigos','msj','medida'));   
                    }
                }
                else
                {
                    $codigos= DB::select('select codigoP from products');
                    $msj='Codigo de medida ya existe'; 
                    return view('inicio.medida',compact('codigos','msj','medida'));
                }
            
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medida  $medida
     * @return \Illuminate\Http\Response
     */
    public function show(medida $medida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medida  $medida
     * @return \Illuminate\Http\Response
     */
    public function edit(medida $medida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medida  $medida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medida $medida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medida  $medida
     * @return \Illuminate\Http\Response
     */
    public function destroy(medida $medida,$id)
    {
        DB::table('medidas')->where('id', '=',$id)->delete();
        $msj='Producto Eliminado Correctamente...';
         return redirect()->route("medida.index");
    }
}
