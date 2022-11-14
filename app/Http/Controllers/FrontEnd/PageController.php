<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Http\Requests\PageRequest;
use App\Models\Repositories\PageRepository;
use App\Models\Repositories\PackageRepository;
use App\Http\Requests\SingupRequest;
use App\Models\Repositories\HotelRepository;
use App\Models\Repositories\SiteSettingRepository;
use App\Models\Repositories\BlogRepository;
use Illuminate\Support\Str;

use Yajra\DataTables\DataTables;;


use Notification;
use App\Notifications\notificationsToUsers;

class PageController extends Controller
{
    protected $page;

    protected $siteSetting;

    protected $blog;

    public function __construct(PageRepository $page, SiteSettingRepository $siteSetting, BlogRepository $blog, PackageRepository $package, HotelRepository $hotels)
    {
        $this->page         = $page;

        $this->siteSetting  = $siteSetting;


        $this->blog         = $blog;

        $this->package      = $package;
        $this->hotels       = $hotels;
        
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
        {
            $language_id = getlanguage()->id;
            $home_page = $this->page->getByCol('home','slug');
            $hotels = $this->hotels->getFeaturedHotel();
            if($home_page)
            {
                $pageContent    =   $this->page->getFrontPageBySlug($home_page->slug);

                if($pageContent)
                {
                    return view('frontend.template.'.$home_page->slug,compact('pageContent','hotels','language_id'));
                }
                else
                    return page_404();
            }
            else
                return page_404();
        }

    public function page($slug)
    {
        $page       = $this->page->getByCol($slug,'slug');
      // exit;
        $language_id = getlanguage()->id;
        if($page)
        {
            $pageContent    =   $this->page->getFrontPageBySlug($page->slug);
            $hotels         =   $this->package->getPackageListforpage('Hotel');
            $dmcs           =   $this->package->getPackageListforpage('DMC');
             $featuredhotels =   $this->hotels->getFeaturedHotel();
            $allhotels      =   $this->hotels->getAllhotels();


            if($pageContent)
            {
               return view('frontend.template.'.$page->slug,compact('pageContent','hotels','dmcs','featuredhotels','allhotels','language_id'));
            }
            else
                return page_404();
        }
        else
            return page_404();
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
    public function getData( Request $request)
    {
        $pages = $this->page->getPagesList( $request );
        return Datatables::of($pages)
            ->editColumn('slug','<a target="_blank" href="{{ URL::to( ($slug == "home") ? "/" : $slug ) }}">{{ URL::to( ($slug == "home") ? "/" : $slug ) }}</a>')
            ->editColumn('status','@if($status == "Active")
                                Enable
                            @else
                                Disable
                            @endif')
            ->editColumn('created_at','{{ date("M d Y",strtotime($created_at)) }}')
            ->addColumn('actions','<a href="'. route("admin_page_update", ["id"=>$id]) .'"><i class="fa fa-edit" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit page"></i> </a>
                                    <a href="'. route("admin_page_delete", ["id"=>$id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="Delete Page"></i></a>
                                   ')
            ->rawColumns(['slug','actions'])
            ->make(true);
    }

    /**
     * Process the Form Data.
     *
     * @return redirect
     */
    public function Editprocess(PageRequest $request)
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

    public function forms(FormsRequest $request)
    {
        $siteSetting       = $this->siteSetting->getByCol(1);
        $result = $this->forms->add($request);
                $data = array(
                'user_type'     => 'admin',
                'toEmail'       =>  $siteSetting->site_email, //Admin Email 'musharibdigitonics@gmail.com',
                'toName'        =>  $siteSetting->site_title, //Admin
                'phone'         =>   $request->phone_number,
                'fromEmail'     =>  $request->email_address,
                'fromName'      =>  $request->full_name,
                'subject'       =>  '[Notification] '.ucfirst( str_replace('-', ' ', $request->type)).' Form has submitted.',
                );

        if(!empty( $result ))
            sendEmail($data);

        return back()->with('success','Requests submitted successfully!');
    }
}

