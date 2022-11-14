
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
                                    <h2>@lang('admin/blog.add')</h2>

                                    <ul class="tabs">
                                        @foreach($languages as $language)
                                        <li @if($language->id == 1)) active @endif ><a href="javascript:;"  data-target="{{ $language->iso_639-1 . $language->id }}" class="">{{ $language->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            {!! Form::open(array('route' => 'admin_blog_add_post', 'method' => 'post', 'class' => 'form-horizontal', 'files'=> true)) !!}

                                @foreach($languages as $language)

                                <div class="tab-content {{ $language->iso_639-1 . $language->id }}" @if($language->id == 1)) style="display: block;" @endif>
                                    <div class="row"><!-- row -->

                                        <div class="col-xl-8"><!-- col-xl-8 -->

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="field">
                                                    <label>@lang('admin/blog.blogtitle')</label>
                                                    <input type="text" value="{{ old('title-'.$language->id) }}" name="title-{{ $language->id }}" placeholder="Blog title here..." />
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="row">
                                            <div class="col-sm-12">
                                                <div class="field">
                                                    <label>@lang('admin/blog.tag')</label>
                                                    <input type="text" value="{{ old('tag-'.$language->id) }}" name="tag-{{ $language->id }}" placeholder="Blog tag here..." />
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="field">
                                                    <label>@lang('admin/blog.shorttitle')</label>
                                                    <input type="text" value="{{ old('short_title-'.$language->id) }}" name="short_title-{{ $language->id }}" placeholder="Page short title here... (Eg: Home)" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="field">
                                                    <label>@lang('admin/blog.blogcontent1')</label>
                                                    <textarea name="content-{{ $language->id }}" class="form-control my-editor">{{ old('content-'.$language->id) }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <a href="{{ URL::to('/admin/blogs') }}" class="primary-btn dblue extended">Cancel</a>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="submit" class="primary-btn dblue extended" value="@lang('admin/site_settings.update_information')">
                                                    <!-- <a href="javascript:;" class="primary-btn dblue extended">Update Information</a> -->
                                                </div>
                                            </div>
                                        </div><!-- col-xl-8 -->


                                        <div class="col-xl-4 rht-sd"><!-- col-xl-4 rht-sd -->

                                            <h4>@lang('admin/blog.bannerimage')</h4>
                                            <label>@lang('admin/blog.pageimage')</label></br></br>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="upload-bx">
                                                        <div class="field file_manager_field">
                                                            <input type="text" id="thumbnail{{ $language->id }}" name="image-{{ $language->id }}" value="{{ old('image-'.$language->id)  }}" />
                                                            <i class="fa fa-image" aria-hidden="true" id="lfm{{ $language->id }}" data-input="thumbnail{{ $language->id }}" data-preview="holder"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            </br>
                                            <h4>@lang('admin/blog.blogattribute')</h4></br>


                                            <div class="show-amm mbpx-20"><!-- show-amm mbpx-20 -->

                                                <label>@lang('admin/blog.status')</label></br></br>
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

                                                <label>@lang('admin/blog.is_feature')</label></br></br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="field mbpx-15">
                                                            <select name="is_feature-{{ $language->id }}">
                                                                <option value="">Select Is Featured</option>
                                                                <option value="1" @if( old('is_feature-'.$language->id) == '1' ) selected="" @endif>Yes</option>
                                                                <option value="0" @if( old('is_feature-'.$language->id) == '0' ) selected="" @endif>No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label>@lang('admin/blog.blogcategory')</label></br></br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="field mbpx-15">
                                                            <select name="blogcategory-{{ $language->id }}">
                                                            @if( !empty($blogtocategories) )
                                                                <option value="">Select Blog Category</option>
                                                                @foreach( $blogtocategories as $category )
                                                                    <option value="{{ $category->id }}">{{ $category->title  }}</option>
                                                                @endforeach
                                                            @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mbpx-20">
                                                    <div class="col-sm-12">
                                                        <h4>@lang('admin/blog.seooptional')</h4></br>
                                                        <div class="col-md-12">
                                                            <div class="field">
                                                                <label>@lang('admin/blog.metatitle')</label>
                                                                <input type="text" name="meta_title-{{ $language->id }}" value="{{ old('meta_title-'.$language->id) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mbpx-20">
                                                    <div class="col-sm-12">
                                                        <div class="col-md-12">
                                                            <div class="field">
                                                                <label>@lang('admin/blog.metakeywords')</label>
                                                                <input type="text" name="meta_keywords-{{ $language->id }}" value="{{ old('meta_keywords-'.$language->id) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mbpx-20">
                                                    <div class="col-sm-12">
                                                        <div class="col-md-12">
                                                            <div class="field">
                                                                <label>@lang('admin/blog.metadescription')</label>
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

