<?php

namespace App\Http\Controllers;

use App\Models\stock;
use Illuminate\Http\Request;
use DB;
class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        return view('elegir');
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
        $msj='';
        if($request->a=='1')
        {
        $compra= DB::select('select * from compras order by fecha ');
            
            return view('kardex.kardexVentas',compact('compra','msj'));
        }
        if($request->a=='2')
        {
            $compra= DB::select('select * from zafreros order by ciZ ');
            
            return view('kardex.kardeZ',compact('compra','msj'));
        }
        if($request->a=='3')
        {
            $compra= DB::select('select * from zafreros order by ciZ ');
            
            return view('inicio.eligezafrero',compact('compra'));
        
        }
        if($request->a=='4')
        {
            return '4';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(stock $stock)
    {
        //
    }
}
