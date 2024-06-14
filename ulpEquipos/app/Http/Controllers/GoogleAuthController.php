<?php

namespace App\Http\Controllers;

use Auth;
use Socialite;
use App\Models\User;
use Illuminate\Http\Request;

class GoogleAuthController extends Controller
{
    public function redirect(){
        return \Socialite::driver('google')->redirect();

    }

    public function callbackGoogle(){

        try{

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if(!$finduser){

                $newUser = User::create([

                    'name' => $user->name,

                    'email' => $user->email,

                    'google_id'=> $user->id,



                ]);

                Auth::login($newUser);

                return redirect()->intended('principal');

            }
            else{

                \Auth::login($finduser);

                return redirect()->intended('principal');
            }

        }catch(\Exception $e){
            return redirect('/login');
        }

    }
}
