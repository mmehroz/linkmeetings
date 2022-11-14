

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
@section('body-class') create-ad-pg ban-ad-pg @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<h2>Create a Banner Ad</h2>

					<div class="row">
						<div class="col-md-6 col-lg-4">
							<div class="bx">
								<figure>
									{{ HTML::image('images/banner-ad-home-slider.jpg', 'Link Meetings') }}
								</figure>
								<h3>Homepage Slider Main Ad</h3>
								<p><strong>$10.99</strong> /day</p>
								<h6><strong>Image Size:</strong> 1920px X 760px<br> 
								<strong>Text:</strong> Heading (40 characters max)<br>
								Paragraph (120 characters max)</h6>
								<a href="{{ URL::to('/dmc/create-banner-ad-step') }}" class="primary-btn dblue-bdr">Create An Ad</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="bx">
								<figure>
									{{ HTML::image('images/banner-ad-homepage.jpg', 'Link Meetings') }}
								</figure>
								<h3>Homepage Banner Ad</h3>
								<p><strong>$6.99</strong> /day</p>
								<h6><strong>Image Size:</strong> 1156px X 500px<br>
									<strong>Text:</strong> Heading (40 characters max)<br>
									Paragraph (120 characters max)</h6>
								<a href="{{ URL::to('/dmc/create-banner-ad-step') }}" class="primary-btn dblue-bdr">Create An Ad</a>
							</div>
						</div>

						<div class="col-md-6 col-lg-4">
							<div class="bx">
								<figure>
									{{ HTML::image('images/banner-ad-search-page.jpg', 'Link Meetings') }}
								</figure>
								<h3>Search Page Ad</h3>
								<p><strong>$7.99</strong> /day</p>
								<h6><strong>Image Size:</strong> 1156px X 320px<br>
									<strong>Text:</strong> Heading (40 characters max)<br>
									Paragraph (120 characters max)</h6>
								<a href="{{ URL::to('/dmc/create-banner-ad-step') }}" class="primary-btn dblue-bdr">Create An Ad</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection




