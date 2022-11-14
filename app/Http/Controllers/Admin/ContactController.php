<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Repositories\ContactRepository;
use Illuminate\Support\Str;
use App\Models\EmailTemplate;
use App\Models\Contact;
use File;
use Yajra\DataTables\DataTables;
use Mail;
use App\Models\SiteSetting;
use Lang;

class ContactController extends Controller
{
    protected $contact;


    public function __construct(ContactRepository $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        return View('admin.contact.list');
    }

    public function getdata(){

        $getdetails = $this->contact->getcontactlist();
       return Datatables::of($getdetails)
           ->editColumn('created_at','{{ date("M d Y",strtotime($created_at)) }}')
            ->make(true);
    }

    public function addProcess(ContactRequest $request)
    {
        $create_contact = $this->contact->add($request);
        $adminemail = SiteSetting::first();
        // dd($adminemail);
        if($create_contact)
        {

             ///////////////////////////////////////EMAIL TEMPLATE////////////////////////////////////

                    if(env('APP_ENV') == 'local')
                    {
                        // Admin Email Start
                        $email_temp = new EmailTemplate();
                        $email_temp = $email_temp->where('slug', "sign-up-to")->first();
                        /// email template replace for content
                        $search_content  = [
                            '{!! $request->first_name !!}',
                            '{!! $request->last_name !!}',
                            '{!! $request->subject !!}',
                            "@lang('general.site_name')",
                        ];
                        $replace_content = [
                            $request->first_name,
                            $request->last_name,
                            $request->subject,
                            Lang::get('general.site_name'),
                        ];
                        /// email template replace for subject
                        $search_subject  = [
                            '$request->first_name',
                            "Lang::get('general.site_name')"
                        ];

                        $replace_subject = [
                            $request->first_name,
                            Lang::get('general.site_name')
                        ];
                        // get and replace content and subject
                        $emailContent = str_replace($search_content, $replace_content, $email_temp['email_template_content']);
                        $emailSubject = str_replace($search_subject, $replace_subject, $email_temp['email_template_title']);
                        $emaildata = array('emailContent'=>$emailContent,'toemail'=>$adminemail->contact_to_email,'toname'=>"Admin",'fromemail'=>$adminemail->contact_from_email, 'emailSubject'=>$emailSubject);
                        sendEmail($emaildata);
                        // Admin Email End

                        // User Email Start
                        $email_temp = new EmailTemplate();
                        $email_temp = $email_temp->where('slug', "thanks-to-sign-up")->first();
                        /// email template replace for content
                        $search_content  = [
                            '{!! $request->first_name !!}',
                            "@lang('general.site_name')",
                        ];
                        $replace_content = [
                            $request->first_name,
                            Lang::get('general.site_name'),
                        ];
                        /// email template replace for subject
                        $search_subject  = [
                            '$request->first_name',
                            "Lang::get('general.site_name')"
                        ];

                        $replace_subject = [
                            $request->first_name,
                            Lang::get('general.site_name')
                        ];
                        // get and replace content and subject
                        $emailContent = str_replace($search_content, $replace_content, $email_temp['email_template_content']);
                        $emailSubject = str_replace($search_subject, $replace_subject, $email_temp['email_template_title']);
                        $emaildata = array('emailContent'=>$emailContent,'toemail'=>$request->email_address,'toname'=>$request->first_name." ".$request->last_name,'fromemail'=>$adminemail->contact_from_email, 'emailSubject'=>$emailSubject);
                        sendEmail($emaildata);
                    }
                    
            
        }

        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
        return redirect()->back()->with('message','Thanks To Contact Us');
    }
}
