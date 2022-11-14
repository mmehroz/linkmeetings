@extends('layout.user.master')
@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop
@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop
@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!} 
@stop
@section('header-scripts')
    <link href="{{ asset('tinymce/skins/lightgray/skin.min.css') }}" type="text/css" rel="stylesheet" />
@endsection
@section('body-class') acc-dt @stop
@section('content')
<div class="content-area">
	<div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<div class="panel">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xl-11">	
						
                            @if (count($errors) > 0)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <div class="error">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
							<div class="col-sm-12">
								<h2>@lang('admin/emailtemplate.editemail')</h2>
                                    {!! Form::open(array('route' => array('admin_email_update_post',$id), 'method' => 'post', 'class' => 'form-horizontal', 'files'=> true)) !!}
                                        <?php
                                            $email_description = $getemailtemplate->getDescriptionById($id);
                                           
                                            $gettittile;
                                            $getdescription;
                                            if ($email_description) {
                                                $gettittile     = $email_description->email_template_title;
                                                $getdescription = $email_description->email_template_content;
                                            }else{
                                                $gettittile     = "";
                                                $getdescription = "";
                                            }

                                        ?>
                                             <div>
                                                <div class="row">
                                                    <div class="col-xl-8">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="field">
                                                                    <label>@lang('admin/emailtemplate.emailtitle')</label>
                                                                    <input type="text" value="{{ old('title',$gettittile) }}" name="title" placeholder="Email title..." />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="field">
                                                                    <label>@lang('admin/emailtemplate.emailcontent')</label>
                                                          
                                                                    <textarea name="description" class="form-control my-editor" >{{ old('description',$getdescription) }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <a href="{{ URL::to('/admin/emaillist') }}" class="primary-btn dblue extended">Cancel</a>
                                                            </div>
                                                            <div class="col-sm-5">
                                                            <input type="submit" class="primary-btn dblue extended" value="@lang('admin/site_settings.update_information')">
                                                            </div>
                                                        </div>
													</div>
                                                    <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="field">
                                                                    <label style="color: red">@lang('admin/emailcontent.a2') - @lang('admin/emailcontent.a1')</label>
                                                                    @if($email_description->slug == "sign-up-to" || $email_description->slug == "successfully-register-as-meeting-planner" || $email_description->slug == "thanks-to-sign-up")
                                                                    <label style="color: red">@lang('admin/emailcontent.b2') - @lang('admin/emailcontent.b1')</label>
                                                                    @endif
                                                                    @if($email_description->slug == "sign-up-to")
                                                                    <label style="color: red">@lang('admin/emailcontent.c2') - @lang('admin/emailcontent.c1')</label>
                                                                    @endif
                                                                    @if($email_description->slug == "sign-up-to")
                                                                    <label style="color: red">@lang('admin/emailcontent.d2') - @lang('admin/emailcontent.d1')</label>
                                                                    @endif
                                                                    @if($email_description->slug == "successfully-list-a-hotel" || $email_description->slug == "successfully-list-a-hotel-as-bankdraft" || $email_description->slug == "company-thanks-to-sign-up" || $email_description->slug == "company-successfully-list-hotel")
                                                                    <label style="color: red">@lang('admin/emailcontent.e2') - @lang('admin/emailcontent.e1')</label>
                                                                    @endif
                                                                    @if($email_description->slug == "successfully-list-a-hotel" || $email_description->slug == "company-successfully-list-hotel")
                                                                    <label style="color: red">@lang('admin/emailcontent.f2') - @lang('admin/emailcontent.f1')</label>
                                                                    @endif
                                                                    @if($email_description->slug == "successfully-list-a-hotel" || $email_description->slug == "successfully-list-a-hotel-as-bankdraft" || $email_description->slug == "company-successfully-list-hotel")
                                                                    <label style="color: red">@lang('admin/emailcontent.g2') - @lang('admin/emailcontent.g1')</label>
                                                                    @endif
                                                                    @if($email_description->slug == "successfully-list-a-hotel" || $email_description->slug == "company-successfully-list-hotel")
                                                                    <label style="color: red">@lang('admin/emailcontent.h2') - @lang('admin/emailcontent.h1')</label>
                                                                    @endif
                                                                    @if($email_description->slug == "successfully-list-a-hotel-as-bankdraft")
                                                                    <label style="color: red">@lang('admin/emailcontent.i2') - @lang('admin/emailcontent.i1')</label>
                                                                    @endif
                                                                    @if($email_description->slug == "successfully-list-a-hotel-as-bankdraft")
                                                                    <label style="color: red">@lang('admin/emailcontent.j2') - @lang('admin/emailcontent.j1')</label>
                                                                    @endif
                                                                    @if($email_description->slug == "user-account-created")
                                                                    <label style="color: red">@lang('admin/emailcontent.k2') - @lang('admin/emailcontent.k1')</label>
                                                                    @endif
                                                                    @if($email_description->slug == "user-account-created")
                                                                    <label style="color: red">@lang('admin/emailcontent.l2') - @lang('admin/emailcontent.l1')</label>
                                                                    @endif
                                                                    @if($email_description->slug == "user-account-created")
                                                                    <label style="color: red">@lang('admin/emailcontent.m2') - @lang('admin/emailcontent.m1')</label>
                                                                    @endif
                                                                    @if($email_description->slug == "user-account-deactivated" || $email_description->slug == "user-account-activated")
                                                                    <label style="color: red">@lang('admin/emailcontent.n2') - @lang('admin/emailcontent.n1')</label>
                                                                    @endif
                                                                    @if($email_description->slug == "user-account-activated")
                                                                    <label style="color: red">@lang('admin/emailcontent.o2') - @lang('admin/emailcontent.o1')</label>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>				
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
@section('footer_script')
    <style>
        .template_attributes
        {
            display:none;
        }
    </style>
    <script src="{{ asset('/tinymce/tinymce_new.min.js') }}"></script>
    <script>
        var editor_config = {
            path_absolute : "{{ url('/') }}/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            }, {
                title: 'Test template 2',
                content: 'Test 2'
            }],
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            },
        };

		tinymce.init(editor_config);
    </script>

    <script src="{{  asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script>
        var route_prefix = "{{ url('laravel-filemanager') }}";
        $('#lfm').filemanager('image', {prefix: route_prefix});
        $('#lfm2').filemanager('image', {prefix: route_prefix});
        $('#lfm3').filemanager('image', {prefix: route_prefix});
        $('#lfm4').filemanager('image', {prefix: route_prefix});
        $('#lfm5').filemanager('image', {prefix: route_prefix});
        $('#lfm6').filemanager('image', {prefix: route_prefix});
        $('#lfm7').filemanager('image', {prefix: route_prefix});
        $('#lfm8').filemanager('image', {prefix: route_prefix});
        $('#lfm9').filemanager('image', {prefix: route_prefix});
        $('#lfm10').filemanager('image', {prefix: route_prefix});

        $(document).ready(function(){
            $('.template_attributes').hide();
            var check_template = $('.template_trigger').val();
            if(check_template)
            {
                var template_class          = '.'+check_template + 'template';
                var template_attributes     = $( template_class ).length;
                if(template_attributes)
                {
                    $(template_class).show();
                }
            }

            $('.template_trigger').on('change',function(){

                var template                = $(this).val();
                var template_class          = '.'+template + 'template';
                var template_attributes     = $( template_class ).length;

                $('.template_attributes').hide();

                if(template_attributes)
                {
                    $(template_class).show();
                }

            })
        })
    </script>
@endsection

