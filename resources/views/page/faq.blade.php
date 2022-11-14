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

<section class="faq-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Frequently Asked Questions</h1>
				
			</div>
		</div>

		<div class="row">

			<div class="col-md-4 col-lg-3">
				<ul class="lft">
					<li><a href="#booking-details"><figure>{{ HTML::image('images/faq-book-ico.png', 'Link Meetings') }}</figure> Booking details</a></li>
					<li><a href="#cancellation"><figure>{{ HTML::image('images/faq-cancel-ico.png', 'Link Meetings') }}</figure> Cancellation</a></li>
					<li><a href="#change-a-booking"><figure>{{ HTML::image('images/faq-change-book-ico.png', 'Link Meetings') }}</figure> Change a booking</a></li>
					<li><a href="#special-requests"><figure>{{ HTML::image('images/faq-special-ico.png', 'Link Meetings') }}</figure> Special requests</a></li>
				</ul>
			</div>

			<div class="col-md-8 col-lg-9">

				<section id="booking-details">
					<h2>Booking details</h2>

					<div class="acc-bx">
						<div class="head">
							<h3>Phasellus consequat quam id metus accumsan semper?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Nunc egestas purus eget elit euismod malesuada?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Aliquam sit amet mauris tincidunt, congue lorem quis, ultricies massa?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Etiam efficitur dui non nisl dignissim congue eget in tellus?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Etiam finibus mi vitae vehicula blandit?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>
				</section>


				<section id="cancellation">
					<h2>Cancellation</h2>

					<div class="acc-bx">
						<div class="head">
							<h3>Phasellus consequat quam id metus accumsan semper?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Nunc egestas purus eget elit euismod malesuada?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Aliquam sit amet mauris tincidunt, congue lorem quis, ultricies massa?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Etiam efficitur dui non nisl dignissim congue eget in tellus?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Etiam finibus mi vitae vehicula blandit?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>
				</section>


				<section id="change-a-booking">
					<h2>Change a booking</h2>

					<div class="acc-bx">
						<div class="head">
							<h3>Phasellus consequat quam id metus accumsan semper?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Nunc egestas purus eget elit euismod malesuada?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Aliquam sit amet mauris tincidunt, congue lorem quis, ultricies massa?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Etiam efficitur dui non nisl dignissim congue eget in tellus?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Etiam finibus mi vitae vehicula blandit?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>
				</section>


				<section id="special-requests" class="mbpx-0">
					<h2>Special requests</h2>

					<div class="acc-bx">
						<div class="head">
							<h3>Phasellus consequat quam id metus accumsan semper?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Nunc egestas purus eget elit euismod malesuada?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Aliquam sit amet mauris tincidunt, congue lorem quis, ultricies massa?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Etiam efficitur dui non nisl dignissim congue eget in tellus?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>

					<div class="acc-bx">
						<div class="head">
							<h3>Etiam finibus mi vitae vehicula blandit?</h3>
							<i class="fa fa-angle-down"></i>
						</div>
						<div class="dt">
							<p>Nam lectus elit, ornare eget justo vel, dictum mattis lorem. Etiam erat leo, interdum vel tempus rutrum, varius in ipsum. Curabitur bibendum fringilla quam vel porta. Proin placerat ac elit quis eleifend. Sed luctus dolor nec erat lobortis, et rhoncus eros condimentum. Suspendisse eget mi ligula. Duis vel ullamcorper purus, sagittis blandit magna. Etiam non sapien dapibus, porttitor lorem vitae, facilisis felis. Integer et ultrices lacus, vitae maximus odio. Etiam a metus in sapien maximus vehicula quis ac ligula. Aenean in justo finibus, venenatis nisi in, porta eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris consectetur mattis lorem et commodo. Vivamus accumsan gravida massa et laoreet. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>
				</section>
			</div>

		</div>
	</div>
</section>


@endsection




