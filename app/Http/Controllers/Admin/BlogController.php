<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Models\Repositories\BlogRepository;
use App\Models\Repositories\BlogCategoryRepository;
use App\Models\BlogToCategories;
use Illuminate\Support\Str;
use File;
use Yajra\DataTables\DataTables;;

class BlogController extends Controller
{
    protected $blog;
    protected $bcr;

    public function __construct(BlogRepository $blog,BlogToCategories $blogToCategories,BlogCategoryRepository $bcr)
    {
        $this->blog = $blog;
        $this->bcr = $bcr;
        $this->blogToCategories = $blogToCategories;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        return View('admin.blog.list');
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function add()
    {
        $blogtocategories = $this->bcr->getcategoryBlogsList()->get();
        return View('admin.blog.add',compact('blogtocategories'));

    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function edit($id)
    {
        $blog = $this->blog->getByCol($id);
        $blogtocategories = $this->bcr->getcategoryBlogsList()->get();
        if($blog)
        {
            $getblog = $this->blog;
            //$blogDescription = $this->blog->getDescriptionById($id);
            $blogcate = $this->blog->getcategoriesById($id);
            // dd($blogtocategories);
            return View('admin.blog.edit',compact('blog','getblog','id','blogtocategories','blogcate'));
        }
        else
        {
            return redirect()->route('admin_blogs')->with('error','Something Went wrong!');
        }
    }

    /**
     * Process the Form Data.
     *
     * @return redirect
     */
    public function addProcess(BlogRequest $request)
    {
        $create_blog = $this->blog->add($request);

        if($create_blog)
        {
            return redirect()->route('admin_blogs')->with('success','Blog has been updated successfully!');
        }

        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }

    //BlogRequest
    public function getData()
    {
        $blogs = $this->blog->getBlogsList();
        return Datatables::of($blogs)
            //->editColumn('slug','<a target="_blank" href="{{ URL::to( $slug ) }}">{{ URL::to( $slug ) }}</a>')
            ->editColumn('status','@if($status == "Active")
                                Enable
                            @else
                                Disable
                            @endif')
            ->editColumn('is_feature','@if($is_feature == "0")
                            No
                        @else
                            Yes
                        @endif')
            ->editColumn('created_at','{{ date("M d Y",strtotime($created_at)) }}')
            ->addColumn('actions',function($blogs){
                return '<a class="tab-btn edit" href="'. route("admin_blog_update", ["id"=>$blogs->id]) .'"><i class="fa fa-edit" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit BLog"></i> </a>
                                    <a class="trigger_popup_fricc tab-btn delete" href="javascript:;" data-href="'. route("admin_blog_delete", ["id"=>$blogs->id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="Delete BLog"></i></a>';
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
    public function Editprocess(BlogRequest $request,$blog_id)
    {
        $create_blog = $this->blog->update($request,$blog_id);
        if($create_blog)
        {
            return redirect()->route('admin_blogs')->with('success','BLog has been updated successfully!');
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
        $remove = $this->blog->remove($id);
        if($remove)
        {
            return redirect()->route('admin_blogs')->with('success','Page has been updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }

    public function blogviewforfront(){

        $featured_blogs = $this->blog->getAll(['is_feature'=>'1']);
        $blogs          = $this->blog->getBlogPagination();
        $blog_repo      = $this->blog;


        $blogview = $this->blog->BlogsListforfront();
        $blogviewisfeature = $this->blog->featuredBlogsListforfront();

        // dd($blogview->toArray());

        return view('page.blog',compact('blog_repo','featured_blogs','blogs'));

    }

    public function blogdetailsforfront($request){

//dd($this->blog->getFrontPageBySlug($request));
        $featured_blogs = $this->blog->getFrontPageBySlug($request);
        $blogs          = $this->blog->getBlogPagination();
        $blog_repo      = $this->blog;

        $blogview = $this->blog->BlogsListforfront();
        $blogviewisfeature = $this->blog->featuredBlogsListforfront();


        return view('page.blog-detail',compact('blog_repo','featured_blogs','blogs'));

    }
}
