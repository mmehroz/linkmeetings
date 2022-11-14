

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
					<h2>Create a Hot Deal</h2>

					<div class="row">
						<div class="col-sm-12 col-md-10 col-lg-7">
							<div class="row">
								<div class="col-md-12">
									<div class="field">
										<label>Hotel</label>
										<select>
											<option>Mardi Gras Hotel & Casino</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="row tag add-tag">
										<div class="col-sm-12">
											<div class="field mbpx-15 wico altr">
												<input type="text" placeholder="Add a tag" name="">
												<div class="add-fld">+</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row tags-list mbpx-15">
								<div class="col-sm-12">
									<div class="tag-lsted">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<h4>Weekly Slots</h4>
									<div class="field wico altr-b">
										<label>Start From (for 7 days only)</label>
										<div class="to-clone">
											<input type="text" name="from">
											<i class="fa fa-calendar" aria-hidden="true"></i>
										</div>
									</div>
									<a href="javascript:;" class="add-more">+  Add another slot</a>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<hr>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">									
									<table class="amnt">
										<tr>
											<td>Slot 1</td>
											<td>$10.99</td>
										</tr>
										<tr>
											<td>Slot 2</td>
											<td>10</td>
										</tr>
										<tr>
											<td>Total</td>
											<td><strong>$21.98</strong></td>
										</tr>
									</table>
								</div>
							</div>

							<div class="row va-ctr">
								<div class="col-sm-7">
									<a href="{{ URL::to('/dmc/create-an-ad') }}" class="link-back"><i class="fa fa-angle-left"></i> Back</a>	
								</div>
								<div class="col-sm-5">
									<a href="{{ URL::to('/dmc/create-hot-deal-pay') }}" class="primary-btn dblue">Make Payment</a>			
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




