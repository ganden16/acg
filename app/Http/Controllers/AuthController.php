<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function indexLogin(){
        return view('login');
    }

    public function login(Request $request){
		  $credentials = $request->only('username', 'password');
		  if (Auth::attempt($credentials)) {
				$request->session()->regenerate();
				return redirect()->intended('dashboard');
		  }
		  return back()->withErrors([
				'username' => 'Username atau password salah',
		  ]);
	 }
}