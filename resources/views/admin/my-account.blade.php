{{-- * Template Name : Home * --}}
@extends('layout.admin.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Hoof Trade' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Hoof Trade' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Hoof Trade' !!} 
@stop
@section('body-class') dashboard admin-pg @stop
@section('content')


<section class="content-area">
	<div class="container-fluid full-ht">
		<div class="ptpx-30 pbpx-30">
			<div class="row">
				<div class="col-sm-12">
					<div class="styled-head">
						<h2>My Account</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="cont-area my-acc">
						<div class="row">
							<div class="col-lg-6">
								<div class="row field mbpx-40">
									<div class="col-sm-12">
										<figure>
											{{ HTML::image('images/admin/profile-avator-lg.png', 'Hoof Trade') }}
										</figure>
										<h3>Paul Palmer</h3> 
										<h4>Administrator</h4> 
									</div>
								</div>
								<div class="row field">
									<div class="col-sm-6">
										<label>Full name</label>
										<input type="text" value="Paul Palmer" name="">
									</div>
									<div class="col-sm-6">
										<label>Type</label>
										<input type="text" value="Administrator" name="">
									</div>
								</div>
								<div class="row field">
									<div class="col-sm-6">
										<label>Email address</label>
										<input type="email" value="paulpalmer@gmail.com" name="">
									</div>
									<div class="col-sm-6">
										<label>Phone</label>
										<input type="text" value="212-909-1267" name="">
									</div>
								</div>
								<div class="row field">
									<div class="col-sm-12">
										<label>address*</label>
										<input type="text" value="1426  Stoney Lonesome Road" name="">
									</div>
								</div>
								<div class="row field">
									<div class="col-sm-4">
										<label>Country*</label>
										<select>
											<option>United States</option>
										</select>
									</div>
									<div class="col-sm-4">
										<label>state*</label>
										<select>
											<option>New Jersey</option>
										</select>
									</div>
									<div class="col-sm-4">
										<label>city*</label>
										<input type="text" value="Totowa" name="">
									</div>
								</div>
								<div class="row field">
									<div class="col-sm-4">
										<label>Zip*</label>
										<input type="text" value="81200" name="">
									</div>
								</div>
								<div class="row field mbpx-50">
									<div class="col-sm-6">
										<label>password</label>
										<input type="password" value="****************" name="">
									</div>
									<div class="col-sm-6">
										<label>Confirm password</label>
										<input type="password" value="****************" name="">
									</div>
								</div>
								<div class="row field">
									<div class="col-sm-12">
										<input type="submit" class="primary-btn btn-brown-sm" value="Update Information" name="">
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection




