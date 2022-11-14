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


<section class="venue-sec-dt wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-lg-6 ctrdv">
				<div class="row">
					<div class="col-sm-12 heading text-center">
						<h4>ACCOUNT INFORMATION</h4>
						<h1>List Your Hotel</h1>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-md-12">
						<div class="field">
							<label>You have selected</label>
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-md-12">
						<div class="field">
							<div class="bx-pkg-dt">
								<div class="row va-ctr">
									<div class="col-6">
										<h2 class="green">SAPHIRE</h2>
										<h3>Paquete Intermedio</h3>
									</div>
									<div class="col-6 text-right">
										<h5>$<small data-amnt="8000">8,000</small>.00<span>/year</span></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
							<input type="text" placeholder="Enter Required Accounts" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="qty-multiply" name="quantity" >
							<input type="button" value="+" class="qtyplus-inc" field="quantity">
							<input type="button" value="-" class="qtyminus-inc" field="quantity">
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
							<input type="text" placeholder="Company legal Name" name="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Commercial Name" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="email" placeholder="EIN or fiscal reg number" name="">
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
							<input type="text" placeholder="Main Contact Person Name" name="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Position" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Email" name="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Phone" name="">
						</div>
					</div>
				</div>

				<div class="row text-left mtpx-20">
					<div class="col-md-12">
						<div class="field">
							<label>Main email to receive RFP</label>
						</div>
					</div>
				</div>

				<div class="to-clone">
					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Full Name" name="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Position" name="">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Email" name="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Phone" name="">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<hr>
							</div>
						</div>
					</div>

				</div>

				<div class="in-clone">
					
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field clearfix">
							<a href="javascript:;" class="add-more links-md">+ Add More</a>

							
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
							<input type="text" placeholder="Password*" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<input type="text" placeholder="Confirm Password*" name="">
						</div>
					</div>
				</div>

				

				<div class="row text-left mtpx-20">
					<div class="col-md-12">
						<div class="field">
							<label>Payment Options</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 radio-fld">
						<div class="field">
							<label><input type="radio" name="pay"> Credit or debit card</label>
							{{ HTML::image('images/visa-ico.png', 'Cards') }}
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 radio-fld">
						<div class="field">
							<label><input type="radio" name="pay"> Paypal</label>
							{{ HTML::image('images/paypal-ico.png', 'Cards') }}
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 radio-fld">
						<div class="field">
							<label><input type="radio" name="pay"> Stripe</label>
							{{ HTML::image('images/stripe-ico.png', 'Cards') }}
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 radio-fld">
						<div class="field">
							<label><input type="radio" name="pay"> Bank draft</label>
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
							<a href="{{ URL::to('/dashboard') }}" class="primary-btn dblue">Proceed to Payment</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection




