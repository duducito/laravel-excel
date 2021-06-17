<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   
    public function index(Request $request)
    {
        //VERIFICAR SI USUARIO Y CONTRASEÑA EXISTEN

        $login= DB::select('select * from logins where usuario="'.$request->name.'" and password="'.$request->pass.'"');
        
        if($login!=null && $login[0]->rol=='ADMIN')
        {
            return view('principal'); 
        }
        else
        {
            
            if($login!=null && $login[0]->rol!='ADMIN')
            {
                $msj='Binvenido Usuario Vendedor..';
                return view('principal2',compact('msj'));
            }
            else
            {
                $msj='No tienes permisos para ingresar al sistema..';
                return view('inicio.login',compact('msj'));
            }
            
        }

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $msj='';
        return view('inicio.login2',compact('msj')); // aqui para crear usuarios
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $existe= DB::select('select * from logins where usuario="'.$request->name.'"');
        if($existe==null)
        {
                $login=new login;
                if($request->name!="" && $request->pass!="")
                {

                    $login->usuario=$request->name;
                    $login->password=$request->pass;
                    $login->email=$request->email;
                    $login->rol=$request->rol;
                    $login->save();
                    $msj='Usuario registrado correctamente....';
                return view('inicio.login2',compact('msj'));
                }
                else
                {

                    $msj='Los campos Usuario o passwor estan vacios, REVISE...';
                return view('inicio.login2',compact('msj'));
                }
        }else
        {
           $msj='El Usuario ya existe...tiene rol de '.$existe[0]->rol;
                return view('inicio.login2',compact('msj'));  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(login $login)
    {
        //
    }
}
