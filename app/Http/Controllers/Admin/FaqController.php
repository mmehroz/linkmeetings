<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FaqRequest;
use App\Models\Repositories\FaqRepository;
use Illuminate\Support\Str;
use File;
use App\Models\Languages;
use Yajra\DataTables\DataTables;

class FaqController extends Controller
{
    protected $faq;

    public function __construct(FaqRepository $faq)
    {
        $this->faq = $faq;
    }

      public function index()
    {
    	
        return view('admin.faq.list');
    }
    public function getData()
    {
    	 $this->faq->getFaqList();
    	 $faq = $this->faq->getFaqList();
    	 // dd($faq);
    	 return Datatables::of($faq)
            ->addColumn('actions',function($faq){
                return '<a href="'. route("admin_faq_update", ["id"=>$faq->id]) .'"><i class="fa fa-edit" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit BLog"></i> </a>
                                    <a class="trigger_popup_fricc" href="javascript:;" data-href="'. route("admin_faq_delete", ["id"=>$faq->id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="Delete BLog"></i></a>';
            })
            ->rawColumns(['slug','actions'])
            ->make(true);
    	 
    }
    public function add()
    {
    	$getfaqcategory = $this->faq;
    	// dd($getfaqcategory);
        return view('admin.faq.add',compact('getfaqcategory'));
    }
      public function addProcess(FaqRequest $request)
    {
        // dd($request);
        $create_faq = $this->faq->add($request);
        if($create_faq)
        {
            return redirect()->route('admin_faq')->with('success','Faq Created Successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }
    public function edit($id)
    {
    	// dd($id);
        $faq = $this->faq->getByCol($id);
        // dd($faqcategories);
        if($faq)
        {
            $getfaq = $this->faq;
            return View('admin.faq.edit',compact('faq','getfaq','id'));
        }
        else
        {
            return redirect()->route('admin_faq')->with('error','Something Went wrong!');
        }
    }
    public function editprocess(FaqRequest $request,$faq_id)
    {
    	// dd($request);
        $create_faq = $this->faq->update($request,$faq_id);
        if($create_faq)
        {
            return redirect()->route('admin_faq')->with('success','Faq Updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }
    public function delete($id)
    {
        $remove = $this->faq->remove($id);
        if($remove)
        {
            return redirect()->route('admin_faq')->with('success','Updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }
}
