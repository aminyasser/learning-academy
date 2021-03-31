<?php

namespace App\Http\Controllers\admin;

use App\Admin;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    public function login() {
    
        return view('admin.auth.login');
    }
    public function dologin(Request $req) {
      
        $data = $req->validate([

            'email' => 'required|email|max:191' ,
            'password' => 'required|string' ,

        ]);

        if ( ! Auth::guard('admin')->attempt( ['email' => $data['email']   , 'password' => $data['password'] ])  ){
            return back() ;
        } 
        else{

            return redirect( route('admin.home') ) ;

        }
     
    }
    
    public function logout(){

        Auth::guard('admin')->logout() ;
        return redirect( route('admin.login') ) ;

    }

    public function redirectToProviderGit()
    {
        return Socialite::driver('github')->redirect();
    }

    
    public function handleProviderCallbackGit()
    {
        $user = Socialite::driver('github')->user();
        // dd($user);
        $email = $user->email;

        $db_user = Admin::where('email' , $email)->first();

        if($db_user == null) {
            $reg_user = Admin::create( [
                'username' => $user->nickname , 
                'email' => $user->email , 
                'password' => Hash::make('123456') , 
                'oauth_token' => $user->token , 
                 
            ]);
            Auth::guard('admin')->login($reg_user);

        } else Auth::guard('admin')->login($db_user);
          
         return redirect(route('admin.home'));
  
    }






}
