{{-- * Template Name : Destination * --}}
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

<?php 

// foreach( $featuredhotels as $key => $hotel ) {
//     // print_b($hotel->TagsToHotels[0]->TagDescriptionLanguage(1)->name);
    
//     foreach ($hotel->TagsToHotels as $key => $value) {
//         echo $value->TagDescriptionLanguage()->name;
//     }
// }
// exit;
 ?>
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
                                <a href="javascript:;" class="sb-btn">Search</a>
                                {{-- <input type="submit" class="sb-btn" value="Search" name=""> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="srch-dt wow fadeInUp" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="inner-banner owl-theme owl-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="container">
                                    <div class="col-md-6 col-lg-4 txt-bx">
                                        <h4>
                                            Want to get away tonight? Book Now & save with our last minute deals.
                                        </h4>
                                        <h2>Save Upto 50%</h2>
                                        <h3>On all hotels in Maldives</h3>
                                        <a href="javascript" class="primary-btn lblue-bdr">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item item-1">
                            <div class="row">
                                <div class="container">
                                    <div class="col-md-6 col-lg-4 txt-bx">
                                        <h4>
                                            Want to get away tonight? Book Now & save with our last minute deals.
                                        </h4>
                                        <h2>Save Upto 30%</h2>
                                        <h3>On all hotels in Turkey</h3>
                                        <a href="javascript" class="primary-btn lblue-bdr">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item item-2">
                            <div class="row">
                                <div class="container">
                                    <div class="col-md-6 col-lg-4 txt-bx">
                                        <h4>
                                            Want to get away tonight? Book Now & save with our last minute deals.
                                        </h4>
                                        <h2>Save Upto 10%</h2>
                                        <h3>On all hotels in USA</h3>
                                        <a href="javascript" class="primary-btn lblue-bdr">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item item-3">
                            <div class="row">
                                <div class="container">
                                    <div class="col-md-6 col-lg-4 txt-bx">
                                        <h4>
                                            Want to get away tonight? Book Now & save with our last minute deals.
                                        </h4>
                                        <h2>Save Upto 50%</h2>
                                        <h3>On all hotels in Maldives</h3>
                                        <a href="javascript" class="primary-btn lblue-bdr">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="filters clearfix">
                        <ul>
                            <li>
                                <a href="javascript:;">meeting room <i class="fa fa-caret-down"></i></a>

                                <ul class="filter-content">
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">meeting space <i class="fa fa-caret-down"></i></a>

                                <ul class="filter-content">
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">guest rooms <i class="fa fa-caret-down"></i></a>

                                <ul class="filter-content">
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">Restaurant & Bars <i class="fa fa-caret-down"></i></a>

                                <ul class="filter-content">
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">ratings <i class="fa fa-caret-down"></i></a>

                                <ul class="filter-content">
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">chains brands  & HOtels <i class="fa fa-caret-down"></i></a>

                                <ul class="filter-content">
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">Amenities <i class="fa fa-caret-down"></i></a>

                                <ul class="filter-content">
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">More <i class="fa fa-caret-down"></i></a>

                                <ul class="filter-content">
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Data</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="srch-rslt clearfix">
                        <div class="row va-ctr">
                            <div class="col-md-6">
                                <h3>300+ Venues Found</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="opt">
                                    <div class="clearfix">
                                        <span class="txt">Map View</span>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider-switch round"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="opt">
                                    <ul>
                                        <li class="active">
                                            <i class="fa fa-th-large" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-bars" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <section class="featured-sec pbpx-15 wow fadeInUp" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>
                        Featured Places
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="fea-slide owl-theme owl-carousel">
                        @if( !empty($featuredhotels) )
                            @foreach( $featuredhotels as $key => $hotel )
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
                                                                <h6><strong>Meeting Rooms</strong> {{ $hotel->space_meeting_room ?? '' }}</h6>
                                                            </div>
                                                        @endif
                                                        @if( isset( $hotel->space_meeting_space) )
                                                            <div class="col-sm-6">
                                                                <h6><strong>Meeting Space</strong> {{ $hotel->space_meeting_space ?? '' }}</h6>
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endif

                                                @if( isset( $hotel->space_guest_rooms) || isset( $hotel->space_restuatrant_bars))
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h6><strong>Guest Rooms</strong> {{ $hotel->space_guest_rooms ?? '' }}</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h6><strong>Restaurant & Bars</strong> {{ $hotel->space_restuatrant_bars ?? '' }}</h6>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="srch-dt srch-dt-altr">
        <div class="container">
            <div class="row">

                @if( !empty($allhotels) )
                    @foreach( $allhotels as $key => $hotel )
                        <div class="col-md-6 col-lg-3">
                            <div class="deal-bx">
                                <a href="{{ route('hotel_detail',['slug'=>$hotel->slug ?? '']) }}">

                                    <figure>
                                       @if( !empty( $hotel->getPrimaryImage()) )
                                        @if($hotel->hotel_id == 1)
                                        <a href="{{ asset('images/'.$hotel->HotelsGallery[0]->file) }}" data-fancybox="gallery">
                                            <img src="{{ asset('images/'.$hotel->HotelsGallery[0]->file) }}" />
                                        </a>
                                        @else
                                        <a href="{{ asset('uploads/hotels/'.$hotel->id.'/'.$hotel->getPrimaryImage()) }}" data-fancybox="gallery">
                                            <img src="{{ asset('uploads/hotels/'.$hotel->hotel_id.'/'.$hotel->getPrimaryImage()) }}" />
                                        </a>
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
                                                        <h6><strong>@lang('destination/details.meeting_room')</strong> {{ $hotel->space_meeting_room ?? '' }}</h6>
                                                    </div>
                                                @endif
                                                @if( isset( $hotel->space_meeting_space) )
                                                    <div class="col-sm-6">
                                                        <h6><strong>@lang('destination/details.meeting_space')</strong> {{ $hotel->space_meeting_space ?? '' }}</h6>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                        @if( isset( $hotel->space_guest_rooms) || isset( $hotel->space_restuatrant_bars))
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h6><strong>@lang('destination/details.guest_room')</strong> {{ $hotel->space_guest_rooms ?? '' }}</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h6><strong>@lang('destination/details.restaurant_bars')</strong> {{ $hotel->space_restuatrant_bars ?? '' }}</h6>
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
            </div>
            <!-- 		<div class="row">
                        <div class="col-sm-12">
                            <div class="paginate text-center">
                                <ul>
                                    <li>
                                        <a href="javascript:;" class="active">1</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">2</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">3</a>
                                    </li>
                                    <li>
                                        ...
                                    </li>
                                    <li>
                                        <a href="javascript:;">15</a>
                                    </li>
                                </ul>
                                <div class="info">
                                    <p>Showing 1 – 16 out of 3268 results</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
        </div>
    </section>

    <section class="map-view">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <figure>
                        {{ HTML::image('images/srch-map-view.jpg', 'Link Meetings') }}
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="destination-sec ptpx-43 wow fadeInUp" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Recommended Destinations For You</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="srch-dest-slider owl-theme owl-carousel">
                        <div class="item">
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

                        <div class="item">
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

                        <div class="item">
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

                        <div class="item">
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

                        <div class="item">
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

                        <div class="item" >
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

                        <div class="item">
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

                        <div class="item">
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
            </div>
        </div>
    </section>

@endsection
