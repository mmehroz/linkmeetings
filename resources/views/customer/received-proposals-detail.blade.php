
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
								<div class="info mbpx-50">
									<div class="row va-ctr">
										<div class="col-sm-6">
											<figure>
												{{ HTML::image('images/logo-f.png', 'Link Meetings') }}
											</figure>
										</div>
										<div class="col-sm-6 text-right">
											<figure>
												{{ HTML::image('images/rfp-preview-logo.png', 'Link Meetings') }}
											</figure>
										</div>
									</div>
									
									<p><strong>Dear Henler,</strong> We appreciate your interest in our resort Melia Caribe Beach for everyone, as possible venue to celebrate your important event. Below we present our proposal of rates and benefits.</p>
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

									<div class="row show-if-tax mbpx-18" style="display: block;">
										<div class="col-sm-12">	
											<div class="bx sm">
												<span>Type of taxes</span>
											</div>	
										</div>
									</div>

									<div class="row mbpx-50">
										<div class="col-sm-12">
											<p>
												- Net rates.<br>
												- Prepaid promotional rates available for the USA and Canada Market.<br>
												- This proposal is not considered a reservation.<br>
												- Children 2 -12 Yr. Rate: 50% off the double occupancy rate.<br>
												- 3rd pax rate: is 25% off of the double occupancy room rate per person per night.<br>
												- The above rates are per person, per night, based on double and/or single occupancy.
											</p>
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

									<div class="row mbpx-25">
										<div class="col-sm-5">
											<figure class="wd-100">
												{{ HTML::image('images/rfp-preview-function-outdoor-img.jpg', 'Link Meetings') }}
											</figure>
										</div>
										<div class="col-sm-7">
											<p>Vivamus ipsum odio, laoreet et dapibus id, scelerisque quis dui. Phasellus vestibulum nunc eget nisl maximus, sed faucibus mauris consectetur. Nam eget mauris dictum, iaculis leo in, lacinia orci. Aliquam faucibus luctus pharetra. Phasellus pharetra eros ligula, vel feugiat dolor vehicula in. Etiam id felis ut augue iaculis mollis a ut nulla. Mauris vehicula non nibh a porta. Nullam at tortor leo. Mauris convallis pretium sem. Nunc a est mauris. Nullam egestas, lorem vitae semper scelerisque, dolor metus rutrum est, ac ultrices sem purus non nibh. In gravida dictum elementum. Duis at mauris et lorem porttitor venenatis nec in lorem. Ut ipsum orci, fermentum vitae vulputate vel, volutpat quis ante.</p>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-4">
											<label>Price</label>
											<input type="text" value="US$128.00 p/p/n" name="" disabled="">
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

									<div class="row mbpx-25">
										<div class="col-sm-5">
											<figure class="wd-100">
												{{ HTML::image('images/rfp-preview-function-indoor-img.jpg', 'Link Meetings') }}
											</figure>
										</div>
										<div class="col-sm-7">
											<p>Vivamus ipsum odio, laoreet et dapibus id, scelerisque quis dui. Phasellus vestibulum nunc eget nisl maximus, sed faucibus mauris consectetur. Nam eget mauris dictum, iaculis leo in, lacinia orci. Aliquam faucibus luctus pharetra. Phasellus pharetra eros ligula, vel feugiat dolor vehicula in. Etiam id felis ut augue iaculis mollis a ut nulla. Mauris vehicula non nibh a porta. Nullam at tortor leo. Mauris convallis pretium sem. Nunc a est mauris. Nullam egestas, lorem vitae semper scelerisque, dolor metus rutrum est, ac ultrices sem purus non nibh. In gravida dictum elementum. Duis at mauris et lorem porttitor venenatis nec in lorem. Ut ipsum orci, fermentum vitae vulputate vel, volutpat quis ante.</p>
										</div>
									</div>

									<div class="row mbpx-50">
										<div class="col-sm-4">
											<label>Price</label>
											<input type="text" value="US$128.00 p/p/n" name="" disabled="">
										</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<h4>Meeting Space 2</h4>	
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

									<div class="row mbpx-25">
										<div class="col-sm-5">
											<figure class="wd-100">
												{{ HTML::image('images/rfp-preview-function-indoor-img-1.jpg', 'Link Meetings') }}
											</figure>
										</div>
										<div class="col-sm-7">
											<p>Vivamus ipsum odio, laoreet et dapibus id, scelerisque quis dui. Phasellus vestibulum nunc eget nisl maximus, sed faucibus mauris consectetur. Nam eget mauris dictum, iaculis leo in, lacinia orci. Aliquam faucibus luctus pharetra. Phasellus pharetra eros ligula, vel feugiat dolor vehicula in. Etiam id felis ut augue iaculis mollis a ut nulla. Mauris vehicula non nibh a porta. Nullam at tortor leo. Mauris convallis pretium sem. Nunc a est mauris. Nullam egestas, lorem vitae semper scelerisque, dolor metus rutrum est, ac ultrices sem purus non nibh. In gravida dictum elementum. Duis at mauris et lorem porttitor venenatis nec in lorem. Ut ipsum orci, fermentum vitae vulputate vel, volutpat quis ante.</p>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-4">
											<label>Price</label>
											<input type="text" value="US$128.00 p/p/n" name="" disabled="">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="attachments">	
									<h3>Attachments</h3>
									<div class="row mbpx-20">
										<div class="col-sm-12">
											<label>Floor Plans</label>
											<a href="javascript:;" class="download">
												{{ HTML::image('images/icon-file-download.png', 'File') }}
												Visualizer - enjoy a walk through our hotel!
											</a>
											<a href="javascript:;" class="download">
												{{ HTML::image('images/icon-file-download.png', 'File') }}
												ijVENUES factsheet
											</a>
										</div>
									</div>	

									<div class="row mbpx-20">
										<div class="col-sm-12">
											<label>Additional Documents</label>
											<a href="javascript:;" class="download">
												{{ HTML::image('images/icon-pdf-download.png', 'File') }}
												Company Profile.pdf
											</a>
											<a href="javascript:;" class="download">
												{{ HTML::image('images/icon-pdf-download.png', 'File') }}
												Portfolio.pdf
											</a>
										</div>
									</div>	

									<div class="row mbpx-50">
										<div class="col-sm-12">
											<label class="mbpx-10">Additional Images</label>
											<figure class="show-img-multi">
												{{ HTML::image('images/hotel-dt-img-2.jpg', 'Link Meetings') }}
											</figure>

											<figure class="show-img-multi">
												{{ HTML::image('images/hotel-dt-img-3.jpg', 'Link Meetings') }}
											</figure>

											<figure class="show-img-multi">
												{{ HTML::image('images/hotel-dt-img-4.jpg', 'Link Meetings') }}
											</figure>
										</div>
									</div>								
									
								</div>	
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="attachments">	
									<h3>Additional Notes</h3>
									<div class="row">
										<div class="col-sm-12">
											<p class="mbpx-0"><strong>IN CLOSING</strong>We appreciate your kind consideration and we ask you to inform us your decision regarding this quote at the latest March 15, 2020. In case you need to extend the validity of this proposal we ask you to inform us before that time. Please note the hotel occupancy is subject to change at any time,so in case you want to proceed with the contracting of our services and solutions to cover the needs of your event, we thank you for indicating it as soon as possible to rectify our availability. Thank you again for considering Melia Caribe Beach as a possible venue for your group. <br><br>
											Best Regards,<br>
											<strong>Daniela M. Gattás</strong>
											Regional Group Sales Manager<br>
											Ph: +1 809 688 5000 ext. 8212 Email: <a href="mailto:daniela.mejia@melia.com">daniela.mejia@melia.com</a></p>
										</div>
									</div>	
								</div>	
							</div>
						</div>
					</div>

					<div class="col-sm-12 rfp-preview-pg nobd">
						<div class="row">
							<div class="col-sm-12">
								<div class="btns">	
									<div class="row">
										<div class="col-sm-12">
											<a href="{{ URL::to('/received-proposals') }}" class="primary-btn dblue-bdr">Reject Proposal</a>
											<a href="{{ URL::to('/received-proposals') }}" class="primary-btn dblue">Accept Proposal</a>
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




