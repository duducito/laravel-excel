<?php

namespace App\Http\Controllers;

use App\Models\ingreProducto;
use Illuminate\Http\Request;
use DB;

class IngreProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //voy a utilizar este controlador ´para impresion de las compras
        
        $proforma= DB::select('select * from carritos'); 
        $datos=DB::select('select * from zafreros where ciZ="'.$proforma[0]->ciZ.'"');
        return view('kardex.imprenota',compact('proforma','datos'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingreProducto  $ingreProducto
     * @return \Illuminate\Http\Response
     */
    public function show(ingreProducto $ingreProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingreProducto  $ingreProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(ingreProducto $ingreProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ingreProducto  $ingreProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ingreProducto $ingreProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingreProducto  $ingreProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(ingreProducto $ingreProducto)
    {
        //
    }
}
