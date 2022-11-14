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
						<h2>Create a Deal</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="cont-area">
						<div class="row mbpx-40">
							<div class="col-sm-9">
								<div class="create-deal-bx">
									<div class="row va-ctr">
										<div class="col-sm-8">
											<h3>Horse # 1 Vivamus ac ullamcorper enim. Nam luctus rhoncus vestibulum</h3>
											<p>Suspendisse semper elementum massa, condimentum efficitur ante maximus vel. Nunc porta eros quis pretium blandit. Ut sit amet quam quis dolor tempor </p>
											<ul>
												<li><span>Asking Price:</span> $17,000</li>
												<li><span>Posted by:</span> Kim Johnson</li>
											</ul>
										</div>
										<div class="col-sm-4 text-right">
											<figure>
												{{ HTML::image('images/admin/holder-sm.jpg', 'Hoof Trade') }}
											</figure>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row  my-acc">
							<div class="col-lg-6">
								<div class="row field">
									<div class="col-sm-6">
										<label>BUYER’s user NAME*</label>
										<input type="text" value="" name="">
									</div>
									<div class="col-sm-6">
										<label>BUYER’s full name*</label>
										<input type="text" value="" name="">
									</div>
								</div>
								<div class="row field">
									<div class="col-sm-6">
										<label>email address*</label>
										<input type="email" value="" name="">
									</div>
									<div class="col-sm-6">
										<label>Alternate email address*</label>
										<input type="email" value="" name="">
									</div>
								</div>
								<div class="row field">
									<div class="col-sm-6">
										<label>phone number*</label>
										<input type="text" value="" name="">
									</div>
									<div class="col-sm-6">
										<label>Alternate phone number*</label>
										<input type="text" value="" name="">
									</div>
								</div>
								<div class="row field">
									<div class="col-sm-12">
										<label>Shipping address*</label>
										<input type="text" value="" name="">
									</div>
								</div>
								<div class="row field">
									<div class="col-sm-4">
										<label>Country*</label>
										<select>
											<option>Select One</option>
										</select>
									</div>
									<div class="col-sm-4">
										<label>state*</label>
										<select>
											<option>Select One</option>
										</select>
									</div>
									<div class="col-sm-4">
										<label>city*</label>
										<input type="text" name="">
									</div>
								</div>
								<div class="row field">
									<div class="col-sm-4">
										<label>Zip*</label>
										<input type="text" name="">
									</div>
								</div>
								<div class="row field">
									<div class="col-sm-12">
										<input type="submit" class="primary-btn btn-brown-sm" value="Create a Deal" name="">
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




