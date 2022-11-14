<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SubscriberRequest;
use App\Models\Repositories\SubscriberRepository;
use Illuminate\Support\Str;
use App\Models\Subscriber;
use File;
use Yajra\DataTables\DataTables;
use Mail;

class SubscriberController extends Controller
{
    protected $subscriber;


    public function __construct(SubscriberRepository $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        return View('admin.subscriber.list');
    }

    public function getdata(){

        $getdetails = $this->subscriber->getsubscriberlist();
       return Datatables::of($getdetails)
           ->editColumn('created_at','{{ date("M d Y",strtotime($created_at)) }}')
            ->make(true);
    }

    public function addProcess(SubscriberRequest $request)
    {
        $create_subscriber = $this->subscriber->add($request);

        if($create_subscriber)
        {
             return redirect()->back()->with('message', 'Subscribed successfully!');
        }

        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }




}
