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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<section class="venue-sec-dt wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">

			

			<div class="col-md-9 col-lg-6 ctrdv">
				<div class="row">
					<div class="col-sm-12 heading text-center">
						<h4>ACCOUNT INFORMATION</h4>
						<h1>List Your DMC	</h1>
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
										<h2 class="green">{{ $package->title ?? '' }}</h2>
										<h3>{{ $package->short_title ?? '' }}</h3>
									</div>
									<div class="col-6 text-right">
										<h5>$<small data-amnt="{{ $package->price ?? '' }}">
										@if( isset($package->price) ) {{number_format( $package->price, 2 )}} @endif</small><span>/year</span></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-left mtpx-20">
					<div class="col-md-12">
						<div class="field">
							<label>Number of DMC</label>
						</div>
					</div>
				</div>


				@if ((session('payment_type') == 'stripe'))
				    <a data-fancybox="show-drt" class="show-drt" data-src="#show-drt" href="javascript:;" class="">Yes</a>
					<div class="popup" id="show-drt" style="display: none; max-width: 600px; width: 100%;">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-12">
									<figure>
										{{ HTML::image('images/logo-f.png', 'Link Meetings') }}
									</figure>
									<p> You are signup successfully. Click here to login.</p>
									<div class="row">
										<div class="col-sm-12 text-center">
											<a href="{{ route('login') }}" class="primary-btn dblue-bdr nxt">Login</a>											
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<script type="text/javascript">
							setInterval(function() { 
								window.location.replace("{{ route('login') }}");
							}, 5000);
					</script>
					
				@endif				

				@if ((session('payment_type') == 'bank_draft'))
				    <a data-fancybox="show-drt" class="show-drt" data-src="#show-drt" href="javascript:;" class="">Yes</a>
					<div class="popup" id="show-drt" style="display: none; max-width: 600px; width: 100%;">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-12">
									<figure>
										{{ HTML::image('images/logo-f.png', 'Link Meetings') }}
									</figure>
									<p>Your account created but need an approvel from Admin.</p>
									<div class="row">
										<div class="col-sm-12 text-center">
											<a href="{{ route('login') }}" class="primary-btn dblue-bdr nxt">Home</a>											
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<script type="text/javascript">
							setInterval(function() { 
								window.location.replace('{{ URL::to('/') }}');
							}, 5000);
					</script>
				@endif

                <form action="{{ Request::url() }}" method="post" class="require-validation"
                      data-cc-on-file="false"
                      data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                      id="payment-form">
					@csrf
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<input type="text" placeholder="Enter Required Accounts*" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="qty-multiply" name="quantity" required value="{{ old('quantity') ?? 1 }}"  >
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
								<input type="text" placeholder="Company legal Name*" name="company_name" value="{{ old('company_name') }}" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Commercial Name*" name="commercial_name" value="{{ old('commercial_name') }}" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<input type="text" placeholder="EIN or fiscal reg number*" name="ein_fiscal_reg_number" value="{{ old('ein_fiscal_reg_number') }}" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<input type="text" name="address" class="form-control" value="" id="locationTextField" placeholder="3847 John Daniel Drive" autocomplete="off" required="required">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<input type="text" placeholder="city" class="form-control" name="city" value="" id="locality" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
                                <input type="text" placeholder="state" class="form-control" name="state" value="" id="administrative_area_level_1" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
							
                                <input type="text" placeholder="zip code" class="form-control" name="zip" value="" id="postal_code" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Main Contact Person Name*" name="main_contact_person" value="{{ old('main_contact_person') }}" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Position*" name="position" value="{{ old('position') }}" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<input type="email" placeholder="Email*" name="email" value="{{ old('email') }}" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<input type="tel" placeholder="Phone*" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" name="phone_number" value="{{ old('phone_number') }}" required>
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
								<input type="password" placeholder="Confirm Password*" name="confirm_password" value="{{ old('confirm_password') }}" required>
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
                                <label><input type="radio" name="payment_type" @if( old('payment_type') == 'stripe' ) checked="checked" @endif id="strip_pay" value="stripe"> Stripe</label>
                                {{ HTML::image('images/stripe-ico.png', 'Cards') }}
                            </div>
                        </div>
                    </div>

                    <!-- stripe -->
                    <div class="stripe_pay" @if( old('payment_type') == 'stripe' ) style="display: block" @else style="display: none" @endif>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="field">
                                    <input class='form-control' placeholder="Card User*" size='4' type='text' name="card_user" value="{{ old('card_user') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field">
                                    <input
                                        autocomplete='off' placeholder="Card Number*" class='form-control card-number' size='20'
                                        type='tel' name="cc" value="{{ old('cc') }}" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="field">
                                    <input autocomplete='off'
                                           class='form-control card-cvc' placeholder='CVV*' size='4'
                                           type='tel' name="cvc" value="{{ old('cvc') }}" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="field">
                                    <input
                                        class='form-control card-expiry-month' placeholder='MM*' size='2'
                                        type='tel' name="month" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" value="{{ old('month') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="field">
                                    <input
                                        class='form-control card-expiry-year' placeholder='YYYY*' size='4'
                                        type='tel' name="year" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" value="{{ old('year') }}">
                                </div>
                            </div>
                            <div>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'></div>
                            </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12 radio-fld">
                            <div class="field">
                                <label><input type="radio" name="payment_type" id="bank_draft" value="bank_draft"> Bank draft</label>
                            </div>
                        </div>
                    </div>
                    <div class="bank_draft" @if( old('payment_type') == 'bank_draft' ) style="display: block" @else style="display: none" @endif>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field">
                                    <strong>Dear Customer,</strong>
                                    <strong>SUBJECT: BANK DRAFT</strong>
                                    <p class="mbpx-14">This letter is to inform you of the bank draft payment option. Please find enclosed an Authorization Agreement
                                    that enables us to initiate debits from your bank account for payment. Please print all information clearly and
                                    return the agreement along with a voided check. Note that bank drafts do not take effect for 45 days.
                                        Any remaining amount due will be drafted from your bank account.
                                    As always, we thank you for your business. Should you have any questions or concerns, please contact our
                                    office.</p>

                                    <strong>Sincerely,</strong>
                                    <strong>CENTRAL ELMORE WATER & SEWER AUTHORITY</strong>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field">
                                    <textarea type="text" placeholder="Bank Draft Description*" name="bank_draft_description" value="{{ old('bank_draft_description') }}" required></textarea> 
                                </div>
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
								<button class="primary-btn dblue">Proceed to Payment</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
$(document).on("click","input[name='payment_type']", function () {
  	$('.stripe_pay').css('display','block');
  	$('.bank_draft').css('display','none');

  	$('.bank_draft textarea').prop('required',false);
  	$('.stripe_pay input').prop('required',true);


  	var $form       =  $(".require-validation");

  	if( $(this).val() == 'bank_draft' ) {
  		$("form.require-validation").unbind();
  	}
  	if( $(this).val() == 'stripe' ) {
	  

	  $('form.require-validation').bind('submit', function(e) {

	  		$('.strip_pay').css('display','block');
		    var $form         = $(".require-validation"),
		        inputSelector = ['input[type=email]', 'input[type=password]',
		                         'input[type=text]', 'input[type=file]',
		                         'textarea'].join(', '),
		        $inputs       = $form.find('.required').find(inputSelector),
		        $errorMessage = $form.find('div.error'),
		        valid         = true;
		        $errorMessage.addClass('hide');

		        $('.has-error').removeClass('has-error');
		    $inputs.each(function(i, el) {
		      var $input = $(el);
		      if ($input.val() === '') {
		        $input.parent().addClass('has-error');
		        $errorMessage.removeClass('hide');
		        e.preventDefault();
		      }
		    });

		    if (!$form.data('cc-on-file')) {
		      e.preventDefault();
		      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
		      Stripe.createToken({
		        number: $('.card-number').val(),
		        cvc: $('.card-cvc').val(),
		        exp_month: $('.card-expiry-month').val(),
		        exp_year: $('.card-expiry-year').val()
		      }, stripeResponseHandler);
		    }

	  });

	  function stripeResponseHandler(status, response) {
	        if (response.error) {
	            $('.error')
	                .removeClass('hide')
	                .find('.alert')
	                .text(response.error.message);
	        } else {
	            // token contains id, last4, and card type
	            var token = response['id'];
	            // insert the token into the form so it gets submitted to the server
	            $form.find('input[type=text]').empty();
	            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
	            $form.get(0).submit();
	        }
	    }
	} 

});

$(document).on("click","#bank_draft", function () {
  	$('.bank_draft').css('display','block');
  	$('.stripe_pay').css('display','none');

  	$('.bank_draft textarea').prop('required',true);
  	$('.stripe_pay input').prop('required',false);
});



	let placeSearch;
    let autocomplete;
    const componentForm = {
        //street_number: "short_name",
        //route: "long_name",
        locality: "long_name",
        administrative_area_level_1: "short_name",
        // country: "long_name",
        postal_code: "short_name"
    };

    function initAutocomplete()
    {
        autocomplete = new google.maps.places.Autocomplete(
            document.getElementById("locationTextField"),
            {
                types: ["geocode","establishment"]
            }
        );

        autocomplete.addListener("place_changed", fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        const place = autocomplete.getPlace();

        for (const component in componentForm) {
            document.getElementById(component).value = "";
            document.getElementById(component).disabled = false;
        } // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.

        for (const component of place.address_components) {
            const addressType = component.types[0];

            if (componentForm[addressType]) {
                const val = component[componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    } // Bias the autocomplete ob

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC75FUC_L6EcgsaY8WTjDVHghNLv9uQmGk&callback=initAutocomplete&libraries=places&v=weekly" defer ></script>
@endsection




