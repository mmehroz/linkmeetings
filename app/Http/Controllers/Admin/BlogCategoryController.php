<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BlogCategoryRequest;
use App\Models\Repositories\BlogCategoryRepository;
use Illuminate\Support\Str;
use File;
use App\Models\Languages;
use Yajra\DataTables\DataTables;;

class BlogCategoryController extends Controller
{
    protected $blogcategories;

    public function __construct(BlogCategoryRepository $blogcategories)
    {
        $this->blogcategories = $blogcategories;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        return View('admin.blogcategory.list');
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function add()
    {
        $getcategoryblog = $this->blogcategories;
        return View('admin.blogcategory.add',compact('getcategoryblog'));
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function edit($id)
    {
        $blogcategories = $this->blogcategories->getByCol($id);
        if($blogcategories)
        {
            $getcategoryblog = $this->blogcategories;
            // $blog_categories_description = $this->blogcategories->getDescriptionById($id);
            return View('admin.blogcategory.edit',compact('blogcategories','getcategoryblog','id'));
        }
        else
        {
            return redirect()->route('admin_blogscategory')->with('error','Something Went wrong!');
        }
    }

    /**
     * Process the Form Data.
     *
     * @return redirect
     */
    public function addProcess(BlogCategoryRequest $request)
    {
        // dd($request);
        $create_blog = $this->blogcategories->add($request);
        if($create_blog)
        {
            return redirect()->route('admin_blogscategory')->with('success','Blog has been updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }

    //BlogRequest
    public function getData()
    {
        $blogcategories = $this->blogcategories->getcategoryBlogsList();
        return Datatables::of($blogcategories)
            //->editColumn('slug','<a target="_blank" href="{{ URL::to( $slug ) }}">{{ URL::to( $slug ) }}</a>')
            ->editColumn('status','@if($status == "Active")
                                Enable
                            @else
                                Disable
                            @endif')
            
            ->addColumn('actions',function($blogcategories){
                return '<a href="'. route("admin_blogcategory_update", ["id"=>$blogcategories->id]) .'"><i class="fa fa-edit" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit BLog"></i> </a>
                                    <a class="trigger_popup_fricc" href="javascript:;" data-href="'. route("admin_blogcategory_delete", ["id"=>$blogcategories->id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="Delete BLog"></i></a>';
            })
            /*->addColumn('actions','<a href="'. route("admin_blog_update", ["id"=>$id]) .'"><i class="fa fa-edit" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit BLog"></i> </a>
                                    <a href="'. route("admin_blog_delete", ["id"=>$id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="Delete BLog"></i></a>
                                   ')*/
            ->rawColumns(['slug','actions'])
            ->make(true);
    }

    /**
     * Process the Form Data.
     *
     * @return redirect
     */
    public function Editprocess(BlogCategoryRequest $request,$category_blog_id)
    {
        $create_blog = $this->blogcategories->update($request,$category_blog_id);
        if($create_blog)
        {
            return redirect()->route('admin_blogscategory')->with('success','BLog has been updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }

    /**
     * Remove the resource.
     *
     * @return redirect
     */
    public function delete($id)
    {
        $remove = $this->blogcategories->remove($id);
        if($remove)
        {
            return redirect()->route('admin_blogscategory')->with('success','Page has been updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }
}
