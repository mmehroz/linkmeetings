<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EmailTemplateRequest;
use App\Models\Repositories\EmailTemplateRepository;
use Illuminate\Support\Str;
use File;
use App\Models\Languages;
use Yajra\DataTables\DataTables;

class EmailTemplateController extends Controller
{
	protected $emailtemplate;

    public function __construct(EmailTemplateRepository $emailtemplate)
    {
        $this->emailtemplate = $emailtemplate;
    }
     public function index()
    { 
       return view('admin.emailtemplate.list');
    }
    public function getData()
    {
    	 $this->emailtemplate->getEmailList();
    	 $emailtemplate = $this->emailtemplate->getEmailList();
    	 // dd($faq);
    	 return Datatables::of($emailtemplate)
            ->addColumn('actions',function($emailtemplate){
                return '<a href="'. route("admin_email_update", ["id"=>$emailtemplate->id]) .'"><i class="fa fa-edit" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit BLog"></i> </a>';
            })
            ->rawColumns(['slug','actions'])
            ->make(true);
    	 
    }
    public function edit($id)
    {
    	// dd($id);
        $emailtemplate = $this->emailtemplate->getByCol($id);
        // dd($faqcategories);
        if($emailtemplate)
        {
            $getemailtemplate = $this->emailtemplate;
            return View('admin.emailtemplate.edit',compact('emailtemplate','getemailtemplate','id'));
        }
        else
        {
            return redirect()->route('admin_email_list')->with('error','Something Went wrong!');
        }
    }
    public function editprocess(EmailTemplateRequest $request,$id)
    {
    	// dd($request);
        $create_email = $this->emailtemplate->update($request,$id);
        if($create_email)
        {
            return redirect()->route('admin_email_list')->with('success','Email Updated Successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }
    
}
