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
						<h2>Shipping Request</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="cont-area ship-req">
						<div class="row">
							<div class="col-sm-12">
								<div class="styled-head mbpx-10">
									<h2>Kim Johnson</h2>
								</div>	
								<div class="ship-dt">
									<p><span>ID:</span> 987172</p>
									<p><span>Email Address:</span> kimjohnson@gmail.com</p>
									<p><span>Phone:</span> 212-686-9898</p>
									<p><span>Date:</span> Dec 14, 2019</p>
								</div>
								<hr class="mtpx-25 mbpx-30">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-xl-3">
								<div class="styled-head mbpx-10">
									<h3>Pick up address</h3>
								</div>
								<div class="ship-dt">
									<p><span>Address:</span> 2106  College View</p>
									<p><span>Country:</span> United States</p>
									<p><span>City:</span> Miami</p>
									<p><span>State:</span> Floria</p>
									<p><span>Zip:</span> 98721</p>
								</div>
							</div>

							<div class="col-sm-4 col-xl-3">
								<div class="styled-head mbpx-10">
									<h3>Delivery address</h3>
								</div>
								<div class="ship-dt">
									<p><span>Address:</span> 294  Agriculture Lane</p>
									<p><span>Country:</span> United States</p>
									<p><span>City:</span> Totowa</p>
									<p><span>State:</span> New Jersey</p>
									<p><span>Zip:</span> 98721</p>
								</div>
							</div>

							<div class="col-sm-4 col-xl-3">
								<div class="styled-head mbpx-10">
									<h3>Time &amp; DAte</h3>
								</div>
								<div class="ship-dt">
									<p><span>Day of Pickup:</span> Jan 19, 2020</p>
									<p><span>Driver Assistance Required for Pickup:</span> YES</p>
									<p><span>Driver Assistance Required for Delivery:</span> YES</p>
									<p><span>Special Instructions:</span> Handle with care</p>
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




