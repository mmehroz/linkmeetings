
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
@section('body-class') add-hotel-pg @stop
@section('content')
<?php
// echo $site_setting->quick_link; exit;
    $site_title         = isset($site_setting->site_title) ? $site_setting->site_title : "";
    $quick_link         = isset($site_setting->quick_link) ? $site_setting->quick_link : "";
    $help         = isset($site_setting->help) ? $site_setting->help : "";
    $partner         = isset($site_setting->partner) ? $site_setting->partner : "";
    $subcribe_text         = isset($site_setting->subcribe_text) ? $site_setting->subcribe_text : "";
    $site_email         = isset($site_setting->site_email) ? $site_setting->site_email : "";
    $contact_from_email         = isset($site_setting->contact_from_email) ? $site_setting->contact_from_email : "";
    $contact_to_email         = isset($site_setting->contact_to_email) ? $site_setting->contact_to_email : "";
    $site_phone         = isset($site_setting->site_phone) ? $site_setting->site_phone : "";
    $logo_image         = isset($site_setting->logo_image) ? $site_setting->logo_image : "";
    $logo_image_inner_pages         = isset($site_setting->logo_image_inner_pages) ? $site_setting->logo_image_inner_pages : "";
    $socialmedia_status = isset($site_setting->socialmedia_status) ? $site_setting->socialmedia_status : "";
    $facebook           = isset($site_setting->facebook) ? $site_setting->facebook : "";
    $twitter            = isset($site_setting->twitter) ? $site_setting->twitter : "";
    $linkedin           = isset($site_setting->linkedin) ? $site_setting->linkedin : "";
    $youtube            = isset($site_setting->youtube) ? $site_setting->youtube : "";
    $instagram          = isset($site_setting->instagram) ? $site_setting->instagram : "";
    $googleplus         = isset($site_setting->googleplus) ? $site_setting->googleplus : "";
    $pinterest          = isset($site_setting->pinterest) ? $site_setting->pinterest : "";
    $company_address    = isset($site_setting->company_address) ? $site_setting->company_address : "";
    $google_analytics   = isset($site_setting->google_analytics) ? $site_setting->google_analytics : "";
    $copyright          = isset($site_setting->copyright) ? $site_setting->copyright : "";
    ?>
