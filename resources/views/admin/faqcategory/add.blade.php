
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
									<h2>@lang('admin/faqcategory.createfaq')</h2>

									<ul class="tabs">
                                        @foreach($languages as $language)
                                            <li @if($language->id == 1)) active @endif ><a href="javascript:;"  data-target="{{ $language->iso_639-1 . $language->id }}" class="">{{ $language->name }}</a></li>
                                        @endforeach
									</ul>

                                    {!! Form::open(array('route' => 'admin_faqcategory_add_post', 'method' => 'post', 'class' => 'form-horizontal', 'files'=> true)) !!}

                                        @foreach($languages as $language)
                                            <!-- <li><a href="javascript:;" data-target="{{ $language->iso_639-1 . $language->id }}"  class=""></a></li> -->

                                            <div class="tab-content {{ $language->iso_639-1 . $language->id }}" @if($language->id == 1)) style="display: block;" @endif>
                                                <div class="row">
                                                    <div class="col-xl-8">
                                                        
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="field">
                                                                    <label>@lang('admin/faqcategory.faqcategorytitle')</label>
                                                                    <input type="text" value="{{ old('title-'.$language->id) }}" name="title-{{ $language->id }}" placeholder="Faq Category title..." />
                                                                </div>
                                                            </div>
                                                        </div>
                                                      <div class="row">
                                                            <div class="col-sm-5">
                                                                <a href="{{ URL::to('/admin/faqcategory') }}" class="primary-btn dblue extended">Cancel</a>
                                                            </div>
                                                            <div class="col-sm-5">
                                                            <input type="submit" class="primary-btn dblue extended" value="@lang('admin/site_settings.update_information')">
                                                            </div>
                                                        </div>
														
													</div>
                                                </div>
                                            </div>

                                        @endforeach

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

