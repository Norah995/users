<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function getAll(){
    	$users=User::all();
    	return view('lista', compact('users'));
    }
}
