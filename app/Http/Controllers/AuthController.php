<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Cache;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function login(Request $request){
       

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $request->username)->first(); 
       
        if(!$user){
            return back()->with('error', 'El usuario no existe');
        }

        switch ($user->id_rol) {
            case "1":
                $guard= 'administrador';
                break;            
            case "2":
                $guard= 'encargado';
                break;            
            default:
                $guard= 'usuario';    
            }   

        $credentials = $request->only('username', 'password');

        
        if (Auth::guard($guard)->attempt($credentials)){ 
            Cache::put('persona', $user->id_persona);    //agrega los datos del usario a la cache     
                
            return redirect()->route('i.rol')->with(compact('guard'));

        }else{
               
            return back()->with('error', 'El password es incorrecto');
        }
        
    }

    public function logout(){
        Auth::guard('administrador')->logout();
        Auth::guard('encargado')->logout();
        Auth::guard('usuario')->logout();
      
        return redirect('/');
    }
}
