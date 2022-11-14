
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
@section('body-class') inq-dt @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<div class="row">
						<div class="col-md-12 col-lg-10 col-xl-9">
							
							<div class="row">
								<div class="col-sm-12">
									<h4>#0011</h4>
									<h2>Microsoft Annual Event</h2>

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
											<h5>
												<strong>Booking Status</strong>
												New Inquiry
											</h5>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<a href="{{ URL::to('/dmc/send-rfp') }}" class="primary-btn dblue">Send Proposal</a>
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




