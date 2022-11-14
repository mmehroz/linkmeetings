
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
@section('body-class') manage-pg @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<h2>Manage Hotels</h2>
					<?php //print_b($hotels); exit; ?>
					<div class="row">
					@if( !empty($hotels) )

							@foreach( $hotels as $key => $hotel )
                                <div class="col-md-6 col-lg-3">
                                    <div class="bx">
                                        @if( !empty($hotel) )
                                            <figure>
                                                @if($hotel->id == 1 && $hotel->getPrimaryImage())
                                                    <img src="{{ asset('images/' . $hotel->getPrimaryImage() ) }}" />
                                                @else
                                                    @if($hotel->getPrimaryImage())
                                                        <img src="{{ asset('uploads/hotels/'.$hotel->hotel_id.'/'.$hotel->getPrimaryImage()) }}" />
                                                    @endif
                                                @endif
                                            </figure>
                                        @endif

								<h3>{{ $hotel->name ?? '' }}</h3>
								<p>{{ $hotel->address ?? '' }}</p>
								<ul>
									<li>
										<i class="icon icon-m-view"></i>
										302k
									</li>
									<li>
										<i class="icon icon-m-comment"></i>
										126
									</li>
									<li>
										<i class="icon icon-m-calndr"></i>
										64
									</li>
								</ul>
								<a href="{{ route('delete_hotel',['id'=>$hotel->id]) }}" class="primary-btn redbdr">Delete Hotel</a>
								<a href="{{ route('edit_hotel_view',['id'=>$hotel->id]) }}" class="primary-btn dblue-bdr">Edit Hotel</a>
                                    </div>
                                </div>
                                    @endforeach

						@endif
						<div class="col-md-6 col-lg-3 lst">
							<div class="bx add-more">
									<div class="cont" onclick="location.href='{{ URL::to('/add-hotel') }}';">
										<div>
											<i class="icon icon-m-add-more"></i>
											<h3>Add a New Hotel</h3>
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

{{--<div id="delete-hotel" class="popup" style="display: none; width: 100%; max-width: 530px;">
    <h2 >
        Create User
    </h2>
    <form action="{{ route('admin_add_user') }}" method="post" >
        @csrf
        <input type="hidden" name="account_type" value="hotel">
        <input type="hidden" name="payment_type" value="free">
        <div class="row text-left mtpx-20">
            <div class="col-md-12">
                <div class="field">
                    <label>Number of Hotels</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="field">
                    <input type="text" placeholder="Enter Required Accounts" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="qty-multiply" name="quantity" required value="{{ old('quantity') }}" >
                    <input type="button" value="+" class="qtyplus-inc" field="quantity">
                    <input type="button" value="-" class="qtyminus-inc" field="quantity">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="field">
                    <select name="package_id">
                    </select>
                </div>
            </div>
        </div>

        <div class="row text-left mtpx-20">
            <div class="col-md-12">
                <div class="field">
                    <label>Registration Information</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="field">
                    <input type="text" placeholder="Company legal Name" name="company_name" value="{{ old('company_name') }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="field">
                    <input type="text" placeholder="Commercial Name" name="commercial_name" value="{{ old('commercial_name') }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="field">
                    <input type="text" placeholder="EIN or fiscal reg number" name="ein_fiscal_reg_number" value="{{ old('ein_fiscal_reg_number') }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="field">
                    <input type="text" placeholder="Address" name="address" value="{{ old('address') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="field">
                    <input type="text" placeholder="City" name="city" value="{{ old('city') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="field">
                    <input type="text" placeholder="State" name="state" value="{{ old('state') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="field">
                    <input type="text" placeholder="Zip Code" name="zip_code" value="{{ old('zip_code') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="field">
                    <input type="text" placeholder="Main Contact Person Name" name="main_contact_person" value="{{ old('main_contact_person') }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="field">
                    <input type="text" placeholder="Position" name="position" value="{{ old('position') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="field">
                    <input type="text" placeholder="Email" name="email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="field">
                    <input type="text" placeholder="Phone" name="phone_number" value="{{ old('phone_number') }}">
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
                    <input type="email" placeholder="Email Address*" name="email" value="{{ old('email') }}" required="required">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="field">
                    <input type="password" placeholder="Password*" name="password" value="{{ old('password') }}" required="required">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="field">
                    <input type="password" placeholder="Confirm Password*" name="confirm_password" value="{{ old('confirm_password') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 chk-fld">
                <div class="field">
                    <label>
                        <input type="checkbox" name="send_newsletter">
                        Send me ocassional Promotional deals & newsletters
                    </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="field">
                    <button class="primary-btn dblue" type="submit">Create</button>
                </div>
            </div>
        </div>
    </form>
</div>--}}
@endsection




