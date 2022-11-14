
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
						<li class="active"><a href="#">@lang('hotel/details.overview')</a></li>
						<li><a href="#amenities">@lang('hotel/details.amenities')</a></li>
						<li><a href="#meeting">@lang('hotel/details.meeting_space')</a></li>
						<li><a href="#catering">@lang('hotel/details.category_service')</a></li>
						<li><a href="#guest">@lang('hotel/details.guest_room')</a></li>
						<li><a href="#restaurant">@lang('hotel/details.restaurant_bars')</a></li>
						<li><a href="#near-by">@lang('hotel/details.nearby')</a></li>
						<li><a href="#reviews">@lang('hotel/details.reviews')</a></li>
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
								<!-- <div class="fav">
									<i class="fa fa-heart"></i>
								</div> -->

								@if( !empty($details) )
								<figure>
									@if( !empty( $details->getPrimaryImage()) )
										@if($details->hotel_id == 1)
										<a href="{{ asset('images/'.$details->HotelsGallery[0]->file) }}" data-fancybox="gallery">
											<img src="{{ asset('images/'.$details->HotelsGallery[0]->file) }}" />
										</a>
										@else
										<a href="{{ asset('uploads/hotels/'.$details->id.'/'.$details->getPrimaryImage()) }}" data-fancybox="gallery">
											<img src="{{ asset('uploads/hotels/'.$details->id.'/'.$details->getPrimaryImage()) }}" />
										</a>
										@endif
									@endif
								</figure>
								@endif
							</div>
						</div>
						<div class="col-md-4 plpx-0 rht-img wow fadeIn" data-wow-delay="0.7s">
							<div class="row">
							@if( !empty ($details->HotelsGallery) ) 
								@foreach( $details->HotelsGallery as $key => $HotelsGallery)
								<div class="col-md-6 col-6 prpx-0 prpx-2">
									<figure class="mtpx-0">
										@if($details->id == 1)
										<a href="{{ asset('images/'.$HotelsGallery->file) }}" data-fancybox="gallery">
											<img src="{{ asset('images/'.$HotelsGallery->file) }}" />
										</a>
										@else
										<a href="{{ asset('uploads/hotels/'.$details->id.'/'.$HotelsGallery->file) }}" data-fancybox="gallery">
										<img src="{{ asset('uploads/hotels/'.$details->id.'/'.$HotelsGallery->file) }}" />
										@if( $details->HotelsGallery->count() > 4 && $key == 3 )
											<div class="overlay-txt text-center">
												<p>See All 26 Photos &amp; Videos</p>
											</div>
										@endif
										</a>
										@endif
									</figure>
								</div>
								@if( $key == 3 )
									<?php break; ?>
								@endif
								@endforeach
							@endif

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-7 col-lg-8">
				<div class="fea wow fadeInUp" data-wow-delay="0.2s">
				@if( !empty($details->TagsToHotels) )
				@foreach( $details->TagsToHotels as $key => $tags )
					<h5>{{ $tags->TagDescriptionLanguage($language_id)->name }}</h5>
				@endforeach
				@endif
				</div>
				<div class="head wow fadeInUp" data-wow-delay="0.2s">
					<h2>{{ $details->name ?? '' }}</h2>
					<div class="rate">
						<!-- <p>
							<i class="fa fa-star"></i>
							4.8 (146 reviews)
						</p> -->
					</div>
				</div>
				<div class="add wow fadeInUp" data-wow-delay="0.2s">
                    @if(!empty($details->address))
					    <p>{{ $details->address }}, {{ $details->city }}, {{ $details->state }}, {{ $details->zip }} - <a data-fancybox data-options='{"iframe" : {"css" : {"width" : "80%", "height" : "80%"}}}' href="https://www.google.com/maps/search/?api=1&query={{ $details->address }}">SEE MAP</a></p>
                    @endif
				</div>
				<div class="dt wow fadeInUp" data-wow-delay="0.2s">
					<div class="row">
					@if( isset( $details->space_meeting_room))
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.meeting_room')</strong> {{ $details->space_meeting_room ?? '' }}</h6>
						</div>
					@endif
					@if( isset( $details->space_meeting_space))
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.meeting_space')</strong> {{ $details->space_meeting_space ?? '' }}</h6>
						</div>
					@endif
					@if( isset( $details->space_guest_rooms))
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.guest_room')</strong> {{ $details->space_guest_rooms ?? '' }}</h6>
						</div>
					@endif
					@if( isset( $details->space_restuatrant_bars))
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.restaurant_bars')</strong> {{ $details->space_restuatrant_bars ?? '' }}</h6>
						</div>
					@endif
					</div>
					<div class="row">
					@if( isset( $details->space_chain_name))
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.chain')</strong> {{ $details->space_chain_name ?? '' }}</h6>
						</div>
					@endif
					@if( isset( $details->space_built_year))
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.built')</strong> {{ $details->space_built_year ?? '' }}</h6>
						</div>
					@endif
					@if( isset( $details->space_total_meeting_space_area))
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.total_meeting_space')</strong></strong>{{ $details->space_total_meeting_space_area ?? '' }} sq. ft.</h6>
						</div>
					@endif
					@if( isset( $details->space_aaa_rating) )
						<div class="col-6 col-lg-3">
						<h6><strong>@lang('hotel/details.aaa_rating')</strong>
							@for( $i=0; $i<$details->space_aaa_rating; $i++)
								<i class="fa fa-diamond" aria-hidden="true"></i>
							@endfor
							</h6>
						</div>

					@endif

					</div>
					<div class="row">
					@if( isset( $details->space_brand_name))
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.brand')</strong>{{ $details->space_brand_name ?? '' }}</h6>
						</div>
					@endif
					@if( isset( $details->space_renovation_year))
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.renovated')</strong> {{ $details->space_renovation_year ?? '' }}</h6>
						</div>
					@endif
					@if( isset( $details->space_all_inclusive_hotel))
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.all_inclusive_hotel')</strong> {{ $details->space_all_inclusive_hotel ?? '' }}</h6>
						</div>
					@endif
					@if( isset( $details->space_trip_advisor_rating) )
						<div class="col-6 col-lg-3">
						<h6><strong>@lang('hotel/details.trip_advisor')</strong>
							@for( $i=0; $i<$details->space_trip_advisor_rating; $i++)
								<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
							@endfor
							</h6>
						</div>
					@endif
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h6><strong>@lang('hotel/details.dmc')</strong>@lang('hotel/details.link_meeting')</h6>
							{{ HTML::image('images/logo-f.png', 'Link Meetings') }}
						</div>

					</div>
				</div>


				<div class="details wow fadeInUp" data-wow-delay="0.2s" id="amenities">
					<ul class="tabs">
					@if( !empty($details->AmenityToHotels) )
						<li><a href="javascript:;" data-target="amenities" class="active">@lang('hotel/details.amenities')</a></li>
					@endif
					@if( !empty($details->FacilityToHotels) )
						<li><a href="javascript:;" data-target="facilities">@lang('hotel/details.facilities')</a></li>
					@endif
					@if( !empty($details->ServiceToHotels) )
						<li><a href="javascript:;" data-target="services">@lang('hotel/details.services')</a></li>
					@endif
					@if( !empty($details->RecreationalActivityToHotels) )
						<li><a href="javascript:;" data-target="recreational-activities">@lang('hotel/details.recreational_activities')</a></li>
					@endif
					@if( !empty($details->VenueAccessToHotels) )
						<li><a href="javascript:;" data-target="venue-accessible-by">@lang('hotel/details.venue_accessible_by')</a></li>
					@endif
					@if( !empty($details->EquipmentToHotels) )
						<li><a href="javascript:;" data-target="equipment">@lang('hotel/details.equipments')</a></li>
					@endif
					</ul>

					@if( !empty($details) )

						@if( !empty($details->AmenityToHotels) )
						<div class="tab-content amenities" style="display: block;">
						<div class="row">
						@foreach ($details->AmenityToHotels as $key => $amenity)
							<div class="col-md-6 col-lg-3">
								<div class="bx">
								<figure>
										<img src="{{ asset('images/'.$amenity->amenity->icon) }}" />
								</figure>
								<span>{{ $amenity->amenity->amenityDescriptionLanguage($language_id)->name ?? ''}}</span>
								</div>
							</div>
						@endforeach
						</div>
						</div>
						@endif

						@if( !empty($details->facilityToHotels) )
						<div class="tab-content facilities" style="display: none;">
						<div class="row">
						@foreach ($details->facilityToHotels as $key => $facility)
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										<img src="{{ asset('images/'.$facility->facility->icon) }}" />
									</figure>
									<span>{{ $facility->facility->facilityDescriptionLanguage($language_id)->name ?? ''}}</span>
								</div>
							</div>
						@endforeach
						</div>
						</div>
						@endif

						@if( !empty($details->serviceToHotels) )
						<div class="tab-content services">
						<div class="row">
						@foreach ($details->serviceToHotels as $key => $service)
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										<img src="{{ asset('images/'.$service->service->icon) }}" />
									</figure>
									<span>{{ $service->service->serviceDescriptionLanguage($language_id)->name ?? ''}}</span>

								</div>
							</div>
						@endforeach
						</div>
						</div>
						@endif


						@if( !empty($details->RecreationalActivityToHotels) )
						<div class="tab-content recreational-activities">
						<div class="row">
						@foreach ($details->RecreationalActivityToHotels as $key => $rca)
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										<img src="{{ asset('images/'.$rca->rcactivity->icon) }}" />
									</figure>
									<span>{{ $rca->rcactivity->recreationalActivityDescriptionLanguage($language_id)->name ?? ''}}</span>
								</div>
							</div>
						@endforeach
						</div>
						</div>
						@endif



						<?php // print_b($details->VenueAccessToHotels[0]); exit; ?>
						@if( !empty($details->VenueAccess) )
						<div class="tab-content venue-accessible-by">
						<div class="row">
						@foreach ($details->VenueAccess as $key => $rca)
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									{{-- <figure>
										<img src="{{ asset('images/'.$rca->venueAccess->icon) }}" />
									</figure> --}}
									<span>{{ $rca->venuAccessDescriptionLanguage(1)->name ?? ''}}</span>
								</div>
							</div>
						@endforeach
						</div>
						</div>
						@endif



						<!-- equipemnt -->
					@if( !empty($details->equipmentToHotels) )
						<div class="tab-content equipment">
						<div class="row">
						@foreach ($details->equipmentToHotels as $key => $equipmentToHotel)
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									<figure>
										<img src="{{ asset('images/'.$equipmentToHotel->equipment->icon) }}" />
									</figure>
									<span>{{ $equipmentToHotel->equipment->equipmentDescriptionLanguage($language_id)->name ?? ''}}</span>
								</div>
							</div>
						@endforeach
						</div>
						</div>
						@endif
					@endif


				<div class="meeting-space wow fadeInUp" data-wow-delay="0.2s" id="meeting">
					<div class="row">
						<div class="col-12">
							<h3>@lang('hotel/details.meeting_space')</h3>
						</div>
					</div>
					<div class="row">
					@if( !empty($details->total_meeting_space) )
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.total_meeting_space')</strong> {{ $details->total_meeting_space }}</h6>
						</div>
					@endif
					@if( !empty($details->largest_room) )
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.largest_room')</strong> {{ $details->largest_room }}</h6>
						</div>
					@endif
					@if( !empty($details->second_largest_room) )
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.second_largest_room')</strong>{{ $details->second_largest_room }}</h6>
						</div>
					@endif
					@if( !empty($details->exhibit_space) )
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.exhibit_space')</strong> {{ $details->exhibit_space }}</h6>
						</div>
					@endif
					@if( !empty($details->space_meeting_room) )
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.meeting_room')</strong> {{ $details->space_meeting_room }}</h6>
						</div>
					</div>
					@endif
					<div class="row mbpx-32">
						<div class="col-sm-12">
						@if( !empty($details->MeetingSpaceFloorPlans) )
							@foreach( $details->MeetingSpaceFloorPlans as $key => $file )
							<a href="{{ asset('uploads/hotels/'.$details->hotel_id.'/'.$file->file) }}" class="download" download>

                                {{-- @lang('hotel/details.Visualizer_enjoy_a_walk_through_our_hotel') --}}
								@if($details->id == 1)
									<img src="{{ asset('images/'.$file->file) }}" />
								@else
									<img src="{{ asset('images/icon-file-download.png') }}" />{{ $file->file ?? '' }}
								@endif
							</a>
							@endforeach
						@endif

						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="meeting-dt">

							@if( !empty($details->HotelRooms) )
								@foreach( $details->HotelRooms as $key => $room )
								<h3>@lang('hotel/details.room') {{$key+1}}: <strong>
								@if( !empty($room->hotelRoomDescription[$key]->name) )
									{{ $room->hotelRoomDescription[$key]->name }}
								@endif
									</strong></h3>
								<div class="row">
									@if( !empty($room->area) )
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-area.png', 'Area') }}
											</figure>
											<p><strong>@lang('hotel/details.area')</strong> {{ $room->area ?? '' }}</p>
										</div>
									</div>
									@endif
									<?php //exit; ?>
									@if( !empty($room->height) )
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-height.png', 'Height') }}
											</figure>
											<p><strong>@lang('hotel/details.height')</strong> {{ $room->height }}</p>
										</div>
									</div>
									@endif
									@if( !empty($room->size) )
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-size.png', 'Size') }}
											</figure>
											<p><strong>@lang('hotel/details.size')</strong> {{ $room->size }}</p>
										</div>
									</div>
									@endif
									@if( !empty($room->cocktail) )
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-cocktail.png', 'Cocktail') }}
											</figure>
											<p><strong>@lang('hotel/details.cocktail')</strong> {{ $room->cocktail ?? '' }}</p>
										</div>
									</div>
									@endif
									@if( !empty($room->theatre) )
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-theatre.png', 'Theatre') }}
											</figure>
											<p><strong>@lang('hotel/details.theatre')</strong> {{ $room->theatre ?? '' }}</p>
										</div>
									</div>
									@endif
									@if( !empty($room->school) )
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-school.png', 'School') }}
											</figure>
											<p><strong>@lang('hotel/details.school')</strong> {{ $room->school ?? '' }}</p>
										</div>
									</div>
									@endif
									@if( !empty($room->banquet) )
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-banquet.png', 'Banquet') }}
											</figure>
											<p><strong>@lang('hotel/details.banquet')</strong> {{ $room->banquet ?? '' }}</p>
										</div>
									</div>
									@endif
									@if( !empty($room->imperial) )
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-imperial.png', 'Imperial') }}
											</figure>
											<p><strong>@lang('hotel/details.imperial')</strong> {{ $room->imperial ?? '' }}</p>
										</div>
									</div>
									@endif
									@if( !empty($room->ushape) )
									<div class="col-6 col-lg-3">
										<div class="bx">
											<figure>
												{{ HTML::image('images/icon-u-shape.png', 'U-Shape') }}
											</figure>
											<p><strong>@lang('hotel/details.ushape')</strong> {{ $room->ushape ?? '' }}</p>
										</div>
									</div>
									@endif
								</div>
								@endforeach
							@endif
							</div>
						</div>
					</div>
				</div>

				<div class="catering-service wow fadeInUp" data-wow-delay="0.2s" id="catering">
					@if( isset( $details->catering_service ))
						<h3>@lang('hotel/details.catering_service')</h3>
					@endif

					<div class="row">
						<div class="col-md-4">
							@if( isset( $details->catering_service_image ) )
								<figure>
								@if($details->id == 1)
									<img src="{{ asset('images/'.$details->catering_service_image) }}" />
								@else
									<img src="{{ asset('uploads/hotels/'.$details->hotel_id.'/'.$details->catering_service_image) }}" />
								@endif
								</figure>
							@endif


						</div>
						<div class="col-md-8">

						@if( isset( $details->catering_service ) )
							<p>{!! $details->catering_service	?? '' !!}</p>
						@endif
						</div>
					</div>
				</div>

				<div class="guest-rooms wow fadeInUp" data-wow-delay="0.2s" id="guest">
				@if( !empty( $details->HotelGuestRooms ) )
					<h3>@lang('hotel/details.guest_rooms')</h3>

					<div class="row">
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.guest_room_total')</strong> {{ $details->HotelGuestRooms->total_guest_rooms ?? '' }}</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.guest_room_double')</strong> {{ $details->HotelGuestRooms->doubles_guest_room ?? '' }}</h6>
						</div>
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.suites')</strong> {{ $details->HotelGuestRooms->guest_room_suits ?? '' }}</h6>
						</div>
						@if( $details->HotelGuestRooms->tax == 'Yes' )
						<div class="col-6 col-lg-3">
							<h6><strong>@lang('hotel/details.tax_rate')</strong> {{ $details->HotelGuestRooms->type_of_tax ?? '' }}</h6>
						</div>
						@endif
					</div>
				@endif


				@if( !empty( $details->HotelGuestRooms) )
					@if( isset( $details->HotelGuestRooms->guestRoomDetails ) )
						@foreach( $details->HotelGuestRooms->guestRoomDetails as $key => $det )
							<div class="room-dt">
								<div class="row">
									<div class="col-md-4">
									@if( isset( $det->image ) )
										<figure>
											@if($details->id == 1)
												<img src="{{ asset('images/'.$det->image) }}" />
											@else
												<img src="{{ asset('uploads/hotels/'.$details->hotel_id.'/'.$det->image) }}" />
											@endif
										</figure>
									@endif
									</div>
									<div class="col-md-8">
									@if( !empty($det->guestRoomDescriptionLanguage($language_id)) )
									<h4>
										{{ $det->guestRoomDescriptionLanguage($language_id)->name }}
									</h4>
									<span>{{ $det->quantity }} @lang('hotel/details.rooms')</span>
									@endif

									<div class="row">
									@foreach ($det->guestRoomFacilitiesToHotel as $key => $value)
										<div class="col-md-12 col-lg-6">
											<div class="bx">
												<figure>
													{{ HTML::image('images/'.$value->roomFacility->icon, 'WIFI') }}
												</figure>
												<span>{{ $value->roomFacility->roomFacilityDescriptionLanguage(1)->name }}</span>
											</div>
										</div>
									@endforeach
									</div>
									</div>
								</div>
							</div>
						@endforeach
					@endif
				@endif

				</div>

				<div class="resturant-bars wow fadeInUp" data-wow-delay="0.2s" id="restaurant">

				@if( !empty( $details->ResturantsBars) )
					<h3>@lang('hotel/details.restaurant_bars')</h3>
						@foreach( $details->ResturantsBars as $key => $ResturantsBars )
						<div class="row">
						@if( !empty($ResturantsBars->image) )
						<div class="col-md-4">
							<figure>
								<img src="{{ asset('uploads/hotels/'.$details->hotel_id.'/'.$ResturantsBars->image) }}" />
							</figure>
						</div>
						@endif
						<div class="col-md-8">
							<h4>{{ $ResturantsBars->ResturantBarDescriptionLanguage($language_id)->name ?? '' }}<span>{{ $ResturantsBars->ResturantBarDescriptionLanguage($language_id)->information ?? '' }}</span></h4>
							<div class="row">
								@if( !empty($ResturantsBars->cuisine) )
								<div class="col-md-12 col-lg-6">
									<div class="bx">
										<figure>
											{{ HTML::image('images/icon-cuisine.png', 'Cuisine') }}
										</figure>
										<p><strong>@lang('hotel/details.cuisine')</strong>  {{ $ResturantsBars->cuisine ?? '' }}</p>
									</div>
								</div>
								@endif
								@if( !empty($ResturantsBars->opening_time) )
								<div class="col-md-12 col-lg-6">
									<div class="bx">
										<figure>
											{{ HTML::image('images/icon-timings.png', 'Opening Timings') }}
										</figure>
										<p><strong>@lang('hotel/details.opening_time')</strong> {{ $ResturantsBars->opening_time ?? '' }}</p>
									</div>
								</div>
								@endif
								@if( !empty($ResturantsBars->dress_code) )
								<div class="col-md-12 col-lg-6">
									<div class="bx">
										<figure>
											{{ HTML::image('images/icon-dress-code.png', 'Dress Code') }}
										</figure>
										<p><strong>@lang('hotel/details.dress_code')</strong> {{ $ResturantsBars->dress_code ?? '' }}</p>
									</div>
								</div>
								@endif
								@if( !empty($ResturantsBars->access) )
								<div class="col-md-12 col-lg-6">
									<div class="bx">
										<figure>
											{{ HTML::image('images/icon-access.png', 'Access') }}
										</figure>
										<p><strong>@lang('hotel/details.access')</strong> {{ $ResturantsBars->access ?? '' }}</p>
									</div>
								</div>
								@endif
							</div>
						</div>
						</div>
						@endforeach

					@endif
				</div>
				<?php //print_r($details->NearByPlaces[0]->latitude); exit; ?>
				@if( !empty($details->NearByPlaces) )
				<div class="nearby wow fadeInUp" data-wow-delay="0.2s" id="near-by">
					<h3>@lang('hotel/details.near_by')</h3>
				@foreach( $details->NearByPlaces as $key => $place )
					<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q={{$place->latitude ?? ''}},{{$place->longitude ?? ''}}&amp;key=AIzaSyC75FUC_L6EcgsaY8WTjDVHghNLv9uQmGk"></iframe> <br><br>
				@endforeach

				</div>
				@endif
{{--
				<div class="reviews wow fadeInUp" data-wow-delay="0.2s" id="reviews">

					<div class="row va-ctr">
						<div class="col-sm-7">
							<h3>@lang('hotel/details.reviews')</h3>
							<div class="rate">
								<!-- <p>
									<i class="fa fa-star"></i>
									4.8 (146 reviews)
								</p> -->
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
				</div> --}}

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
								<a data-fancybox="get-quote" data-src="#get-quote" href="javascript:;" class="primary-btn dblue">@lang('hotel/details.get_quote')</a>
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
				<h2>@lang('hotel/details.similar_venues')</h2>
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
				<div class="row">
					<div class="col-sm-12 text-center">
						<a href="{{ route('login') }}" class="primary-btn dblue-bdr nxt">Login</a>
						<a href="{{ route('signup') }}" class="primary-btn dblue nxt">Signup</a>
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
