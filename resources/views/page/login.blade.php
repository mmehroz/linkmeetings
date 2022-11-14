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

<section class="login-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-lg-6 ctrdv">
				<h1>Login In</h1>
				<p>Not a member yet? <a href="{{ URL::to('/signup') }}">Sign Up</a></p>
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
					<div class="col-12">
						<div class="field">
							<input type="text" placeholder="Email Address or username*" name="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="field">
							<input type="Password" placeholder="Password*" name="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 chk-fld">
						<div class="field">
							<label>
								<input type="checkbox" name="">
								Remember me
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="field">
							<a href="{{ URL::to('/sent-rfp-acc') }}" class="primary-btn dblue">Login</a>
						</div>
					</div>
				</div>
				<div class="row forgot text-center">
					<div class="col-12">
						<div class="clearfix">
							<a href="javascript:;">Forgot your email address?</a>
						</div>
						<div class="clearfix">
							<a href="javascript:;">Forgot your Password?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection




