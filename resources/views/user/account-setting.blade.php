
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
								<div class="col-sm-12">
									<h2>Account Settings</h2>


									<ul class="tabs">
										<li>
											<a href="javascript:;" data-target="profile" class="active">Profile Information</a>
										</li>
										<li><a href="javascript:;" data-target="pkg">Package</a></li>
									</ul>

									<div class="tab-content profile" style="display: block;">

										<div class="user-info-bx">
											<figure>
												{{ HTML::image('images/user-edit-ava.jpg', 'Link Meetings') }}
											</figure>
											<div class="addFileStyle">
												<input type="file" name="">
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-6">
												<div class="field">
													<label>Full Name*</label>
													<input type="text" value="Mark Manson" class="bg-fld" name="">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="field">
													<label>Email Address*</label>
													<input type="text" value="markmanson@gmail.com" class="bg-fld" name="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="field">
													<label>Phone Number*</label>
													<input type="text" value="+1 256 9876" class="bg-fld" name="">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="field">
													<label>Position*</label>
													<input type="text" value="Asst. Manager" class="bg-fld" name="">
												</div>
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-sm-6">
												<div class="field">
													<label>Password</label>
													<input type="password" value="**********" class="bg-fld" name="">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="field">
													<label>Confirm Password</label>
													<input type="password" value="**********" class="bg-fld" name="">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6">
												<a href="{{ URL::to('/account-setting') }}" class="primary-btn dblue">Update Information</a>
											</div>
										</div>
									</div>

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




