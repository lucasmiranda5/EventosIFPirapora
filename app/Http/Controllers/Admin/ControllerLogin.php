<?php

namespace eventoIFPirapora\Http\Controllers\Admin;

use eventoIFPirapora\Http\Requests;
use eventoIFPirapora\Usuarios;
use eventoIFPirapora\Http\Controllers\Controller;
use Request;
use Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class ControllerLogin extends Controller
{
    public function login(){
		$campos = Request::all();
		if($campos['email'] != '' and $campos['senha'] != ''){
			#$remember = (empty($campos['lembrar']) ? false : true);
			if (Auth::attempt(['email' => $campos['email'], 'password' => $campos['senha'], 'role' => 'admin'])) {			 
				return redirect('/admin');
			}else{
				$erro = "Login ou Senha não existe";
				return view('login')->with('erro',$erro);
			}
		}
	}
   public function sair(){
   		 Auth::logout();
   		 return redirect('/login');
   }
}
