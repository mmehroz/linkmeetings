
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
@section('body-class') send-rfp-pg @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12 col-sm-12 col-lg-12 ">
				<div class="panel">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
							<div class="row">
								<div class="col-sm-12">
									<div class="info mbpx-50">
										<h2>
											Send an RFP
										</h2>
										<h4>Booking Details</h4>
										<div class="row mbpx-12">
											<div class="col-md-6 col-lg-4">
												<p><strong>Event ID:</strong> 0011</p>
												<p><strong>Event Name:</strong> Microsoft Annual Event</p>
												<p><strong>Hotel:</strong> Antis Hotel</p>
												<p><strong>Event Type:</strong> Conference</p>
												<p><strong>Meeting Planner:</strong> Leo Gill</p>
												<p><strong>Email Address:</strong> leogill@gmail.com</p>
												<p><strong>Phone:</strong> +1 365 5853</p>
												
											</div>
											<div class="col-md-6 col-lg-4">
												<p><strong>From:</strong> Apr 22, 2020</p>
												<p><strong>To:</strong> Apr 24, 2020</p>
												<p><strong>Attendees:</strong> 200</p>
												<p><strong>Requested Rooms:</strong> 25</p>
											</div>
											<div class="col-md-6 col-lg-2">
												<h5>
													<strong>Booking Status</strong> New Inquiry
												</h5>
											</div>
											<div class="col-md-6 col-lg-2 text-right">
												<div class="addFileStyle">
												    <input type="file" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row open-notes mbpx-40">
								<div class="col-sm-12">
									<h3><span>Opening Note</span></h3>

									<div class="row">
										<div class="col-md-12">
											<div class="editor"></div>
										</div>
									</div>
								</div>
							</div>

							<div class="row mbpx-40">
								<div class="col-sm-12 type">
									<h3><span>Room Types</span></h3>
									<div class="row">
										<div class="col-md-2">
											<div class="field">													
												<label>Room</label>
												<select>
													<option>STANDARD SGL</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="field wico">			
												<label>Date</label>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<input type="text" placeholder="28 Mar, 2020 - 08 Apr, 2020" name="" disabled>
											</div>
										</div>
										<div class="col-md-1">
											<div class="field">
												<label>Quantity</label>
												<input type="text" placeholder="60" name="" disabled>
											</div>
										</div>
										<div class="col-md-2">
											<div class="field">
												<label>Amenities</label>
												<input type="text" placeholder="Screen, Sound System, Projection" name="" disabled>
											</div>
										</div>
										<div class="col-md-2">
											<div class="field">
												<label>Price</label>
												<input type="text" placeholder="" class="altr" name="" >
											</div>
										</div>										
										<div class="col-md-2">
											<div class="field">
												<label>Tax Rates & Services</label>
												<div class="tax-terms">
													<label>Yes <input type="radio" class="yes" name="tax-dt"></label>
													<label>No <input type="radio" class="no" name="tax-dt"></label>
												</div>
											</div>
										</div>
									</div>

									<div class="row show-if-tax">
										<div class="col-sm-12">										
											<div class="field">
												<input type="text" class="altr" name="" placeholder="What type of taxes">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-2">
											<div class="field">													
												<label>Room</label>
												<select>
													<option>STANDARD SGL</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="field wico">			
												<label>Date</label>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<input type="text" placeholder="28 Mar, 2020 - 08 Apr, 2020" name="" disabled>
											</div>
										</div>
										<div class="col-md-1">
											<div class="field">
												<label>Quantity</label>
												<input type="text" placeholder="60" name="" disabled>
											</div>
										</div>
										<div class="col-md-2">
											<div class="field">
												<label>Amenities</label>
												<input type="text" placeholder="Screen, Sound System, Projection" name="" disabled>
											</div>
										</div>
										<div class="col-md-2">
											<div class="field">
												<label>Price</label>
												<input type="text" placeholder="" class="altr" name="" >
											</div>
										</div>										
										<div class="col-md-2">
											<div class="field">
												<label>Tax Rates & Services</label>
												<div class="tax-terms">
													<label>Yes <input type="radio" class="yes" name="tax-dt1"></label>
													<label>No <input type="radio" class="no" name="tax-dt1"></label>
												</div>
											</div>
										</div>
									</div>

									<div class="row show-if-tax">
										<div class="col-sm-12">										
											<div class="field">
												<input type="text" class="altr" name="" placeholder="What type of taxes">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-2">
											<div class="field">													
												<label>Room</label>
												<select>
													<option>STANDARD SGL</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="field wico">			
												<label>Date</label>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<input type="text" placeholder="28 Mar, 2020 - 08 Apr, 2020" name="" disabled>
											</div>
										</div>
										<div class="col-md-1">
											<div class="field">
												<label>Quantity</label>
												<input type="text" placeholder="60" name="" disabled>
											</div>
										</div>
										<div class="col-md-2">
											<div class="field">
												<label>Amenities</label>
												<input type="text" placeholder="Screen, Sound System, Projection" name="" disabled>
											</div>
										</div>
										<div class="col-md-2">
											<div class="field">
												<label>Price</label>
												<input type="text" placeholder="" class="altr" name="" >
											</div>
										</div>										
										<div class="col-md-2">
											<div class="field">
												<label>Tax Rates & Services</label>
												<div class="tax-terms">
													<label>Yes <input type="radio" class="yes" name="tax-dt2"></label>
													<label>No <input type="radio" class="no" name="tax-dt2"></label>
												</div>
											</div>
										</div>
									</div>

									<div class="row show-if-tax">
										<div class="col-sm-12">										
											<div class="field">
												<input type="text" class="altr" name="" placeholder="What type of taxes">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-2">
											<div class="field">													
												<label>Room</label>
												<select>
													<option>STANDARD SGL</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="field wico">			
												<label>Date</label>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<input type="text" placeholder="28 Mar, 2020 - 08 Apr, 2020" name="" disabled>
											</div>
										</div>
										<div class="col-md-1">
											<div class="field">
												<label>Quantity</label>
												<input type="text" placeholder="60" name="" disabled>
											</div>
										</div>
										<div class="col-md-2">
											<div class="field">
												<label>Amenities</label>
												<input type="text" placeholder="Screen, Sound System, Projection" name="" disabled>
											</div>
										</div>
										<div class="col-md-2">
											<div class="field">
												<label>Price</label>
												<input type="text" placeholder="" class="altr" name="" >
											</div>
										</div>										
										<div class="col-md-2">
											<div class="field">
												<label>Tax Rates & Services</label>
												<div class="tax-terms">
													<label>Yes <input type="radio" class="yes" name="tax-dt3"></label>
													<label>No <input type="radio" class="no" name="tax-dt3"></label>
												</div>
											</div>
										</div>
									</div>

									<div class="row show-if-tax">
										<div class="col-sm-12">										
											<div class="field">
												<input type="text" class="altr" name="" placeholder="What type of taxes">
											</div>
										</div>
									</div>


									<div class="row">
										<div class="col-sm-4">
											<label>Photos</label>
											<div class="addFileStyle">
											    <input type="file" />
											</div>
										</div>
										<div class="col-sm-8">
											<label>Notes</label>
											<div class="editor"></div>
										</div>
									</div>
								</div>
							</div>

							<div class="row functions mbpx-40">
								<div class="col-md-12">
									<h3><span>Private Functions Outdoors</span></h3>
								</div>
								<div class="col-md-12 col-lg-10 col-xl-6 mbpx-30">
									<div class="row">
										<div class="col-sm-4">
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

										<div class="col-sm-4">
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
															<input type="checkbox" name="" disabled checked="">
															Cocktail
														</label>
													</li>
													<li>
														<label>
															<input type="checkbox" name="" disabled checked="">
															Banquet
														</label>
													</li>
													<li>
														<label>
															<input type="checkbox" name="" disabled checked="">
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
								<div class="col-sm-12 mbpx-30">
									<div class="row">
										<div class="col-sm-4">
											<label>Photos</label>
											<div class="addFileStyle">
											    <input type="file" />
											</div>
										</div>
										<div class="col-sm-8">
											<label>Notes</label>
											<div class="editor"></div>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="row">
										<div class="col-sm-12">
											<div class="field">
												<label>Price</label>
												<input type="text" class="altr" name="" >
											</div>
										</div>
									</div>
								</div>

									
							</div>

							<div class="row functions">
								<div class="col-sm-12">
									<h3><span>Private Functions Indoors</span></h3>
								</div>
								<div class="col-md-12 col-lg-10 col-xl-6">
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
																<input type="checkbox" name="" disabled checked="">
																Cocktail
															</label>
														</li>
														<li>
															<label>
																<input type="checkbox" name="" disabled checked="">
																Banquet
															</label>
														</li>
														<li>
															<label>
																<input type="checkbox" name="" disabled checked="">
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
								</div>
							</div>

							<div class="row functions mbpx-30">								
								<div class="col-sm-12 mbpx-30">
									<div class="row">
										<div class="col-sm-4">
											<label>Photos</label>
											<div class="addFileStyle">
											    <input type="file" />
											</div>
										</div>
										<div class="col-sm-8">
											<label>Notes</label>
											<div class="editor"></div>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="row">
										<div class="col-sm-12">
											<div class="field">
												<label>Price</label>
												<input type="text" class="altr" name="" >
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-12 mtpx-40">
									<hr>
								</div>
							</div>

							<div class="row functions">
								<div class="col-md-12 col-lg-10 col-xl-6">
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
																<input type="checkbox" name="" disabled checked="">
																Cocktail
															</label>
														</li>
														<li>
															<label>
																<input type="checkbox" name="" disabled checked="">
																Banquet
															</label>
														</li>
														<li>
															<label>
																<input type="checkbox" name="" disabled checked="">
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
								</div>
							</div>

							<div class="row functions mbpx-40">								
								<div class="col-sm-12 mbpx-30">
									<div class="row">
										<div class="col-sm-4">
											<label>Photos</label>
											<div class="addFileStyle">
											    <input type="file" />
											</div>
										</div>
										<div class="col-sm-8">
											<label>Notes</label>
											<div class="editor"></div>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="row">
										<div class="col-sm-12">
											<div class="field">
												<label>Price</label>
												<input type="text" class="altr" name="" >
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row additional mbpx-30">
								<div class="col-sm-12">
									<h3><span>Additional Notes</span></h3>
								</div>
								<div class="col-md-12 mbpx-20">
									<div class="editor"></div>
								</div>

								<div class="col-md-4">
									<label>Floor Plans</label>
									<div class="addFileStyle floor">
									    <input type="file" />
									</div>
								</div>
								<div class="col-md-4">
									<label>Additional Documents</label>
									<div class="addFileStyle doc">
									    <input type="file" />
									</div>
								</div>
								<div class="col-md-4">
									<label>Additional Pictures</label>
									<div class="addFileStyle pic">
										    <input type="file" />
										</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<a href="{{ URL::to('/send-rfp-preview') }}" class="primary-btn dblue extended">Preview RFP</a>
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




