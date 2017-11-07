<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Laravel\Socialite\Facades\Socialite as Socialite;

use App\User;

class LoginController extends Controller
{
    public function socialLogin($social)
 
   {
 
       return Socialite::driver($social)->redirect();
 
   }
 
   /**
 
    * Obtain the user information from Social Logged in.
 
    * @param $social
 
    * @return Response
 
    */
 
   public function handleProviderCallback($social)
 
   {
 
       $userSocial = Socialite::driver($social)->user();
 
       $user = User::where(['email' => $userSocial->getEmail()])->first();
 
       if($user){
 
           \Auth::login($user);
 
           return redirect()->action('EventsController@index');
 
       }else{
 
        // insert data to the database creating a new user
        $newuser = new User;

        $newuser->name = $userSocial->getName();
        $newuser->email = $userSocial->getEmail();
        $newuser->profile_pic = $userSocial->getAvatar();
        $newuser->google_id = $userSocial->getId();
        $newuser->admin = false;
        

        $newuser->save();

        \Auth::login($newuser);
 
        return redirect()->action('EventsController@index');

       }
 
   }
}
