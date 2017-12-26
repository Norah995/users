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
//aca
    public function index()
    {
        return \View::make('form');
    }
//hasta aca
    /*public function re(){
    	return "hola";
    	//return $request->all();
    }*/
    public function re(Request $request){
    	

    	$user=new User;

        $va= \Validator::make($request->all(),[
            'nombres' => 'required',
            'apellidos' => 'required',
            'sexo' => 'required|in:Femenino,Masculino',
            'email' => 'required|email|unique',
            'contraseña' => 'required'
        ]);
        if ($va->fails())
        {
            return Redirect()::back()->withInput()->withErrors($va->getErrors());
        }
        /*$nombres = $request->nombres;
        $apellidos = $request->apellidos;
        $sexo = $request->sexo;         
        $email=$request->email;
        $contraseña=bcrypt($request->contraseña);

    	$user->nombre=$nombres;
    	$user->apellido=$apellidos;
    	$user->sexo=$sexo;
    	$user->email=$email;
    	$user->contraseña=$contraseña;
    	$user->save();*/
        $user->create($request->all());
        $users = Client::all();
        return redirect('lista', compact('users'));
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

    public function edita($id){
       $user=User::where('id', $id) ->first();

       // return 'hola';
       return view('modifica', ['user'=>$user]);
    }

    public function modifica(Request $request, $id){
                
        $nnombre=$request->nombres;
        $napellido=$request->apellidos;
        $nsexo = $request->sexo;         
        $nemail=$request->email;
        //$request->validate([
        //    'contraseña' => ''
        //]);
        $ncontraseña=$request->contraseña;

        $user=User::find($id);
        $user->nombre=$nnombre;
        $user->apellido=$napellido;
        $user->sexo=$nsexo;
        $user->email=$nemail;
        $user->contraseña=$ncontraseña;

        $user->save();
        //return 'ya';
        return redirect('lista');
    }
}
