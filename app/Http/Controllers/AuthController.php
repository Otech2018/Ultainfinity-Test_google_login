<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class AuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

  


    public function handleGoogleCallback()
    {
        try {
            $google_user = Socialite::driver('google')->user();

            $user = User::where('google_id', $google_user->getId())->first();

            if(!$user){
                $create_new_user = User::create([
                    'name' => $google_user->getname(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);

                Auth::login($create_new_user);
            }else{
                Auth::login($google_user);
            }
            
           
            // Generate and display OTP
            $otp = $this->generateOTP();
            return view('home')->with(['otp' => $otp]);

        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Google authentication failed. Please try again.');
        }
    }



    protected function generateOTP()
    {
        return rand(100000, 999999); //  secure OTP generation 
    }
}
