<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Repositories\PackageRepository;
use Illuminate\Http\Request;
use App\Http\Requests\PackageRequest;
use App\Models\PackageDescription;
use Illuminate\Support\Str;
use File;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;


class PackageController extends Controller
{
    protected $package;

    public function __construct(PackageRepository $package,PackageDescription $packageDescription)
    {
        $this->package = $package;
        $this->packageDescription = $packageDescription;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        return View('admin.package.list');
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function add()
    {
       return view('admin.package.add');
    }




    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function edit($id)
    {
        $package = $this->package->getByCol($id);
//        $pages = $this->page->getPagesList();
        if($package)
        {
            $getpackage = $this->package;
            return View('admin.package.edit',compact('package','getpackage','id'));
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
    public function addProcess(PackageRequest $request)
    {
        $create_package = $this->package->add($request);

        if($create_package)
        {
            return redirect()->route('admin_packages')->with('success','Package has been updated successfully!');
        }

        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }



    public function getData()
    {
        $package = $this->package->getPackageList();
        return Datatables::of($package)
            ->editColumn('created_at','@if($created_at != NULL) {{ $created_at->diffForHumans() }} @else {{ date("d M Y") }} @endif')
            ->addColumn('actions',function($package){
                return '<a href="'. route("admin_package_update", ["id"=>$package->id]) .'"><i class="fa fa-edit" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit BLog"></i> </a>
                                    <a class="trigger_popup_fricc" href="javascript:;" data-href="'. route("admin_package_delete", ["id"=>$package->id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="Delete BLog"></i></a>';
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
    public function Editprocess(PackageRequest $request,$package_id)
    {
        $create_package = $this->package->update($request,$package_id);
        if($create_package)
        {
            return redirect()->route('admin_packages')->with('success','Package has been updated successfully!');
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
        $remove = $this->package->remove($id);
        if($remove)
        {
            return redirect()->route('admin_packages')->with('success','Package has been updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }



}
