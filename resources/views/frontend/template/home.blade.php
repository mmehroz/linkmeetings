{{-- * Template Name : Home * --}}
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
@section('body-class') home-page @stop
@section('content')

<?php ($template_content = unserialize($pageContent->template_content)); ?>


<section class="banner">

	<div id="next-slide" class="my-controls-btns"></div>
	<div id="prev-slide" class="my-controls-btns"></div>

	<div class="slider-main owl-theme owl-carousel">
		<div class="item">
			<div class="btm-txt wow fadeInUp" data-wow-delay="1.6s">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-md-10 col-lg-6 ctrdv">
							<div class="btm-txt-slide">
								<div class="item-1">
									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-6 bdr">
											<h6>We are offering upto</h6>
											<h3>50% OFF</h3>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<h4>15,000 Bonus Points</h4>
											<p>Only For Link Meetings Rewards Members</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item item-4">
			<div class="btm-txt wow fadeInUp" data-wow-delay="1.6s">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-md-10 col-lg-6 ctrdv">
							<div class="btm-txt-slide">
								<div class="item-2">
									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-6 bdr">
											<h6>We are offering upto</h6>
											<h3>30% OFF</h3>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<h4>15,000 Bonus Points</h4>
											<p>Only For Link Meetings Rewards Members</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item item-5">
			<div class="btm-txt wow fadeInUp" data-wow-delay="1.6s">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-md-10 col-lg-6 ctrdv">
							<div class="btm-txt-slide">
								<div class="item-3">
									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-6 bdr">
											<h6>We are offering upto</h6>
											<h3>10% OFF</h3>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<h4>15,000 Bonus Points</h4>
											<p>Only For Link Meetings Rewards Members</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item item-6">
			<div class="btm-txt wow fadeInUp" data-wow-delay="1.6s">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-md-10 col-lg-6 ctrdv">
							<div class="btm-txt-slide">
								<div class="item-1">
									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-6 bdr">
											<h6>We are offering upto</h6>
											<h3>50% OFF</h3>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<h4>15,000 Bonus Points</h4>
											<p>Only For Link Meetings Rewards Members</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item item-7">
			<div class="btm-txt wow fadeInUp" data-wow-delay="1.6s">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-md-10 col-lg-6 ctrdv">
							<div class="btm-txt-slide">
								<div class="item-2">
									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-6 bdr">
											<h6>We are offering upto</h6>
											<h3>30% OFF</h3>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<h4>15,000 Bonus Points</h4>
											<p>Only For Link Meetings Rewards Members</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item item-8">
			<div class="btm-txt wow fadeInUp" data-wow-delay="1.6s">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-md-10 col-lg-6 ctrdv">
							<div class="btm-txt-slide">
								<div class="item-2">
									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-6 bdr">
											<h6>We are offering upto</h6>
											<h3>30% OFF</h3>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<h4>15,000 Bonus Points</h4>
											<p>Only For Link Meetings Rewards Members</p>
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
	<div class="main-txt">
		<div class="container">
			<div class="cont">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="wow slideInLeft" data-wow-delay="0.4s">@if( !empty ($template_content['search_title-'.$pageContent->language_id])) {{ $template_content['search_title-'.$pageContent->language_id] }} @endif</h2>
					</div>
				</div>
				<div class="srch-holder wow fadeInUp" data-wow-delay="1s">
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

