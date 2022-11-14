<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Models\Repositories\MenuRepository;
use App\Models\Repositories\PageRepository;
use App\Models\MenuDescription;
use Illuminate\Support\Str;
use File;
use Yajra\DataTables\DataTables;

class MenuController extends Controller
{
    protected $menu;

    public function __construct(MenuRepository $menu,MenuDescription $menuDescription,PageRepository $page)
    {
        $this->menu = $menu;
        $this->menuDescription = $menuDescription;
        $this->page = $page;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        return View('admin.menu.list');
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function add()
    {
        // $menu = $this->menu->getByCol(1);
        // print_b( $menu->id );
        // print_b( $menu->MenuDescription->toArray() );
        // exit;
        // $check = $this->menu->getMenuListforpage();
        // dd($check->toArray());
        $pages = $this->page->getPagesList();
        return view('admin.menu.add', compact('pages'));
    }

    public function getmenuforheader()
    {
        $getmenuforheader = $this->menu->getMenuListforpage();

        return view('layout.header', compact('getmenuforheader'));
    }



    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function edit($id)
    {
        $menu = $this->menu->getByCol($id);
        $pages = $this->page->getPagesList();
        if($menu)
        {
            $getmenu = $this->menu;
            //$blogDescription = $this->blog->getDescriptionById($id);
            // dd($blogtocategories);
            return View('admin.menu.edit',compact('menu','getmenu','id','pages'));
        }
        else
        {
            return redirect()->route('admin_menu')->with('error','Something Went wrong!');
        }
    }

    /**
     * Process the Form Data.
     *
     * @return redirect
     */
    public function addProcess(MenuRequest $request)
    {
        $create_menu = $this->menu->add($request);

        if($create_menu)
        {
            return redirect()->route('admin_menus')->with('success','Menu has been updated successfully!');
        }

        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }



    public function getData()
    {
        $menu = $this->menu->getMenuList();
        return Datatables::of($menu)
            //->editColumn('slug','<a target="_blank" href="{{ URL::to( $slug ) }}">{{ URL::to( $slug ) }}</a>')
            ->editColumn('status','@if($status == "Active") Enable
                                   @else Disable
                                   @endif')
            // ->editColumn('type','@if($type == "1") Page
            //                      @else Custom
            //                      @endif')
            ->editColumn('section','@if($section == "1") Header
                                    @elseif($section == "2") Footer
                                    @elseif($section == "3") Help
                                    @elseif($section == "4") Quick Links
                                    @elseif($section == "5") Partner With Us
                                    @endif')
            ->editColumn('created_at','{{ date("M d Y",strtotime($created_at)) }}')
            ->addColumn('actions',function($menu){
                return '<a class="tab-btn edit" href="'. route("admin_menu_update", ["id"=>$menu->id]) .'"><i class="fa fa-edit" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit BLog"></i> </a>
                                    <a class="trigger_popup_fricc tab-btn delete" href="javascript:;" data-href="'. route("admin_menu_delete", ["id"=>$menu->id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="Delete BLog"></i></a>';
            })
            /*->addColumn('actions','<a href="'. route("admin_blog_update", ["id"=>$id]) .'"><i class="fa fa-edit" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit BLog"></i> </a>
                                    <a href="'. route("admin_blog_delete", ["id"=>$id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="Delete BLog"></i></a>
                                   ')*/
            ->rawColumns(['actions'])
            ->make(true);
    }

    /**
     * Process the Form Data.
     *
     * @return redirects
     */
    public function Editprocess(MenuRequest $request,$menu_id)
    {
        $create_menu = $this->menu->update($request,$menu_id);
        if($create_menu)
        {
            return redirect()->route('admin_menus')->with('success','BLog has been updated successfully!');
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
        $remove = $this->menu->remove($id);
        if($remove)
        {
            return redirect()->route('admin_menus')->with('success','Menu has been updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }

    // public function blogviewforfront(){


    //     $blogview = $this->blog->BlogsListforfront();
    //     $blogviewisfeature = $this->blog->featuredBlogsListforfront();

    //     // dd($blogview->toArray());

    //     return view('page.blog',compact('blogview', 'blogviewisfeature'));

    // }
}
