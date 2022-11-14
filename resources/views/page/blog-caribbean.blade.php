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
@section('body-class') inner-pg blog-pg @stop
@section('content')

<section class="blog-dt wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-md-11 col-lg-8 ctrdv">
				<figure>
					{{ HTML::image('images/blog-bx-caribbean.jpg', 'Link Meetings') }}					
				</figure>
				<h2>Caribbean hidden gem: Samaná, Dominican Republic.</h2>
				<h5><span>adventure</span>July 25, 2020</h5>

				<p>The Dominican Republic is an ideal destination for beach, party, and adventure
lovers; Its turquoise waters attract thousands of travelers, year after year.
The Dominican Republic has one of the most geographically unique landscapes
of any Caribbean country. Today, we will talk about Samaná, the hidden Gem.
Samaná, in full Santa Barbara de Samaná , is a town in the northeastern
Dominican Republic. Tours from Punta Cana and Santo Domingo are always
available to reach this destination. The town is an important tourism
destination and is the main center for whale watching tours in the Caribbean
region.</p>

				<figure>
					{{ HTML::image('images/blog-c-1.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-c-2.jpg', 'Link Meetings') }}					
				</figure>

				<p>Samaná has views for days. You’ll definitely want to see the stunning white-
sand beaches such as Rincon and Coson. The same thing goes for Cayo

Levantado, a beautiful islet Surrounded by white sands and crystalline waters.
The island is only accessible by boat, most departures are from the main dock
of the Port of Samaná town.</p>

				<figure>
					{{ HTML::image('images/blog-c-3.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-c-4.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-c-5.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-c-6.jpg', 'Link Meetings') }}					
				</figure>

				<p>But Samaná not only offers beautiful beaches gateways, but there are also lots
of incredible experiences like taking a boat ride to Los Haitises National Park.
This national park is one of DR’s largest protected areas. You will see ancient
caves and the most diverse collection of endemic flora and fauna. Los Haitises
also nurtures one of the DR’s few remaining rainforests.</p>

				<figure>
					{{ HTML::image('images/blog-c-7.jpg', 'Link Meetings') }}					
				</figure>

				<p>If you are adventurous and enjoy hiking, then an excursion to El Salto del Limón
waterfall is a must. The waterfalls reach 164 feet in height from the ground
where it settles in a refreshing natural pool. Reaching El Limón waterfall is an
adventure that takes you on a 2.5-kilometer (1.5-mile) journey. Bring your
Sunscreen and bathing suit to take full advantage of this amazing trip.</p>
				
				<figure>
					{{ HTML::image('images/blog-c-8.jpg', 'Link Meetings') }}					
				</figure>

				<p>If you are looking for wildlife tourism, Samaná is one of the breeding places of
the humpback whale. Thousands of humpback whales come to the coast off

Samaná from January to March to mate and give birth. You can book a tour to
set sail for the whale watch experience of a lifetime.</p>

				<figure>
					{{ HTML::image('images/blog-c-9.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-c-10.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-c-11.jpg', 'Link Meetings') }}					
				</figure>

				<p>So for your next vacation, if you looking for Palm-lined, white-sand beaches
and turquoise water, with fun activities keep in mind Samaná the hidden Gem.</p>
				
				<figure>
					{{ HTML::image('images/blog-c-12.jpg', 'Link Meetings') }}					
				</figure>


				<div class="social">
					<span>Share this story</span>
					<a class="fb" target="_blank" href="{{ URL::to('#') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a class="twitter" target="_blank" href="{{ URL::to('#') }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a class="linkedin" target="_blank" href="{{ URL::to('#') }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="list-blog wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row srch-head va-ctr">
			<div class="col-sm-12">
				<h2 class="text-center">Related Blogs</h2>
			</div>
		</div>

		<div class="row">

			<div class="col-md-4 col-sm-6">
				<div class="deal-bx">
					<a href="{{ URL::to('/blog-detail') }}">
						<figure>
							{{ HTML::image('images/blog-bx-7.jpg', 'Link Meetings') }}
						</figure>
						<div class="text">
							<h5><span>adventure</span> June 6, 2020</h5>
							<h3>Slip Into Serenity With These 8 Things To Do In Lake Lure, NC</h3>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="deal-bx">
					<a href="{{ URL::to('/blog-detail') }}">
						<figure>
							{{ HTML::image('images/blog-bx-5.jpg', 'Link Meetings') }}
						</figure>
						<div class="text">
							<h5><span>adventure</span> June 6, 2020</h5>
							<h3>Lower Calf Creek Falls: An Extraordinary Hike Not to Miss in Utah</h3>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="deal-bx">
					<a href="{{ URL::to('/blog-detail') }}">
						<figure>
							{{ HTML::image('images/blog-bx-8.jpg', 'Link Meetings') }}
						</figure>
						<div class="text">
							<h5><span>adventure</span> June 6, 2020</h5>
							<h3>YTB EP12: How to Stand Out & Live Fully with Guest Cory Lee</h3>
						</div>
					</a>
				</div>
			</div>
		</div>

	</div>
</section>

@endsection




