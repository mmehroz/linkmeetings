<!DOCTYPE HTML>

<html>
	<head>
		<title>@yield('page-title')</title>
		<meta charset="utf-8">

        <meta name="csrf-token" content="{{ csrf_token() }}" />

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Theme CSS -->
		<link rel="icon" type="image/png" href="{{ URL::to('/') }}/images/favicon.png" />
		<link rel="stylesheet" type="text/css" href="{{ asset(mix('/css/app.css')) }}">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		@yield('header-scripts')
		<!--[if lt IE 9]>
			<script src="js/html5/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="@yield('body-class')">
    <div id='app'></div>


	<aside class="dashboard-lft-nav">
		<div class="logo">
			<figure>
				{{ HTML::image('images/logo-admin.png', 'Hoof Trade') }}
			</figure>
		</div>
		<ul class="nav">
			<li {!! ((Route::currentRouteName() == 'admin_dashboard') ? 'class="active"' : '') !!}><a href="{!! route('admin_dashboard') !!}"><i class="fa fa-home" aria-hidden="true"></i> @lang('admin/menu.dashboard')</a></li>

            <li {!! ((Route::currentRouteName() == 'admin_pages' || Route::currentRouteName() == 'admin_page_add' || Route::currentRouteName() == 'admin_page_update') ? 'class="active"' : '') !!}>
                <a href="javascript:;"><i class="fa fa-cube" aria-hidden="true"></i> @lang('admin/menu.pages') <i class="fa fa-angle-right dr" aria-hidden="true"></i></a>
                <ul class="sub-menu">
                    <li {!! ((Route::currentRouteName() == 'admin_pages') ? 'class="active"' : '') !!}>
                        <a href="{!! route('admin_pages') !!}">@lang('admin/menu.list_all')</a></i>
                    </li>
                    <li {!! ((Route::currentRouteName() == 'admin_page_add') ? 'class="active"' : '') !!}>
                        <a href="{!! route('admin_page_add') !!}">@lang('admin/menu.add_new')</a></i>
                    </li>
                </ul>
            </li>

            <li {!! ((Route::currentRouteName() == 'admin_blogs' || Route::currentRouteName() == 'admin_blog_add' || Route::currentRouteName() == 'admin_blog_update') ? 'class="active"' : '') !!}>
                <a href="javascript:;"><i class="fa fa-cube" aria-hidden="true"></i> @lang('admin/menu.blogs') <i class="fa fa-angle-right dr" aria-hidden="true"></i></a>
                <ul class="sub-menu">
                    <li {!! ((Route::currentRouteName() == 'admin_blogs') ? 'class="active"' : '') !!}>
                        <a href="{!! route('admin_blogs') !!}">@lang('admin/menu.list_all')</a></i>
                    </li>
                    <li {!! ((Route::currentRouteName() == 'admin_blog_add') ? 'class="active"' : '') !!}>
                        <a href="{!! route('admin_blog_add') !!}">@lang('admin/menu.add_new')</a></i>
                    </li>
                </ul>
            </li>

			<li>
                <a href="javascript:;"><i class="fa fa-cube" aria-hidden="true"></i> @lang('admin/menu.orders') <i class="fa fa-angle-right dr" aria-hidden="true"></i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{!! URL::to('/') !!}">Orders 1</a></i>
                    </li>
                    <li>
                        <a href="{!! URL::to('/') !!}">Orders 2</a></i>
                    </li>
                </ul>
            </li>


			<li><a href="javascript:;"><i class="fa fa-usd" aria-hidden="true"></i> @lang('admin/menu.payments') <i class="fa fa-angle-right dr" aria-hidden="true"></i></a></li>
			<li><a href="javascript:;"><i class="fa fa-users" aria-hidden="true"></i> @lang('admin/menu.members') <i class="fa fa-angle-right dr" aria-hidden="true"></i></a></li>
			<li><a href="javascript:;"><i class="fa fa-list-alt" aria-hidden="true"></i> @lang('admin/menu.listed_items') <i class="fa fa-angle-right dr" aria-hidden="true"></i></a></li>
			<li><a href="{!! URL::to('/') !!}"><i class="fa fa-question-circle-o" aria-hidden="true"></i> @lang('admin/menu.disputes') <i class="fa fa-angle-right dr" aria-hidden="true"></i></a></li>
			<li><a href="{!! URL::to('/') !!}"><i class="fa fa-file-text-o" aria-hidden="true"></i> @lang('admin/menu.form_requests') <i class="fa fa-angle-right dr" aria-hidden="true"></i></a></li>
			<li><a href="{!! URL::to('/') !!}"><i class="fa fa-user-o" aria-hidden="true"></i> @lang('admin/menu.my_account') <i class="fa fa-angle-right dr" aria-hidden="true"></i></a></li>
			<li {!! ((Route::currentRouteName() == 'site_settings') ? 'class="active"' : '') !!}><a href="{!! route('site_settings') !!}"><i class="fa fa-cog" aria-hidden="true"></i> @lang('admin/menu.site_settings') <i class="fa fa-angle-right dr" aria-hidden="true"></i></a></li>
		</ul>
	</aside>

	<header class="header header-admin">
		<div class="container-fluid">
			<div class="row va-ctr">
				<div class="col-sm-12 plpx-0 header-right">
					<div class="row top-bar va-ctr">
						<div class="col-sm-7">
							<form>
								<input type="text" class="field-s" name="" />
								<input type="submit" value="@lang('admin/account.search')" class="sb-bt">
								<i class="fa fa-search" aria-hidden="true"></i>
							</form>
						</div>
						<div class="col-sm-5 text-right">
							<ul>
								<li><a href="javascript:;"><span>2</span> <i class="fa fa-bell" aria-hidden="true"></i></a></li>
								<li class="drp">{{ HTML::image('images/admin/profile-avator.png', 'Hoof Trade') }} <a href="javascript:;"> @lang('admin/account.hi',['name'=>\Sentinel::getUser()->first_name . ' ' . \Sentinel::getUser()->last_name]) <i class="fa fa-caret-down" aria-hidden="true"></i></a>
									<ul class="sub-menu">
										<li><a href="{!! URL::to('/') !!}">@lang('admin/account.item1')</a></li>
										<li><a href="{!! URL::to('/') !!}">@lang('admin/account.item2')</a></li>
										<li><a href="{!! URL::to('/') !!}">@lang('admin/account.item3')</a></li>
										<li><a href="{!! URL::to('/') !!}">@lang('admin/account.item4') <span>2</span></a></li>
										<li><a href="{!! URL::to('/') !!}">@lang('admin/account.item5')</a></li>
										<li><a href="{!! URL::to('/') !!}">@lang('admin/account.item6')</a></li>
										<li><a href="{!! URL::to('/') !!}">@lang('admin/account.item7')</a></li>
										<li><a href="{!! route('logout') !!}">Logout</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

