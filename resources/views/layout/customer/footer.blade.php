<!-- Footer Here -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-12 col-lg-3">
					<figure class="mbpx-15">
						@if( !empty($site_setting->logo_image) )
							{{ HTML::image(URL::to('/').$site_setting->logo_image, 'Link Meetings') }}
						@else
							{{ HTML::image('images/logo.png', 'Link Meetings') }}
						@endif
					</figure>
					<ul class="social">
						<li><a class="fb" target="_blank" href="{{ $site_setting->facebook ?? '#' }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="twitter" target="_blank" href="{{ $site_setting->twitter ?? '#' }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a class="pi" target="_blank" href="{{ $site_setting->pinterest ?? '#' }}"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						<li><a class="linkedin" target="_blank" href="{{ $site_setting->linkedin ?? '#' }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
			</div>
			<?php

			// $site_title = isset($site_setting->site_title ) ? unserialize( $site_setting->site_title) : '';
			$quick_link = isset($site_setting->quick_link ) ? unserialize( $site_setting->quick_link)  : '';
			$help = isset($site_setting->help ) ? unserialize( $site_setting->help)  : '';
			$partner = isset($site_setting->partner ) ? unserialize( $site_setting->partner)  : '';
			$subcribe_text = isset($site_setting->subcribe_text ) ? unserialize( $site_setting->subcribe_text)  : '';


			$locale = (Session::get('applocale') !== null) ? Session::get('applocale') : "en";
			?>
			<!-- {{Session::get('applocale') }} -->

			<div class="col-sm-6 col-md-6 col-lg-2">
				<h3><?php echo $quick_link['quick_link_'.$locale] ?></h3>
				<ul class="f-nav">
					@foreach( $menu_description_quicklinks as $menu_description_quicklink )
						<li><a href="{{ route('page_view',['name'=>$menu_description_quicklink->slug]) }}">{{ $menu_description_quicklink->title }}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-2">
				<h3><?php echo $help['help_'.$locale] ?></h3>
				<ul class="f-nav">
					@foreach( $menu_description_helps as $menu_description_help )
						<li><a href="{{ route('page_view',['name'=>$menu_description_help->slug]) }}">{{ $menu_description_help->title }}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-2">
				<h3><?php echo $partner['partner_'.$locale] ?></h3>
				<ul class="f-nav">
					@foreach( $menu_description_partnerwithus as $menu_description_partnerwithu )
						<li><a href="{{ route('page_view',['name'=>$menu_description_partnerwithu->slug]) }}">{{ $menu_description_partnerwithu->title }}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
				<h3><?php echo $subcribe_text['subcribe_text_'.$locale] ?></h3>
				<div class="subscribe-form">
                    <form id="subscriberform" method="POST" action="{{ route('subscriber_post') }}">
                        @csrf
						<input type="email" class="fld" placeholder="Your Email Address" name="email" required>
						<input type="submit" class="sb-btn" href="javascript:;">
{{--                        <input type="submit" data-fancybox="show-news" class="sb-btn" data-src="#show-news" href="javascript:;">--}}
					</form>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<hr>
			</div>
			<div class="col-sm-12 col-md-6">
				@if( !empty($site_setting->copyright) )
					{{ $site_setting->copyright ?? ''}}
				@endif
			</div>
			<div class="col-sm-12 col-md-6 text-right">
				<p class="alt">Designed &amp; Developed by <a target="_blank" href="{{ URL::to('http://www.weblogies.com') }}">Weblogies</a></p>
			</div>
		</div>
	</div>
</footer>
<!-- End Footer -->


<div class="popup" id="show-news" style="display: none; max-width: 600px; width: 100%;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<figure>
					{{ HTML::image('images/logo-f.png', 'Link Meetings') }}
				</figure>

				<p>Your Successfully Subscribed Our Newsletter. </p>

				<div class="row">
					<div class="col-sm-12 text-center">
						<a href="{{ URL::to('/sign-up') }}" class="primary-btn dblue mrpx-12">Signup</a>
						<a href="{{ URL::to('/login') }}" class="primary-btn dblue">Login</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


	<script src="{{ URL::to('/') }}/js/app.js"></script>
	<script src="{{ URL::to('/') }}/js/custom.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

	<!-- Start of  Zendesk Widget script -->
	<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=752840be-a53d-45b7-a2a7-6ef2b19dfde4"> </script>
	<!-- End of  Zendesk Widget script -->
	</body>
</html>
