<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\CustomerRequestEdit;
use App\Models\Repositories\CustomerRepository;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Session;
use App\User;
use App\Models\EmailTemplate;
use App\Models\SiteSetting;
use Lang;
use Mail;
use App\Models\Repositories\UserRepository;
use Activation;
use Sentinel;

class CustomerController extends Controller
{
	protected $customer;
	protected $user;

    public function __construct(CustomerRepository $customer, UserRepository $user)
    {
        $this->customer  = $customer;
        $this->user 	 = $user;
    }
    public function index()
    {
		return View('customer.account-info');
    }
    public function add(CustomerRequest $request)
    {
    	// dd($request);
    	$submited = $this->customer->add( $request );
    	$checkuser =  Sentinel::findByCredentials(array('email'=>$request->email)); 
    	Sentinel::login($checkuser);
      	return redirect()->route('customer_account-info-edit')->with('message', 'Thanks To Update Your Account Information');
    }
    public function edit()
    {
    	$getdetails = isUserLoggedIn();
    	// dd($getdetails);
    	$useremail = $getdetails['email'];
    	// $getuserinfo = $this->user->checkuserexist($useremail);
    	// $useremail = session()->get('email');
    	$getuserinfo =  Sentinel::findByCredentials(array('email'=>$useremail)); 
    	
    	return View('customer.account-info-edit',compact('getuserinfo'));
    }
    public function update(CustomerRequestEdit $request)
    {
    	$submited = $this->customer->update( $request );
      	return redirect()->back()->with('message', 'Thanks To Update Your Account Information');
    }
    public function sentrfp()
    {
		return View('customer.sent-rfps-acc');
    }
    public function sentrfpdetails()
    {
		return View('customer.sent-rfp-acc-detail');
    }
    public function savedvenues()
    {
		return View('customer.saved-venues');
    }
    public function savedrfp()
    {
		return View('customer.saved-rfp');
    }
    public function receivedproposals()
    {
		return View('customer.received-proposals');
    }
    public function receivedproposalsdetail()
    {
		return View('customer.received-proposals-detail');
    }
}