<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xl-11">
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                @if(is_array(session()->get('success')))
                                    <ul>
                                        @foreach (session()->get('success') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    {{ session()->get('success') }}
                                @endif
                            </div>
                        @endif


                        @if (session('update'))
                            <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong> {{ session('update') }} </strong>
                            </div>
                        @endif
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
                        {!! Form::open(array('route' => 'site_settings_update', 'method' => 'post', 'class' => 'form-horizontal', 'files'=> true)) !!}
							<div class="row">
								<div class="col-xl-8">
									<h2>Site Settings</h2>
                                    <?php
                                     if( isset( $site_title) ) {
                                        $site_title = unserialize($site_title);
                                        $site_title = (object) $site_title;
                                    }

                                    if( isset( $quick_link) ) {
                                        $quick_link = unserialize($quick_link);
                                        $quick_link = (object) $quick_link;
                                    }
                                    if( isset( $help) ) {
                                        $help = unserialize($help);
                                        $help = (object) $help;
                                    }


                                           if( isset( $partner) ) {
                                        $partner = unserialize($partner);
                                        $partner = (object) $partner;
                                    }

                                    if( isset( $subcribe_text) ) {
                                        $subcribe_text = unserialize($subcribe_text);
                                        $subcribe_text = (object) $subcribe_text;
                                    }
                                        ?>

                                    <div class="row">
                                    @foreach( $languages as $language )
                                        <div class="col-sm-4">
                                            <div class="field">
                                                <?php
                                                $iso = $language->{'iso_639-1'};
                                                ?>
                                                <label>@lang('admin/site_settings.site_title') {{ $language->name }}</label>
                                                <input type="text" name="site_title_{{ $iso }}" value="@if( !empty($site_title->{'site_title_'.$iso} )) {{ $site_title->{'site_title_'.$iso}   }} @endif" />
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>

                                    <div class="row">
                                    @foreach( $languages as $language )
                                     <?php
                                                $iso = $language->{'iso_639-1'};
                                                ?>
                                        <div class="col-sm-4">
                                            <div class="field">
                                                <label>@lang('admin/site_settings.quick_link') {{ $language->name }}</label>
                                                <input type="text" name="quick_link_{{ $iso }}" value="@if( !empty($quick_link->{'quick_link_'.$iso} )) {{ $quick_link->{'quick_link_'.$iso}   }} @endif" />
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                    <div class="row">
                                    @foreach( $languages as $language )
                                     <?php
                                                $iso = $language->{'iso_639-1'};
                                                ?>
                                        <div class="col-sm-4">
                                            <div class="field">
                                                <label>@lang('admin/site_settings.help') {{ $language->name }}</label>
                                                <input type="text" name="help_{{ $iso }}" value="@if( !empty($help->{'help_'.$iso} )) {{ $help->{'help_'.$iso}   }} @endif" />
                                            </div>
                                        </div>

                                    @endforeach
                                    </div>

                                    <div class="row">
                                    @foreach( $languages as $language )
                                     <?php
                                                $iso = $language->{'iso_639-1'};
                                                ?>
                                        <div class="col-sm-4">
                                            <div class="field">
                                                <label>@lang('admin/site_settings.partner') {{ $language->name }}</label>
                                                <input type="text" name="partner_{{ $iso }}" value="@if( !empty($partner->{'partner_'.$iso} )) {{ $partner->{'partner_'.$iso}   }} @endif" />
                                            </div>
                                        </div>

                                    @endforeach
                                    </div>

                                    <div class="row">
                                    @foreach( $languages as $language )
                                     <?php
                                                $iso = $language->{'iso_639-1'};
                                                ?>
                                        <div class="col-sm-4">
                                            <div class="field">
                                                <label>@lang('admin/site_settings.subscriber') {{ $language->name }}</label>
                                                <input type="text" name="subcribe_text_{{ $iso }}" value="@if( !empty($subcribe_text->{'subcribe_text_'.$iso} )) {{ $subcribe_text->{'subcribe_text_'.$iso}   }} @endif" />
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>

                                    <!-- <div class="row">
                                        <div class="col-sm-12">
                                            <div class="field">
                                                <label>@lang('admin/site_settings.site_title')</label>
                                                <input type="text" name="site_title" value="" />
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="field">
                                                <label>@lang('admin/site_settings.site_email')</label>
                                                <input type="text" name="site_email" value="{{ old('site_email',$site_email)  }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="field">
                                                <label>@lang('admin/site_settings.Contact_from')</label>
                                                <input type="text" name="contact_from_email" value="{{ old('contact_from_email',$contact_from_email)  }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="field">
                                                <label>@lang('admin/site_settings.Contact_to')</label>
                                                <input type="text" name="contact_to_email" value="{{ old('contact_to_email',$contact_to_email)  }}" />
                                            </div>
                                        </div>
                                    </div>


									<h4>@lang('admin/site_settings.logo_image')</h4>
                                    <div class="row">
										<div class="col-sm-6">
                                            <div class="upload-bx">
												<div class="field file_manager_field">
											    <input type="text" id="thumbnail" name="logo_image" value="{{ old('logo_image', (($logo_image != "") ? asset($logo_image) : "") )  }}" />
                                                    <i class="fa fa-image" aria-hidden="true" id="lfm" data-input="thumbnail" data-preview="holder"></i>
											</div>
										</div>
									</div>
                                </div></br>
                                        <div class="logoplaceholder">
                                            @if($logo_image != "" )
                                                <img src="{{ asset($logo_image) }}" />
                                            @else
                                                <img src="{{ asset('images/logo-f.png') }}" />
                                            @endif
                                        </div>

                                        <h4>@lang('admin/site_settings.logo_image_inner_pages')</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="upload-bx">
                                                    <div class="field file_manager_field">
                                                        <input type="text" id="thumbnail1" name="logo_image_inner_pages" value="{{ old('logo_image_inner_pages', (($logo_image_inner_pages != "") ? asset($logo_image_inner_pages) : "") )  }}" />
                                                        <i class="fa fa-image" aria-hidden="true" id="lfm1" data-input="thumbnail1" data-preview="holder1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></br>
                                        <div class="logoplaceholder">
                                            @if($logo_image_inner_pages != "" )
                                                <img src="{{ asset($logo_image_inner_pages) }}" />
                                            @else
                                                <img src="{{ asset('images/logo.png') }}" />
                                            @endif
                                        </div>


                                    <div class="row">
										<div class="col-sm-12">
											<div class="field">
                                                <label>@lang('admin/site_settings.social_media_status')</label>
                                                <select name="socialmedia_status">
                                                <option value="Active" @if( old('socialmedia_status',$socialmedia_status) == 'Active' ) selected="" @endif>@lang('admin/site_settings.social_media_status_active')</option>
                                                    <option value="Inactive" @if( old('socialmedia_status',$socialmedia_status) == 'Inactive' ) selected="" @endif>@lang('admin/site_settings.social_media_status_inactive')</option>
                                                </select>
											</div>
										</div>
									</div>
                                    <div class="row">
										<div class="col-sm-12">
											<div class="field">
                                                <label>@lang('admin/site_settings.facebook')</label>
                                                <input type="text" name="facebook" value="{{ old('facebook',$facebook)  }}" />
											</div>
										</div>
									</div>
                                    <div class="row">
										<div class="col-sm-12">
											<div class="field">
                                                <label>@lang('admin/site_settings.twitter')</label>
                                                <input type="text" name="twitter" value="{{ old('twitter',$twitter)  }}" />
											</div>
										</div>
									</div>
                                    <div class="row">
										<div class="col-sm-12">
											<div class="field">
                                                <label>@lang('admin/site_settings.linkedin')</label>
                                                <input type="text" name="linkedin" value="{{ old('linkedin',$linkedin)  }}" />
											</div>
										</div>
									</div>
                                    <div class="row">
										<div class="col-sm-12">
											<div class="field">
                                                <label>@lang('admin/site_settings.youtube')</label>
                                                <input type="text" name="youtube" value="{{ old('youtube',$youtube)  }}" />
											</div>
										</div>
									</div>
                                    <div class="row">
										<div class="col-sm-12">
											<div class="field">
                                                <label>@lang('admin/site_settings.instagram')</label>
                                                <input type="text" name="instagram" value="{{ old('instagram',$instagram)  }}" />
											</div>
										</div>
									</div>
                                    <div class="row">
										<div class="col-sm-12">
											<div class="field">
                                                <label>@lang('admin/site_settings.google_plus')</label>
                                                <input type="text" name="googleplus" value="{{ old('googleplus',$googleplus)  }}" />
											</div>
										</div>
									</div>
                                    <div class="row">
										<div class="col-sm-12">
											<div class="field">
                                                <label>@lang('admin/site_settings.pinterest')</label>
                                                <input type="text" name="pinterest" value="{{ old('pinterest',$pinterest)  }}" />
											</div>
										</div>
									</div>
                                    <div class="row">
										<div class="col-sm-12">
											<div class="field">
                                                <label>@lang('admin/site_settings.company_address')</label>
                                                <textarea name="company_address">{{ old('company_address',$company_address) }}</textarea>
											</div>
										</div>
									</div>
                                    <div class="row">
										<div class="col-sm-12">
                                            <div class="field">
                                                <label>@lang('admin/site_settings.google_analytics')</label>
                                                <textarea name="google_analytics">{{ old('google_analytics',$google_analytics) }}</textarea>
                                            </div>
                                        </div>
									</div>
                                    <div class="row">
										<div class="col-sm-12">
                                            <div class="field">
                                                <label>@lang('admin/site_settings.copyright')</label>
                                                <textarea name="copyright">{{ old('copyright',$copyright) }}</textarea>
                                            </div>
                                        </div>
									</div>
                                <div class="row">
                                        <div class="col-sm-5">
                                            <a href="{{ URL::to('/admin/dashboard') }}" class="primary-btn dblue extended">@lang('admin/site_settings.cancel')</a>
                                        </div>
                                        <div class="col-sm-5">
                                        <input type="submit" class="primary-btn dblue extended" value="@lang('admin/site_settings.update_information')">
                                            <!-- <a href="javascript:;" value="@lang('admin/site_settings.update_information')" class="primary-btn dblue extended">Update Information</a> -->
                                        </div>
							        </div>
								</div>


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            {!! Form::close() !!}
		</div>
	</div>
</div>

@endsection

@section('footer_script')
    <script src="{{  asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script>
        var route_prefix = "{{ url('laravel-filemanager') }}";
        $('#lfm').filemanager('image', {prefix: route_prefix});

        var route_prefix = "{{ url('laravel-filemanager') }}";
        $('#lfm1').filemanager('image', {prefix: route_prefix});

        $('#lfm').on('change',function(){
            console.log( $(this).val() );
        })
        $('#lfm1').on('change',function(){
            console.log( $(this).val() );
        })

    </script>
@endsection


