<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite as FacadesSocialite;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return FacadesSocialite::driver('google')->redirect();
    }
    public function handleGoogleCallback(){
        try{
            $user = FacadesSocialite::driver('google')->user();
            // dd($user);
            $finduser = User::where('google_id',$user->getId())->first();
            if ($finduser){
                Auth::login($finduser);
                return redirect('/');
            }else{
                $newUser = User::create([
                    'username' => $user->getName(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'password' => bcrypt('12345678'),

                ]);
                Auth::login($newUser);
                return redirect('/');
            }
        } catch (\Throwable $th) {

        }
    }

    //
}
