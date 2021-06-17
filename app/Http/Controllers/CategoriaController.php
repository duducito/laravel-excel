<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;
use DB;
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msj="";
        $categoria= DB::select('select * from categorias');
        return view('inicio.categoria',compact('msj','categoria'));
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
        $categoria= DB::select('select * from categorias');
        $buscarCodigo= DB::select('select codigoC from categorias where codigoC="'.$request->codigoC.'"');
        if($buscarCodigo==null)
        {
            $cate=new categoria;
        $cate->codigoC=strtoupper($request->codigoC);
        $cate->nombre=strtoupper($request->nombre);
        $cate->save();
        $msj='Registro guardado correctamente';
         
         return view('inicio.categoria',compact('msj','categoria'));
        }
        else
        {
           $msj='La categoria ya existe...';
         
         return view('inicio.categoria',compact('msj','categoria')); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoria $categoria,$id)
    {
        DB::table('categorias')->where('id', '=',$id)->delete();
        $msj='Categoria Eliminado Correctamente...';

        return redirect()->route("categoria.index");
         
    }
}
