
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
@section('body-class') book-inquire-pg @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12 col-sm-12 col-lg-12 ">
				<div class="panel">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-lg-11 col-xl-10">
							<div class="row">
								<div class="col-sm-12">
									<div class="info mbpx-50">
										<h4>#0011</h4>
										<h2>
											Microsoft Annual Event
										</h2>
										<div class="row mbpx-12">
											<div class="col-md-4">
												<p><strong>Hotel:</strong> Antis Hotel</p>
												<p><strong>Event Type:</strong> Conference</p>
												<p><strong>Meeting Planner:</strong> Leo Gill</p>
												<p><strong>Email Address:</strong> leogill@gmail.com</p>
												<p><strong>Phone:</strong> +1 365 5853</p>
												
											</div>
											<div class="col-md-4">
												<p><strong>From:</strong> Apr 22, 2020</p>
												<p><strong>To:</strong> Apr 24, 2020</p>
												<p><strong>Attendees:</strong> 200</p>
												<p><strong>Requested Rooms:</strong> 25</p>
											</div>
											<div class="col-md-4">
												<h5>
													<strong>Booking Status</strong> New Inquiry
												</h5>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<a href="{{ URL::to('/send-rfp') }}" class="primary-btn dblue">Send Proposal</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row mbpx-40">
								<div class="col-sm-12 type">
									<h3><span>Room Types</span></h3>
									<div class="row">
										<div class="col-md-6 col-lg-2">
											<div class="field">													
												<label>Room</label>
												<select>
													<option>STANDARD SGL</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-lg-3">
											<div class="field wico">			
												<label>Date</label>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<input type="text" placeholder="28 Mar, 2020 - 08 Apr, 2020" name="" disabled>
											</div>
										</div>
										<div class="col-md-6 col-lg-2">
											<div class="field">
												<label>Quantity</label>
												<input type="text" placeholder="60" name="" disabled>
											</div>
										</div>
										<div class="col-md-6 col-lg-5">
											<div class="field">
												<label>Amenities</label>
												<input type="text" placeholder="Screen, Sound System, Projection, Translation system, Lights" name="" disabled>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-lg-2">
											<div class="field">													
												<label>Room</label>
												<select>
													<option>STANDARD SGL</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-lg-3">
											<div class="field wico">			
												<label>Date</label>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<input type="text" placeholder="28 Mar, 2020 - 08 Apr, 2020" name="" disabled>
											</div>
										</div>
										<div class="col-md-6 col-lg-2">
											<div class="field">
												<label>Quantity</label>
												<input type="text" placeholder="60" name="" disabled>
											</div>
										</div>
										<div class="col-md-6 col-lg-5">
											<div class="field">
												<label>Amenities</label>
												<input type="text" placeholder="Screen, Sound System, Projection, Translation system, Lights" name="" disabled>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-lg-2">
											<div class="field">													
												<label>Room</label>
												<select>
													<option>STANDARD SGL</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-lg-3">
											<div class="field wico">			
												<label>Date</label>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<input type="text" placeholder="28 Mar, 2020 - 08 Apr, 2020" name="" disabled>
											</div>
										</div>
										<div class="col-md-6 col-lg-2">
											<div class="field">
												<label>Quantity</label>
												<input type="text" placeholder="60" name="" disabled>
											</div>
										</div>
										<div class="col-md-6 col-lg-5">
											<div class="field">
												<label>Amenities</label>
												<input type="text" placeholder="Screen, Sound System, Projection, Translation system, Lights" name="" disabled>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-lg-2">
											<div class="field">													
												<label>Room</label>
												<select>
													<option>STANDARD SGL</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-lg-3">
											<div class="field wico">			
												<label>Date</label>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<input type="text" placeholder="28 Mar, 2020 - 08 Apr, 2020" name="" disabled>
											</div>
										</div>
										<div class="col-md-6 col-lg-2">
											<div class="field">
												<label>Quantity</label>
												<input type="text" placeholder="60" name="" disabled>
											</div>
										</div>
										<div class="col-md-6 col-lg-5">
											<div class="field">
												<label>Amenities</label>
												<input type="text" placeholder="Screen, Sound System, Projection, Translation system, Lights" name="" disabled>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row functions mbpx-40">
								<div class="col-md-12">
									<h3><span>Private Functions Outdoors</span></h3>
								</div>
								<div class="col-md-12 col-lg-10 col-xl-5">
									<div class="row">
										<div class="col-md-4">
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

										<div class="col-md-4">
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

									<div class="sec mbpx-0">
										<div class="row">
											<div class="col-sm-12">
												<div class="field">
													<label>AV</label>
													<textarea rows="2" cols="2">Boots, podium, dance floor, lcd screens, fire works, others</textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row functions mbpx-40">
								<div class="col-sm-12">
									<h3><span>Private Functions Indoors</span></h3>
								</div>
								<div class="col-md-12 col-lg-10 col-xl-5">
										<div class="row">
											<div class="col-md-4">
												<h4>Meeting Space 1</h4>	
												<div class="field">
													<label># pax </label>
													<input type="text" value="100" name="" disabled>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<h6>Set up type (you can only select one)</h6>
											</div>

											<div class="col-md-4">
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

											<div class="col-md-4">
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
														<textarea rows="2" cols="2">Boots, podium, dance floor, lcd screens, fire works, others</textarea>
													</div>
												</div>
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-md-4">
												<h4>Meeting Space 2</h4>	
												<div class="field">
													<label># pax </label>
													<input type="text" value="100" name="" disabled>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<h6>Set up type (you can only select one)</h6>
											</div>

											<div class="col-sm-4">
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

											<div class="col-sm-4">
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

										<div class="sec mbpx-0">
											<div class="row">
												<div class="col-sm-12">
													<div class="field">
														<label>AV</label>
														<textarea rows="2" cols="2">Boots, podium, dance floor, lcd screens, fire works, others</textarea>
													</div>
												</div>
											</div>
										</div>
								</div>
							</div>

							<div class="row dmc-sec">
								<div class="col-sm-12">
									<h3><span>DMC</span></h3>
								</div>
								<div class="col-md-12 col-lg-10 col-xl-5">
									<div class="cont">
										<div class="row">
											<div class="col-lg-4">
												<p>
													<strong>Transportation</strong>
													Yes
												</p>
											</div>
											<div class="col-lg-5">
												<p>
													<strong>Team Building and CSR</strong>
													Yes
												</p>
											</div>
											<div class="col-lg-3">
												<p>
													<strong>Gifts</strong>
													Yes
												</p>
											</div>
										</div>	
										<div class="row">
											<div class="col-lg-5">
												<p>
													<strong>Destination Venues</strong>
													Yes
												</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-5">
												<p>
													<strong>Tours and Excursions</strong>
													Yes
												</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<p>
													I want to visit the city. Need buses and cars.
												</p>
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
</div>




@endsection




