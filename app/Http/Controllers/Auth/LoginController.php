<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Laravel\Socialite\Facades\Socialite as Socialite;

use App\User;

class LoginController extends Controller
{

    public function possibleLogin()
    {

      return view('login');

    }

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
 
           return redirect()->action('EventsController@loggedindex', compact('user'));


 
       }else{
 
        // insert data to the database creating a new user
        $user = new User;

        $user->name = $userSocial->getName();
        $user->email = $userSocial->getEmail();
        $user->profile_pic = $userSocial->getAvatar();
        $user->google_id = $userSocial->getId();
        $user->admin = false;
        

        $user->save();

        \Auth::login($user);
 
        return redirect()->action('EventsController@loggedindex', compact('user')); 

       }
 
   }
}


