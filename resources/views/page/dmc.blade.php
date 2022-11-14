
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
@section('body-class') inner-pg dmc-pg @stop
@section('content')

<section class="inner-srch wow fadeInUp mbpx-40" data-wow-delay="0.2s">
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

<section class="inner-ban wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="cont">
					<figure>
						{{ HTML::image('images/link-dmc-logo.png', 'Link Meetings') }}
					</figure>
					<h3>Link DMC - Event Management</h3>
					<p>Cancún · Riviera Maya · Punta Cana · Brasil</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="main-content">
	<div class="container">
		<div class="row va-ctr">
			<div class="col-md-6">
				<figure>
					{{ HTML::image('images/dmc-pg-cont-img-1.jpg', 'Link Meetings') }}
				</figure>
			</div>
			<div class="col-md-6">
				<h3>Welcome to Punta Cana!</h3>
				<p>Be welcomed at the airport by our professional staff, they will be waiting with signs with names or brand logos and refreshing beverages of your choice and branded on each, as well as refreshing cold towels.</p>
				<ul>
					<li>Accompanying staff in the units. </li>
					<li>Hospitality desk at the hotel ( Shuttle services, Tours & Excursions, Team   Buildings, Dinners)</li>
					<li>Group coordinator onsite the hotel </li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h3>Transportation Process</h3>

				<h4>1. AIRPORT</h4>

				<ul>
					<li>Complete required  migration process.</li>
					<li>Collect your bags.</li>
					<li>Go to counter 4 (terminal A)</li>
					<li>Go to counter 6  (terminal B)</li>
				</ul>

				<p>
					<strong>VIP Meet & Greet Service</strong>
					Be welcomed and  assisted by VIP  Concierges of the  airport that will guide  you through all  migration processes.  Board your pre-  assigned vehicle and  depart to your  destination right away.*
				</p>
				
				<h4>2. Assistance Desk</h4>

				<p class="mbpx-0">
					<strong>First Smile, First Greet</strong>
				</p>

				<ul>
					<li>Logo and name of your  group on the Screen </li>
					<li>Pacific World bilingual  staff will provide  welcome speech,  information sheet and  vehicle number </li>
				</ul>

				<h4>3. Exit Area</h4>

				<p class="mbpx-0">
					<strong>It´s boarding time!</strong>
				</p>

				<ul>
					<li>First time in  Dominican Republic?</li>
					<li>Feel the warm  weather!</li>
					<li>Be taken to your  pre-assigned vehicle  by our staff</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h3>Logistics</h3>

				<h4>Transfer Services</h4>

				<ul>
					<li>All vehicles will carry signs with logo/name of the group.</li>
					<li>Bilingual uniformed Transfer Assistant wtih labeled sign will accompany passengers during rides (valid for all rides with more  than 16 passengers).</li>
					<li>All services would be provided in branded vehicles with logo of the Brand (if planned, branded and ordered ahead of time).</li>
					<li>One Event Coordinator for all transportation logistics.</li>
				</ul>

				<h4>Arrival Services</h4>
				<ul>
					<li>One Event Coordinator per terminal to execute planned logistics with the rest of the staff (quantity of staff will vary according  to the quantity of passengers arriving at the same time so that all needs are covered).</li>
					<li>Bilingual staff at counters with logo/name of the group on screen.</li>
					<li>Passengers could be received with labeled bottled water, labeled Bags of snacks and souvenirs, branded luggage Tags, etc (if planned, branded and ordered ahead of time).*</li>
					<li>Passengers would board brande vehicles with name and logo of the brand (if planned, branded and orderedd ahead of time).</li>
				</ul>
				
				<h4>Arrival Services</h4>
				<ul>
					<li>One Event Coordinator on site to execute planned logistics with the rest of the staff (quantity of staff will vary according to the quantity of passengers departing at the same time so that all needs are covered).</li>
					<li>Bilingual uniformed Transfer Assistant with labeled Sign will accompany passengers during rides (valid for all rides with more  than 16 passengers).</li>
					<li>All services would be provided in branded vehicles with name and logo of the brand (if branded and planned ahead of time).</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<hr>
			</div>
		</div>

		<div class="row va-ctr">
			<div class="col-md-6">
				<figure>
					{{ HTML::image('images/dmc-pg-cont-img-2.jpg', 'Link Meetings') }}
				</figure>
			</div>
			<div class="col-md-6">
				<h3>VIP Services</h3>
				<p>Punta Cana airport has VIP arrival and departure services consisting of the following:</p>
				<ul>
					<li>Welcome at the foot of the plane.</li>
					<li>Immigration and Customs Procedures online exclusively and no rows.</li>
					<li>Use of the airport VIP lounges in both terminals.</li>
					<li>Service in luxury SUV units.</li>
					<li>Cost: Airport VIP Service US $ 140.00 per passenger for arrival or departure assistance, luxury SUV $ 135.00 with capacity for 4 passengers on one way.</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<hr>
			</div>
		</div>

		<h3 class="text-center mbpx-50">Our Fleet</h3>

		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="bx">
					<figure>
						{{ HTML::image('images/van-h1.jpg', 'Link Meetings') }}
					</figure>
					<h4>Van H1</h4>
					<p>Capacity for 6 people </p>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="bx">
					<figure>
						{{ HTML::image('images/van-h2l.jpg', 'Link Meetings') }}
					</figure>
					<h4>Van H2L</h4>
					<p>Capacity for 6 people </p>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="bx">
					<figure>
						{{ HTML::image('images/van-h350.jpg', 'Link Meetings') }}
					</figure>
					<h4>Van H350</h4>
					<p>Capacity for 6 people </p>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="bx">
					<figure>
						{{ HTML::image('images/van-jac.jpg', 'Link Meetings') }}
					</figure>
					<h4>Van Jac</h4>
					<p>Capacity for 13 people </p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<hr>
			</div>
		</div>

		<div class="row va-ctr">
			<div class="col-md-6">
				<figure>
					{{ HTML::image('images/dmc-pg-cont-img-3.jpg', 'Link Meetings') }}
				</figure>
			</div>
			<div class="col-md-6">
				<h3>Do You Want To Have Your Brand:</h3>
				<p class="mbpx-50">In our vehicles, hand signs, shirts, souvenirs. and/or assistance tables?</p>

				<h3>Ask about our brand rates!</h3>
				<p>We only perform services out of the ordinary, because you deserve the best of the best!</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<hr>
			</div>
		</div>

		<div class="row va-ctr">
			<div class="col-md-6">
				<figure>
					{{ HTML::image('images/dmc-pg-cont-img-4.jpg', 'Link Meetings') }}
				</figure>
			</div>
			<div class="col-md-6">
				<h3>Transfer Pricing<br>Punta Cana airport to hotel zone in Bavaro, Punta Cana and Cap Cana.</h3>
				<ul>
					<li>Group transfer 30+ plus PAX USD $10.00 p/p one way.</li> 
					<li>Group transfer 10 to 30 PAX USD $14.00 p/p one way</li> 
					<li>Group transfer 5 to 10 PAX USD $19.00 p/p one way </li>
					<li>Individual transfer from 2 up to 4 PAX on a van USD $24.00 p/p one way.</li> 
					<li>Single transfer for 1 PAX on a van USD $42.00 p/p one way </li>
					<li>Luxury transfer up to 4 PAX in a SUV USD $135.00 one way</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<hr>
			</div>
		</div>

		<div class="row va-ctr">
			<div class="col-md-6">
				<div class="dmc-slide owl-carousel owl-theme">
					<div class="item">
						{{ HTML::image('images/dmc-pg-cont-img-5.jpg', 'Link Meetings') }}
					</div>
					<div class="item">
						{{ HTML::image('images/dmc-pg-cont-img-5.jpg', 'Link Meetings') }}
					</div>
					<div class="item">
						{{ HTML::image('images/dmc-pg-cont-img-5.jpg', 'Link Meetings') }}
					</div>
					<div class="item">
						{{ HTML::image('images/dmc-pg-cont-img-5.jpg', 'Link Meetings') }}
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="c-scroll">					
					<h3>Santo Domingo City Tour</h3>
					<p>The Dominican Republic has a fascinating culture that unites the Taino, Spanish and African influence. Learn the history of this beautiful land, dance to the rhythm of its different musical styles and genres. Enjoy delicious Dominican cuisine, which is a combination of Spanish, African and local flavors. Be a part of a celebration, full of colorful parades, street dances, food festivals and, of course, your music. Its architecture is so beautiful and interesting, have fun discovering it on this great island in the Caribbean.</p>

					<h4>What to bring:</h4>
					<ul>
						<li>Comfortable shoes</li>
						<li>Sunglasses</li>
						<li>Hat</li>
						<li>Sunscreen</li>
					</ul>

					<h4>What is included</h4>
					<ul>
						<li>Pick up and return to the hotel.</li>
						<li>Official guide</li>
						<li>Transportation by bus or air-conditioned van.</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<hr>
			</div>
		</div>

		<div class="row va-ctr">
			<div class="col-md-6">
				<div class="dmc-slide owl-carousel owl-theme">
					<div class="item">
						{{ HTML::image('images/dmc-pg-cont-img-6.jpg', 'Link Meetings') }}
					</div>
					<div class="item">
						{{ HTML::image('images/dmc-pg-cont-img-6.jpg', 'Link Meetings') }}
					</div>
					<div class="item">
						{{ HTML::image('images/dmc-pg-cont-img-6.jpg', 'Link Meetings') }}
					</div>
					<div class="item">
						{{ HTML::image('images/dmc-pg-cont-img-6.jpg', 'Link Meetings') }}
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="c-scroll">					
					<h3>Outback Experience</h3>
					<p>Outback Safari Adventure Tour is an all-inclusive day trip with free-flowing purified water, soft drinks, rum and beer throughout the day.<br><br>A fun and professional multilingual speaking guide will explain the history and culture, plants, animals, and how Dominicans have lived for over 100 years.<br><br>Our guides are extremely efficient, entertaining, informative, downright friendly, and clearly passionate about Punta Cana, this country and the people who make it up.<br><br>With Outback Experience in Punta Cana, you will visit a typical Dominican house, you will meet the family that lives there, and you will enjoy a drink of freshly made coffee with them. Stop by the rural schools and villages of Punta Cana as you see friendly Dominicans smiling and waving.<br><br>Watch the coffee and chocolate that grow on the trees as you walk through a chocolate plantation. Shop at a local rum store with local products like rum, cigars, coffee, and more, all at local Punta Cana prices!<br><br>Enjoy a family-style Dominican lunch at an amazing rural Punta Cana ranch and walk through a fruit plantation to see the fruit growing in its natural environment, you can even try fresh fruit and sugar cane, see native animals like crocodiles, iguanas, turtles & much more.<br><br>Relax, swim, cool off in the refreshing waters of the Anamuya River, or float in one of the available tubes with a cocktail in hand enjoying true Dominican flair in an easy afternoon experience.</p>

					
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<hr>
			</div>
		</div>

		<div class="row mbpx-50">
			<div class="col-sm-12">
				<h3>General Information</h3>
				<p>This document has been prepared and submitted at your request, in a strictly confidential manner. All information and ideas contained in this document are confidential to Link DMC.<br><br>Exploitation or use of any of the materials or ideas contained in this document, without the prior written consent of Link DMC, may give rise to legal measures taken against those parties in violation of the confidentiality in which this document has been prepared. , written and presented.<br><br>This work is copyright. No part of this work may be reproduced by any process without the prior written consent of Link DMC. The items listed in the proposal, which includes places, products and any service, are subject to availability upon confirmation. No reservations have been made at this stage.</p>
			</div>
		</div>

	</div>
</section>

@endsection




