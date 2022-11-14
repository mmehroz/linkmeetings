<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRegistrationRequest;
use App\Http\Requests\UserCustomerRegRequest;
use App\Models\Repositories\UserRepository;
use App\Models\Repositories\PackageRepository;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;;
use Session;
use App\User;
use App\Models\Membership;
use App\Models\EmailTemplate;
use App\Models\SiteSetting;
use Lang;
use Mail;

class RegistrationController extends Controller
{
    protected $package_repo;
    protected $user;

    public function __construct(PackageRepository $package_repo, UserRepository $user)
    {
        $this->package_repo  = $package_repo;
        $this->user  = $user;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */

   public function package($id, $type) {
        $package = $this->package_repo->getPackageById( $id );
        session(['package_id'=>$id, 'type' =>$package->type]);
        if( $type == 'hotel')
            return view('frontend.template.list-your-hotel-detail',compact('package'));
        if( $type == 'dmc')
            return view('frontend.template.list-your-dmc-detail',compact('package'));
   }

   public function addUser(UserRegistrationRequest $request)
   {
    $package = $this->user->add($request);
    $adminemail = SiteSetting::first();

    $continue       = TRUE;
    $error_message  = 'Ops Something went wrong!';

    if( isset($package->status) && $package->status == 'failed')
    {
        $continue       = FALSE;
        $error_message  = $package->message;
    }
    else
    {
        $getinvoiceandpackage = Membership::where('user_id', $package->id)->first();
        $getpackagename =  $this->package_repo->getPackageById( $getinvoiceandpackage->package_id );
    }

    if ($package && $continue) {

     if(env('APP_ENV') != 'local' && env('APP_ENV') != '')
        {
          if ($request->payment_type == "bank_draft") {
            // Admin Email Start
                        $email_temp = new EmailTemplate();
                        $email_temp = $email_temp->where('slug', "successfully-list-a-hotel-as-bankdraft")->first();
                        $search_content  = [
                            '{!! $request->company_name !!}',
                            '{!! $getpackagename->title !!}',
                            '{!! $request->payment_type !!}',
                            '{!! $request->bank_draft_description !!}',
                            "@lang('general.site_name')",
                        ];
                        // $packagename = "PERL English";
                        $paymenttype = "Bank Draft";
                        $replace_content = [
                            $request->company_name,
                            $getpackagename->title,
                            $paymenttype,
                            $request->bank_draft_description,
                            Lang::get('general.site_name'),
                        ];
                        $search_subject  = [
                            '$request->company_name',
                            "Lang::get('general.site_name')"
                        ];

                        $replace_subject = [
                            $request->company_name,
                            Lang::get('general.site_name')
                        ];
                        $emailContent = str_replace($search_content, $replace_content, $email_temp['email_template_content']);
                        $emailSubject = str_replace($search_subject, $replace_subject, $email_temp['email_template_title']);
                        $emaildata = array('emailContent'=>$emailContent,'toemail'=>$adminemail->contact_to_email,'toname'=>"Admin",'fromemail'=>$adminemail->contact_from_email, 'emailSubject'=>$emailSubject);
                        sendEmail($emaildata);
                        // Admin Email End
                        // User Thanks Email Start
                        $email_temp = new EmailTemplate();
                        $email_temp = $email_temp->where('slug', "company-thanks-to-sign-up")->first();
                        $search_content  = [
                            '{!! $request->company_name !!}',
                            "@lang('general.site_name')",
                        ];
                        $paymenttype = "Bank Draft";
                        $replace_content = [
                            $request->company_name,
                            Lang::get('general.site_name'),
                        ];
                        $search_subject  = [
                            '$request->company_name',
                            "Lang::get('general.site_name')"
                        ];

                        $replace_subject = [
                            $request->company_name,
                            Lang::get('general.site_name')
                        ];
                        $emailContent = str_replace($search_content, $replace_content, $email_temp['email_template_content']);
                        $emailSubject = str_replace($search_subject, $replace_subject, $email_temp['email_template_title']);
                        $emaildata = array('emailContent'=>$emailContent,'toemail'=>$request->email,'toname'=>"User",'fromemail'=>$adminemail->contact_from_email, 'emailSubject'=>$emailSubject);
                        sendEmail($emaildata);
                        // User Thanks Email End
                    }

          if ($request->payment_type == "stripe") {
                      // Admin Email Start
                        $email_temp = new EmailTemplate();
                        $email_temp = $email_temp->where('slug', "successfully-list-a-hotel")->first();
                        $search_content  = [
                            '{!! $getinvoiceandpackage->invoice !!}',
                            '{!! $request->company_name !!}',
                            '{!! $getpackagename->title !!}',
                            '{!! $getinvoiceandpackage->paid !!}',
                            "@lang('general.site_name')",
                        ];
                        $replace_content = [
                            $getinvoiceandpackage->invoice,
                            $request->company_name,
                            $getpackagename->title,
                            $getinvoiceandpackage->paid,
                            Lang::get('general.site_name'),
                        ];
                        $search_subject  = [
                            '$request->company_name',
                            "Lang::get('general.site_name')"
                        ];

                        $replace_subject = [
                            $request->company_name,
                            Lang::get('general.site_name')
                        ];
                        $emailContent = str_replace($search_content, $replace_content, $email_temp['email_template_content']);
                        $emailSubject = str_replace($search_subject, $replace_subject, $email_temp['email_template_title']);
                        $emaildata = array('emailContent'=>$emailContent,'toemail'=>$adminemail->contact_to_email,'toname'=>"Admin",'fromemail'=>$adminemail->contact_from_email, 'emailSubject'=>$emailSubject);
                        sendEmail($emaildata);
                        // Admin Email End
                        // User Thanks Email Start
                        $email_temp = new EmailTemplate();
                        $email_temp = $email_temp->where('slug', "company-thanks-to-sign-up")->first();
                        $search_content  = [
                            '{!! $request->company_name !!}',
                            "@lang('general.site_name')",
                        ];
                        $paymenttype = "Bank Draft";
                        $replace_content = [
                            $request->company_name,
                            Lang::get('general.site_name'),
                        ];
                        $search_subject  = [
                            '$request->company_name',
                            "Lang::get('general.site_name')"
                        ];

                        $replace_subject = [
                            $request->company_name,
                            Lang::get('general.site_name')
                        ];
                        $emailContent = str_replace($search_content, $replace_content, $email_temp['email_template_content']);
                        $emailSubject = str_replace($search_subject, $replace_subject, $email_temp['email_template_title']);
                        $emaildata = array('emailContent'=>$emailContent,'toemail'=>$request->email,'toname'=>"User",'fromemail'=>$adminemail->contact_from_email, 'emailSubject'=>$emailSubject);
                        sendEmail($emaildata);
                        // User Thanks Email End
                        // User Invoice Email Start
                        $email_temp = new EmailTemplate();
                        $email_temp = $email_temp->where('slug', "company-successfully-list-hotel")->first();
                        $search_content  = [
                            '{!! $getinvoiceandpackage->invoice !!}',
                            '{!! $request->company_name !!}',
                            '{!! $getpackagename->title !!}',
                            '{!! $getinvoiceandpackage->paid !!}',
                            "@lang('general.site_name')",
                        ];
                        $replace_content = [
                            $getinvoiceandpackage->invoice,
                            $request->company_name,
                            $getpackagename->title,
                            $getinvoiceandpackage->paid,
                            Lang::get('general.site_name'),
                        ];
                        $search_subject  = [
                            '$request->company_name',
                            "Lang::get('general.site_name')"
                        ];

                        $replace_subject = [
                            $request->company_name,
                            Lang::get('general.site_name')
                        ];
                        $emailContent = str_replace($search_content, $replace_content, $email_temp['email_template_content']);
                        $emailSubject = str_replace($search_subject, $replace_subject, $email_temp['email_template_title']);
                        $emaildata = array('emailContent'=>$emailContent,'toemail'=>$request->email,'toname'=>"User",'fromemail'=>$adminemail->contact_from_email, 'emailSubject'=>$emailSubject);
                        sendEmail($emaildata);
                        // User Invoice Email End
                    }
                  }
                     } else
                     {
                         return back()->withInput()->with('error',$error_message/*'Ops Something went wrong!'*/);
                     }
                     return redirect()->back()->with('payment_type',$request->payment_type);

   }
   public function addCustomer(UserCustomerRegRequest $request)
   {
    $adminemail = SiteSetting::first();
       $package = $this->user->add( $request );
         if ($package) {
           if (env('APP_ENV') == 'local') {
            // User Email Start
               $email_temp = new EmailTemplate();
               $email_temp = $email_temp->where('slug', "successfully-register-as-meeting-planner")->first();
               $search_content = [
                   '{!! $request->first_name !!}',
                   '{!! $request->last_name !!}',
                   "@lang('general.site_name')",
                  ];
               $replace_content = [
                   $request->first_name,
                   $request->last_name,
                   Lang::get('general.site_name'),
               ];
               $search_subject = [
                   '$request->first_name',
                   "Lang::get('general.site_name')"
               ];
               $replace_subject = [
                   $request->first_name,
                   Lang::get('general.site_name')
               ];
               $emailContent = str_replace($search_content, $replace_content, $email_temp['email_template_content']);
               $emailSubject = str_replace($search_subject, $replace_subject, $email_temp['email_template_title']);
               $emaildata = array('emailContent'=>$emailContent,'toemail'=>$request->email,'toname'=>$request->first_name . ' ' . $request->last_name,'fromemail'=>$adminemail->contact_from_email, 'emailSubject'=>$emailSubject);
               sendEmail($emaildata);
           }
               }
               else
               {
                   back()->withInput()->with('error','Ops Something went wrong!');
               }
            return redirect()->back()->with('success', 'Thanks To Sign Up As Meeting Planner!');
   }
}
