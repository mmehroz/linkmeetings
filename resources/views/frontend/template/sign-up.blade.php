{{-- * Template Name : Sign-up * --}}
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

<section class="login-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-lg-6 ctrdv">
				<h1 class="mbpx-28">{{ $pageContent->title ?? '' }}</h1>
				<div class="row with-api">
					<div class="col-md-6">
						<figure>
							<a href="javascript:;">{{ HTML::image('images/login-google.jpg', 'Link Meetings') }}</a>
						</figure>
					</div>
					<div class="col-md-6">
						<figure>
							<a href="javascript:;">{{ HTML::image('images/login-fb.jpg', 'Link Meetings') }}</a>
						</figure>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="or-sep">
							<span>OR</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="First Name*" name="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Last Name" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="email" placeholder="Email Address*" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Phone Number*" name="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Cell Number" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="password" placeholder="Password*" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="password" placeholder="Confirm Password*" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="text" placeholder="Address" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="field">
							<input type="text" placeholder="City" name="">
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" placeholder="State" name="">
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" placeholder="Zip Code" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Company name*" name="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Your Position" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="text" placeholder="Company Address" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="field">
							<input type="text" placeholder="City" name="">
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" placeholder="State" name="">
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" placeholder="Zip Code" name="">
						</div>
					</div>
				</div>

				<div class="row text-left mtpx-20">
					<div class="col-md-12">
						<div class="field">
							<label>Login Information</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Username*" name="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Email Address*" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="password" placeholder="Password*" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="password" placeholder="Confirm Password*" name="">
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-12 chk-fld">
						<div class="field">
							<label>
								<input type="checkbox" name="">
								I accept the <a href="javascript:;">Terms & Conditions</a>
							</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12 chk-fld">
						<div class="field">
							<label>
								<input type="checkbox" name="">
								Send me ocassional Promotional deals & newsletters
							</label>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-12">
						<div class="field">
							<a href="javascript:;" class="primary-btn dblue">Create an Account</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection




