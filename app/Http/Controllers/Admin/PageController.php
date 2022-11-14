<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PageRequest;
use App\Models\Repositories\PageRepository;
use Illuminate\Support\Str;
use File;
use Yajra\DataTables\DataTables;
use function PHPUnit\Framework\StaticAnalysis\HappyPath\AssertIsArray\consume;

;

class PageController extends Controller
{
    protected $page;

    public function __construct(PageRepository $page)
    {
        $this->page = $page;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        
        return View('admin.page.list');
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function add()
    {
        return View('admin.page.add');
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function edit($id)
    {
        $page = $this->page->getByCol($id);
        $page_repo = $this->page;
        if($page)
        {
            // $getpage = $this->page;
            //$pageDescription = $this->page->getDescriptionById($id);
            return View('admin.page.edit',compact('page'/*,'pageDescription'*/,'id','page_repo'));
        }
        else
        {
            return redirect()->route('admin_pages')->with('error','Something Went wrong!');
        }
    }

    /**
     * Process the Form Data.
     *
     * @return redirect
     */
    public function addProcess(PageRequest $request)
    {
        
        $create_page = $this->page->add($request);
       
        if($create_page)
        {
            return redirect()->route('admin_pages')->with('success','Page has been updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }

    //PageRequest
    public function getData()
    {
        $pages = $this->page->getPagesList();
        return Datatables::of($pages)
            ->editColumn('slug','<a target="_blank" href="{{ URL::to( ($slug == "home") ? "/" : $slug ) }}">{{ URL::to( ($slug == "home") ? "/" : $slug ) }}</a>')
            ->editColumn('status','@if($status == "Active")
                                Enable
                            @else
                                Disable
                            @endif')
            ->editColumn('created_at','{{ date("M d Y",strtotime($created_at)) }}')
            ->addColumn('actions',function($pages){
                return '<a class="tab-btn edit" href="'. route("admin_page_update", ["id"=>$pages->id]) .'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a class="trigger_popup_fricc tab-btn delete" href="javascript:;" data-href="'. route("admin_page_delete", ["id"=>$pages->id]) .'"><i class="fa fa-trash" aria-hidden="true"></i></a>';
            })
            /*->addColumn('actions','<a href="'. route("admin_page_update", ["id"=>$id]) .'"><i class="fa fa-edit" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit page"></i> </a>
                                    <a href="'. route("admin_page_delete", ["id"=>$id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="Delete Page"></i></a>
                                   ')*/
            ->rawColumns(['slug','actions'])
            ->make(true);
    }

    /**
     * Process the Form Data.
     *
     * @return redirect
     */
    public function Editprocess(PageRequest $request,$page_id)
    {
        $create_page = $this->page->update($request,$page_id);
        if($create_page)
        {
            return redirect()->route('admin_pages')->with('success','Page has been updated successfully!');
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
        $remove_page = $this->page->remove($id);
        if($remove_pag)
        {
            return redirect()->route('admin_pages')->with('success','Page has been updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }
}
