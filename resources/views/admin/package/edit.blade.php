

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

<div class="content-area"> <!-- content area -->
    <div class="container-fluid"> <!-- container fluid -->
        <div class="row"> <!--  row -->
            <div class="col-12"> <!-- col 12 -->
                <div class="panel"> <!-- panel -->
                    <div class="row"> <!-- row -->
                        <div class="col-md-12 col-sm-12 col-xl-11">	<!-- col-md-12 col-sm-12 col-xl-11 -->

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
                                    </div>
                                </div>
                            @endif



                            <div class="row">
                                <div class="col-xl-8">
                                    <h2>@lang('admin/package.edit')</h2>

                                </div>
                            </div>

                            {!! Form::open(array('route' => array('admin_package_update_post',$id), 'method' => 'post', 'class' => 'form-horizontal', 'files'=> true)) !!}

                                <div class="row"><!-- row -->

                                    <div class="col-xl-8"><!-- col-xl-8 -->

                                        <ul class="tabs">
                                            @foreach($languages as $language)
                                                <li @if($language->id == 1)) active @endif ><a href="javascript:;"  data-target="{{ $language->iso_639-1 . $language->id }}" class="">{{ $language->name }}</a></li>
                                            @endforeach
                                        </ul>

                                        @foreach($languages as $language)

                                            <?php $package_description = $getpackage->getDescriptionById($id,$language->id); ?>

                                            <div class="tab-content {{ $language->iso_639-1 . $language->id }}" @if($language->id == 1)) style="display: block;" @endif>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="field">
                                                            <label>@lang('admin/package.title')</label>
                                                            <input type="text" value="{{ old('title-'.$language->id,$package_description->title) }}" name="title-{{ $language->id }}" placeholder="Package title here...">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="field">
                                                            <label>@lang('admin/package.shorttitle')</label>
                                                            <input type="text" value="{{ old('short_title-'.$language->id,$package_description->short_title) }}" name="short_title-{{ $language->id }}" placeholder="Package short title here..." />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="field">
                                                            <label>@lang('admin/package.details')</label>
                                                            <textarea name="details-{{ $language->id }}" class="form-control my-editor">{{ old('details-'.$language->id,$package_description->details) }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div><!-- col-xl-8 -->

                                    <div class="col-xl-4 rht-sd"><!-- col-xl-4 -->
                                        <div class="rht-title">
                                            <h4>@lang('admin/package.attributes')</h4>
                                        </div>

                                        <div class="rht-box">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="field">
                                                        <label>@lang('admin/package.price')</label>
                                                        <input type="number" value="{{ old('price',$package->price) }}" name="price" placeholder="@lang('admin/package.price')" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="field">
                                                        <label>@lang('admin/package.week_deal_posting')</label>
                                                        <input type="number" value="{{ old('week_deal_posting',$package->week_deal_posting) }}" name="week_deal_posting" placeholder="@lang('admin/package.week_deal_posting')" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="field">
                                                        <label>@lang('admin/package.email_blast')</label>
                                                        <input type="number" value="{{ old('email_blast',$package->email_blast) }}" name="email_blast" placeholder="@lang('admin/package.email_blast')" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="field">
                                                        <label>@lang('admin/package.promo_article')</label>
                                                        <input type="number" value="{{ old('promo_article',$package->promo_article) }}" name="promo_article" placeholder="@lang('admin/package.promo_article')" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="field">
                                                        <label>@lang('admin/package.landing_page_posting')</label>
                                                        <input type="number" value="{{ old('landing_page_posting',$package->landing_page_posting) }}" name="landing_page_posting" placeholder="@lang('admin/package.landing_page_posting')" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label>@lang('admin/package.type')</label>
                                                    <div class="field">
                                                        <select name="type" class="">
                                                            <option value="">@lang('admin/package.selecttype')</option>
                                                            <option value="Hotel" @if( old('type',$package->type) == 'Hotel' ) selected="" @endif>Hotel</option>
                                                            <option value="DMC" @if( old('type',$package->type) == 'DMC' ) selected="" @endif>DMC</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label>@lang('admin/package.status')</label>
                                                    <div class="field">
                                                        <select name="status" class="">
                                                            <option value="">@lang('admin/package.selectstatus')</option>
                                                            <option value="Active" @if( old('status',$package->status) == 'Active' ) selected="" @endif>@lang('admin/package.status_options.active')</option>
                                                            <option value="Inactive" @if( old('status',$package->status) == 'Inactive' ) selected="" @endif>@lang('admin/package.status_options.inactive')</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-5">
                                        <a href="{{ URL::to('/admin/packages') }}" class="primary-btn dblue extended">@lang('admin/package.cancel')</a>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="submit" class="primary-btn dblue extended" value="@lang('admin/site_settings.update_information')">
                                        <!-- <a href="javascript:;" class="primary-btn dblue extended">Update Information</a> -->
                                    </div>
                                </div>

                            {!! Form::close() !!}
                        </div><!-- col-md-12 col-sm-12 col-xl-11 -->
                    </div><!-- row -->
                </div><!-- panel -->
            </div><!-- col 12 -->
        </div><!--  row -->
    </div><!-- container fluid -->
</div><!-- content area -->
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
        @foreach($languages as $language)
            $('#lfm{{ $language->id }}').filemanager('image', {prefix: route_prefix});
        @endforeach


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
