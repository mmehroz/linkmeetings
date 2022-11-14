{{-- * Template Name :  Sign Up as Meeting Planner * --}}

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
<?php         
session()->forget('package_id');
session()->forget('type');
?>
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

			{!! Form::open(array('route' => 'customer_register', 'method' => 'post')) !!}
			
				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="First Name*" name="first_name" value="{{ old('first_name') }}" required>

						</div>
					</div>
					<div class="col-md-6">
						<div class="field">


							<input type="text" placeholder="Last Name*" name="last_name" value="{{ old('last_name') }}" required>

						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">


							<input type="email" placeholder="Email Address*" name="email" value="{{ old('email') }}" required>

						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="tel" placeholder="Phone Number*" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" name="phone_number" value="{{ old('phone_number') }} " required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="tel" placeholder="Cell Number*" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" name="cell_number" value="{{ old('cell_number') }}" required>
						</div>
					</div>
				</div>

				<!-- <div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="password" placeholder="Password*" name="" value="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="password" placeholder="Confirm Password*" name="" value="{{ old('phone_number') }}">
						</div>
					</div>
				</div> -->

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="text" placeholder="Address*" name="address" value="{{ old('address') }}" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="field">
							<input type="text" placeholder="City*" name="city" value="{{ old('city') }}" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" placeholder="State*" name="state" value="{{ old('state') }}" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="tel" placeholder="Zip Code*" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" name="zip_code" value="{{ old('zip_code') }}" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Company name*" name="company_name" value="{{ old('company_name') }} " required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Your Position*" name="" value="{{ old('company_name') }}" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="text" placeholder="Company Address*" name="company_address" value="{{ old('company_address') }}" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="field">
							<input type="text" placeholder="City*" name="company_address" value="{{ old('company_address') }}" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" placeholder="State*" name="company_state" value="{{ old('company_state') }}" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="tel" placeholder="Zip Code*" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" name="company_zip_code" value="{{ old('company_zip_code') }}" required>
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
								<input type="text" placeholder="Username*" name="username" value="{{ old('username') }}" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<input type="email" placeholder="Email Address*" name="email" value="{{ old('email') }}" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<input type="password" placeholder="Password*" name="password" value="{{ old('password') }}" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<input type="password" placeholder="Confirm Password*" name="confirm_password" value="{{ old('confirm_password') }}" required>
							</div>
						</div>
					</div>


				<div class="row">
					<div class="col-12 chk-fld">
						<div class="field">
							<label>
								<input type="checkbox" name="agree">
								I accept the <a href="javascript:;">Terms & Conditions</a>
							</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						@if (count($errors) > 0)
			                <div class="alert alert-danger alert-dismissible fade show" role="alert">
			                    <div class="error">
			                        <ul>
			                            @foreach ($errors->all() as $error)
			                                <li>{{ $error }}</li>
			                            @endforeach
			                        </ul>
			                    </div>
			                </div>
			            @endif

			            @if (session('success'))
						    <div class="col-sm-12">
						        <div class="alert  alert-success alert-dismissible fade show" role="alert">
						            {!! session('success') !!}
						        </div>
						    </div>
						@endif
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="field">

							<button class="primary-btn dblue">Create an Account</button>
						</div>
					</div>
				</div>

				{!! Form::close() !!}

			</div>
		</div>
	</div>
</section>


@endsection




