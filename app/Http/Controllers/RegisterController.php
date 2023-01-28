<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        error_log("INI Adalah Error"); 
        error_log($request->collect());

        $validatedData = $request->validate([
            "username" => 'required | min:5 | unique:users',
            'email' => 'required | email:dns',
            'password'=>'required | min:6 | alpha_num',
        ]);

        error_log("Success Validation Data "); 

         $validatedData['role'] = 'user';
         $validatedData['password'] = Hash::make($validatedData['password']);
         User::create($validatedData);
        // $request->session()->flash('success', 'Registration Succesfull ! Please login');
         return redirect('/login')->with('success', 'Registration Succesfull ! Please login');
    }
}
