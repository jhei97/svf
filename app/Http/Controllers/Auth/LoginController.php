<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
   
   public function login()
   {
        $credentials = $this->validate(request(),[
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            return 'welcome';
        }
        
        return 'error en la autenticacion';
            
   }

   public function showLoginForm()
   {
        return view('auth.login');
   }

}
