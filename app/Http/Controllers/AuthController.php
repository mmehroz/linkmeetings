<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Redirect;
use Sentinel;
use Lang;
use Activation;
    
class AuthController extends Controller
{
    /**
     * Account sign in.
     *
     * @return View|Redirect
     */
    public function getSignin()
    {
        if(isUserLoggedIn())
        {
            $redirect = RedirectLoggedUser();
            return redirect($redirect);
        }

        // Show the page
        return View('frontend.template.login');
    }

    /**
     * Account sign in process.
     *
     * @return Redirect
     */
    public function postSignin(LoginRequest $request)
    {

        try {
            $user =  Sentinel::findByCredentials(array('email'=>$request->email));            
            if( !empty($user) ) {
                 if( Activation::completed($user) !== true) {
                $this->messageBag->add('email', 'You account has been deactivated.');
                return back()->withInput()->withErrors($this->messageBag);
                }
            }
            // Try to log the user in
            $auth = Sentinel::authenticate($request->only('email', 'password'), $request->get('remember_me', false));

            if(isset($auth) && $auth != null){
                $role = Sentinel::getUser()->roles()->get()->first()->slug;

                if($auth && $role)
                {
                    $explode_email = explode('@',$request->get('email'));
                    $username = $explode_email[0];
                    $loginforum = 1;

                    $redirect_route = RedirectLoggedUser();

                    // Redirect to the dashboard page
                    return redirect($redirect_route)->with('success', 'Successfully Logged In!')
                        ->with('username', $username)
                        ->with('mypass', $request->get('password'))
                        ->with('loginforum',$loginforum);
                }else {Sentinel::logout();}
            }
            $this->messageBag->add('email', Lang::get('auth/message.account_not_found'));

        } catch (NotActivatedException $e) {
            $this->messageBag->add('email', Lang::get('auth/message.account_not_activated'));
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            $this->messageBag->add('email', Lang::get('auth/message.account_suspended', compact('delay' )));
        }

        // Ooops.. something went wrong
        return back()->withInput()->withErrors($this->messageBag);
    }

    public function logout()
    {
        // Log the user out
        Sentinel::logout();
        return redirect('/');
    }
}
