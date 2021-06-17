<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicio extends Controller
{
     public function __invoke()
    {
        $msj='';
        return view('inicio.login',compact('msj'));
    }
}