<section class="hot-deals-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>
					<i class="ico c-fire"></i>
					@if( !empty ($template_content['section_1-'.$pageContent->language_id])) {{ $template_content['section_1-'.$pageContent->language_id] }} @endif
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="bx-slide owl-theme owl-carousel">
					<div class="item">
						<div class="deal-bx">
							<a href="{{ URL::to('/hotel-detail') }}">
									<figure>
										{{ HTML::image('images/deal-bx-1.jpg', 'Link Meetings') }}
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
								</a>
						</div>
					</div>

					<div class="item">
						<a href="{{ URL::to('/hotel-detail') }}">
						<div class="deal-bx">
							<figure>
								{{ HTML::image('images/deal-bx-2.jpg', 'Link Meetings') }}
							</figure>
							<div class="text">
								<h5><span>10% OFF</span> Chicago, USA</h5>
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
						</div>
					</a>
					</div>

					<div class="item">
						<a href="{{ URL::to('/hotel-detail') }}">
							<div class="deal-bx">
								<figure>
									{{ HTML::image('images/deal-bx-3.jpg', 'Link Meetings') }}
								</figure>
								<div class="text">
									<h5><span>Las Vegas, USA</span> Las Vegas, USA</h5>
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
							</div>
						</a>
					</div>

					<div class="item">
						<a href="{{ URL::to('/hotel-detail') }}">
						<div class="deal-bx">
							<figure>
								{{ HTML::image('images/deal-bx-1.jpg', 'Link Meetings') }}
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
					</a>
					</div>

					<div class="item">
						<a href="{{ URL::to('/hotel-detail') }}">
						<div class="deal-bx">
							<figure>
								{{ HTML::image('images/deal-bx-2.jpg', 'Link Meetings') }}
							</figure>
							<div class="text">
								<h5><span>10% OFF</span> Chicago, USA</h5>
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
						</div>
					</a>
					</div>

					<div class="item">
						<a href="{{ URL::to('/hotel-detail') }}">
						<div class="deal-bx">
							<figure>
								{{ HTML::image('images/deal-bx-3.jpg', 'Link Meetings') }}
							</figure>
							<div class="text">
								<h5><span>Las Vegas, USA</span> Las Vegas, USA</h5>
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
						</div>
					</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="featured-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>
				@if( !empty ($template_content['section_2-'.$pageContent->language_id])) {{ $template_content['section_2-'.$pageContent->language_id] }} @endif
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="fea-slide owl-theme owl-carousel">
						@if( !empty($hotels) )
							@foreach( $hotels as $key => $hotel )
							<div class="item">
								<div class="deal-bx">
								<a href="{{ route('hotel_detail',['slug'=>$hotel->slug ?? '']) }}">

								<figure>
                                @if( !empty( $hotel->getPrimaryImage()) )
                                    @if($hotel->hotel_id == 1)
                                        <img src="{{ asset('images/'.$hotel->HotelsGallery[0]->file) }}" />
                                    @else
                                        <img src="{{ asset('uploads/hotels/'.$hotel->hotel_id.'/'.$hotel->getPrimaryImage()) }}" />
                                    @endif
                                @endif
                                </figure>

								<div class="text">
									<h5>
                                        @if(  !empty($hotel->TagsToHotels) )
                                            @foreach( $hotel->TagsToHotels as $key => $tags )
                                            <span>
                                                {{ $tags->TagDescriptionLanguage($language_id)->name }}
                                            </span>
                                            <?php
                                                if(!empty($tags->TagDescriptionLanguage($language_id)->name))
                                                    break;
                                            ?>
                                            @endforeach
                                        @endif  {{ $hotel->address ?? '' }}
                                        </h5>
									<h3>{{ $hotel->name ?? '' }}</h3>
									@if( isset( $hotel->space_meeting_room) || isset( $hotel->space_meeting_space))
									<div class="row">
										@if( isset( $hotel->space_meeting_room) )
										<div class="col-sm-6">
											<h6><strong>@lang('home/details.meeting_room')</strong> {{ $hotel->space_meeting_room ?? '' }}</h6>
										</div>
										@endif
										@if( isset( $hotel->space_meeting_space) )
										<div class="col-sm-6">
											<h6><strong>@lang('home/details.meeting_space')</strong> {{ $hotel->space_meeting_space ?? '' }}</h6>
										</div>
										@endif
									</div>
									@endif
									@if( isset( $hotel->space_guest_rooms) || isset( $hotel->space_restuatrant_bars))
									<div class="row">
										<div class="col-sm-6">
											<h6><strong>@lang('home/details.guest_room')</strong> {{ $hotel->space_guest_rooms ?? '' }}</h6>
										</div>
										<div class="col-sm-6">
											<h6><strong>@lang('home/details.restaurant_bars')</strong> {{ $hotel->space_restuatrant_bars ?? '' }}</h6>
										</div>
									</div>
									@endif
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
							@endforeach
						@endif


					<!-- <div class="item">
						<div class="deal-bx">
							<a href="{{ URL::to('/hotel-detail') }}">
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
					</div> -->
					</div>


					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="recommended-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>
				@if( !empty ($template_content['section_3-'.$pageContent->language_id])) {{ $template_content['section_3-'.$pageContent->language_id] }} @endif
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="fea-slide owl-theme owl-carousel">
					<div class="item">
						<div class="deal-bx">
							<a href="{{ URL::to('/hotel-detail') }}">
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

					<div class="item">
						<div class="deal-bx">
							<a href="{{ URL::to('/hotel-detail') }}">
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

					<div class="item">
						<div class="deal-bx">
							<a href="{{ URL::to('/hotel-detail') }}">
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

					<div class="item">
						<div class="deal-bx">
							<a href="{{ URL::to('/hotel-detail') }}">
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
						</a>
						</div>
					</div>

					<div class="item">
						<div class="deal-bx">
							<a href="{{ URL::to('/hotel-detail') }}">
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

					<div class="item">
						<div class="deal-bx">
							<a href="{{ URL::to('/hotel-detail') }}">
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

					<div class="item">
						<div class="deal-bx">
							<a href="{{ URL::to('/hotel-detail') }}">
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

					<div class="item">
						<div class="deal-bx">
							<a href="{{ URL::to('/hotel-detail') }}">
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
						</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="space-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div id="next-slide-altr" class="my-controls-btns"></div>
		<div id="prev-slide-altr" class="my-controls-btns"></div>
		<div class="row">
			<div class="col-sm-12">
				<div class="space-slide owl-theme owl-carousel">
					<div class="item">
						<div class="text">
							<div class="container">
								<div class="row">
									<div class="col-sm-10 col-md-6 ctrdv text-center">
										<h2>Stylish 5 Star With Panoramic Views  And Spaces For Any Event</h2>
										<p>Located in the centre of Shoreditch, this venue couples the grandeur of a Grade II listed Baroque styled building, with a laid-back personalised service, forming the perfect alchemy.</p>
										<a href="javascript:;" class="primary-btn lblue-btn">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item item-2">
						<div class="text">
							<div class="container">
								<div class="row">
									<div class="col-sm-10 col-md-6 ctrdv text-center">
										<h2>Stylish 5 Star With Panoramic Views  And Spaces For Any Event</h2>
										<p>Located in the centre of Shoreditch, this venue couples the grandeur of a Grade II listed Baroque styled building, with a laid-back personalised service, forming the perfect alchemy.</p>
										<a href="javascript:;" class="primary-btn lblue-btn">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item item-3">
						<div class="text">
							<div class="container">
								<div class="row">
									<div class="col-sm-10 col-md-6 ctrdv text-center">
										<h2>Stylish 5 Star With Panoramic Views  And Spaces For Any Event</h2>
										<p>Located in the centre of Shoreditch, this venue couples the grandeur of a Grade II listed Baroque styled building, with a laid-back personalised service, forming the perfect alchemy.</p>
										<a href="javascript:;" class="primary-btn lblue-btn">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item item-4">
						<div class="text">
							<div class="container">
								<div class="row">
									<div class="col-sm-10 col-md-6 ctrdv text-center">
										<h2>Stylish 5 Star With Panoramic Views  And Spaces For Any Event</h2>
										<p>Located in the centre of Shoreditch, this venue couples the grandeur of a Grade II listed Baroque styled building, with a laid-back personalised service, forming the perfect alchemy.</p>
										<a href="javascript:;" class="primary-btn lblue-btn">Learn More</a>
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

