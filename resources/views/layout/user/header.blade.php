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
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/dashboard.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
		@yield('header-scripts')
		<!--[if lt IE 9]>
			<script src="js/html5/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="@yield('body-class')">
	<div id='app'></div>


	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 plpx-0">
					<div class="head-left">
						<i class="icon icon-toggle"></i>
						<i class="icon icon-search"></i>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="head-right">
						<ul>
							<li>
								<div class="notification">
									<span>2</span>
									<i class="icon icon-notification"></i>
								</div>
							</li>
{{--							<li>--}}
{{--								<div class="pkg-info">--}}
{{--									<h3>Your Package: <strong class="green">SAPHIRE</strong></h3>--}}
{{--								</div>--}}
{{--							</li>--}}
							<li>
								<div class="user-info">
									<figure>
										{{ HTML::image('images/user-dash-ava.jpg', 'Link Meetings') }}
									</figure>
									<p>Hi,@if(isUserLoggedIn())
                                        @if( isset( \Sentinel::getUser()->first_name ) &&  isset( \Sentinel::getUser()->last_name ) )
                                            {{ \Sentinel::getUser()->first_name . ' ' . \Sentinel::getUser()->last_name }}
                                        @else
                                            {{ \Sentinel::getUser()->username }}
                                        @endif
                                    @endif
									<i class="fa fa-angle-down"></i></p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>


	<aside class="lft-nav">
		<figure class="logo">
			<a href="{{ URL::to('/admin/dashboard') }}">
				{{ HTML::image('images/logo.png', 'Link Meetings') }}
			</a>
		</figure>
		<figure class="logo-shrink">
			<a href="{{ URL::to('/admin/dashboard') }}">
				{{ HTML::image('images/logo-icon.png', 'Link Meetings') }}
			</a>
		</figure>
		<ul class="shrink-nav c-scroll">
			<li>
				<i class="icon icon-dash"></i> <a href="{{ URL::to('/admin/dashboard') }}">Dashboard</a>
			</li>
			<li class="drp">
				<i class="icon icon-booking"></i> <a href="javascript:;">Bookings</a> <i class="fa fa-angle-down rht"></i>

				<ul class="submenu">
					<li><a href="{{ URL::to('/booking-inquries') }}">Inquiries</a> <span class="count">2</span></li>
					<li><a href="{{ URL::to('/booking-proposal-sent') }}">Proposal Sent</a></li>
					<li><a href="{{ URL::to('/booking-pending') }}">Pending</a></li>
					<li><a href="{{ URL::to('/booking-confirmed') }}">Confirmed</a></li>
					<li><a href="{{ URL::to('/booking-canceled') }}">Canceled</a></li>
				</ul>
			</li>
			<li class="drp">
				<i class="icon icon-booking"></i> <a href="javascript:;">Pages</a> <i class="fa fa-angle-down rht"></i>

				<ul class="submenu">
					<li><a href="{{ URL::to('/admin/pages') }}">List All</a></li>
					<li><a href="{{ URL::to('/admin/page/create') }}">Add New</a></li>

				</ul>
			</li>
			<li class="drp">
				<i class="icon icon-booking"></i> <a href="javascript:;">Menu</a> <i class="fa fa-angle-down rht"></i>

				<ul class="submenu">
					<li><a href="{{ URL::to('/admin/menus') }}">List All</a></li>
					<li><a href="{{ URL::to('/admin/menu/create') }}">Add New</a></li>

				</ul>
			</li>
			<li class="drp">
				<i class="icon icon-booking"></i> <a href="javascript:;">Blogs Category</a> <i class="fa fa-angle-down rht"></i>

				<ul class="submenu">
					<li><a href="{{ URL::to('/admin/blogscategory') }}">List All</a></li>
					<li><a href="{{ URL::to('/admin/blogcategory/create') }}">Add New</a></li>

				</ul>
			</li>
			<li class="drp">
				<i class="icon icon-booking"></i> <a href="javascript:;">Blogs</a> <i class="fa fa-angle-down rht"></i>

				<ul class="submenu">
					<li><a href="{{ URL::to('/admin/blogs') }}">List All</a></li>
					<li><a href="{{ URL::to('/admin/blog/create') }}">Add New</a></li>

				</ul>
			</li>
            <li class="drp">
                <i class="icon icon-booking"></i> <a href="javascript:;">Packages</a> <i class="fa fa-angle-down rht"></i>

                <ul class="submenu">
                    <li><a href="{{ URL::to('/admin/packages') }}">List All</a></li>
                    <li><a href="{{ URL::to('/admin/package/create') }}">Add New</a></li>

                </ul>
            </li>
            <li class="drp">
				<i class="icon icon-booking"></i> <a href="javascript:;">Faq Category</a> <i class="fa fa-angle-down rht"></i>

				<ul class="submenu">
					<li><a href="{{ URL::to('/admin/faqcategory') }}">List All</a></li>
					<li><a href="{{ URL::to('/admin/faqcategory/create') }}">Add New</a></li>

				</ul>
			</li>
			<li class="drp">
				<i class="icon icon-booking"></i> <a href="javascript:;">Faqs</a> <i class="fa fa-angle-down rht"></i>

				<ul class="submenu">
					<li><a href="{{ URL::to('/admin/faq') }}">List All</a></li>
					<li><a href="{{ URL::to('/admin/faq/create') }}">Add New</a></li>

				</ul>
			</li>
			<li class="drp">
				<i class="icon icon-booking"></i> <a href="javascript:;">Email Template</a> <i class="fa fa-angle-down rht"></i>

				<ul class="submenu">
					<li><a href="{{ URL::to('/admin/emaillist') }}">List All</a></li>
				</ul>
			</li>
			<li>
				<i class="icon icon-manage-hotel"></i> <a href="{{ URL::to('/manage-hotels') }}">Manage Hotels</a>
			</li>
			<li>
				<i class="icon icon-user-management"></i> <a href="{{ route('admin_manage_users') }}">User Management</a>
			</li>
			<li>
				<i class="icon icon-payment"></i> <a href="{{ URL::to('admin/payments') }}">Payments</a>
			</li>
			<li class="drp">
				<i class="icon icon-advertising"></i> <a href="javascript:;">Advertising</a> <i class="fa fa-angle-down rht"></i>

				<ul class="submenu">
					<li><a href="{{ URL::to('/create-an-ad') }}">Create An Ad</a> </li>
					<li><a href="{{ URL::to('/manage-ads') }}">Manage Ads</a></li>
				</ul>
			</li>
			<li>
				<i class="icon icon-report"></i> <a href="javascript:;">Reports</a>
			</li>
			<li>
				<i class="icon icon-activities"></i> <a href="{{ URL::to('/activities') }}">Activities</a>
			</li>
            <li>
                <i class="icon icon-activities"></i> <a href="{{ URL::to('admin/subscribers') }}">Subscribers</a>
            </li>
			<li>
				<i class="icon icon-account-setting"></i> <a href="{{ URL::to('/account-setting') }}">Account Settings</a>
			</li>
			<li>
				<i class="icon icon-account-setting"></i> <a href="{{ URL::to('admin/site_settings') }}">Site Settings</a>
			</li>
			<li>
				<i class="icon icon-booking"></i>  <a href="{{ URL::to('admin/contacts') }}">Contacts</a>
			</li>
			<li>
				<i class="icon icon-activities"></i> <a href="{{ route('logout') }}">Logout</a>
			</li>
		</ul>
	</aside>
