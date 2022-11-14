
@extends('layout.customer.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!} 
@stop
@section('body-class') inner-pg logged-in my-account-pg @stop
@section('content')



<section class="main-sec">
	<div class="container">
		<div class="row">
			@if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if(session('message'))
            <div>   <p class="alert alert-success" >{{session('message')}}</p> </div>
          	@endif
			<div class="col-md-12">
				<h2 class="main">@lang('customer/customerprofile.tittle')</h2>
			</div>

			<div class="col-md-3">
				@include('layout.customer.usernav')
				@yield('usernav')
			</div>
			{!! Form::open(array('route' => 'customer_account_info_update', 'method' => 'post', 'class' => 'form-horizontal', 'files'=> true)) !!}
				<?php
                    $firstname 		= $getuserinfo->first_name;
                    $lastname 		= $getuserinfo->last_name;
                    $email 			= $getuserinfo->email;
                    $phonenumber 	= $getuserinfo->phone_number;
                    $cellnumber 	= $getuserinfo->cell_number;
                    $address 		= $getuserinfo->address;
                    $city 			= $getuserinfo->city;
                    $state 			= $getuserinfo->state;
                    $zip 			= $getuserinfo->zip_code;
                    $companyname 	= $getuserinfo->company_name;
                    $possition 		= $getuserinfo->position;
                    $companyaddress = $getuserinfo->company_address;
                    $companycity 	= $getuserinfo->company_city;
                    $companystate 	= $getuserinfo->company_state;
                    $companyzip 	= $getuserinfo->company_zip_code;
                    $username 		= $getuserinfo->username;
                    $userimage 		= $getuserinfo->userimage;

                ?>
			<div class="col-md-9 col-xl-12 login-sec">
				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="First Name" value="{{$firstname}}" readonly required name="firstname">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Last Name" value="{{$lastname}}" name="lastname" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="email" placeholder="Email" value="{{$email}}" readonly required name="email">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" value="{{$phonenumber}}" placeholder="Phone Number" required name="phonenumber">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" value="{{$cellnumber}}" placeholder="Cell Number" required name="cellnumber">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="text" value="{{$address}}" placeholder="address" required name="address">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="field">
							<input type="text" value="{{$city}}" placeholder="City" required name="city">
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" value="{{$state}}" placeholder="state" required name="state">
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" value="{{$zip}}" placeholder="Zip Code" required name="zip">
						</div>
					</div>
				</div>

				<div class="row text-left mtpx-20">
					<div class="col-md-12">
						<div class="field">
							<label>@lang('customer/customerprofile.companydetail')</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" value="{{$companyname}}" placeholder="Company Name" required name="companyname">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" value="{{$possition}}" placeholder="Your Position" required name="possition">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="text" value="{{$companyaddress}}" placeholder="Company Address" required name="companyaddress">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="field">
							<input type="text" value="{{$companycity}}" placeholder="City" required name="companycity">
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" value="{{$companystate}}" placeholder="State" required name="companystate">
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" value="{{$companyzip}}" placeholder="Zip Code" required name="companyzip">
						</div>
					</div>
				</div>

				<div class="row text-left mtpx-20">
					<div class="col-md-12">
						<div class="field">
							<label>@lang('customer/customerprofile.logininformation')</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" value="{{$username}}" placeholder="Username" required readonly name="username">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" value="{{$email}}" placeholder="Email" required name="useremail" readonly>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field edt">
							<input type="password" value="" placeholder="Password" required name="password">
							<!-- <a href="javascript:;" class="edit-pass">Edit</a> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="field edt">
							<input type="file" value="{{$userimage}}" accept="image/x-png,image/jpeg" name="image">
							<!-- <a href="javascript:;" class="edit-pass">Edit</a> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-right">
						<div class="field">
							<button type="submit" class="primary-btn dblue">@lang('admin/site_settings.update_information')</button>
						</div>
					</div>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</section>

@endsection




