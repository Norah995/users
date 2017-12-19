<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registro()
    {
    	return view('index');
    }

    public function lista()
    {
    	return view('lista');
    }
    /*public function re(){
    	return "hola";
    	//return $request->all();
    }*/
    public function re(Request $request){
    	$nombres = $request->nombres;
    	$apellidos = $request->apellidos;
    	$sexo = $request->sexo;

    	return $nombres.' '.$apellidos.' '.$sexo ;
    	//return 'hola';
    }



}
