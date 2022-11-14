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
					{{ HTML::image('images/blog-bx-reasons.jpg', 'Link Meetings') }}					
				</figure>
				<h2>Reasons to Drop What You're Doing & Go to Punta Cana</h2>
				<h5><span>adventure</span>July 24, 2020</h5>

				<p>Dominican Republic , it attracts tourists from all over the world, well, those in
the know, anyway. It’s a destination like no other, and there’s definitely no
better way to experience the Caribbean’s incredible natural beauty , quite like a
Punta Cana holiday. Punta Cana is one the most important travel destination in
the whole Caribbean According to Forbes . Located in the east corner of the
Dominican Republic, the Punta Cana – Bavaro zone is part of La Alta Gracia
province, the largest in the Dominican Republic.</p>

				<figure>
					{{ HTML::image('images/blog-r-1.jpg', 'Link Meetings') }}					
				</figure>

				<p>So here are a few reasons why you should choose Punta Cana for your next
escape .</p>

				<h3>The Beaches</h3>
				<p>Punta Cana is home to miles and miles of beautiful beaches, with white sand
that feels like you’re walking on clouds. The Vivid turquoise waters are
absolutely breathtaking. Also don’t forget that you can have cocktails at night
and dance under the stars on the beach.</p>

				<figure>
					{{ HTML::image('images/blog-r-2.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-r-3.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-r-4.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-r-5.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-r-6.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-r-7.jpg', 'Link Meetings') }}					
				</figure>



				<figure>
					{{ HTML::image('images/blog-r-8.jpg', 'Link Meetings') }}					
				</figure>

				<h3>The People</h3>

				<p>Dominicans are beautiful people inside and out. From the moment you get off
the plane until the moment you depart you will be received with a massive
smile from everyone you make eye contact with.</p>

				<figure>
					{{ HTML::image('images/blog-r-9.jpg', 'Link Meetings') }}					
				</figure>

				<h3>Tropical Golf Courses</h3>

				<p>Teeing off on a beautifully-landscaped course is always a holiday dream, but
doing so with a picturesque view is ever better. The Punta Cana golf courses
offer spectacular scenery. One of the most famous is Punta Espada designed
Jack Nicklaus. Is a perfect setting to find inspiration for best shots.</p>
				
				

				<figure>
					{{ HTML::image('images/blog-r-10.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-r-11.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-r-12.jpg', 'Link Meetings') }}					
				</figure>

				<h3>Endless Fun</h3>

				<p>Punta Cana Offers Multiple water sports activities which include kayaking, jet
skiing, jet boating, parasailing, and much more. Activities abound including
secluded island boating tours and private deep sea fishing.</p>

				<div class="row va-ctr">
					<div class="col-sm-5">
						<figure>
							{{ HTML::image('images/blog-r-13.jpg', 'Link Meetings') }}					
						</figure>
					</div>
					<div class="col-sm-7">
						<figure>
							{{ HTML::image('images/blog-r-14.jpg', 'Link Meetings') }}					
						</figure>
					</div>
				</div>

				

				

				<figure>
					{{ HTML::image('images/blog-r-15.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-r-16.jpg', 'Link Meetings') }}					
				</figure>

				<p>My top recommended adventure is a brief hike to the Hoyo Azul, this a natural
pool with crystal clear waters, located off the base of a cliff.</p>
				
				

				<figure>
					{{ HTML::image('images/blog-r-17.jpg', 'Link Meetings') }}					
				</figure>

				<figure>
					{{ HTML::image('images/blog-r-18.jpg', 'Link Meetings') }}					
				</figure>

				<p>So if you want unforgettable beaches be treated to world-class service and
amenities. , then take a look at Punta Cana.</p>

				<figure>
					{{ HTML::image('images/blog-r-19.jpg', 'Link Meetings') }}					
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




