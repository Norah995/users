<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function registro()
    {
    	return view('index');
    }

    public function lista()
    {
    	$users=User::all();
    	return view('lista', compact('users'));
    }
    /*public function re(){
    	return "hola";
    	//return $request->all();
    }*/
    public function re(Request $request){
    	$nombres = $request->nombres;
    	$apellidos = $request->apellidos;
    	
    		$sexo = $request->sexo;	
    	
    	
    	$email=$request->email;
    	$contraseña=bcrypt($request->contraseña);

    	$user=new User;
    	$user->nombre=$nombres;
    	$user->apellido=$apellidos;
    	$user->sexo=$sexo;
    	$user->email=$email;
    	$user->contraseña=$contraseña;
    	$user->save();
        return redirect('lista');
    	//return $nombres.' '.$apellidos.' '.$sexo.' '.$email.' '.$contraseña ;
    	//return 'hola';
    }

    public function elimina($id){
        //User::destroy($id);
        //return view('');
        $user=User::find($id);
        $user->delete();
        return redirect('lista');
    }



}
