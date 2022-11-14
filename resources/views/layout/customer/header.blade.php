<!DOCTYPE HTML>

<html>
	<head>
		<title>@yield('page-title')</title>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Theme CSS -->
		<link rel="icon" type="image/png" href="{{ URL::to('/') }}/images/favicon.png" />
		<link href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/app.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
		@yield('header-scripts')
		<!--[if lt IE 9]>
			<script src="js/html5/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="@yield('body-class')">

	<header class="header">
		<div class="container">
			<div class="row va-end">
				<div class="col-sm-5 col-md-3 col-6">
						<figure class="logo">
							<a href="{{ URL::to('/') }}">
								@if( !empty($site_setting->logo_image) )
									{{ HTML::image(URL::to('/').$site_setting->logo_image, 'Link Meetings') }}
								@else
									{{ HTML::image('images/logo.png', 'Link Meetings') }}
								@endif
							</a>
						</figure>
						<figure class="inner-logo">
							<a href="{{ URL::to('/') }}">
								@if( !empty($site_setting->logo_image) )
									{{ HTML::image(URL::to('/').$site_setting->logo_image, 'Link Meetings') }}
								@else
									{{ HTML::image('images/logo.png', 'Link Meetings') }}
								@endif
							</a>
						</figure>
				</div>





				<div class="col-sm-7 col-md-9 col-6 text-right">
					<ul class="navigation top">
						<li class="lang-altr">
							<select id="flagstrap-KVwck5hb" name="country" style="display: none;"><option></option><option value="US" selected="selected">English</option><option value="ES">Spanish</option><option value="PT">Portuguese</option></select>

							<button type="button" data-toggle="dropdown" id="flagstrap-drop-down-KVwck5hb" class="btn btn-default btn-md dropdown-toggle" aria-expanded="false">
                                <?php
                                    $lang   = getlanguage();
                                    $locale = $lang->{'iso_639-1'};
                                ?>
                                <span class="flagstrap-selected-KVwck5hb"><i class="flagstrap-icon @if($locale == 'en') flagstrap-us @else flagstrap-{{$locale}} @endif" style="margin-right: 10px;"></i>{{ $lang->name }}</span><span class="fa fa-angle-down" style="margin-left: 10px;"></span>
                            </button>

							<ul id="flagstrap-drop-down-KVwck5hb-list" aria-labelled-by="flagstrap-drop-down-KVwck5hb" class="dropdown-menu filter-content" style="height: auto; max-height: 250px; display: none; overflow-x: hidden;">
								<li><a data-val="" ><i class="flagstrap-icon flagstrap-" style="margin-right: 10px;"></i></a></li>
                                @if($languages->count())
                                    @foreach($languages as $language)
                                        @if($language->{'iso_639-1'} != $locale)
                                            <li><a href="{{ URL::to('/') }}/lang/{{ $language->{'iso_639-1'} }}" aria-selected="true" ><i class="flagstrap-icon @if($language->{'iso_639-1'} == 'en') flagstrap-us @else flagstrap-{{ $language->{'iso_639-1'} }}  @endif" style="margin-right: 10px;"></i>{{ $language->name }}</a></li>
                                        @endif
                                    @endforeach
                                @endif
							</ul>
						</li>
					</ul>

					<ul class="navigation">
					<li><a href="{{ URL::to('/destinations') }}">Destinations</a></li>
					<li><a href="{{ URL::to('/promotions') }}">Promotions</a></li>
					<li><a href="{{ URL::to('/blog') }}">Blog</a></li>
					<li><a href="{{ URL::to('/contact') }}">Contact</a></li>
					@if( isUserLoggedIn() || session()->get('email') )
						<li><a href="{{ route('logout') }}">Logout</a></li>
					@else
						<li><a href="{{ route('login') }}">Login</a></li>
					@endif
						<li class="lang-altr showRes">
							<div class="lang-drop" data-input-name="country" data-selected-country="US"></div>
						</li>
						<li class="mb-drp"><a href="javascript:;"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
					</ul>
					<div class="logged-in-info">
						<figure>
						<?php
						$getdetails = isUserLoggedIn();
						// dd($getdetails);
						if ($getdetails == false) {
							?>
							{{ HTML::image(session()->get('image'), 'Link Meetings') }}
							<?php
						}else{
						$useremail = $getdetails['email'];
						 $userimage = DB::table('users')
						 ->where('email', '=',$useremail)
						 ->select('users.userimage','users.id')
						 ->first();
						 // dd($userimage);
						 if (isset($userimage)) {
						 if($userimage->userimage != ""){
						?>
							{{ HTML::image('uploads/customers'.$userimage->id.'/'.$userimage->userimage, 'Link Meetings') }}
						<?php
						 }}else{
						?>
						{{ HTML::image(session()->get('image'), 'Link Meetings') }}
						<?php
						}}
						?>
						</figure>
						<span> <small>{{session()->get('name')}}</small>
						<i class="fa fa-caret-down"></i></span>
					</div>
				</div>
				<div class="col-12 showRes ">
					<div class="nav">
						<ul class="navigation">
							<li><a href="{{ URL::to('/search-results') }}">Destinations</a></li>
							<li><a href="javascript:;">Promotions</a></li>
							<li><a href="{{ URL::to('/blog') }}">Blog</a></li>
							<li><a href="{{ URL::to('/contact') }}">Contact</a></li>
							<li><a href="{{ URL::to('/list-your-hotel') }}">List Your hotel</a></li>
							<li class="logged"><a href="{{ URL::to('/list-your-dmc') }}">List Your DMC</a></li>
							<li class="logged"><a href="{{ URL::to('/signup-meeting-planner') }}">Sign Up as Meeting Planner</a></li>
							<li class="mr-0 logged"><a href="{{ URL::to('/login') }}">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>

