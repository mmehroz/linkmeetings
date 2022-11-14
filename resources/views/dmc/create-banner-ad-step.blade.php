

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
@section('body-class') create-ad-pg ban-ad-pg @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<h2>Create a Banner Ad</h2>

					<div class="row">
						<div class="col-sm-12 col-md-10 col-lg-7">
							<div class="row">
								<div class="col-md-12">
									<div class="field">
										<label>Heading</label>
										<input type="text" name="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="field">
										<label>Description</label>
										<input type="text" name="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="field wico altr-b">
										<label>From</label>
										<input type="text" name="from">
										<i class="fa fa-calendar" aria-hidden="true"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="field wico altr-b">
										<label>To</label>
										<input type="text" name="to">
										<i class="fa fa-calendar" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="field">
										<label>Link</label>
										<input type="text" name="">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">									
									<div class="addFileStyle pic">
									    <input type="file" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">									
									<table class="amnt">
										<tr>
											<td>Per day</td>
											<td>$10.99</td>
										</tr>
										<tr>
											<td>Days</td>
											<td>10</td>
										</tr>
										<tr>
											<td>Total</td>
											<td><strong>$109.9</strong></td>
										</tr>
									</table>
								</div>
							</div>

							<div class="row va-ctr">
								<div class="col-sm-7">
									<a href="{{ URL::to('/dmc/create-banner-ad') }}" class="link-back"><i class="fa fa-angle-left"></i> Back</a>	
								</div>
								<div class="col-sm-5">
									<a href="{{ URL::to('/dmc/create-banner-ad-pay') }}" class="primary-btn dblue">Make Payment</a>			
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection




