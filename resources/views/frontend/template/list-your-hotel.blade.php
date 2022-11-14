{{-- * Template Name : List Your Hotel * --}}
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

<section class="list-venue-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h4>{{ $pageContent->short_title ?? '' }}</h4>
				<h1>{{ $pageContent->title ?? '' }}</h1>
			</div>
		</div>

		<div class="row">

        @foreach( $hotels as $key=> $hotel )

                @if($key == 0)
                    <div class="col-md-12 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                @endif
                @if($key == 1)
                            <div class="col-md-12 col-lg-4 wow fadeIn" data-wow-delay="0.9s">
                @endif
                @if($key == 2)
                                    <div class="col-md-12 col-lg-4 wow fadeIn" data-wow-delay="1.2s">
                @endif
                    <div class="bx">
                        <div class="head">
                            @if($key == 0)
                            <h2>{{ $hotel->title ?? '' }}</h2>
                            @endif
                            @if($key == 1)
                            <h2 class="green">{{ $hotel->title ?? '' }}</h2>
                            @endif
                            @if($key == 2)
                            <h2 class="orange">{{ $hotel->title ?? '' }}</h2>
                            @endif
                            <h3>{{ $hotel->short_title ?? '' }}</h3>
                        </div>
                        <div class="price">
                            <h5>${{ $hotel->price ?? '' }} USD<span>/year</span></h5>
                        </div>
                        <div class="dt">
                               {!! $hotel->details ?? '' !!}
                            <div class="clearfix">
                                <a href="{{ route('get_package',['id'=>$hotel->id ??'','type'=>'hotel']) }}" class="primary-btn dblue">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
      @endforeach
	    </div>
	</div>
</section>
@endsection
