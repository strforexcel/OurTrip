<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use function PHPUnit\Framework\returnSelf;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'Login',
            'active' => "login"
        ]);
    }

    public function authenticate(Request $request){
        error_log("Start Login");
        error_log($request->collect());
        $credentials =  $request->validate([
            'username' => 'required',
            'password'=> 'required'
        ]);
        error_log("After validate");
        $credentials= $request->only('username','password');
        if(Auth::attempt($credentials, $request->input('remember')!=null? true : false)){
            error_log("auth is acceptable");
            return redirect('/');
        }
        return back()-> with('loginError','Login Failed !');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }

}
