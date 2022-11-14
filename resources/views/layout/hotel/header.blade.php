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
							<li>

                                <div class="pkg-info">
									<h3>Your Package: <strong class="green">{{ $hotel_user_dashboard_details->title ?? '' }}</strong></h3>
								</div>
                            </li>
							<li>
								<div class="user-info">
									<figure>
										@if(isUserLoggedIn())
										@if(!empty(\Sentinel::getUser()->userimage))
										{{ HTML::image('uploads/accountsetting'.\Sentinel::getUser()->id.'/'.\Sentinel::getUser()->userimage, 'Link Meetings') }}
										@else
										{{ HTML::image('images/user-dash-ava-dmc.png', 'Link Meetings') }}
										@endif
										@endif
									</figure>
									<p>Hi, @if(isUserLoggedIn())
                                            @if( isset( \Sentinel::getUser()->first_name ) &&  isset( \Sentinel::getUser()->last_name ) )
                                                {{ \Sentinel::getUser()->first_name . ' ' . \Sentinel::getUser()->last_name }}
                                            @else
                                                {{ \Sentinel::getUser()->username }}
                                            @endif
                                        @endif  <i class="fa fa-angle-down"></i></p>
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
			<a href="{{ URL::to('/hotel/dashboard') }}">
				{{ HTML::image('images/logo.png', 'Link Meetings') }}
			</a>
		</figure>
		<figure class="logo-shrink">
			<a href="{{ URL::to('/dmc/dashboard') }}">
				{{ HTML::image('images/logo-icon.png', 'Link Meetings') }}
			</a>
		</figure>
		<ul class="shrink-nav">
			<li>
				<i class="icon icon-dash"></i> <a href="{{ route('hotel_dashboard') }}">Dashboard</a>
			</li>
			<li class="drp">
				<i class="icon icon-booking"></i> <a href="javascript:;">Bookings</a> <i class="fa fa-angle-down rht"></i>


				<ul class="submenu">

					<li><a href="{{ route('hotel_booking_proposal_sent') }}">Proposal Sent</a></li>
					<li><a href="{{ route('hotel_pending') }}">Pending</a></li>
					<li><a href="{{ route('hotel_confirmed') }}">Confirmed</a></li>
					<li><a href="{{ route('hotel_cancelled') }}">Canceled</a></li>
				</ul>
			</li>
			<li>
				<i class="icon icon-dmc"></i> <a href="{{ route('manage_hotels') }}">Hotel</a>
			</li>
			<li>
				<i class="icon icon-user-management"></i> <a href="javascript:;">User Management</a>
			</li>
			<li>
				<i class="icon icon-payment"></i> <a href="javascript:;">Payments</a>
			</li>
			{{--<li class="drp">
				<i class="icon icon-advertising"></i> <a href="javascript:;">Advertising</a> <i class="fa fa-angle-down rht"></i>

				<ul class="submenu">
					<li><a href="{{ URL::to('/dmc/create-an-ad') }}">Create An Ad</a> </li>
					<li><a href="{{ URL::to('/dmc/manage-ads') }}">Manage Ads</a></li>
				</ul>
			</li>--}}
			<li>
				<i class="icon icon-report"></i> <a href="javascript:;">Reports</a>
			</li>
			<li>
				<i class="icon icon-activities"></i> <a href="javascript:;">Activities</a>
			</li>
			<li>
                <i class="icon icon-account-setting"></i> <a href="{{ URL::to('/account_settings') }}">Account Settings</a>
            </li>
            <li>
                <i class="icon icon-account-setting"></i> <a href="{{ route('logout') }}">Logout</a>
            </li>
		</ul>
	</aside>









