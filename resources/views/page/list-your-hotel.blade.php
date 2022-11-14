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
@section('body-class') inner-pg @stop
@section('content')

<section class="list-venue-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h4>OUR PACKAGES</h4>
				<h1>List Your Hotel</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
				<div class="bx">
					<div class="head">
						<h2>PERL</h2>
						<h3>Paquete Basico</h3>
					</div>
					<div class="price">
						<h5>$5,000.00<span>/year</span></h5>
					</div>
					<div class="dt">
						<ul>
							<li><i class="fa fa-check"></i>Landing Page</li>
							<li><i class="fa fa-check"></i>1 Postings of deal of the week in destination landing page</li>
							<li><i class="fa fa-check"></i>1 time email blast a year</li>
						</ul>

						<div class="clearfix">
							<a href="{{ URL::to('/list-your-hotel-detail') }}" class="primary-btn dblue">Get Started</a>
						</div>
					</div>
				</div>
				
			</div>

			<div class="col-md-12 col-lg-4 wow fadeIn" data-wow-delay="0.9s">
				<div class="bx">
					<div class="head">
						<h2 class="green">SAPHIRE</h2>
						<h3>Paquete Intermedio</h3>
					</div>
					<div class="price">
						<h5>$8,000.00<span>/year</span></h5>
					</div>
					<div class="dt">
						<ul>
							<li><i class="fa fa-check"></i>Landing Page</li>
							<li><i class="fa fa-check"></i>1 Postings of deal of the week in destination landing page</li>
							<li><i class="fa fa-check"></i>1 promo article in the blog</li>
							<li><i class="fa fa-check"></i>1 time email blast a year</li>
							<li><i class="fa fa-check"></i>1 postings on main landing page in one year</li>
						</ul>
						<div class="clearfix">
							<a href="{{ URL::to('/list-your-hotel-detail') }}" class="primary-btn dblue">Get Started</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-lg-4 wow fadeIn" data-wow-delay="1.2s">
				<div class="bx">
					<div class="head">
						<h2 class="orange">DIAMOND</h2>
						<h3>Paquete Primium</h3>
					</div>
					<div class="price">
						<h5>$12,000.00<span>/year</span></h5>
					</div>
					<div class="dt">
						<ul>
							<li><i class="fa fa-check"></i>Landing Page</li>
							<li><i class="fa fa-check"></i>3 Postings of deal of the week in destination landing page</li>
							<li><i class="fa fa-check"></i>1 promo article in the blog</li>
							<li><i class="fa fa-check"></i>2 time email blast a year</li>
							<li><i class="fa fa-check"></i>2 postings on main landing page in one year</li>
						</ul>

						<div class="clearfix">
							<a href="{{ URL::to('/list-your-hotel-detail') }}" class="primary-btn dblue">Get Started</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>


@endsection




