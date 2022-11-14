
@extends('layout.customer.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!} 
@stop
@section('body-class') inner-pg logged-in my-account-pg @stop
@section('content')



<section class="main-sec">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h2 class="main">My Account</h2>
			</div>

			<div class="col-md-3">
				@include('layout.customer.usernav')
				@yield('usernav')
			</div>

			<div class="col-md-9">
				<div class="row">
					<div class="col-md-6 col-lg-4 rm">
						<div class="rfp-bx">
							<h3>Veeti Seppanen</h3>
							<h4>28 Mar, 2020 - 08 Apr, 2020</h4>
							<ul>
								<li>
									<i class="ico c-rooms"></i>
									<span>10 Rooms</span>
								</li>
								<li>
									<i class="ico c-guest"></i>
									<span>20 Guests</span>
								</li>
							</ul>
							<p>Created on: 12 Mar. 2020</p>
							<a href="javascrip:;" class="rm-rfp">Remove</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 rm">
						<div class="rfp-bx">
							<h3>Veeti Seppanen</h3>
							<h4>14 Feb, 2020 - 20 Feb, 2020</h4>
							<ul>
								<li>
									<i class="ico c-rooms"></i>
									<span>20 Rooms</span>
								</li>
								<li>
									<i class="ico c-guest"></i>
									<span>40 Guests</span>
								</li>
							</ul>
							<p>Created on: 04 Feb. 2020</p>
							<a href="javascrip:;" class="rm-rfp">Remove</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 rm">
						<div class="rfp-bx">
							<h3>Veeti Seppanen</h3>
							<h4>18 Jan, 2020 - 24 Jan, 2020</h4>
							<ul>
								<li>
									<i class="ico c-rooms"></i>
									<span>6 Rooms</span>
								</li>
								<li>
									<i class="ico c-guest"></i>
									<span>6 Guests</span>
								</li>
							</ul>
							<p>Created on: 01 Jan. 2020</p>
							<a href="javascrip:;" class="rm-rfp">Remove</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 rm">
						<div class="rfp-bx">
							<h3>Veeti Seppanen</h3>
							<h4>28 Mar, 2020 - 08 Apr, 2020</h4>
							<ul>
								<li>
									<i class="ico c-rooms"></i>
									<span>10 Rooms</span>
								</li>
								<li>
									<i class="ico c-guest"></i>
									<span>20 Guests</span>
								</li>
							</ul>
							<p>Created on: 12 Mar. 2020</p>
							<a href="javascrip:;" class="rm-rfp">Remove</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 rm">
						<div class="rfp-bx">
							<h3>Veeti Seppanen</h3>
							<h4>14 Feb, 2020 - 20 Feb, 2020</h4>
							<ul>
								<li>
									<i class="ico c-rooms"></i>
									<span>20 Rooms</span>
								</li>
								<li>
									<i class="ico c-guest"></i>
									<span>40 Guests</span>
								</li>
							</ul>
							<p>Created on: 04 Feb. 2020</p>
							<a href="javascrip:;" class="rm-rfp">Remove</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 rm">
						<div class="rfp-bx">
							<h3>Veeti Seppanen</h3>
							<h4>18 Jan, 2020 - 24 Jan, 2020</h4>
							<ul>
								<li>
									<i class="ico c-rooms"></i>
									<span>6 Rooms</span>
								</li>
								<li>
									<i class="ico c-guest"></i>
									<span>6 Guests</span>
								</li>
							</ul>
							<p>Created on: 01 Jan. 2020</p>
							<a href="javascrip:;" class="rm-rfp">Remove</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 rm">
						<div class="rfp-bx">
							<h3>Veeti Seppanen</h3>
							<h4>28 Mar, 2020 - 08 Apr, 2020</h4>
							<ul>
								<li>
									<i class="ico c-rooms"></i>
									<span>10 Rooms</span>
								</li>
								<li>
									<i class="ico c-guest"></i>
									<span>20 Guests</span>
								</li>
							</ul>
							<p>Created on: 12 Mar. 2020</p>
							<a href="javascrip:;" class="rm-rfp">Remove</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 rm">
						<div class="rfp-bx">
							<h3>Veeti Seppanen</h3>
							<h4>14 Feb, 2020 - 20 Feb, 2020</h4>
							<ul>
								<li>
									<i class="ico c-rooms"></i>
									<span>20 Rooms</span>
								</li>
								<li>
									<i class="ico c-guest"></i>
									<span>40 Guests</span>
								</li>
							</ul>
							<p>Created on: 04 Feb. 2020</p>
							<a href="javascrip:;" class="rm-rfp">Remove</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 rm">
						<div class="rfp-bx">
							<h3>Veeti Seppanen</h3>
							<h4>18 Jan, 2020 - 24 Jan, 2020</h4>
							<ul>
								<li>
									<i class="ico c-rooms"></i>
									<span>6 Rooms</span>
								</li>
								<li>
									<i class="ico c-guest"></i>
									<span>6 Guests</span>
								</li>
							</ul>
							<p>Created on: 01 Jan. 2020</p>
							<a href="javascrip:;" class="rm-rfp">Remove</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 rm">
						<div class="rfp-bx">
							<h3>Veeti Seppanen</h3>
							<h4>28 Mar, 2020 - 08 Apr, 2020</h4>
							<ul>
								<li>
									<i class="ico c-rooms"></i>
									<span>10 Rooms</span>
								</li>
								<li>
									<i class="ico c-guest"></i>
									<span>20 Guests</span>
								</li>
							</ul>
							<p>Created on: 12 Mar. 2020</p>
							<a href="javascrip:;" class="rm-rfp">Remove</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 rm">
						<div class="rfp-bx">
							<h3>Veeti Seppanen</h3>
							<h4>14 Feb, 2020 - 20 Feb, 2020</h4>
							<ul>
								<li>
									<i class="ico c-rooms"></i>
									<span>20 Rooms</span>
								</li>
								<li>
									<i class="ico c-guest"></i>
									<span>40 Guests</span>
								</li>
							</ul>
							<p>Created on: 04 Feb. 2020</p>
							<a href="javascrip:;" class="rm-rfp">Remove</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 rm">
						<div class="rfp-bx">
							<h3>Veeti Seppanen</h3>
							<h4>18 Jan, 2020 - 24 Jan, 2020</h4>
							<ul>
								<li>
									<i class="ico c-rooms"></i>
									<span>6 Rooms</span>
								</li>
								<li>
									<i class="ico c-guest"></i>
									<span>6 Guests</span>
								</li>
							</ul>
							<p>Created on: 01 Jan. 2020</p>
							<a href="javascrip:;" class="rm-rfp">Remove</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection




