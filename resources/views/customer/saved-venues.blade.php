
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
					<div class="col-md-6 col-lg-4 ">
						<div class="deal-bx">
							<a href="{{ URL::to('/hotel-detail') }}">
							<div class="saved-ico">
								<i class="fa fa-heart" aria-hidden="true"></i>
							</div>
							<figure>
								{{ HTML::image('images/deal-bx-srch-1.jpg', 'Link Meetings') }}
							</figure>
							<div class="text">
								<h5>Istanbul, Turkey</h5>
								<h3>Grand Hôtel Lévêque</h3>
								<div class="row">
									<div class="col-sm-6">
										<h6><strong>Meeting Rooms</strong> 10</h6>
									</div>
									<div class="col-sm-6">
										<h6><strong>Meeting Space</strong> 10</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<h6><strong>Guest Rooms</strong> 500</h6>
									</div>
									<div class="col-sm-6">
										<h6><strong>Restaurant & Bars</strong> 10</h6>
									</div>
								</div>
								<div class="rate">
									<p>
										<i class="fa fa-star"></i>
										4.8 (146 reviews)
									</p>
								</div>
							</div>
						</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4">
						<div class="deal-bx">
							<a href="{{ URL::to('/hotel-detail') }}">
							<div class="saved-ico">
								<i class="fa fa-heart" aria-hidden="true"></i>
							</div>
							<figure>
								{{ HTML::image('images/deal-bx-srch-2.jpg', 'Link Meetings') }}
							</figure>
							<div class="text">
								<h5>Istanbul, Turkey</h5>
								<h3>Conrad Chicago</h3>
								<div class="row">
									<div class="col-sm-6">
										<h6><strong>Meeting Rooms</strong> 10</h6>
									</div>
									<div class="col-sm-6">
										<h6><strong>Meeting Space</strong> 10</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<h6><strong>Guest Rooms</strong> 500</h6>
									</div>
									<div class="col-sm-6">
										<h6><strong>Restaurant & Bars</strong> 10</h6>
									</div>
								</div>
								<div class="rate">
									<p>
										<i class="fa fa-star"></i>
										4.8 (146 reviews)
									</p>
								</div>
							</div>
						</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4">
						<div class="deal-bx">
							<a href="{{ URL::to('/hotel-detail') }}">
							<div class="saved-ico">
								<i class="fa fa-heart" aria-hidden="true"></i>
							</div>
							<figure>
								{{ HTML::image('images/deal-bx-srch-3.jpg', 'Link Meetings') }}
							</figure>
							<div class="text">
								<h5><span>10% OFF</span> Las Vegas, USA</h5>
								<h3>Hotel Golden Nugget Las Vegas</h3>
								<div class="row">
									<div class="col-sm-6">
										<h6><strong>Meeting Rooms</strong> 10</h6>
									</div>
									<div class="col-sm-6">
										<h6><strong>Meeting Space</strong> 10</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<h6><strong>Guest Rooms</strong> 500</h6>
									</div>
									<div class="col-sm-6">
										<h6><strong>Restaurant & Bars</strong> 10</h6>
									</div>
								</div>
								<div class="rate">
									<p>
										<i class="fa fa-star"></i>
										4.8 (146 reviews)
									</p>
								</div>
							</div>
						</a>
						</div>
					</div>


					<div class="col-md-6 col-lg-4">
						<div class="deal-bx">

							<a href="{{ URL::to('/hotel-detail') }}">
							<div class="saved-ico">
								<i class="fa fa-heart" aria-hidden="true"></i>
							</div>
							<figure>
								{{ HTML::image('images/deal-bx-fea-1.jpg', 'Link Meetings') }}
							</figure>
							<div class="text">
								<h5><span>50% OFF</span> Las Vegas, USA</h5>
								<h3>Mardi Gras Hotel & Casino</h3>
								<div class="row">
									<div class="col-sm-6">
										<h6><strong>Meeting Rooms</strong> 10</h6>
									</div>
									<div class="col-sm-6">
										<h6><strong>Meeting Space</strong> 10</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<h6><strong>Guest Rooms</strong> 500</h6>
									</div>
									<div class="col-sm-6">
										<h6><strong>Restaurant & Bars</strong> 10</h6>
									</div>
								</div>
								<div class="rate">
									<p>
										<i class="fa fa-star"></i>
										4.8 (146 reviews)
									</p>
								</div>
							</div>
						</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4">
						<div class="deal-bx">

						<a href="{{ URL::to('/hotel-detail') }}">
							<div class="saved-ico">
								<i class="fa fa-heart" aria-hidden="true"></i>
							</div>
							<figure>
								{{ HTML::image('images/deal-bx-fea-2.jpg', 'Link Meetings') }}
							</figure>
							<div class="text">
								<h5><span>20% OFF</span> New York, USA</h5>
								<h3>Hyatt Union Square New York</h3>
								<div class="row">
									<div class="col-sm-6">
										<h6><strong>Meeting Rooms</strong> 10</h6>
									</div>
									<div class="col-sm-6">
										<h6><strong>Meeting Space</strong> 10</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<h6><strong>Guest Rooms</strong> 500</h6>
									</div>
									<div class="col-sm-6">
										<h6><strong>Restaurant & Bars</strong> 10</h6>
									</div>
								</div>
								<div class="rate">
									<p>
										<i class="fa fa-star"></i>
										4.8 (146 reviews)
									</p>
								</div>
							</div>
						</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4">
						<div class="deal-bx">

						<a href="{{ URL::to('/hotel-detail') }}">
							<div class="saved-ico">
								<i class="fa fa-heart" aria-hidden="true"></i>
							</div>
							<figure>
								{{ HTML::image('images/deal-bx-fea-3.jpg', 'Link Meetings') }}
							</figure>
							<div class="text">
								<h5><span>10% OFF</span> London, United Kingdom</h5>
								<h3>Travelodge London Central City</h3>
								<div class="row">
									<div class="col-sm-6">
										<h6><strong>Meeting Rooms</strong> 10</h6>
									</div>
									<div class="col-sm-6">
										<h6><strong>Meeting Space</strong> 10</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<h6><strong>Guest Rooms</strong> 500</h6>
									</div>
									<div class="col-sm-6">
										<h6><strong>Restaurant & Bars</strong> 10</h6>
									</div>
								</div>
								<div class="rate">
									<p>
										<i class="fa fa-star"></i>
										4.8 (146 reviews)
									</p>
								</div>
							</div>
						</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection




