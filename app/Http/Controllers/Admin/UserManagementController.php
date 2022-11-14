<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SubscriberRequest;
use App\Http\Requests\HotelUserAdminRegistrationRequest;
use App\Models\Repositories\PackageRepository;
use App\Models\Repositories\UserRepository;
use App\Models\Repositories\MembershipRepository;
use App\Http\Requests\AccountSettingRequestEdit;
use App\Http\Requests\UserEditRequest;
use Illuminate\Support\Str;
use File;
use App\User;
use Yajra\DataTables\DataTables;;
use Mail;
use App\Models\EmailTemplate;
use App\Models\SiteSetting;
use Lang;
use Activation;
use Sentinel;


class UserManagementController extends Controller
{
    protected $users;
    protected $packages;
    protected $membership;


   public function __construct( UserRepository $users, PackageRepository $packages, MembershipRepository $membership)
    {
        $this->users        =   $users;
        $this->packages     =   $packages;
        $this->membership   =   $membership;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        $user            =   $this->users->getAllUsers();
        $packages        =   $this->packages->getPackageListByType('Hotel')->get();
        $dmcpackages     =   $this->packages->getPackageListByType('DMC')->get();
        return View('admin.user-management.list',compact('packages','dmcpackages'));
    }

    public function getpaymentlist()
    {
        $user = $this->users->getpaymentdetails();
      return View('admin.payments.payments',compact('user'));
    }



    public function getpayemtData()
    {
        $users = $this->users->getpaymentdetails();
        return Datatables::of($users)
            ->editColumn('created_at','{{ date("M d Y",strtotime($created_at)) }}')
//            ->addColumn('action',function($users){
//                return '<input type="submit" data-fancybox="show-news" class="sb-btn" data-src="#show-news" href="javascript:;">';
//            })
            ->addColumn('actions',function($users){
                return '<a class="trigger_popup_fricc_content" href="javascript:;" data-invoice="'.$users->invoice  .'" data-package="'.$users->title  .'" data-username="'.$users->company_name  .'" data-paid="'.$users->paid  .'" data-created_at="'. date("M d Y",strtotime($users->created_at)) .'" data-toggle="modal" data-target="#delete_confirm">'.$users->invoice  .'</a>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function edit($id)
    {
        $packages           =   $this->packages->getPackageListByType('Hotel')->get();
        $dmcpackages           =   $this->packages->getPackageListByType('DMC')->get();
        $user_package       =   $this->membership->getByCol($id,'user_id');
        $user               =   $this->users->getByCol($id);
        $userdd             =   Sentinel::findById($id);
        $activation         =   Activation::completed($userdd);
        return View('admin.user-management.edit',compact('user','id','activation','packages','dmcpackages','user_package'));
    }

    public function paymentedit($id)
    {
        $userinvoice = $this->users->getpaymentinvoicedetails($id);
        return View('admin.payments.payments',compact('$userinvoice','id'));
    }

    public function update(UserEditRequest $request, $id)
    {
        $user = $this->users->userUpdate($request, $id);
        return redirect()->route('admin_edit_user',['id'=>$id])->with('success','User updated successfully!');
    }

    public function addUser(Request $request)
    {
        session(['package_id'=>$request->package_id, 'type' =>$request->account_type]);
        $user = $this->users->add( $request );
        return back()->with('success','User added successfully!');
    }

    public function addUserAdmin(HotelUserAdminRegistrationRequest $request)
    {
        session(['package_id'=>$request->package_id, 'type' =>$request->account_type]);
        $user = $this->users->AdminUsers( $request );
        $adminemail = SiteSetting::first();

        if (!empty($user)) {
                  // User Thanks Email Start
                    $email_temp = new EmailTemplate();
                    $email_temp = $email_temp->where('slug', "user-account-created")->first();
                    $search_content  = [
                        '{!! $request->username !!}',
                        '{!! $request->email !!}',
                        '{!! $request->password !!}',
                        "@lang('general.site_name')",
                    ];
                    $replace_content = [
                        $request->username,
                        $request->email,
                        $request->password,
                        Lang::get('general.site_name'),
                    ];
                    $search_subject  = [
                        '$request->username',
                        "Lang::get('general.site_name')"
                    ];

                    $replace_subject = [
                        $request->username,
                        Lang::get('general.site_name')
                    ];
                    $emailContent = str_replace($search_content, $replace_content, $email_temp['email_template_content']);
                    $emailSubject = str_replace($search_subject, $replace_subject, $email_temp['email_template_title']);
                    $emaildata = array('emailContent'=>$emailContent,'toemail'=>$request->email,'toname'=>"User",'fromemail'=>$adminemail->contact_from_email, 'emailSubject'=>$emailSubject);
                    sendEmail($emaildata);
                   // User Thanks Email End
                }
        return back()->with('success','User added successfully!');
    }


       public function getData()
    {
        $users = $this->users->getAllUsers();

        return Datatables::of($users)
            ->editColumn('full_name','@if( isset($first_name) && isset($last_name) ){{ $first_name }} {{$last_name }} @else {{ $username }} @endif')
            ->editColumn('package','{{ $title }}')

            ->addColumn('status',function($users){
                return Activation::completed(getUserByID($users->id)) ? 'Active' : 'Inactive';
            })
            ->editColumn('actions',function($users){
                return '<a class="tab-btn edit" href="'. route("admin_edit_user", ["id"=>$users->id]) .'"><i class="fa fa-pencil" aria-hidden="true"></i></a><a class="trigger_popup_fricc" href="javascript:;" data-href="'. route("admin_delete_user", ["id"=>$users->id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954"></i></a>
                                    ';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

     public function delete($id)
    {
        $remove = $this->users->remove($id);
        if($remove)
        {
            return redirect()->route('admin_manage_users')->with('delete','User deleted successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }
    public function banUser($id, $type) {
        $userdetails = User::where('id', $id)->first();
        $adminemail = SiteSetting::first();
        $message = '';
        $app_env = env('APP_ENV');
        if(($app_env != 'local' && $app_env != ''))
        {
            if ($type == "unban") {
                $message = "User Account Activated Successfully!";
                // User Thanks Email Start
                $email_temp = new EmailTemplate();
                $email_temp = $email_temp->where('slug', "user-account-activated")->first();
                $search_content  = [
                    '{!! $userdetails->username !!}',
                    '{!! $userdetails->email !!}',
                    "@lang('general.site_name')",
                ];
                $replace_content = [
                    $userdetails->username,
                    $userdetails->email,
                    Lang::get('general.site_name'),
                ];
                $search_subject  = [
                    '$userdetails->username',
                    "Lang::get('general.site_name')"
                ];

                $replace_subject = [
                    $userdetails->username,
                    Lang::get('general.site_name')
                ];
                $emailContent = str_replace($search_content, $replace_content, $email_temp['email_template_content']);
                $emailSubject = str_replace($search_subject, $replace_subject, $email_temp['email_template_title']);
                $emaildata = array('emailContent'=>$emailContent,'toemail'=>$userdetails->email,'toname'=>$userdetails->first_name.' '.$userdetails->last_name,'fromemail'=>$adminemail->contact_from_email, 'emailSubject'=>$emailSubject);
                sendEmail($emaildata);
                // User Thanks Email End
            }
            elseif ($type == "ban") {
                $message = "User Account Deactivated Successfully!";
                // User Thanks Email Start
                $email_temp = new EmailTemplate();
                $email_temp = $email_temp->where('slug', "user-account-deactivated")->first();
                $search_content  = [
                    '{!! $userdetails->username !!}',
                    "@lang('general.site_name')",
                ];
                $replace_content = [
                    $userdetails->username,
                    Lang::get('general.site_name'),
                ];
                $search_subject  = [
                    '$userdetails->username',
                    "Lang::get('general.site_name')"
                ];

                $replace_subject = [
                    $userdetails->username,
                    Lang::get('general.site_name')
                ];
                $emailContent = str_replace($search_content, $replace_content, $email_temp['email_template_content']);
                $emailSubject = str_replace($search_subject, $replace_subject, $email_temp['email_template_title']);
                $emaildata = array('emailContent'=>$emailContent,'toemail'=>$userdetails->email,'toname'=>$userdetails->first_name.' '.$userdetails->last_name,'fromemail'=>$adminemail->contact_from_email, 'emailSubject'=>$emailSubject);
                sendEmail($emaildata);
                // User Thanks Email End
            }
        }
        $this->users->ban_UnbanUser($id, $type);
        return back()->with('success',$message);
    }
	// Mehroz - Hotel/DMC Account Setting Start
	public function accountsetting()
    {
        $getdetails = isUserLoggedIn();
        $userid = $getdetails['user_id'];
        $getuserinfo = Sentinel::findById($userid);
        if ($getuserinfo['account_type'] == "hotel") {
            return view('hotel.accountsetting',compact('getuserinfo'));
        }elseif($getuserinfo['account_type'] == "dmc"){
            return view('dmc.accountsetting',compact('getuserinfo'));
        }
    }
    public function updatedmchoteluser(AccountSettingRequestEdit $request)
    {
        // dd($request);
        $submited = $this->users->updatedmchotelusers( $request );
        return redirect()->back()->with('message', 'Thanks To Update Your Account Information');
    }
	// Mehroz - Hotel/DMC Account Setting End

}
