<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FaqCategoryRequest;
use App\Models\Repositories\FaqCategoryRepository;
use Illuminate\Support\Str;
use File;
use App\Models\Languages;
use Yajra\DataTables\DataTables;


class FaqCategoryController extends Controller
{
	protected $faqcategories;

    public function __construct(FaqCategoryRepository $faqcategories)
    {
        $this->faqcategories = $faqcategories;
    }

      public function index()
    {
    	
        return view('admin.faqcategory.list');
    }
    public function getData()
    {
    	 $this->faqcategories->getcategoryFaqList();
    	 $faqcategories = $this->faqcategories->getcategoryFaqList();
    	 // dd($faqcategories);
    	 return Datatables::of($faqcategories)
            ->addColumn('actions',function($faqcategories){
                return '<a href="'. route("admin_faqcategory_update", ["id"=>$faqcategories->faq_category_id]) .'"><i class="fa fa-edit" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit BLog"></i> </a>
                                    <a class="trigger_popup_fricc" href="javascript:;" data-href="'. route("admin_faqcategory_delete", ["id"=>$faqcategories->faq_category_id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="Delete BLog"></i></a>';
            })
            ->rawColumns(['slug','actions'])
            ->make(true);
    	 
    }
    public function add()
    {
        return View('admin.faqcategory.add');
    }
      public function addProcess(FaqCategoryRequest $request)
    {
        // dd($request);
        $create_faq = $this->faqcategories->add($request);
        if($create_faq)
        {
            return redirect()->route('admin_faqcategory')->with('success','Faq Category Created Successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }
    public function edit($id)
    {
    	// dd($id);
        $faqcategories = $this->faqcategories->getByCol($id);
        // dd($faqcategories);
        if($faqcategories)
        {
            $getcategoryfaq = $this->faqcategories;
            return View('admin.faqcategory.edit',compact('faqcategories','getcategoryfaq','id'));
        }
        else
        {
            return redirect()->route('admin_faqcategory')->with('error','Something Went wrong!');
        }
    }
    public function editprocess(FaqCategoryRequest $request,$category_faq_id)
    {
        $create_faq = $this->faqcategories->update($request,$category_faq_id);
        if($create_faq)
        {
            return redirect()->route('admin_faqcategory')->with('success','Faq Category Updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }
    public function delete($id)
    {
        $remove = $this->faqcategories->remove($id);
        if($remove)
        {
            return redirect()->route('admin_faqcategory')->with('success','Updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }
}