<section class="destination-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>@if( !empty ($template_content['section_4-'.$pageContent->language_id])) {{ $template_content['section_4-'.$pageContent->language_id] }} @endif</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-3 wow fadeIn" data-wow-delay="0.6s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/dest-1.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>London</h5>
						<p>300+ Venues</p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 wow fadeIn" data-wow-delay="0.9s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/dest-2.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>Paris</h5>
						<p>300+ Venues</p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 wow fadeIn" data-wow-delay="1.2s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/dest-3.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>Rome</h5>
						<p>300+ Venues</p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 wow fadeIn" data-wow-delay="1.5s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/dest-4.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>Bangkok</h5>
						<p>300+ Venues</p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 wow fadeIn" data-wow-delay="1.8s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/dest-5.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>Amsterdam</h5>
						<p>300+ Venues</p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 wow fadeIn" data-wow-delay="2.1s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/dest-6.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>Madrid</h5>
						<p>300+ Venues</p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 wow fadeIn" data-wow-delay="2.4s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/dest-7.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>Istanbul</h5>
						<p>300+ Venues</p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 wow fadeIn" data-wow-delay="2.7s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/dest-8.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>Berlin</h5>
						<p>300+ Venues</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="meeting-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>@if( !empty ($template_content['section_5-'.$pageContent->language_id])) {{ $template_content['section_5-'.$pageContent->language_id] }} @endif</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-4 wow fadeIn" data-wow-delay="0.6s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/meet-space-1.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>Meeting Rooms</h5>
						<p>500+ Available</p>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-4 wow fadeIn" data-wow-delay="0.9s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/meet-space-2.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>Conference Space</h5>
						<p>500+ Available</p>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-4 wow fadeIn" data-wow-delay="1.2s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/meet-space-3.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>Ball Rooms</h5>
						<p>500+ Available</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="building-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>@if( !empty ($template_content['section_6-'.$pageContent->language_id])) {{ $template_content['section_6-'.$pageContent->language_id] }} @endif</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-4 wow fadeIn" data-wow-delay="0.6s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/building-sec-1.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>Team Buildings</h5>
						<p>500+ Available</p>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-4 wow fadeIn" data-wow-delay="0.9s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/building-sec-2.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>Set ups</h5>
						<p>500+ Available</p>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-4 wow fadeIn" data-wow-delay="1.2s">
				<div class="bx">
					<figure>
						{{ HTML::image('images/building-sec-3.jpg', 'Link Meetings') }}
					</figure>
					<div class="text">
						<h5>Outdoor Experiences</h5>
						<p>500+ Available</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection




