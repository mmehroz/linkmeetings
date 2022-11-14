<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\EmailTemplateRequest;
use App\EmailTemplate;
use App\Faq;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Sentinel;
use Response;
use Image;
use File;
use Datatables;

class EmailTemplatesController extends AWController {

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        return view('admin.email_templates.index');
    }

    public function data()
    {
        $email_template = EmailTemplate::select(['email_templates.id', 'email_templates.email_template_title', 'email_templates.created_at']);

        return Datatables::of($email_template)
            ->editColumn('created_at','{{ $created_at->diffForHumans() }}')
            ->add_column('actions','<a href="{{ route(\'update/email_template\', $id) }}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit Email Template"></i></a>
                                    
                                   ')
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        $templates = getTemplates();
        $image_fields = ['image'];
        return view('admin.email_templates.create', compact('image_fields', 'templates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postCreate(EmailTemplateRequest $request)
    {
        print_r($request->all());
        $email_template = new EmailTemplate($request->all());
        $email_template->save();

        return redirect('admin/email_template');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getEdit(EmailTemplate $email_template)
    {
        $templates = getTemplates();

        $image_fields = ['image'];

        // print_r($email_template);

        return view('admin.email_templates.edit', compact('email_template', 'templates', 'image_fields'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function postEdit(EmailTemplateRequest $request, EmailTemplate $email_template)
    {
        $email_template->update($request->except('_method'));

        return redirect('admin/email_template');
    }

    /**
     * Remove page.
     *
     * @param $website
     * @return Response
     */
    public function getModalDelete(EmailTemplate $email_template)
    {
        $model = 'email_template';
        $confirm_route = $error = null;
        try {
            $confirm_route =  route('delete/email_template',['id'=>$email_template->id]);
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = trans('EmailTemplate/message.error.delete', compact('id'));
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function getDelete(EmailTemplate $email_template)
    {
        $email_template->delete();
        return redirect('admin/email_template');
    }

}
