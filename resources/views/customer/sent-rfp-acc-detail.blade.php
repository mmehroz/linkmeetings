
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

			<div class="col-lg-10 col-xl-9">
				<div class="row">
					<div class="col-md-12 col-sm-12 rfp-preview-pg">

						<div class="row">
								<div class="col-sm-12">
									<div class="info-tp mbpx-30">
										<h2>
											RFP to Mardi Gras Hotel & Casino
										</h2>
										
										<div class="row mbpx-12">
											<div class="col-md-6 col-lg-4">
												<p><strong>Hotel:</strong> Antis Hotel</p>
												<p><strong>Name:</strong> Veeti Seppanen</p>
												<p><strong>Email Address:</strong> leogill@gmail.com</p>
												<p><strong>Phone:</strong> +1 365 5853</p>
												
											</div>
											<div class="col-md-6 col-lg-4">
												<p><strong>From:</strong> Apr 22, 2020</p>
												<p><strong>To:</strong> Apr 24, 2020</p>
												<p><strong>Attendees:</strong> 200</p>
												<p><strong>Requested Rooms:</strong> 25</p>
											</div>
											<div class="col-md-6 col-lg-4">

												<h5>
													<strong>Booking Status</strong> Sent
												</h5>
											</div>
										</div>
									</div>
								</div>
							</div>

							
						<div class="row">
							<div class="col-sm-12">
								<div class="info sm mbpx-50">
									
									<p><strong>Description:</strong> Etiam sed ligula tellus. Maecenas ornare sed lorem quis fringilla. Phasellus sem libero, venenatis id porta ac, eleifend vel nulla. Praesent a erat nulla. Nulla dolor mauris, elementum id aliquet eget, pulvinar in ante.</p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="type">
									<h3>Room Types</h3>
									<div class="row mbpx-12">
										<div class="col-lg-2 col-md-6">
											<label>Room</label>
											<div class="bx">
												<span>STANDARD SGL</span>
											</div>
										</div>
										<div class="col-md-6 col-lg-2">
											<label>Date</label>
											<div class="bx wico">
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<span>28 Mar, 2020 - 08 Apr, 2020</span>
											</div>
										</div>
										<div class="col-md-2 col-lg-1">
											<label>Quantity</label>
											<div class="bx">
												<span>60</span>
											</div>
										</div>
										<div class="col-md-4 col-lg-3">
											<label>Amenities</label>
											<div class="bx">
												<span>Screen, Sound System, Projection, Translation system, Lights</span>
											</div>
										</div>
										<div class="col-md-4 col-lg-2">
											<label>Price</label>
											<div class="bx">
												<span>US $170.00 p/p/n</span>
											</div>
										</div>

										<div class="col-lg-2 col-md-2">
											<label>Tax Rates & Services</label>
											<div class="tax-terms">
												<label>Yes <input type="radio" class="yes" name="tax-dt" checked="" disabled=""></label>
												<label>No <input type="radio" class="no" name="tax-dt" disabled=""></label>
											</div>
										</div>

									</div>

									<div class="row show-if-tax mbpx-18" style="display: block;">
										<div class="col-sm-12">	
											<div class="bx sm">
												<span>Type of taxes</span>
											</div>	
										</div>
									</div>

									<div class="row mbpx-12">
										<div class="col-lg-2 col-md-6">
											<label>Room</label>
											<div class="bx">
												<span>STANDARD SGL</span>
											</div>
										</div>
										<div class="col-md-6 col-lg-2">
											<label>Date</label>
											<div class="bx wico">
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<span>28 Mar, 2020 - 08 Apr, 2020</span>
											</div>
										</div>
										<div class="col-md-2 col-lg-1">
											<label>Quantity</label>
											<div class="bx">
												<span>60</span>
											</div>
										</div>
										<div class="col-md-4 col-lg-3">
											<label>Amenities</label>
											<div class="bx">
												<span>Screen, Sound System, Projection, Translation system, Lights</span>
											</div>
										</div>
										<div class="col-md-4 col-lg-2">
											<label>Price</label>
											<div class="bx">
												<span>US $170.00 p/p/n</span>
											</div>
										</div>

										<div class="col-lg-2 col-md-2">
											<label>Tax Rates & Services</label>
											<div class="tax-terms">
												<label>Yes <input type="radio" class="yes" name="tax-dt3" checked="" disabled=""></label>
												<label>No <input type="radio" class="no" name="tax-dt3" disabled=""></label>
											</div>
										</div>

									</div>

									<div class="row show-if-tax mbpx-18" style="display: block;">
										<div class="col-sm-12">	
											<div class="bx sm">
												<span>Type of taxes</span>
											</div>	
										</div>
									</div>

									<div class="row mbpx-12">
										<div class="col-lg-2 col-md-6">
											<label>Room</label>
											<div class="bx">
												<span>STANDARD SGL</span>
											</div>
										</div>
										<div class="col-md-6 col-lg-2">
											<label>Date</label>
											<div class="bx wico">
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<span>28 Mar, 2020 - 08 Apr, 2020</span>
											</div>
										</div>
										<div class="col-md-2 col-lg-1">
											<label>Quantity</label>
											<div class="bx">
												<span>60</span>
											</div>
										</div>
										<div class="col-md-4 col-lg-3">
											<label>Amenities</label>
											<div class="bx">
												<span>Screen, Sound System, Projection, Translation system, Lights</span>
											</div>
										</div>
										<div class="col-md-4 col-lg-2">
											<label>Price</label>
											<div class="bx">
												<span>US $170.00 p/p/n</span>
											</div>
										</div>

										<div class="col-lg-2 col-md-2">
											<label>Tax Rates & Services</label>
											<div class="tax-terms">
												<label>Yes <input type="radio" class="yes" name="tax-dt1" checked="" disabled=""></label>
												<label>No <input type="radio" class="no" name="tax-dt1" disabled=""></label>
											</div>
										</div>

									</div>

									<div class="row show-if-tax mbpx-18" style="display: block;">
										<div class="col-sm-12">	
											<div class="bx sm">
												<span>Type of taxes</span>
											</div>	
										</div>
									</div>

									<div class="row mbpx-12">
										<div class="col-lg-2 col-md-6">
											<label>Room</label>
											<div class="bx">
												<span>STANDARD SGL</span>
											</div>
										</div>
										<div class="col-md-6 col-lg-2">
											<label>Date</label>
											<div class="bx wico">
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<span>28 Mar, 2020 - 08 Apr, 2020</span>
											</div>
										</div>
										<div class="col-md-2 col-lg-1">
											<label>Quantity</label>
											<div class="bx">
												<span>60</span>
											</div>
										</div>
										<div class="col-md-4 col-lg-3">
											<label>Amenities</label>
											<div class="bx">
												<span>Screen, Sound System, Projection, Translation system, Lights</span>
											</div>
										</div>
										<div class="col-md-4 col-lg-2">
											<label>Price</label>
											<div class="bx">
												<span>US $170.00 p/p/n</span>
											</div>
										</div>

										<div class="col-lg-2 col-md-2">
											<label>Tax Rates & Services</label>
											<div class="tax-terms">
												<label>Yes <input type="radio" class="yes" name="tax-dt2" checked="" disabled=""></label>
												<label>No <input type="radio" class="no" name="tax-dt2" disabled=""></label>
											</div>
										</div>

									</div>

									<div class="row show-if-tax mbpx-40" style="display: block;">
										<div class="col-sm-12">	
											<div class="bx sm">
												<span>Type of taxes</span>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="functions mbpx-50">
									<h3>Private Functions Outdoors</h3>

									<div class="row">
										<div class="col-sm-3">
											<div class="bx "data-target="beach">
												<div>
													<i class="fa fa-check-circle" aria-hidden="true"></i>
													<figure>
														{{ HTML::image('images/step-beach.png', 'Link Meetings') }}
													</figure>
													<figure>
														{{ HTML::image('images/step-beach-hover.png', 'Link Meetings') }}
													</figure>
													<h4>Beach</h4>
												</div>
											</div>
										</div>

										<div class="col-sm-3">
											<div class="bx" data-target="terrace">
												<div>
													<i class="fa fa-check-circle" aria-hidden="true"></i>
													<figure>
														{{ HTML::image('images/step-terrace.png', 'Link Meetings') }}
													</figure>
													<figure>
														{{ HTML::image('images/step-terrace-hover.png', 'Link Meetings') }}
													</figure>
													<h4>Terrace</h4>
												</div>
											</div>
										</div>
									</div>

									<div class="sec">
										<div class="row">
											<div class="col-sm-12">
												<div class="field">
													<label>
														Set Up
													</label>
												</div>
											</div>

											<div class="col-sm-12 to-shw-fld">
												<ul>
													<li>
														<label>
															<input type="checkbox" name="" checked="" disabled>
															Cocktail
														</label>
													</li>
													<li>
														<label>
															<input type="checkbox" name="" checked="" disabled>
															Banquet
														</label>
													</li>
													<li>
														<label>
															<input type="checkbox" name="" checked="" disabled>
															Other
														</label>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="sec">
										<div class="row">
											<div class="col-sm-12">
												<div class="field">
													<label>AV</label>
													<textarea rows="2" cols="2" disabled="">Boots, podium, dance floor, lcd screens, fire works, others</textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="functions mbpx-50">
									<h3>Private Functions Indoors</h3>

									<div class="row">
										<div class="col-md-4">
											<h4>Meeting Space 1</h4>	
											<div class="field">
												<label># pax </label>
												<input type="text" value="100" name="" disabled="">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<h6>Set up type (you can only select one)</h6>
										</div>

										<div class="col-sm-3">
											<div class="bx" data-target="u-shape">
												<div>
													<i class="fa fa-check-circle" aria-hidden="true"></i>
													<figure>
														{{ HTML::image('images/step-u-shape.png', 'Link Meetings') }}
													</figure>
													<figure>
														{{ HTML::image('images/step-u-shape-hover.png', 'Link Meetings') }}
													</figure>
													<h4>U Shape</h4>
												</div>
											</div>
										</div>

										<div class="col-sm-3">
											<div class="bx" data-target="teathre">
												<div>
													<i class="fa fa-check-circle" aria-hidden="true"></i>
													<figure>
														{{ HTML::image('images/step-teathre.png', 'Link Meetings') }}
													</figure>
													<figure>
														{{ HTML::image('images/step-teathre-hover.png', 'Link Meetings') }}
													</figure>
													<h4>Teathre</h4>
												</div>
											</div>
										</div>
									</div>

									<div class="sec">
										<div class="row">
											<div class="col-sm-12">
												<div class="field">
													<label>
														Set Up
													</label>
												</div>
											</div>

											<div class="col-sm-12 to-shw-fld">
												<ul>
													<li>
														<label>
															<input type="checkbox" name="" checked="" disabled>
															Cocktail
														</label>
													</li>
													<li>
														<label>
															<input type="checkbox" name="" checked="" disabled>
															Banquet
														</label>
													</li>
													<li>
														<label>
															<input type="checkbox" name="" checked="" disabled>
															Other
														</label>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="sec">
										<div class="row">
											<div class="col-sm-12">
												<div class="field">
													<label>AV</label>
													<textarea rows="2" cols="2" disabled="">Boots, podium, dance floor, lcd screens, fire works, others</textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="dmc-sec">	
									<h3>DMC</h3>

									<div class="sec">
										<div class="row">
											<div class="col-sm-12">
												<div class="field">
													<label>
														Transportation
													</label>
												</div>
											</div>

											<div class="col-sm-12 to-shw-fld">
												<ul>
													<li>
														<label>
															<input type="checkbox" name="" checked="" disabled>
															Yes
														</label>
													</li>
													<li>
														<label>
															<input type="checkbox" name="" disabled>
															No
														</label>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="sec">
										<div class="row">
											<div class="col-sm-12">
												<div class="field">
													<label>
														Tours and Excursions
													</label>
												</div>
											</div>

											<div class="col-sm-12 to-shw-fld">
												<ul>
													<li>
														<label>
															<input type="checkbox" name="" checked="" disabled>
															Yes
														</label>
													</li>
													<li>
														<label>
															<input type="checkbox" name="" disabled>
															No
														</label>
													</li>
													<li class="wd-65">
														<input type="text" class="fld" value="My Requirements" name="" disabled="">
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="sec">
										<div class="row">
											<div class="col-sm-12">
												<div class="field">
													<label>
														Team Building and CSR
													</label>
												</div>
											</div>

											<div class="col-sm-12 to-shw-fld">
												<ul>
													<li>
														<label>
															<input type="checkbox" name="" checked="" disabled>
															Yes
														</label>
													</li>
													<li>
														<label>
															<input type="checkbox" name="" disabled>
															No
														</label>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="sec">
										<div class="row">
											<div class="col-sm-12">
												<div class="field">
													<label>
														Gifts
													</label>
												</div>
											</div>

											<div class="col-sm-12 to-shw-fld">
												<ul>
													<li>
														<label>
															<input type="checkbox" name="" checked="" disabled>
															Yes
														</label>
													</li>
													<li>
														<label>
															<input type="checkbox" name="" disabled>
															No
														</label>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="sec">
										<div class="row">
											<div class="col-sm-12">
												<div class="field">
													<label>
														Destination Experiences
													</label>
												</div>
											</div>

											<div class="col-sm-12 to-shw-fld">
												<ul>
													<li>
														<label>
															<input type="checkbox" name="" checked="" disabled>
															Yes
														</label>
													</li>
													<li>
														<label>
															<input type="checkbox" name="" disabled>
															No
														</label>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection




