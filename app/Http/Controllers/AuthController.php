<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function indexLogin(){
        return view('login');
    }

    public function login(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $rememberMe = $request->has('remember_me') ? true : false;

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials, $rememberMe)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.index');
        }

        return redirect()->back()->with('unauthorized', 'Username or password is wrong');
	}

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function updateProfile(){
        return view('dashboard.admin.change-password');
    }

    public function changePassword(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        if (!Hash::check($request->current_password, $request->user()->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The provided current password is incorrect.'])->withInput();
        }
        $request->user()->update([
            'password' => bcrypt($request->new_password)
        ]);
        return redirect()->back()->with('success', 'New password has been updated successfully.');
    }
}
