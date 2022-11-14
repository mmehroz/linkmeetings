
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
@section('body-class') inq-dt-pr @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-11 ctrdv">
				<div class="panel">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							
							<div class="row">
								<div class="col-sm-12">
									<h2>RFP to Microsoft Annual Event</h2>

									<div class="row show-dt mbpx-20">
										<div class="col-md-4">
											<p><strong>Event Type:</strong> Conference</p>
											<p><strong>Meeting Planner:</strong> Leo Gill</p>
											<p><strong>Email Address:</strong> leogill@gmail.com</p>
											<p><strong>Phone:</strong> +1 365 5853</p>
										</div> 
										<div class="col-md-4">
											<p><strong>From:</strong> Apr 22, 2020</p>
											<p><strong>To:</strong> Apr 24, 2020</p>
											<p><strong>Attendees:</strong> 200</p>
										</div>
										<div class="col-md-4">
											<h5 class="mbpx-50 or">
												<strong>Booking Status</strong>
												Proposal Sent on April 30, 2020 (06:15 PM)
											</h5>

											<h5>
												<strong>Manager:</strong>
												Robert Downey 
											</h5>
										</div>
									</div>
								</div>
							</div>


							<div class="row open-notes mtpx-40 mbpx-15">
								<div class="col-sm-12">

									<div class="row">
										<div class="col-md-12">
											<p><strong>Dear Henler,</strong>We appreciate your interest in our resort Melia Caribe Beach for everyone, as possible venue to celebrate your important event. Below we present our proposal of rates and benefits.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<div class="bx">
										<div class="head">
											<h3>Transportation</h3>
										</div>
										<div class="check to-shw-fld-altr">
											<ul>
												<li>
												<label>
													<input type="checkbox" class="other-altr chb" name="" checked="" disabled>
													Yes
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="chb no" name="" disabled>
													No
												</label>
											</li>
											</ul>
										</div>

										<div class="show-other active">

											<h4>Requirements</h4>

											<textarea cols="2" rows="2" disabled>Nunc ipsum urna, lobortis vel efficitur sed, laoreet ac ex. Phasellus ultrices rhoncus leo, et finibus nisl condimentum sed. Curabitur ut sem urna. Sed id massa at metus semper consequat ut facilisis dolor.</textarea>

										</div>

										<div class="row mtpx-25">
											<div class="col-sm-4">
												<figure class="wd-100">
													{{ HTML::image('images/rfp-preview-function-outdoor-img.jpg', 'Link Meetings') }}
												</figure>
											</div>
											<div class="col-sm-8">
												<p>Vivamus ipsum odio, laoreet et dapibus id, scelerisque quis dui. Phasellus vestibulum nunc eget nisl maximus, sed faucibus mauris consectetur. Nam eget mauris dictum, iaculis leo in, lacinia orci. Aliquam faucibus luctus pharetra. Phasellus pharetra eros ligula, vel feugiat dolor vehicula in. Etiam id felis ut augue iaculis mollis a ut nulla. Mauris vehicula non nibh a porta. Nullam at tortor leo. Mauris convallis pretium sem. Nunc a est mauris. Nullam egestas, lorem vitae semper scelerisque, dolor metus rutrum est, ac ultrices sem purus non nibh. In gravida dictum elementum. Duis at mauris et lorem porttitor venenatis nec in lorem. Ut ipsum orci, fermentum vitae vulputate vel, volutpat quis ante.</p>
											</div>
										</div>

										<div class="row mtpx-25">
											<div class="col-md-2">
												<div class="field">
													<h4>Price</h4>
													<input type="text" class="altr fld" name="" value="US$128.00 p/p/n" disabled="">
												</div>
											</div>
										</div>

									</div>



									<div class="bx">
										<div class="head">
											<h3>Tours and Excursions</h3>
										</div>

										<div class="check to-shw-fld-altr">
											<ul>
												<li>
												<label>
													<input type="checkbox" class="other-altr chb" name="" checked="" disabled>
													Yes
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="chb no" name="" disabled>
													No
												</label>
											</li>
											</ul>
										</div>

										<div class="show-other active">

											<h4>Requirements</h4>

											<textarea cols="2" rows="2" disabled>Nunc ipsum urna, lobortis vel efficitur sed, laoreet ac ex. Phasellus ultrices rhoncus leo, et finibus nisl condimentum sed. Curabitur ut sem urna. Sed id massa at metus semper consequat ut facilisis dolor.</textarea>

										</div>

										<div class="row mtpx-25">
											<div class="col-sm-4">
												<figure class="wd-100">
													{{ HTML::image('images/rfp-preview-function-outdoor-img.jpg', 'Link Meetings') }}
												</figure>
											</div>
											<div class="col-sm-8">
												<p>Vivamus ipsum odio, laoreet et dapibus id, scelerisque quis dui. Phasellus vestibulum nunc eget nisl maximus, sed faucibus mauris consectetur. Nam eget mauris dictum, iaculis leo in, lacinia orci. Aliquam faucibus luctus pharetra. Phasellus pharetra eros ligula, vel feugiat dolor vehicula in. Etiam id felis ut augue iaculis mollis a ut nulla. Mauris vehicula non nibh a porta. Nullam at tortor leo. Mauris convallis pretium sem. Nunc a est mauris. Nullam egestas, lorem vitae semper scelerisque, dolor metus rutrum est, ac ultrices sem purus non nibh. In gravida dictum elementum. Duis at mauris et lorem porttitor venenatis nec in lorem. Ut ipsum orci, fermentum vitae vulputate vel, volutpat quis ante.</p>
											</div>
										</div>

										<div class="row mtpx-25">
											<div class="col-md-2">
												<div class="field">
													<h4>Price</h4>
													<input type="text" class="altr fld" name="" value="US$128.00 p/p/n" disabled="">
												</div>
											</div>
										</div>
									</div>

									<div class="bx">
										<div class="head">
											<h3>Team Building and CSR</h3>
										</div>
										<div class="check to-shw-fld-altr">
											<ul>
												<li>
												<label>
													<input type="checkbox" class="other-altr chb" name="" checked="" disabled>
													Yes
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="chb no" name="" disabled>
													No
												</label>
											</li>
											</ul>
										</div>

										<div class="show-other active">

											<h4>Requirements</h4>

											<textarea cols="2" rows="2" disabled>Nunc ipsum urna, lobortis vel efficitur sed, laoreet ac ex. Phasellus ultrices rhoncus leo, et finibus nisl condimentum sed. Curabitur ut sem urna. Sed id massa at metus semper consequat ut facilisis dolor.</textarea>

										</div>

										<div class="row mtpx-25">
											<div class="col-sm-4">
												<figure class="wd-100">
													{{ HTML::image('images/rfp-preview-function-outdoor-img.jpg', 'Link Meetings') }}
												</figure>
											</div>
											<div class="col-sm-8">
												<p>Vivamus ipsum odio, laoreet et dapibus id, scelerisque quis dui. Phasellus vestibulum nunc eget nisl maximus, sed faucibus mauris consectetur. Nam eget mauris dictum, iaculis leo in, lacinia orci. Aliquam faucibus luctus pharetra. Phasellus pharetra eros ligula, vel feugiat dolor vehicula in. Etiam id felis ut augue iaculis mollis a ut nulla. Mauris vehicula non nibh a porta. Nullam at tortor leo. Mauris convallis pretium sem. Nunc a est mauris. Nullam egestas, lorem vitae semper scelerisque, dolor metus rutrum est, ac ultrices sem purus non nibh. In gravida dictum elementum. Duis at mauris et lorem porttitor venenatis nec in lorem. Ut ipsum orci, fermentum vitae vulputate vel, volutpat quis ante.</p>
											</div>
										</div>

										<div class="row mtpx-25">
											<div class="col-md-2">
												<div class="field">
													<h4>Price</h4>
													<input type="text" class="altr fld" name="" value="US$128.00 p/p/n" disabled="">
												</div>
											</div>
										</div>

									</div>

									<div class="bx">
										<div class="head">
											<h3>Gifts</h3>
										</div>

										<div class="check to-shw-fld-altr">
											<ul>
												<li>
												<label>
													<input type="checkbox" class="other-altr chb" name="" checked="" disabled>
													Yes
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="chb no" name="" disabled>
													No
												</label>
											</li>
											</ul>
										</div>

										<div class="show-other active">

											<h4>Requirements</h4>

											<textarea cols="2" rows="2" disabled>Nunc ipsum urna, lobortis vel efficitur sed, laoreet ac ex. Phasellus ultrices rhoncus leo, et finibus nisl condimentum sed. Curabitur ut sem urna. Sed id massa at metus semper consequat ut facilisis dolor.</textarea>

										</div>

										<div class="row mtpx-25">
											<div class="col-sm-4">
												<figure class="wd-100">
													{{ HTML::image('images/rfp-preview-function-outdoor-img.jpg', 'Link Meetings') }}
												</figure>
											</div>
											<div class="col-sm-8">
												<p>Vivamus ipsum odio, laoreet et dapibus id, scelerisque quis dui. Phasellus vestibulum nunc eget nisl maximus, sed faucibus mauris consectetur. Nam eget mauris dictum, iaculis leo in, lacinia orci. Aliquam faucibus luctus pharetra. Phasellus pharetra eros ligula, vel feugiat dolor vehicula in. Etiam id felis ut augue iaculis mollis a ut nulla. Mauris vehicula non nibh a porta. Nullam at tortor leo. Mauris convallis pretium sem. Nunc a est mauris. Nullam egestas, lorem vitae semper scelerisque, dolor metus rutrum est, ac ultrices sem purus non nibh. In gravida dictum elementum. Duis at mauris et lorem porttitor venenatis nec in lorem. Ut ipsum orci, fermentum vitae vulputate vel, volutpat quis ante.</p>
											</div>
										</div>

										<div class="row mtpx-25">
											<div class="col-md-2">
												<div class="field">
													<h4>Price</h4>
													<input type="text" class="altr fld" name="" value="US$128.00 p/p/n" disabled="">
												</div>
											</div>
										</div>

									</div>

									<div class="bx">
										<div class="head">
											<h3>Destination Experiences</h3>
										</div>

										<div class="check to-shw-fld-altr">
											<ul>
												<li>
												<label>
													<input type="checkbox" class="other-altr chb" name="" checked="" disabled>
													Yes
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" class="chb no" name="" disabled>
													No
												</label>
											</li>
											</ul>
										</div>

										<div class="show-other active">

											<h4>Requirements</h4>

											<textarea cols="2" rows="2" disabled>Nunc ipsum urna, lobortis vel efficitur sed, laoreet ac ex. Phasellus ultrices rhoncus leo, et finibus nisl condimentum sed. Curabitur ut sem urna. Sed id massa at metus semper consequat ut facilisis dolor.</textarea>

										</div>

										<div class="row mtpx-25">
											<div class="col-sm-4">
												<figure class="wd-100">
													{{ HTML::image('images/rfp-preview-function-outdoor-img.jpg', 'Link Meetings') }}
												</figure>
											</div>
											<div class="col-sm-8">
												<p>Vivamus ipsum odio, laoreet et dapibus id, scelerisque quis dui. Phasellus vestibulum nunc eget nisl maximus, sed faucibus mauris consectetur. Nam eget mauris dictum, iaculis leo in, lacinia orci. Aliquam faucibus luctus pharetra. Phasellus pharetra eros ligula, vel feugiat dolor vehicula in. Etiam id felis ut augue iaculis mollis a ut nulla. Mauris vehicula non nibh a porta. Nullam at tortor leo. Mauris convallis pretium sem. Nunc a est mauris. Nullam egestas, lorem vitae semper scelerisque, dolor metus rutrum est, ac ultrices sem purus non nibh. In gravida dictum elementum. Duis at mauris et lorem porttitor venenatis nec in lorem. Ut ipsum orci, fermentum vitae vulputate vel, volutpat quis ante.</p>
											</div>
										</div>

										<div class="row mtpx-25">
											<div class="col-md-2">
												<div class="field">
													<h4>Price</h4>
													<input type="text" class="altr fld" name="" value="US$128.00 p/p/n" disabled="">
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
    		<input type="text" name="" disabled>
    	</div>
    	<div class="field">
    		<label>Email Address*</label>
    		<input type="text" name="" disabled>
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




