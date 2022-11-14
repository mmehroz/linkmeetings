
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

			{!! Form::open(array('route' => 'customer_account_info_add', 'method' => 'post', 'class' => 'form-horizontal', 'files'=> true)) !!}
			<div class="col-md-9 col-xl-12 login-sec">
				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="First Name" value="{{session()->get('name')}}" readonly required name="firstname">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Last Name" value="" name="lastname" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="email" placeholder="Email" value="{{session()->get('email')}}" readonly required name="email">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" value="" placeholder="Phone Number" required name="phonenumber">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" value="" placeholder="Cell Number" required name="cellnumber">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="text" value="" placeholder="address" required name="address">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="field">
							<input type="text" value="" placeholder="City" required name="city">
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" value="" placeholder="state" required name="state">
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" value="" placeholder="Zip Code" required name="zip">
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
							<input type="text" value="" placeholder="Company Name" required name="companyname">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" value="" placeholder="Your Position" required name="possition">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="text" value="" placeholder="Company Address" required name="companyaddress">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="field">
							<input type="text" value="" placeholder="City" required name="companycity">
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" value="" placeholder="State" required name="companystate">
						</div>
					</div>
					<div class="col-md-4">
						<div class="field">
							<input type="text" value="" placeholder="Zip Code" required name="companyzip">
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
							<input type="text" value="" placeholder="Username" required name="username">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" value="{{session()->get('email')}}" placeholder="Email" required name="useremail" readonly>
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
							<input type="file" value="" accept="image/x-png,image/jpeg" name="image">
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




