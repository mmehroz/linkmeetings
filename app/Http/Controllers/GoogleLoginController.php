<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\User;
use App\Models\Repositories\UserRepository;
use Activation;
use Sentinel;
use Session;

class GoogleLoginController extends Controller
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user  = $user;
    }

  public function redirect($provider)
{
    return Socialite::driver($provider)->redirect();
}
 
public function callback($provider)
{
           
    $getInfo = Socialite::driver($provider)->user();
    $checkuser =  Sentinel::findByCredentials(array('email'=>$getInfo->email)); 
    
    // $useremail = $getInfo->email;
    // $checkuser = $this->user->checkuserexist($useremail);
   
    if ($checkuser) {
        Sentinel::login($checkuser);
        return redirect()->to('/sent-rfp-acc');
    }else{
         session()->put([
            'email'=> $getInfo->getEmail(),
            'image'=> $getInfo->getAvatar(),
            'name' => $getInfo->getName()
        ]);
        return redirect()->to('/account-info');
    }
 
}
}
