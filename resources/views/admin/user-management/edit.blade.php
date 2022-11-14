
@extends('layout.user.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!}
@stop
@section('body-class') user-dt @stop
@section('content')



<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-lg-9">

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
                                    </div>
                                </div>
                        @endif


                        @if (session('success'))
						    <div class="col-sm-12">
						        <div class="alert  alert-success alert-dismissible fade show" role="alert">
						            {!! session('success') !!}
						                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						                    <span aria-hidden="true">&times;</span>
						                </button>
						        </div>
						    </div>
						@endif

							{{-- <div class="row">
								<div class="col-sm-12">
									<div class="user-info-bx">
										<figure>
											{{ HTML::image('images/user-edit-ava.jpg', 'Link Meetings') }}
										</figure>
										<h2>{{ $user->company_name ?? '' }}</h2>
									</div>
								</div>
							</div> --}}
							 {!! Form::open(array('route' => array('admin_post_edit_user',$id), 'method' => 'post')) !!}
							@if($user->account_type == "hotel")
							<input type="hidden" name="account_type" value="hotel">
							@endif
							@if($user->account_type == "dmc")
							<input type="hidden" name="account_type" value="dmc">
							@endif
							<input type="hidden" name="payment_type" value="free">
							<input type="hidden" name="user_id" value="{{ $user->id ?? '' }}">

							<div class="row">
								<div class="col-sm-6">
									<div class="field">
										<label>Full Name*</label>
										<input type="text" placeholder="" class="bg-fld" name="company_name" value="{{ $user->company_name ?? '' }}">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="field">
										<label>Email Address*</label>
										<input type="text" placeholder="markmanson@gmail.com" class="bg-fld" name="email" value="{{ $user->email ?? '' }}">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="field">
										<label>Phone Number*</label>
										<input type="text" placeholder="+1 256 9876" class="bg-fld" name="phone_number" value="{{ $user->phone_number ?? '' }}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="field">
										<label>Company Name*</label>
										<input type="text" placeholder="Commercial Name" class="bg-fld" name="commercial_name" value="{{ $user->commercial_name ?? old('commercial_name') }}" required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="field">
										<input type="text" placeholder="Enter Required Accounts" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="qty-multiply" name="quantity" required value="{{ $user->number_hotels ?? 1 }}" >
										<input type="button" value="+" class="qtyplus-inc" field="quantity">
										<input type="button" value="-" class="qtyminus-inc" field="quantity">
									</div>
								</div>
								<div class="col-md-6">
									<div class="field">
										<select name="package_id">
										<?php //print_r($user_package); exit; ?>
										@foreach( $packages as $key => $package )
											<option value="{{ $package->id ?? '' }}" @if( $package->id == $user_package->package_id ) selected="selected" @endif>{{ $package->title ?? '' }}</option>
										@endforeach
										</select>
									</div>
								</div>
							</div>
					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="EIN or fiscal reg number" name="ein_fiscal_reg_number" value="{{ $user->ein_fiscal_reg_number ?? old('ein_fiscal_reg_number') }}" required>
							</div>
						</div>



						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Address" name="address" value="{{ $user->address ?? old('address') }}">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<input type="text" placeholder="City" name="city" value="{{ $user->city ?? old('city') }}">
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
								<input type="text" placeholder="State" name="state" value="{{ $user->state ?? old('state') }}">
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
								<input type="text" placeholder="Zip Code" name="zip_code" value="{{ $user->zip_code ?? old('zip_code') }}">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Main Contact Person Name" name="main_contact_person" value="{{ $user->first_name ?? old('main_contact_person') }}" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Position" name="position" value="{{ $user->position ?? old('position') }}">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Phone" name="phone_number" value="{{ $user->phone_number ?? old('phone_number') }}">
							</div>
						</div>

						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Username*" name="username" value="{{ $user->username ?? old('username') }}" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<input type="password" placeholder="Password*" name="password" value="{{ old('password') }}" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<input type="password" placeholder="Confirm Password*" name="confirm_password" value="{{ old('confirm_password') }}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6 chk-fld">
							<div class="field">
								<label>
									<input type="checkbox" @if( $user->send_newsletter == 'on' ) checked @endif name="send_newsletter">
									Send me ocassional Promotional deals & newsletters
								</label>
							</div>
						</div>
					</div>


							<div class="row">
                                <div class="col-sm-4">
									<button type="submit" class="primary-btn dblue">Update Information</button>
								</div>
								<div class="col-sm-4">
									<a onclick="return confirm('Are you sure?')" href="{{ route('admin_delete_user',['id'=>$id ?? ''])}}" class="primary-btn redbdr"><i class="fa fa-trash" aria-hidden="true"></i> Delete this User</a>
								</div>
								<div class="col-sm-4">
                                    @if( $activation )
                                        <a onclick="return confirm('Are you sure?')" class="primary-btn dblue" href={{ route("admin_ban_user", ["id"=>$user->id,'type'=>'ban']) }}>User Inactive</a>
                                    @else
                                        <a onclick="return confirm('Are you sure?')" class="primary-btn dblue" href={{ route("admin_ban_user", ["id"=>$user->id,'type'=>'unban']) }}>User Active</a>
                                    @endif
                                </div>
							</div>
							{!! Form::close() !!}
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




