
@extends('layout.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!} 
@stop
@section('body-class') inner-pg @stop
@section('content')

<section class="inner-srch wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="srch-holder">
					<div class="row mlpx-0">
						<div class="col-sm-6 col-md-6 col-lg-3 hold">
							<div class="field">
								<i class="ico c-srch"></i>
								<input type="text" class="frst" placeholder="Where ?">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-2 hold">
							<div class="field">
								<i class="ico c-rooms"></i>
								<input type="text" class="scnd drp" name="quantity" placeholder="Rooms">

								<div class="number-cont" id="info">
									<form id='myform' method='POST' action='#' class="numbo">
									   
									    <input type='text' name='quantity' value='1' class='qty' style="margin-bottom: 0px !important" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
									    <input type='button' value='+' class='qtyplus' field='quantity' style="font-weight: bold;" />
									     <input type='button' value='-' class='qtyminus' field='quantity' style="font-weight: bold;" />
								    </form>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3 hold">
							<div class="field">
								<i class="ico c-when"></i>
								<input type="text" class="thrd" id="datepicker" placeholder="When?">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-2 hold nopr-0">
							<div class="field">
								<i class="ico c-guest"></i>
								<input type="text" class="drp"  name="quantity-guest" placeholder="Guests">

								<div class="number-cont" id="info">
									<form id='myform-1' method='POST' action='#' class="numbo">
									   
									    <input type='text' name='quantity-guest' value='1' class='qty' style="margin-bottom: 0px !important" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
									     
									    <input type='button' value='+' class='qtyplus' field='quantity-guest' style="font-weight: bold;" /><input type='button' value='-' class='qtyminus' field='quantity-guest' style="font-weight: bold;" />
								    </form>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-2 nopl-0">
							<a href="{{ URL::to('/search-results') }}" class="sb-btn">Search</a>
							{{-- <input type="submit" class="sb-btn" value="Search" name=""> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="hotel-inner-nav wow fadeInUp" data-wow-delay="0.2s" id="hotel-inner-nav">
	<div class="to-scroll">
		<div class="container">
			<div class="row">
				<div class="col-md-12">				
					<ul>
						<li class="active"><a href="#">Overview</a></li>
						<li><a href="#amenities">Amenities</a></li>    
						<li><a href="#meeting">Meeting Space</a></li>
						<li><a href="#catering">Catering Services</a></li>
						<li><a href="#guest">Guest Rooms</a></li>
						<li><a href="#restaurant">Restaurant & Bars</a></li>
						<li><a href="#near-by">Near By</a></li>
						<li><a href="#reviews">Reviews</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="hotel-dt">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="hotel-img wow fadeIn" data-wow-delay="0.2s">
					<div class="row">
						<div class="col-md-8">
							<div class="posRel">
								<div class="fav">
									<i class="fa fa-heart"></i>
								</div>
								<figure>
									<a href="{{ URL::to('images/hotel-dt-img-1.jpg') }}" data-fancybox="gallery">
										{{ HTML::image('images/hotel-dt-img-1.jpg', 'Link Meetings') }}
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-4 plpx-0 rht-img wow fadeIn" data-wow-delay="0.7s">
							<div class="row">
								<div class="col-md-6 col-6 prpx-0 prpx-2">
									<figure class="mtpx-0">
										<a href="{{ URL::to('images/hotel-dt-img-2.jpg') }}" data-fancybox="gallery">
											{{ HTML::image('images/hotel-dt-img-2.jpg', 'Link Meetings') }}
										</a>
									</figure>
								</div>
								<div class="col-md-6 col-6 plpx-2 wow fadeIn" data-wow-delay="1.2s">
									<figure class="mtpx-0">
										<a href="{{ URL::to('images/hotel-dt-img-3.jpg') }}" data-fancybox="gallery">
											{{ HTML::image('images/hotel-dt-img-3.jpg', 'Link Meetings') }}
										</a>
									</figure>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-6 prpx-2 wow fadeIn" data-wow-delay="1.9s">
									<figure>
										<a href="{{ URL::to('images/hotel-dt-img-4.jpg') }}" data-fancybox="gallery">
											{{ HTML::image('images/hotel-dt-img-4.jpg', 'Link Meetings') }}
										</a>
									</figure>
								</div>
								<div class="col-md-6 col-6 plpx-2 wow fadeIn" data-wow-delay="2.6s">
									<div class="posRel">
										<figure>
											<a href="{{ URL::to('images/hotel-dt-img-5.jpg') }}" data-fancybox="gallery">
												{{ HTML::image('images/hotel-dt-img-5.jpg', 'Link Meetings') }}
											</a>
										</figure>
										<div class="overlay-txt text-center">
											<p>See All 26 Photos & Videos</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-7 col-lg-8">
				<div class="fea wow fadeInUp" data-wow-delay="0.2s">
					<h5>50% OFF</h5>
					<h5 class="orange">4 Star Hotel</h5>
					<h5 class="green">free wifi</h5>
				</div>
				<div class="head wow fadeInUp" data-wow-delay="0.2s">
					<h2>Antis Hotel</h2>
					<div class="rate">
						<p>
							<i class="fa fa-star"></i>
							4.8 (146 reviews)
						</p>
					</div>
				</div>
				<div class="add wow fadeInUp" data-wow-delay="0.2s">
					<p>Sultanahmet Mah. Akbiyik Degirmeni Sok. No:98, Sultanahmet, Istanbul, Turkey, 34122 - <a data-fancybox data-options='{"iframe" : {"css" : {"width" : "80%", "height" : "80%"}}}' href="https://www.google.com/maps/place/Antis+Hotel/@41.0035806,28.9791129,15z/data=!4m8!3m7!1s0x0:0x7cb924c5bc60d18b!5m2!4m1!1i2!8m2!3d41.0035806!4d28.9791129">SEE MAP</a></p>
				</div>
				<div class="dt wow fadeInUp" data-wow-delay="0.2s">
					<div class="row">
						<div class="col-6 col-lg-3">
							<h6><strong>Meeting Rooms</strong> 10</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Meeting Space</strong> 10</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Guest Rooms</strong> 500</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Restaurant & Bars</strong> 20</h6>
						</div>
					</div>
					<div class="row">
						<div class="col-6 col-lg-3">
							<h6><strong>Chain</strong> Paradise Hotels</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Built</strong> 2006</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Total Meeting Space</strong> 50,000 sq. ft.</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>AAA Rating</strong> 
								<i class="fa fa-diamond" aria-hidden="true"></i>
								<i class="fa fa-diamond" aria-hidden="true"></i>
								<i class="fa fa-diamond" aria-hidden="true"></i>
								<i class="fa fa-diamond" aria-hidden="true"></i>
								<i class="fa fa-diamond" aria-hidden="true"></i>
							</h6>
						</div>
					</div>
					<div class="row">
						<div class="col-6 col-lg-3">
							<h6><strong>Brand</strong> Paradise Hotels</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Renovated</strong> 2018</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>All-inclusive Hotel</strong> Yes</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Trip Advisor</strong> 
								<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
								<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
								<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
								<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
								<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
							</h6>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h6><strong>DMC</strong> Link Meeting</h6>
							{{ HTML::image('images/logo-f.png', 'Link Meetings') }}
						</div>
						
					</div>
				</div>

				<div class="details wow fadeInUp" data-wow-delay="0.2s" id="amenities">
					<ul class="tabs">
						<li><a href="javascript:;" data-target="amenities" class="active">Amenities</a></li>
						<li><a href="javascript:;" data-target="facilities">Facilities</a></li>
						<li><a href="javascript:;" data-target="services">Services</a></li>
						<li><a href="javascript:;" data-target="recreational-activities">Recreational Activities</a></li>
						<li><a href="javascript:;" data-target="venue-accessible-by">Venue Accessible By</a></li>
						<li><a href="javascript:;" data-target="equipment">Equipment</a></li>
					</ul>
					<div class="tab-content amenities" style="display: block;">
						<div class="row">
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										{{ HTML::image('images/icon-wifi.png', 'WIFI') }}
									</figure>
									<span>Wireless Internet</span>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										{{ HTML::image('images/icon-plane.png', 'Airport transfer') }}
									</figure>
									<span>Airport transfer</span>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										{{ HTML::image('images/icon-location.png', 'Location') }}
									</figure>
									<span>Located in heart of Istanbul</span>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										{{ HTML::image('images/icon-currency.png', 'Currency Exchange') }}
									</figure>
									<span>Currency exchange</span>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										{{ HTML::image('images/icon-housekeeping.png', 'Housekeeping') }}
									</figure>
									<span>Daily housekeeping</span>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-content facilities">
						<div class="row">
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										{{ HTML::image('images/icon-wifi.png', 'WIFI') }}
									</figure>
									<span>Wireless Internet</span>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-content services">
						<div class="row">
							
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										{{ HTML::image('images/icon-plane.png', 'Airport transfer') }}
									</figure>
									<span>Airport transfer</span>
								</div>
							</div>
							
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										{{ HTML::image('images/icon-currency.png', 'Currency Exchange') }}
									</figure>
									<span>Currency exchange</span>
								</div>
							</div>
							
						</div>
					</div>

					<div class="tab-content recreational-activities">
						<div class="row">
							
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										{{ HTML::image('images/icon-location.png', 'Location') }}
									</figure>
									<span>Located in heart of Istanbul</span>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										{{ HTML::image('images/icon-currency.png', 'Currency Exchange') }}
									</figure>
									<span>Currency exchange</span>
								</div>
							</div>
							
						</div>
					</div>

					<div class="tab-content venue-accessible-by">
						<div class="row">
							
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										{{ HTML::image('images/icon-currency.png', 'Currency Exchange') }}
									</figure>
									<span>Currency exchange</span>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										{{ HTML::image('images/icon-housekeeping.png', 'Housekeeping') }}
									</figure>
									<span>Daily housekeeping</span>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-content equipment">
						<div class="row">
							
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										{{ HTML::image('images/icon-housekeeping.png', 'Housekeeping') }}
									</figure>
									<span>Daily housekeeping</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="meeting-space wow fadeInUp" data-wow-delay="0.2s" id="meeting">
					<div class="row">
						<div class="col-12">
							<h3>Meeting Space</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-6 col-lg-3">
							<h6><strong>Total Meeting Space</strong> 50,000 sq. ft.</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Largest Room</strong> 19,375 sq. ft.</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Second Largest Room</strong> 7,965 sq. ft.</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Exhibit Space</strong> 50,000 sq. ft.</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Meeting Rooms</strong> 25</h6>
						</div>
					</div>
					<div class="row mbpx-32">
						<div class="col-sm-12">
							<a href="javascript:;" class="download">
								{{ HTML::image('images/icon-file-download.png', 'Download') }}
								Visualizer - enjoy a walk through our hotel!
							</a>
							<a href="javascript:;" class="download mrpx-0">
								{{ HTML::image('images/icon-file-download.png', 'Download') }}
								ijVENUES factsheet
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="meeting-dt">
								<h3>Room 1: <strong>Geneve</strong></h3>
								<div class="row">
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-area.png', 'Area') }}
											</figure>
											<p><strong>Area</strong> 45 m<sup>2</sup></p>
										</div>
									</div>
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-height.png', 'Height') }}
											</figure>
											<p><strong>Height</strong> 13ft.</p>
										</div>
									</div>
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-size.png', 'Size') }}
											</figure>
											<p><strong>Size</strong> 1x45</p>
										</div>
									</div>
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-cocktail.png', 'Cocktail') }}
											</figure>
											<p><strong>Cocktail</strong> 13 ft.</p>
										</div>
									</div>
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-theatre.png', 'Theatre') }}
											</figure>
											<p><strong>Theatre</strong> 50</p>
										</div>
									</div>
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-school.png', 'School') }}
											</figure>
											<p><strong>School</strong> 35</p>
										</div>
									</div>
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-banquet.png', 'Banquet') }}
											</figure>
											<p><strong>Banquet</strong> 0</p>
										</div>
									</div>
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-imperial.png', 'Imperial') }}
											</figure>
											<p><strong>Imperial</strong> 0</p>
										</div>
									</div>
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-u-shape.png', 'U-Shape') }}
											</figure>
											<p><strong>U-Shape</strong> 0</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="catering-service wow fadeInUp" data-wow-delay="0.2s" id="catering">
					<h3>Catering Service</h3>

					<div class="row">
						<div class="col-md-4">
							<figure>
								{{ HTML::image('images/catering-service-img.jpg', 'Catering Service') }}
							</figure>
						</div>
						<div class="col-md-8">
							<p>Phasellus at metus tempor, interdum libero in, pulvinar lectus. Nam congue justo at ultrices commodo. Sed nec venenatis mauris, a viverra elit. Sed nec pulvinar dolor. Mauris posuere dapibus sapien, non scelerisque neque. In hac habitasse platea dictumst. Mauris facilisis leo eu semper tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris eu viverra neque. Sed mattis sodales ornare. Vivamus imperdiet magna sit amet ligula eleifend gravida. Proin quis volutpat augue. Nam consequat orci eget dictum consectetur. In auctor lectus tempor.</p>
						</div>
					</div>
				</div>

				<div class="guest-rooms wow fadeInUp" data-wow-delay="0.2s" id="guest">
					<h3>Guest Rooms</h3>

					<div class="row">
						<div class="col-6 col-lg-3">
							<h6><strong>Total Guest Rooms</strong> 10</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Doubles (2 beds)</strong> 10</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Suites</strong> 31</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>Tax Rate</strong> 13%</h6>
						</div>
					</div>

					<div class="room-dt">
						<div class="row">
							<div class="col-md-4">
								<figure>
									{{ HTML::image('images/room-dt-img.jpg', 'Premium Room (Main Wing)') }}
								</figure>
							</div>
							<div class="col-md-8">
								<h4>Premium Room (Main Wing) <span>300 Rooms</span></h4>

								<div class="row">
									<div class="col-md-12 col-lg-6">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-wifi-sm.png', 'WIFI') }}
											</figure>
											<span>Wireless Internet</span>
										</div>
									</div>
									<div class="col-md-12 col-lg-6">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-housekeeping.png', 'Housekeeping') }}
											</figure>
											<span>Daily housekeeping</span>
										</div>
									</div>
									<div class="col-md-12 col-lg-6">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-size-sm.png', 'Room size') }}
											</figure>
											<span>Room size: 20 m²/215 ft²</span>
										</div>
									</div>
									<div class="col-md-12 col-lg-6">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-balcony.png', 'Balcony/terrace') }}
											</figure>
											<span>Balcony/terrace</span>
										</div>
									</div>
									<div class="col-md-12 col-lg-6">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-shower.png', 'Shower and bathtub') }}
											</figure>
											<span>Shower and bathtub</span>
										</div>
									</div>
									<div class="col-md-12 col-lg-6">
										<div class="bx">
											<a href="javascript:;">
												<figure>
													{{ HTML::image('images/icon-all-facility.png', 'See All Facilities') }}
												</figure>
												<span>See All Facilities</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="resturant-bars wow fadeInUp" data-wow-delay="0.2s" id="restaurant">
					<h3>Resturant & Bar</h3>

					<div class="row">
						<div class="col-md-4">
							<figure>
								{{ HTML::image('images/resturant-bar-img.jpg', 'Resturant & Bar') }}
							</figure>
						</div>
						<div class="col-md-8">
							<h4>Naons<span>International dishes prepare infront of you and served buffet-style</span></h4>
							<div class="row">
									<div class="col-md-12 col-lg-6">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-cuisine.png', 'Cuisine') }}
											</figure>
											<p><strong>Cuisine</strong> International Buffet</p>
										</div>
									</div>
									<div class="col-md-12 col-lg-6">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-timings.png', 'Opening Timings') }}
											</figure>
											<p><strong>Opening Timings</strong> Breakfast to Late night</p>
										</div>
									</div>
									<div class="col-md-12 col-lg-6">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-dress-code.png', 'Dress Code') }}
											</figure>
											<p><strong>Dress Code</strong> Resort Casual</p>
										</div>
									</div>
									<div class="col-md-12 col-lg-6">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-access.png', 'Access') }}
											</figure>
											<p><strong>Access</strong> Open for everyone</p>
										</div>
									</div>
								</div>
						</div>
					</div>
				</div>

				<div class="nearby wow fadeInUp" data-wow-delay="0.2s" id="near-by">
					<h3>Nearby</h3>

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2116728.3883213475!2d-101.53359275367212!3d39.07966958860902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1590446242685!5m2!1sen!2s" width="100%" height="368" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>

				<div class="reviews wow fadeInUp" data-wow-delay="0.2s" id="reviews">

					<div class="row va-ctr">
						<div class="col-sm-7">
							<h3>Reviews</h3>
							<div class="rate">
								<p>
									<i class="fa fa-star"></i>
									4.8 (146 reviews)
								</p>
							</div>
						</div>
						<div class="col-sm-5 text-right">

							<a data-fancybox="show-add-review" data-src="#show-add-review" href="javascript:;" class="primary-btn dblue btn-add-rev">Add Review</a>
						</div>
					</div>
					<div class="review-dt">
						<div class="bx">
							<figure>
								{{ HTML::image('images/user-ava-1.png', 'Review') }}
							</figure>
							<div class="row va-ctr">
								<div class="col-6">
									<h4>Brian George <span>February 2020</span></h4>
								</div>
								<div class="col-6 text-right">
									<div class="rate">
										<p>
											<i class="fa fa-star"></i>
											4.8
										</p>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p>Proin et luctus metus. Curabitur ut rhoncus turpis. Pellentesque at tortor a metus blandit gravida. Mauris nec porttitor leo. Suspendisse lacinia eu tellus vel commodo. Nunc molestie, dui sed pharetra tristique, ante enim pulvinar lacus, id porttitor mi est ut nisi. Fusce commodo tortor rhoncus molestie tristique.</p>
								</div>
							</div>
						</div>

						<div class="bx">
							<figure>
								{{ HTML::image('images/user-ava-2.png', 'Review') }}
							</figure>
							<div class="row va-ctr">
								<div class="col-6">
									<h4>Marilyn Day <span>February 2020</span></h4>
								</div>
								<div class="col-6 text-right">
									<div class="rate">
										<p>
											<i class="fa fa-star"></i>
											5
										</p>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p>Proin et luctus metus. Curabitur ut rhoncus turpis. Pellentesque at tortor a metus blandit gravida. Mauris nec porttitor leo. Suspendisse lacinia eu tellus vel commodo. Nunc molestie, dui sed pharetra tristique, ante enim pulvinar lacus, id porttitor mi est ut nisi. Fusce commodo tortor rhoncus molestie tristique.</p>
								</div>
							</div>
						</div>

						<div class="bx">
							<figure>
								{{ HTML::image('images/user-ava-3.png', 'Review') }}
							</figure>
							<div class="row va-ctr">
								<div class="col-6">
									<h4>Martha Duncan <span>February 2020</span></h4>
								</div>
								<div class="col-6 text-right">
									<div class="rate">
										<p>
											<i class="fa fa-star"></i>
											4.8
										</p>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p>Proin et luctus metus. Curabitur ut rhoncus turpis. Pellentesque at tortor a metus blandit gravida. Mauris nec porttitor leo. Suspendisse lacinia eu tellus vel commodo. Nunc molestie, dui sed pharetra tristique, ante enim pulvinar lacus, id porttitor mi est ut nisi. Fusce commodo tortor rhoncus molestie tristique.</p>
								</div>
							</div>
						</div>

						<div class="bx">
							<figure>
								{{ HTML::image('images/user-ava-1.png', 'Review') }}
							</figure>
							<div class="row va-ctr">
								<div class="col-6">
									<h4>Brian George <span>February 2020</span></h4>
								</div>
								<div class="col-6 text-right">
									<div class="rate">
										<p>
											<i class="fa fa-star"></i>
											4.8
										</p>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p>Proin et luctus metus. Curabitur ut rhoncus turpis. Pellentesque at tortor a metus blandit gravida. Mauris nec porttitor leo. Suspendisse lacinia eu tellus vel commodo. Nunc molestie, dui sed pharetra tristique, ante enim pulvinar lacus, id porttitor mi est ut nisi. Fusce commodo tortor rhoncus molestie tristique.</p>
								</div>
							</div>
						</div>

						<div class="bx">
							<figure>
								{{ HTML::image('images/user-ava-2.png', 'Review') }}
							</figure>
							<div class="row va-ctr">
								<div class="col-6">
									<h4>Marilyn Day <span>February 2020</span></h4>
								</div>
								<div class="col-6 text-right">
									<div class="rate">
										<p>
											<i class="fa fa-star"></i>
											5
										</p>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p>Proin et luctus metus. Curabitur ut rhoncus turpis. Pellentesque at tortor a metus blandit gravida. Mauris nec porttitor leo. Suspendisse lacinia eu tellus vel commodo. Nunc molestie, dui sed pharetra tristique, ante enim pulvinar lacus, id porttitor mi est ut nisi. Fusce commodo tortor rhoncus molestie tristique.</p>
								</div>
							</div>
						</div>

						<div class="bx">
							<figure>
								{{ HTML::image('images/user-ava-3.png', 'Review') }}
							</figure>
							<div class="row va-ctr">
								<div class="col-6">
									<h4>Martha Duncan <span>February 2020</span></h4>
								</div>
								<div class="col-6 text-right">
									<div class="rate">
										<p>
											<i class="fa fa-star"></i>
											4.8
										</p>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p>Proin et luctus metus. Curabitur ut rhoncus turpis. Pellentesque at tortor a metus blandit gravida. Mauris nec porttitor leo. Suspendisse lacinia eu tellus vel commodo. Nunc molestie, dui sed pharetra tristique, ante enim pulvinar lacus, id porttitor mi est ut nisi. Fusce commodo tortor rhoncus molestie tristique.</p>
								</div>
							</div>
						</div>

						<div class="bx">
							<figure>
								{{ HTML::image('images/user-ava-1.png', 'Review') }}
							</figure>
							<div class="row va-ctr">
								<div class="col-6">
									<h4>Brian George <span>February 2020</span></h4>
								</div>
								<div class="col-6 text-right">
									<div class="rate">
										<p>
											<i class="fa fa-star"></i>
											4.8
										</p>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p>Proin et luctus metus. Curabitur ut rhoncus turpis. Pellentesque at tortor a metus blandit gravida. Mauris nec porttitor leo. Suspendisse lacinia eu tellus vel commodo. Nunc molestie, dui sed pharetra tristique, ante enim pulvinar lacus, id porttitor mi est ut nisi. Fusce commodo tortor rhoncus molestie tristique.</p>
								</div>
							</div>
						</div>

						<div class="bx">
							<figure>
								{{ HTML::image('images/user-ava-2.png', 'Review') }}
							</figure>
							<div class="row va-ctr">
								<div class="col-6">
									<h4>Marilyn Day <span>February 2020</span></h4>
								</div>
								<div class="col-6 text-right">
									<div class="rate">
										<p>
											<i class="fa fa-star"></i>
											5
										</p>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p>Proin et luctus metus. Curabitur ut rhoncus turpis. Pellentesque at tortor a metus blandit gravida. Mauris nec porttitor leo. Suspendisse lacinia eu tellus vel commodo. Nunc molestie, dui sed pharetra tristique, ante enim pulvinar lacus, id porttitor mi est ut nisi. Fusce commodo tortor rhoncus molestie tristique.</p>
								</div>
							</div>
						</div>

						<div class="bx">
							<figure>
								{{ HTML::image('images/user-ava-3.png', 'Review') }}
							</figure>
							<div class="row va-ctr">
								<div class="col-6">
									<h4>Martha Duncan <span>February 2020</span></h4>
								</div>
								<div class="col-6 text-right">
									<div class="rate">
										<p>
											<i class="fa fa-star"></i>
											4.8
										</p>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p>Proin et luctus metus. Curabitur ut rhoncus turpis. Pellentesque at tortor a metus blandit gravida. Mauris nec porttitor leo. Suspendisse lacinia eu tellus vel commodo. Nunc molestie, dui sed pharetra tristique, ante enim pulvinar lacus, id porttitor mi est ut nisi. Fusce commodo tortor rhoncus molestie tristique.</p>
								</div>
							</div>
						</div>

						<div class="bx">
							<figure>
								{{ HTML::image('images/user-ava-1.png', 'Review') }}
							</figure>
							<div class="row va-ctr">
								<div class="col-6">
									<h4>Brian George <span>February 2020</span></h4>
								</div>
								<div class="col-6 text-right">
									<div class="rate">
										<p>
											<i class="fa fa-star"></i>
											4.8
										</p>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p>Proin et luctus metus. Curabitur ut rhoncus turpis. Pellentesque at tortor a metus blandit gravida. Mauris nec porttitor leo. Suspendisse lacinia eu tellus vel commodo. Nunc molestie, dui sed pharetra tristique, ante enim pulvinar lacus, id porttitor mi est ut nisi. Fusce commodo tortor rhoncus molestie tristique.</p>
								</div>
							</div>
						</div>

						<div class="bx">
							<figure>
								{{ HTML::image('images/user-ava-2.png', 'Review') }}
							</figure>
							<div class="row va-ctr">
								<div class="col-6">
									<h4>Marilyn Day <span>February 2020</span></h4>
								</div>
								<div class="col-6 text-right">
									<div class="rate">
										<p>
											<i class="fa fa-star"></i>
											5
										</p>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p>Proin et luctus metus. Curabitur ut rhoncus turpis. Pellentesque at tortor a metus blandit gravida. Mauris nec porttitor leo. Suspendisse lacinia eu tellus vel commodo. Nunc molestie, dui sed pharetra tristique, ante enim pulvinar lacus, id porttitor mi est ut nisi. Fusce commodo tortor rhoncus molestie tristique.</p>
								</div>
							</div>
						</div>

						<div class="bx">
							<figure>
								{{ HTML::image('images/user-ava-3.png', 'Review') }}
							</figure>
							<div class="row va-ctr">
								<div class="col-6">
									<h4>Martha Duncan <span>February 2020</span></h4>
								</div>
								<div class="col-6 text-right">
									<div class="rate">
										<p>
											<i class="fa fa-star"></i>
											4.8
										</p>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p>Proin et luctus metus. Curabitur ut rhoncus turpis. Pellentesque at tortor a metus blandit gravida. Mauris nec porttitor leo. Suspendisse lacinia eu tellus vel commodo. Nunc molestie, dui sed pharetra tristique, ante enim pulvinar lacus, id porttitor mi est ut nisi. Fusce commodo tortor rhoncus molestie tristique.</p>
								</div>
							</div>
						</div>

						<div class="clearfix plpx-68">
							<a href="javascript:;" id="loadMore" class="primary-btn gbdr">load more</a>
						</div>
					</div>
				</div>

			</div>

			<div class="col-md-5 col-lg-4">
				<div class="get-in-touch wow fadeInUp" data-wow-delay="0.2s">
					<h2>Get In Touch</h2>

					<form>
						<div class="row">
							<div class="col-sm-12">
								<div class="field">
									<input type="text" placeholder="Your Name*" name="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="field">
									<input type="text" placeholder="Your Email Address*" name="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="field">
									<input type="text" placeholder="Your Phone*" name="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="field">
									<i class="ico c-when"></i>
									<input type="text" placeholder="When ?" id="datepickers" class="wico" name="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="field">
									<i class="ico c-rooms"></i>
									<input type="text" class="scnd drp wico" name="quantity-quote-room" placeholder="Rooms">

									<div class="number-cont" id="info">
										<form id='myform-quote' method='POST' action='#' class="numbo">
										   
										    <input type='text' name='quantity-quote-room' value='1' class='qty' style="margin-bottom: 0px !important" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
										    <input type='button' value='+' class='qtyplus' field='quantity-quote-room' style="font-weight: bold;" />
										     <input type='button' value='-' class='qtyminus' field='quantity-quote-room' style="font-weight: bold;" />
									    </form>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="field">
									<i class="ico c-guest"></i>
									<input type="text" class="drp wico"  name="quantity-quote-guest" placeholder="Guests">

									<div class="number-cont" id="info">
										<form id='myform-quote-1' method='POST' action='#' class="numbo">
										   
										    <input type='text' name='quantity-quote-guest' value='1' class='qty' style="margin-bottom: 0px !important" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
										     
										    <input type='button' value='+' class='qtyplus' field='quantity-quote-guest' style="font-weight: bold;" /><input type='button' value='-' class='qtyminus' field='quantity-quote-guest' style="font-weight: bold;" />
									    </form>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="field">
									<textarea placeholder="Tell us more about your event" rows="2" cols="2"></textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<a data-fancybox="get-quote" data-src="#get-quote" href="javascript:;" class="primary-btn dblue">Get a Quote</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="similar-venue wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Similar Venues</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="fea-slide owl-theme owl-carousel">
					<div class="item">
						<div class="deal-bx">
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
						</div>
					</div>

					<div class="item">
						<div class="deal-bx">
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
						</div>
					</div>

					<div class="item">
						<div class="deal-bx">
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
						</div>
					</div>

					<div class="item">
						<div class="deal-bx">
							<figure>
								{{ HTML::image('images/deal-bx-fea-4.jpg', 'Link Meetings') }}
							</figure>
							<div class="text">
								<h5>Paris, France</h5>
								<h3>Hotel Victoires Opera</h3>
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

					<div class="item">
						<div class="deal-bx">
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
						</div>
					</div>

					<div class="item">
						<div class="deal-bx">
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
						</div>
					</div>

					<div class="item">
						<div class="deal-bx">
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
						</div>
					</div>

					<div class="item">
						<div class="deal-bx">
							<figure>
								{{ HTML::image('images/deal-bx-fea-4.jpg', 'Link Meetings') }}
							</figure>
							<div class="text">
								<h5>Paris, France</h5>
								<h3>Hotel Victoires Opera</h3>
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
	</div>
</section>

<a data-fancybox="show-drt" class="show-drt" data-src="#show-drt" href="javascript:;" class="">Yes</a>

<div class="popup" id="show-drt" style="display: none; max-width: 600px; width: 100%;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<figure>
					{{ HTML::image('images/logo-f.png', 'Link Meetings') }}
				</figure>

				<p>Proin et luctus metus. Curabitur ut rhoncus turpis. Pellentesque at tortor a metus blandit gravida. Mauris nec porttitor leo. Suspendisse lacinia eu tellus vel commodo. </p>

				<div class="row">
					<div class="col-sm-12 text-center">
						<a href="javascript:;" class="primary-btn dblue-bdr nxt" data-fancybox-close>Yes</a>
						<a href="javascript:;" class="primary-btn dblue nxt" data-fancybox-close>No</a>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>


<div class="popup" id="get-quote" style="display: none; width: 100%; max-width: 965px;">
	<section >
		<div class="container-fluid">
			<div class="row lst-thanks">
				<div class="col-sm-12">
					<div class="head">
						<h2>Request a Quote</h2>
					</div>
				</div>
			</div>
			<div class="row lst-thanks">
				<div class="col-sm-12">
					<div class="steps">
						<ul>
							<li class="active step-1-n">
								<h5>Step 1<span>Room Type</span></h5>
							</li>

							<li class="step-2-n">
								<h5>Step 2<span>Private Functions Outdoors</span></h5>
							</li>

							<li class="step-3-n">
								<h5>Step 3<span>Private Functions Indoors</span></h5>
							</li>

							<li class="step-4-n">
								<h5>Step 4<span>DMC</span></h5>
							</li>

							<li class="step-5-n">
								<h5>Step 5<span>Summary</span></h5>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="step-1 lst-thanks">
				<div class="min-ht-350px">
					<div class="row">
						<div class="col-sm-12">
							<h3>Room Type</h3>
						</div>	
					</div>
					<div class="to-clone">
						<div class="row">
							<div class="col-md-3">					
								<label>Room</label>
								<div class="field">
									<a href="javascript:;" class="dropdown">STANDARD SGL <i class="fa fa-caret-down"></i></a>
									<ul class="sub-menu">
										<li><a href="javascript:;" >SGL</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-4">					
								<label>Date</label>
								<div class="field">
									<i class="ico c-when"></i>
									<input type="text" class="datepicker wico" placeholder="When?">
								</div>
							</div>
							<div class="col-md-2">					
								<label>Quantity</label>
								<div class="field">
									<input type="text" class="drp" name="quantity-quote-pop" placeholder="1">
									<div class="number-cont" id="info">
										<form id='myform-quote-3' method='POST' action='#' class="numbo">
										   
										    <input type='text' name='quantity-quote-pop' value='1' class='qty' style="margin-bottom: 0px !important" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
										     
										    <input type='button' value='+' class='qtyplus' field='quantity-quote-pop' style="font-weight: bold;" /><input type='button' value='-' class='qtyminus' field='quantity-quote-pop' style="font-weight: bold;" />
									    </form>
									</div>
								</div>
							</div>				
							<div class="col-md-3">					
								<label>Amenities</label>
								<div class="field">
									<a href="javascript:;" class="dropdown">Select <i class="fa fa-caret-down"></i></a>
									<ul class="sub-menu">
										<li><label><input type="checkbox" name="">Screen</label></li>
										<li><label><input type="checkbox" name="">Sound System</label></li>
										<li><label><input type="checkbox" name="">Projection</label></li>
										<li><label><input type="checkbox" name="">Translation system</label></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row mtpx-20">
						<div class="col-md-12">
							<div class="field clearfix">
								<a href="javascript:;" class="add-more links-md">+ Add More</a>
								
							</div>
						</div>
					</div>
				</div>
				<div class="foot">
					<div class="row">
						<div class="col-sm-12 text-right">
							<a href="javascript:;" class="primary-btn dblue-bdr nxt">Skip</a>
							<a href="javascript:;" class="primary-btn dblue nxt">Next</a>
						</div>
					</div>
				</div>
			</div>

			<div class="step-2 lst-thanks" style="display: none;">
				<div class="min-ht-350px">
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

						<div class="col-sm-3">
							<div class="bx" data-target="garden">
								<div>
									<i class="fa fa-check-circle" aria-hidden="true"></i>
									<figure>
										{{ HTML::image('images/step-garden.png', 'Link Meetings') }}
									</figure>
									<figure>
										{{ HTML::image('images/step-garden-hover.png', 'Link Meetings') }}
									</figure>
									<h4>Garden</h4>
								</div>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="bx lst" data-target="other">
								<div>
									<i class="fa fa-check-circle" aria-hidden="true"></i>
									<figure>
										{{ HTML::image('images/step-other.png', 'Link Meetings') }}
									</figure>
									<figure>
										{{ HTML::image('images/step-other-hover.png', 'Link Meetings') }}
									</figure>
									<h4>other</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="show-on beach">
						<div class="sec">
							<div class="row">
								<div class="col-sm-12">
									<div class="field">
										<label>
											<input type="checkbox" name="" checked="">
											Set Up
										</label>
									</div>
								</div>

								<div class="col-sm-12 to-shw-fld">
									<ul>
										<li>
											<label>
												<input type="checkbox" name="">
												Cocktail
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Banquet
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="other" name="">
												Other
											</label>
										</li>
									</ul>
									<div class="field show-other">
										<textarea rows="2" cols="2" placeholder="Boots, podium, dance floor, lcd screens, fire works, others"></textarea>
									</div>
								</div>
							</div>
						</div>

						<div class="sec">
							<div class="row">
								<div class="col-sm-12">
									<div class="field">
										<label>
											<input type="checkbox" name="" checked="">
											AV
										</label>
									</div>
								</div>

								<div class="col-sm-12 to-shw-fld">
									<ul>
										<li>
											<label>
												<input type="checkbox" name="">
												Screen
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Sound System
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Projection
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Translation system
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Lights
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="other" name="">
												Other
											</label>
										</li>
									</ul>
									<div class="field show-other">
										<textarea rows="2" cols="2" placeholder="Boots, podium, dance floor, lcd screens, fire works, others"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="show-on terrace">
						<div class="sec">
							<div class="row">
								<div class="col-sm-12">
									<div class="field">
										<label>
											<input type="checkbox" name="">
											Set Up
										</label>
									</div>
								</div>

								<div class="col-sm-12 to-shw-fld">
									<ul>
										<li>
											<label>
												<input type="checkbox" name="">
												Cocktail
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Banquet
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="other" name="">
												Other
											</label>
										</li>
									</ul>
									<div class="field show-other">
										<textarea rows="2" cols="2" placeholder="Boots, podium, dance floor, lcd screens, fire works, others"></textarea>
									</div>
								</div>
							</div>
						</div>

						<div class="sec">
							<div class="row">
								<div class="col-sm-12">
									<div class="field">
										<label>
											<input type="checkbox" name="">
											AV
										</label>
									</div>
								</div>

								<div class="col-sm-12 to-shw-fld">
									<ul>
										<li>
											<label>
												<input type="checkbox" name="">
												Screen
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Sound System
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Projection
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Translation system
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Lights
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="other" name="">
												Other
											</label>
										</li>
									</ul>
									<div class="field show-other">
										<textarea rows="2" cols="2" placeholder="Boots, podium, dance floor, lcd screens, fire works, others"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="show-on garden">
						<div class="sec">
							<div class="row">
								<div class="col-sm-12">
									<div class="field">
										<label>
											<input type="checkbox" name="">
											Set Up
										</label>
									</div>
								</div>

								<div class="col-sm-12 to-shw-fld">
									<ul>
										<li>
											<label>
												<input type="checkbox" name="">
												Cocktail
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Banquet
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="other" name="">
												Other
											</label>
										</li>
									</ul>
									<div class="field show-other">
										<textarea rows="2" cols="2" placeholder="Boots, podium, dance floor, lcd screens, fire works, others"></textarea>
									</div>
								</div>
							</div>
						</div>

						<div class="sec">
							<div class="row">
								<div class="col-sm-12">
									<div class="field">
										<label>
											<input type="checkbox" name="">
											AV
										</label>
									</div>
								</div>

								<div class="col-sm-12 to-shw-fld">
									<ul>
										<li>
											<label>
												<input type="checkbox" name="">
												Screen
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Sound System
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Projection
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Translation system
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Lights
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="other" name="">
												Other
											</label>
										</li>
									</ul>
									<div class="field show-other">
										<textarea rows="2" cols="2" placeholder="Boots, podium, dance floor, lcd screens, fire works, others"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="show-on other">
						<div class="sec">
							<div class="row">
								<div class="col-sm-12">
									<div class="field">
										<label>
											<input type="checkbox" name="">
											Set Up
										</label>
									</div>
								</div>

								<div class="col-sm-12 to-shw-fld">
									<ul>
										<li>
											<label>
												<input type="checkbox" name="">
												Cocktail
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Banquet
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="other" name="">
												Other
											</label>
										</li>
									</ul>
									<div class="field show-other">
										<textarea rows="2" cols="2" placeholder="Boots, podium, dance floor, lcd screens, fire works, others"></textarea>
									</div>
								</div>
							</div>
						</div>

						<div class="sec">
							<div class="row">
								<div class="col-sm-12">
									<div class="field">
										<label>
											<input type="checkbox" name="">
											AV
										</label>
									</div>
								</div>

								<div class="col-sm-12 to-shw-fld">
									<ul>
										<li>
											<label>
												<input type="checkbox" name="">
												Screen
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Sound System
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Projection
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Translation system
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="">
												Lights
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="other" name="">
												Other
											</label>
										</li>
									</ul>
									<div class="field show-other">
										<textarea rows="2" cols="2" placeholder="Boots, podium, dance floor, lcd screens, fire works, others"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="foot">
					<div class="row">
						<div class="col-sm-12 text-right">
							<a href="javascript:;" class="primary-btn dblue-bdr nxt">Skip</a>
							<a href="javascript:;" class="primary-btn dblue nxt">Next</a>
						</div>
					</div>
				</div>
			</div>

			<div class="step-3 lst-thanks" style="display: none;">
				<div class="min-ht-350px">
					<div class="to-clone-1">
						<div class="row">
							<div class="col-sm-12">
								<h3>Meeting Space</h3>

								<h6># pax </h6>
								<div class="field">
									<input type="text" name="">
								</div>
								<h6 class="mbpx-15">Set up type (you can only select one)</h6>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<div class="bx "data-target="classroom">
									<div>
										<i class="fa fa-check-circle" aria-hidden="true"></i>
										<figure>
											{{ HTML::image('images/step-classroom.png', 'Link Meetings') }}
										</figure>
										<figure>
											{{ HTML::image('images/step-classroom-hover.png', 'Link Meetings') }}
										</figure>
										<h4>classroom</h4>
									</div>
								</div>
							</div>

							<div class="col-sm-2">
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

							<div class="col-sm-2">
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

							<div class="col-sm-2">
								<div class="bx" data-target="auditorium">
									<div>
										<i class="fa fa-check-circle" aria-hidden="true"></i>
										<figure>
											{{ HTML::image('images/step-auditorium.png', 'Link Meetings') }}
										</figure>
										<figure>
											{{ HTML::image('images/step-auditorium-hover.png', 'Link Meetings') }}
										</figure>
										<h4>Auditorium</h4>
									</div>
								</div>
							</div>

							<div class="col-sm-2">
								<div class="bx" data-target="half-moon">
									<div>
										<i class="fa fa-check-circle" aria-hidden="true"></i>
										<figure>
											{{ HTML::image('images/step-half-moon.png', 'Link Meetings') }}
										</figure>
										<figure>
											{{ HTML::image('images/step-half-moon-hover.png', 'Link Meetings') }}
										</figure>
										<h4>Half Moon</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="show-on classroom">
							<div class="sec">
								<div class="row">
									<div class="col-sm-12">
										<div class="field">
											<label>
												<input type="checkbox" name="" checked="">
												Set Up
											</label>
										</div>
									</div>

									<div class="col-sm-12 to-shw-fld">
										<ul>
											<li>
												<label>
													<input type="checkbox" name="">
													Cocktail
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Banquet
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="other" name="">
													Other
												</label>
											</li>
										</ul>
										<div class="field show-other">
											<textarea rows="2" cols="2" placeholder="Boots, podium, dance floor, lcd screens, fire works, others"></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="sec">
								<div class="row">
									<div class="col-sm-12">
										<div class="field">
											<label>
												<input type="checkbox" name="" checked="">
												Audiovisual
											</label>
										</div>
									</div>

									<div class="col-sm-12 to-shw-fld">
										<ul>
											<li>
												<label>
													<input type="checkbox" name="">
													Screen
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Sound System
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Projection
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Translation system
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Lights
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="other" name="">
													Other
												</label>
											</li>
										</ul>
										<div class="field show-other">
											<textarea rows="2" cols="2" placeholder="Additional Notes"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="show-on u-shape">
							<div class="sec">
								<div class="row">
									<div class="col-sm-12">
										<div class="field">
											<label>
												<input type="checkbox" name="" checked="">
												Set Up
											</label>
										</div>
									</div>

									<div class="col-sm-12 to-shw-fld">
										<ul>
											<li>
												<label>
													<input type="checkbox" name="">
													Cocktail
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Banquet
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="other" name="">
													Other
												</label>
											</li>
										</ul>
										<div class="field show-other">
											<textarea rows="2" cols="2" placeholder="Boots, podium, dance floor, lcd screens, fire works, others"></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="sec">
								<div class="row">
									<div class="col-sm-12">
										<div class="field">
											<label>
												<input type="checkbox" name="" checked="">
												Audiovisual
											</label>
										</div>
									</div>

									<div class="col-sm-12 to-shw-fld">
										<ul>
											<li>
												<label>
													<input type="checkbox" name="">
													Screen
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Sound System
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Projection
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Translation system
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Lights
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="other" name="">
													Other
												</label>
											</li>
										</ul>
										<div class="field show-other">
											<textarea rows="2" cols="2" placeholder="Additional Notes"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="show-on teathre">
							<div class="sec">
								<div class="row">
									<div class="col-sm-12">
										<div class="field">
											<label>
												<input type="checkbox" name="" checked="">
												Set Up
											</label>
										</div>
									</div>

									<div class="col-sm-12 to-shw-fld">
										<ul>
											<li>
												<label>
													<input type="checkbox" name="">
													Cocktail
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Banquet
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="other" name="">
													Other
												</label>
											</li>
										</ul>
										<div class="field show-other">
											<textarea rows="2" cols="2" placeholder="Boots, podium, dance floor, lcd screens, fire works, others"></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="sec">
								<div class="row">
									<div class="col-sm-12">
										<div class="field">
											<label>
												<input type="checkbox" name="" checked="">
												Audiovisual
											</label>
										</div>
									</div>

									<div class="col-sm-12 to-shw-fld">
										<ul>
											<li>
												<label>
													<input type="checkbox" name="">
													Screen
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Sound System
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Projection
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Translation system
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Lights
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="other" name="">
													Other
												</label>
											</li>
										</ul>
										<div class="field show-other">
											<textarea rows="2" cols="2" placeholder="Additional Notes"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="show-on auditorium">
							<div class="sec">
								<div class="row">
									<div class="col-sm-12">
										<div class="field">
											<label>
												<input type="checkbox" name="" checked="">
												Set Up
											</label>
										</div>
									</div>

									<div class="col-sm-12 to-shw-fld">
										<ul>
											<li>
												<label>
													<input type="checkbox" name="">
													Cocktail
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Banquet
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="other" name="">
													Other
												</label>
											</li>
										</ul>
										<div class="field show-other">
											<textarea rows="2" cols="2" placeholder="Boots, podium, dance floor, lcd screens, fire works, others"></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="sec">
								<div class="row">
									<div class="col-sm-12">
										<div class="field">
											<label>
												<input type="checkbox" name="" checked="">
												Audiovisual
											</label>
										</div>
									</div>

									<div class="col-sm-12 to-shw-fld">
										<ul>
											<li>
												<label>
													<input type="checkbox" name="">
													Screen
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Sound System
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Projection
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Translation system
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Lights
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="other" name="">
													Other
												</label>
											</li>
										</ul>
										<div class="field show-other">
											<textarea rows="2" cols="2" placeholder="Additional Notes"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="show-on half-moon">
							<div class="sec">
								<div class="row">
									<div class="col-sm-12">
										<div class="field">
											<label>
												<input type="checkbox" name="" checked="">
												Set Up
											</label>
										</div>
									</div>

									<div class="col-sm-12 to-shw-fld">
										<ul>
											<li>
												<label>
													<input type="checkbox" name="">
													Cocktail
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Banquet
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="other" name="">
													Other
												</label>
											</li>
										</ul>
										<div class="field show-other">
											<textarea rows="2" cols="2" placeholder="Boots, podium, dance floor, lcd screens, fire works, others"></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="sec">
								<div class="row">
									<div class="col-sm-12">
										<div class="field">
											<label>
												<input type="checkbox" name="" checked="">
												Audiovisual
											</label>
										</div>
									</div>

									<div class="col-sm-12 to-shw-fld">
										<ul>
											<li>
												<label>
													<input type="checkbox" name="">
													Screen
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Sound System
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Projection
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Translation system
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="">
													Lights
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="other" name="">
													Other
												</label>
											</li>
										</ul>
										<div class="field show-other">
											<textarea rows="2" cols="2" placeholder="Additional Notes"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row mtpx-20">
						<div class="col-md-12">
							<div class="field clearfix">
								<a href="javascript:;" class="add-more-1 links-md">+ Add More</a>
								
							</div>
						</div>
					</div>
				</div>

				<div class="foot">
					<div class="row">
						<div class="col-sm-12 text-right">
							<a href="javascript:;" class="primary-btn dblue-bdr nxt">Skip</a>
							<a href="javascript:;" class="primary-btn dblue nxt">Next</a>
						</div>
					</div>
				</div>
			</div>

			<div class="step-4 lst-thanks" style="display: none;">
				<div class="min-ht-350px">
					<div class="sec">
						<div class="row mbpx-22">
							<div class="col-sm-12">
								<div class="field">
									<label>	
										Would you like to have a DMC service
									</label>
								</div>
							</div>

							<div class="col-sm-12 to-shw-fld-altr-all">
								<ul>
									<li>
										<label>
											<input type="checkbox" class="chb other-altr-all" name="">
											Yes
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" class="chb nop" name="">
											No
										</label>
									</li>
								</ul>
							</div>
						</div>

						<div class="show-dmc">

							<div class="row mbpx-22">
								<div class="col-sm-12">
									<div class="field">
										<label>	
											Transportation
										</label>
									</div>
								</div>

								<div class="col-sm-12 to-shw-fld-altr">
									<ul>
										<li>
											<label>
												<input type="checkbox" class="other-altr chb" name="">
												Yes
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="chb no" name="">
												No
											</label>
										</li>
										<li class="show-other">
											<div class="field">
												<input type="text" placeholder="Explain Your Requirements" name="">
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div class="row mbpx-22">
								<div class="col-sm-12">
									<div class="field">
										<label>	
											Tours and Excursions
										</label>
									</div>
								</div>

								<div class="col-sm-12 to-shw-fld-altr">
									<ul>
										<li>
											<label>
												<input type="checkbox" class="other-altr chb" name="">
												Yes
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="chb no" name="">
												No
											</label>
										</li>
										<li class="show-other">
											<div class="field">
												<input type="text" placeholder="Explain Your Requirements" name="">
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div class="row mbpx-22">
								<div class="col-sm-12">
									<div class="field">
										<label>	
											Team Building and CSR
										</label>
									</div>
								</div>

								<div class="col-sm-12 to-shw-fld-altr">
									<ul>
										<li>
											<label>
												<input type="checkbox" class="other-altr chb" name="">
												Yes
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="chb no" name="">
												No
											</label>
										</li>
										<li class="show-other">
											<div class="field">
												<input type="text" placeholder="Explain Your Requirements" name="">
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div class="row mbpx-22">
								<div class="col-sm-12">
									<div class="field">
										<label>	
											Gifts
										</label>
									</div>
								</div>

								<div class="col-sm-12 to-shw-fld-altr">
									<ul>
										<li>
											<label>
												<input type="checkbox" class="other-altr chb" name="">
												Yes
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="chb no" name="">
												No
											</label>
										</li>
										<li class="show-other">
											<div class="field">
												<input type="text" placeholder="Explain Your Requirements" name="">
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div class="row mbpx-22">
								<div class="col-sm-12">
									<div class="field">
										<label>	
											Destination Experiences
										</label>
									</div>
								</div>

								<div class="col-sm-12 to-shw-fld-altr">
									<ul>
										<li>
											<label>
												<input type="checkbox" class="other-altr chb" name="">
												Yes
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" class="chb no" name="">
												No
											</label>
										</li>
										<li class="show-other">
											<div class="field">
												<input type="text" placeholder="Explain Your Requirements" name="">
											</div>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="foot">
					<div class="row">
						<div class="col-sm-12 text-right">
							<a href="javascript:;" class="primary-btn dblue-bdr nxt">Skip</a>
							<a href="javascript:;" class="primary-btn dblue nxt">Next</a>
						</div>
					</div>
				</div>
			</div>

			<div class="step-5 lst-thanks" style="display: none;">
				<div class="row">
					<div class="col-sm-12">
						<div class="cont">
							<div class="head">
								<h2>Antis Hotel</h2>
								<div class="rate">
									<p>
										<i class="fa fa-star"></i>
										4.8 (146 reviews)
									</p>
								</div>
							</div>
							<div class="add">
									<p>Sultanahmet Mah. Akbiyik Degirmeni Sok. No:98, Sultanahmet, Istanbul, Turkey, 34122</p>
							</div>
						</div>

						<div class="cont">
							<h3>Room Type </h3>

							<div class="row">
								<div class="col-md-6 col-lg-3">
									<h4><strong>STANDARD SGL:</strong> 28 Mar, 2020 - 08 Apr, 2020</h4>
								</div>
								<div class="col-md-6 col-lg-3">
									<h4><strong>Quantity:</strong> 30</h4>
								</div>
								<div class="col-md-6 col-lg-3">
									<h4><strong>AV:</strong> Screen, Sound System, Projection</h4>
								</div>
								<div class="col-md-6 col-lg-3">
									<h4><strong>Days:</strong> 10</h4>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-lg-3">
									<h4><strong>STANDARD SGL:</strong> 28 Mar, 2020 - 08 Apr, 2020</h4>
								</div>
								<div class="col-md-6 col-lg-3">
									<h4><strong>Quantity:</strong> 30</h4>
								</div>
								<div class="col-md-6 col-lg-3">
									<h4><strong>AV:</strong> Screen, Sound System, Projection</h4>
								</div>
								<div class="col-md-6 col-lg-3">
									<h4><strong>Days:</strong> 10</h4>
								</div>
							</div>
						</div>

						<div class="cont">
							<h3>Private Functions Outdoors</h3>

							<div class="row">
								<div class="col-md-6 col-lg-4">
									<h4><strong>Type:</strong> Beach</h4>
								</div>
								<div class="col-md-6 col-lg-4">
									<h4><strong>Setup:</strong> Cocktail</h4>
								</div>
								<div class="col-md-6 col-lg-4">
									<h4><strong>AV:</strong> Screen, Sound System, Projection</h4>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-lg-4">
									<h4><strong>Type:</strong> Beach</h4>
								</div>
								<div class="col-md-6 col-lg-4">
									<h4><strong>Setup:</strong> Cocktail</h4>
								</div>
								<div class="col-md-6 col-lg-4">
									<h4><strong>AV:</strong> Screen, Sound System, Projection</h4>
								</div>
							</div>	
						</div>

						<div class="cont">
							<h3>Private Functions Indoors</h3>

							<div class="row">
								<div class="col-md-6 col-lg-3">
									<h4><strong># pax:</strong> 250</h4>
								</div>
								<div class="col-md-6 col-lg-3">
									<h4><strong>Setup Type:</strong> Classroom</h4>
								</div>
								<div class="col-md-6 col-lg-3">
									<h4><strong>Setup: </strong> Cocktail</h4>
								</div>
								<div class="col-md-6 col-lg-3">
									<h4><strong>AV:</strong> Translation System, Lights</h4>
								</div>
							</div>
						</div>

						<div class="cont">
							<h3>DMC</h3>

							<div class="row">
								<div class="col-md-6 col-lg-2">
									<h4><strong>Transportation:</strong> Taxi</h4>
								</div>
								<div class="col-md-6 col-lg-2">
									<h4><strong>Tours and Excursions:</strong> Option 1	</h4>
								</div>
								<div class="col-md-6 col-lg-2">
									<h4><strong>Team Building and CSR: </strong> Option 1</h4>
								</div>
								<div class="col-md-6 col-lg-2">
									<h4><strong>Gifts:</strong> Option 1</h4>
								</div>
								<div class="col-md-6 col-lg-2">
									<h4><strong>Destination Venues</strong> Option 1</h4>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="foot mtpx-30">
					<div class="row">
						<div class="col-sm-12 text-right">
							<a href="javascript:;" class="primary-btn dblue-bdr nxt">Save this information</a>
							<a href="javascript:;" class="primary-btn dblue nxt">Get a Quote</a>
						</div>
					</div>
				</div>
			</div>

			

			<div class="thankyou lst-thanks text-center" style="display: none">
				<h2>Thank you!</h2>

				<p>Morbi viverra luctus orci nec facilisis. Nulla sit amet luctus tortor. Nullam non sapien vel nisl posuere ultricies in a tellus. Cras eget urna magna. Nam posuere nulla ut erat imperdiet, non sagittis nunc aliquet. Mauris vel eleifend ligula.</p>

				<a href="javascript:;" class="primary-btn dblue clse-fancy" data-fancybox-close>Continue Exploring</a>
			</div>
		</div>
	</section>
</div>

<div class="popup popup-add-rev" id="show-add-review" style="display: none; max-width: 600px; width: 100%;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="review-dt">
						<div class="bx">
							<figure>
								{{ HTML::image('images/user-ava-1.png', 'Review') }}
							</figure>
							<div class="row va-ctr">
								<div class="col-12">
									<h4>Brian George</h4>

									<div class="rate">
										<fieldset class="rating">
										    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5"></label>
										    <input type="radio" id="star4half" name="rating" value="4 and a half" checked="" /><label class="half" for="star4half" ></label>
										    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4"></label>
										    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half"></label>
										    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3"></label>
										    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half"></label>
										    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2"></label>
										    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half"></label>
										    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" ></label>
										    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf"></label>
										</fieldset>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<textarea rows="1" cols="2" placeholder="Comments"></textarea>
								</div>
							</div>

							<div class="row">
								<div class="col-12 text-right">
									<a href="javascript:;" class="primary-btn dblue" data-fancybox-close>Add Review</a>
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




