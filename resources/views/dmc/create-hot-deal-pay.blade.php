

@extends('layout.dmc.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!} 
@stop
@section('body-class') create-ad-pg ban-ad-pg @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<h2>Create a Hot Deal</h2>

					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
							<div class="row">
								<div class="col-md-12">
									<div class="field">
										<label>Accepted Cards</label>
										<figure>
											{{ HTML::image('images/cad-pay-icons.png', 'Link Meetings') }}
										</figure>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="field">
										<label>Card Holder’s Name</label>
										<input type="text" name="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="field">
										<label>Card Number</label>
										<input type="text" name="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="field">
										<label>Expire Date</label>
										<input type="text" name="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="field">
										<label>CVV</label>
										<input type="text" name="">
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-7 col-lg-5 col-xl-3 rht">
							<div class="row">
								<div class="col-md-12">
									<div class="field mbpx-0">
										<label>Your Ad</label>
									</div>
									<div class="deal-bx">
										<figure>
											{{ HTML::image('images/deal-bx-fea-1.jpg', 'Link Meetings') }}
										</figure>
										<div class="text">
											<h5><span>3 day package</span> Las Vegas, USA</h5>
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
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
							<div class="row va-ctr">								
								<div class="col-sm-7">
									<a href="{{ URL::to('/dmc/create-hot-deal') }}" class="link-back"><i class="fa fa-angle-left"></i> Back</a>	
								</div>
								<div class="col-sm-5">
									<a href="{{ URL::to('/dmc/create-an-ad') }}" class="primary-btn dblue">Make Payment</a>			
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection




