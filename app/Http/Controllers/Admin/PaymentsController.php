<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SubscriberRequest;
use App\Models\Repositories\UserRepository;
use App\Http\Requests\UserEditRequest;
use Illuminate\Support\Str;
use File;
use Yajra\DataTables\DataTables;;
use Mail;

class PaymentsController extends Controller
{
    protected $payments;


    public function __construct( UserRepository $payments)
    {
        $this->users = $users;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        return View('admin.payments.list',compact('users'));
    }
    
    public function edit($id)
    {
        $user = $this->users->getByCol($id);
        return View('admin.user-management.edit',compact('user','id'));
    }

    public function update(UserEditRequest $request, $id)
    {
        $user = $this->users->update($request, $id);
        return redirect()->route('admin_edit_user',['id'=>$id])->with('success','Package has been updated successfully!');
    }    

    public function addUser(Request $request)
    {
        session(['package_id'=>$request->package_id, 'type' =>$request->account_type]);
        $package = $this->users->add( $request );
       return back()->with('success','User added successfully!');
    }

    //BlogRequest
       public function getData()
    {
        $users = $this->users->getAllUsers();

        return Datatables::of($users)
            ->editColumn('full_name','@if( isset($first_name) && isset($last_name) ){{ $first_name }} {{$last_name }} @else {{ $username }} @endif')
            ->editColumn('package','{{ $title }}')
            ->addColumn('actions',function($users){
                return '<a class="tab-btn edit" href="'. route("admin_edit_user", ["id"=>$users->id]) .'"><i class="fa fa-pencil" aria-hidden="true"></i></a><a class="trigger_popup_fricc" href="javascript:;" data-href="'. route("admin_delete_user", ["id"=>$users->id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="Delete BLog"></i></a>
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
            return redirect()->route('admin_manage_users')->with('success','Package has been updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }

}
