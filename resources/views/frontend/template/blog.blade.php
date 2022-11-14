{{-- * Template Name : Blog * --}}
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
@section('body-class') inner-pg blog-pg @stop
@section('content')



<section class="hot-deals-sec blog-fea wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>
					Featured Blogs
				</h2>
			</div>
		</div>



				<div class="row">
					<div class="col-sm-12">
						<div class="bx-slide owl-theme owl-carousel">

						@foreach($blogviewisfeature as $blogviewisfeaturedata)

							<div class="item">
								<div class="deal-bx wow fadeIn" data-wow-delay="0.2s">
									<a href="{{ URL::to('/blog-detail') }}">
										<figure>
										<img src="{{ asset($blogviewisfeaturedata->image ?? '') }}">

											<!-- {{ HTML::image('images/blog-bx-caribbean.jpg', 'Link Meetings') }} -->
										</figure>
										<div class="text">
											<h5><span></span> {{ $blogviewisfeaturedata->created_at }}</h5>
											<h3>{{ $blogviewisfeaturedata->title }}</h3>
										</div>
									</a>
								</div>
							</div>

						@endforeach

						</div>
					</div>
				</div>



	</div>
</section>

<section class="list-blog wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row srch-head va-ctr">
			<div class="col-sm-6">
				<p>Showing <strong>1 to 12</strong> of 2339 posts</p>
			</div>
			<div class="col-sm-6 text-right">
				<select>
					<option>Destinations</option>
					<option>Hotels</option>
					<option>Experiences</option>
					<option>&nbsp;&nbsp;&nbsp;Indoors</option>
					<option>&nbsp;&nbsp;&nbsp;Outdoors</option>
				</select>
			</div>
		</div>



			<div class="row">

				@foreach($blogview as $blogviewdata)

						<div class="col-md-4 col-sm-6">
							<div class="deal-bx wow fadeIn" data-wow-delay="0.2s">
								<a href="{{ URL::to('/blog-detail') }}">
									<figure>
									<img src="{{ asset($blogviewdata->image) }}">
										<!-- {{ HTML::image('images/blog-bx-4.jpg', 'Link Meetings') }} -->
									</figure>
									<div class="text">
										<h5><span>{{ $blogviewdata->ttitle }}</span> {{ $blogviewdata->created_at }}</h5>
										<h3>{{ $blogviewdata->title }}</h3>
									</div>
								</a>
							</div>
						</div>

				@endforeach

			</div>



		<div class="row wow fadeInUp" data-wow-delay="0.2s">
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
						<p>Showing 1 – 12 out of 3268 results</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



@endsection




