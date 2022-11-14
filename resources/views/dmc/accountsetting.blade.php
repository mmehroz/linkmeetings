
@extends('layout.dmc.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!} 
@stop
@section('body-class') acc-dt @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-lg-9">
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
								<div class="col-sm-12">
									<h2>@lang('accountsettings.maintittle')</h2>


									<ul class="tabs">
										<li>
											<a href="javascript:;" data-target="profile" class="active">@lang('accountsettings.tittletabinfo')</a>
										</li>
										<li><a href="javascript:;" data-target="pkg">@lang('accountsettings.tittletabpackage')</a></li>
									</ul>
									{!! Form::open(array('route' => 'account_info_update', 'method' => 'post', 'class' => 'form-horizontal', 'files'=> true)) !!}
										<?php
						                    $userid 		= $getuserinfo->id;
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
						                  	$username 		= $getuserinfo->username;
						                    $userimage 		= $getuserinfo->userimage;

						                ?>
									<div class="tab-content profile" style="display: block;">
										<input type="hidden" name="hdnuserid" value="{{$userid}}">
										<div class="user-info-bx">
											<figure>
												@if(!empty($userimage))
												{{ HTML::image('uploads/accountsetting'.$userid.'/'.$userimage, 'Link Meetings') }}
												@else
												{{ HTML::image('images/upload-img-drag-dmc.png', 'Link Meetings') }}
												@endif
											</figure>
											<div class="addFileStyle">
												<input type="file" accept="image/x-png,image/jpeg" value="{{$userimage}}" name="image">
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-6">
												<div class="field">
													<label>@lang('accountsettings.firstname')</label>
													<input type="text" value="{{$firstname}}" class="bg-fld" required name="firstname">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="field">
													<label>@lang('accountsettings.lastname')</label>
													<input type="text" value="{{$lastname}}" class="bg-fld" required name="lastname">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="field">
													<label>@lang('accountsettings.emailaddress')</label>
													<input type="text" value="{{$email}}" class="bg-fld" readonly required name="email">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="field">
													<label>@lang('accountsettings.username')</label>
													<input type="text" value="{{$username}}" class="bg-fld" readonly required name="username">
												</div>
											</div>
										</div>

										<hr>
										<div class="row">
											<div class="col-sm-6">
												<div class="field">
													<label>@lang('accountsettings.phoneber')</label>
													<input type="number" value="{{$phonenumber}}" class="bg-fld" required name="phonenumber">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="field">
													<label>@lang('accountsettings.cellnumber')</label>
													<input type="number" value="{{$cellnumber}}" class="bg-fld" required name="cellnumber">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="field">
													<label>@lang('accountsettings.address')</label>
													<input type="text" value="{{$address}}" class="bg-fld" required name="address">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="field">
													<label>@lang('accountsettings.city')</label>
													<input type="text" value="{{$city}}" class="bg-fld" required name="city">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="field">
													<label>@lang('accountsettings.state')</label>
													<input type="text" value="{{$state}}" class="bg-fld" required name="state">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="field">
													<label>@lang('accountsettings.zip')</label>
													<input type="text" value="{{$zip}}" class="bg-fld" required name="zip">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="field">
													<label>@lang('accountsettings.companyname')</label>
													<input type="text" value="{{$companyname}}" class="bg-fld" required name="companyname">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="field">
													<label>@lang('accountsettings.possition')</label>
													<input type="text" value="{{$possition}}" class="bg-fld" required name="possition">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="field">
													<label>@lang('accountsettings.password')</label>
													<input type="password" value="" class="bg-fld" required name="password">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<button type="submit" class="primary-btn dblue">@lang('admin/site_settings.update_information')</button>
											</div>
										</div>
									</div>
									{!! Form::close() !!}
									<div class="tab-content pkg" >
										
										<div class="row">
											<div class="col-sm-12">
												<h3>
													Current Package:
													<span class="in">Zafiro</span>
												</h3>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<h3>
													Plan Expires on:
													<span>19 August 2020</span>
												</h3>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<h3>
													Auto Renewal
													<span>On</span>
												</h3>

												<label class="switch">
												  <input type="checkbox" checked="">
												  <span class="slider-switch round"></span>
												</label>
											</div>
										</div>



										<div class="row">
											<div class="col-sm-12">
												<h4>
													Change Your Package
												</h4>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12 col-md-6">
												<div class="bx">
													<div class="head">
														<h2>PERLA</h2>
														<h3>Paquete Basico</h3>
													</div>
													<div class="price">
														<h5>$12.00<span>/month</span></h5>
													</div>
													<div class="dt">
														<ul>
															<li><i class="fa fa-check"></i>Landing Page</li>
															<li><i class="fa fa-check"></i>1 Postings of deal of the week in destination landing page</li>
															<li><i class="fa fa-check"></i>1 time email blast a year</li>
														</ul>

														<div class="clearfix">
															<a href="#" class="primary-btn dblue">Get Started</a>
														</div>
													</div>
												</div>
											</div>

											<div class="col-sm-12 col-md-6">
												<div class="bx">
													<div class="head">
														<h2 class="orange">DIAMANTE</h2>
														<h3>Paquete Primium</h3>
													</div>
													<div class="price">
														<h5>$22.00<span>/month</span></h5>
													</div>
													<div class="dt">
														<ul>
															<li><i class="fa fa-check"></i>Landing Page</li>
															<li><i class="fa fa-check"></i>3 Postings of deal of the week in destination landing page</li>
															<li><i class="fa fa-check"></i>1 promo article in the blog</li>
															<li><i class="fa fa-check"></i>2 time email blast a year</li>
															<li><i class="fa fa-check"></i>2 postings on main landing page in one year</li>
														</ul>

														<div class="clearfix">
															<a href="#" class="primary-btn dblue">Get Started</a>
														</div>
													</div>
												</div>
												
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div id="add-user" class="popup" style="display: none; width: 100%; max-width: 530px;">
    <h2 >
        Create User
    </h2>
    <form>
    	<div class="field">
    		<label>Full Name*</label>
    		<input type="text" name="">
    	</div>
    	<div class="field">
    		<label>Email Address*</label>
    		<input type="text" name="">
    	</div>
    	<div class="field">
    		<label>Hotel</label>
    		<select>
    			<option></option>
    		</select>
    	</div>
    	<div>
    		<a href="javascript:;" class="primary-btn dblue">+ Add User</a>
    	</div>
    </form>
</div>

@endsection




