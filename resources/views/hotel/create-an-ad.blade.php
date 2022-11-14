

@extends('layout.dmc.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!} 
@stop
@section('body-class') create-ad-pg @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<h2>Create an Ad</h2>

					<div class="row">
						<div class="col-md-6 col-lg-4">
							<div class="bx">
								<figure>
									{{ HTML::image('images/banner-ad-info.jpg', 'Link Meetings') }}
								</figure>
								<h3>Banner Ad</h3>
								<p>Starting from <strong>$10.99/day</strong></p>
								<a href="{{ URL::to('/dmc/create-banner-ad') }}" class="primary-btn dblue-bdr">Create An Ad</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="bx">
								<figure>
									{{ HTML::image('images/hot-deal-info.jpg', 'Link Meetings') }}
								</figure>
								<h3>Hot Deals</h3>
								<p>Starting from <strong>$10.99/week</strong></p>
								<a href="{{ URL::to('/dmc/create-hot-deal') }}" class="primary-btn dblue-bdr">Create An Ad</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<a data-fancybox="upgrade-pkg" data-src="#upgrade-pkg" class="upgrade-pk" href="javascript:;" style="display: none;">Upgrade Pkg</a>
<div id="upgrade-pkg" class="popup" style="display: none; width: 100%; max-width: 530px;">
    <h2 >
        Upgrade Your Package
    </h2>

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
							<a href="{{ URL::to('/list-your-dmc-detail') }}" class="primary-btn dblue">Get Started</a>
						</div>
					</div>
				</div>
</div>

@endsection




