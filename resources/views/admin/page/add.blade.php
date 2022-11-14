
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
                                    <h2>@lang('admin/page.add')</h2>

                                    <ul class="tabs">
                                        @foreach($languages as $language)
                                        <li @if($language->id == 1)) active @endif ><a href="javascript:;"  data-target="{{ $language->iso_639-1 . $language->id }}" class="">{{ $language->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            {!! Form::open(array('route' => 'admin_page_add_post', 'method' => 'post', 'class' => 'form-horizontal', 'files'=> true)) !!}

                                @foreach($languages as $language)

                                <div class="tab-content {{ $language->iso_639-1 . $language->id }}" @if($language->id == 1)) style="display: block;" @endif>
                                    <div class="row"><!-- row -->

                                        <div class="col-xl-8"><!-- col-xl-8 -->

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="field">
                                                        <label>Page Title</label>
                                                        <input type="text" value="{{ old('title-'.$language->id) }}" name="title-{{ $language->id }}" placeholder="Page title here... (Eg: Home Page)">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="field">
                                                        <label>Short Title</label>
                                                        <input type="text" value="{{ old('short_title-'.$language->id) }}" name="short_title-{{ $language->id }}" placeholder="Page short title here... (Eg: Home)" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="field">
                                                        <label>Page Content 1</label>
                                                        <textarea name="content-{{ $language->id }}" class="form-control my-editor">{{ old('content-'.$language->id) }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

{{--                                            <div class="row">--}}
{{--                                                <div class="col-sm-12">--}}
{{--                                                    <div class="field">--}}
{{--                                                        <label>Page Content 2</label>--}}
{{--                                                        <textarea name="short_content-{{ $language->id }}" class="form-control my-editor">{{ old('short_content-'.$language->id) }}</textarea>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="field">
                                                        <label>Page Video (Youtube Embeded URL like: https://www.youtube.com/embed/3h-1h168Blo)</label>
                                                        <input type="text" value="{{ old('page_video') }}" name="page_video-{{ $language->id }}" placeholder="https://www.youtube.com/embed/3h-1h168Blo" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <a href="{{ URL::to('/admin/pages') }}" class="primary-btn dblue extended">Cancel</a>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="submit" class="primary-btn dblue extended" value="@lang('admin/site_settings.update_information')">
                                                    <!-- <a href="javascript:;" class="primary-btn dblue extended">Update Information</a> -->
                                                </div>
                                            </div>
                                        </div><!-- col-xl-8 -->


                                        <div class="col-xl-4 rht-sd"><!-- col-xl-4 rht-sd -->

                                            <h4>Banner Image</h4>
                                            <label>Page Image</label></br></br>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="upload-bx">
                                                        <div class="field file_manager_field">
                                                            <input type="text" id="thumbnail{{ $language->id }}" name="page_image-{{ $language->id }}" value="{{ old('page_image-'.$language->id)  }}" />
                                                            <i class="fa fa-image" aria-hidden="true" id="lfm{{ $language->id }}" data-input="thumbnail{{ $language->id }}" data-preview="holder"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            </br>
                                            <h4>Page Attribute</h4>
                                            <label>Template</label></br></br>

                                            <div class="show-amm mbpx-20"><!-- show-amm mbpx-20 -->

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="field mbpx-15">
                                                            <select name="template-{{ $language->id }}" class="">
                                                                <option value="">Select Template</option>
                                                                @if(!empty(getTemplates()))
                                                                    @foreach(getTemplates() as $name => $template)
                                                                        <option value="{{ $name }}" @if( old('template-'.$language->id) == $name ) selected="" @endif>{{ $template }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label>Status</label></br></br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="field mbpx-15">
                                                            <select name="status-{{ $language->id }}" class="">
                                                                <option value="">Select Status</option>
                                                                <option value="Active" @if( old('status-'.$language->id) == 'Active' ) selected="" @endif>Active</option>
                                                                <option value="Inactive" @if( old('status-'.$language->id) == 'Inactive' ) selected="" @endif>Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mbpx-20">
                                                    <div class="col-sm-12">
                                                        <h4>SEO (Optional)</h4></br>
                                                        <div class="col-md-12">
                                                            <div class="field">
                                                                <label>Meta Title</label>
                                                                <input type="text" name="meta_title-{{ $language->id }}" value="{{ old('meta_title-'.$language->id) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mbpx-20">
                                                    <div class="col-sm-12">
                                                        <div class="col-md-12">
                                                            <div class="field">
                                                                <label>Meta Keywords</label>
                                                                <input type="text" name="meta_keywords-{{ $language->id }}" value="{{ old('meta_keywords-'.$language->id) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mbpx-20">
                                                    <div class="col-sm-12">
                                                       <div class="col-md-12">
                                                            <div class="field">
                                                                <label>Meta Description</label>
                                                                <input type="text" name="meta_description-{{ $language->id }}" value="{{ old('meta_description-'.$language->id) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- show-amm mbpx-20 -->
                                        </div><!-- col-xl-4 rht-sd -->

                                    </div><!-- row -->
                                </div>

                                @endforeach
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

