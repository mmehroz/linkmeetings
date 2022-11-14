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
			<div class="row mbpx-20">
				<div class="col-sm-12">					
					<div class="row">
						<div class="col-sm-12">
							<div class="styled-head">
								<h2>For Sale</h2>
							</div>
							<div class="head-btn-hd">
								<a href="javascript:;" class="primary-btn btn-brown-sm-sm">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit information
								</a>
								<a href="javascript:;" class="primary-btn btn-brown-sm-sm-bdr mlpx-10">
									Update information
								</a>
							</div>
						</div>
					</div>
					<div class="cont-area cont-w-chat mbpx-30">
						<div class="row">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12">
										<div class="styled-head">
											<h3 class="mbpx-10">Horse # 1 Vivamus ac ullamcorper enim. Nam luctus rhoncus vestibulum</h3>
											<p>Suspendisse semper elementum massa, condimentum efficitur ante maximus vel. Nunc porta eros quis pretium blandit. Ut sit amet quam quis dolor tempor </p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="pr-dt">
											<p><span>ID:</span> 28902</p>
											<p><span>Asking Price:</span> $17,000</p>
											<p><span>Posted by:</span> Kim Johnson</p>
											<p><span>Buyer:</span> Mark Manson</p>
											<p><span>Created on:</span> Dec 14, 2019</p>
											<p><span>Estimated Delivery Date:</span> Dec 29, 2019</p>
											<p><span>Tracking ID:</span> <a href="javascript:;" class="link-b">a12nsa@xsas0123123</a></p>
											<p><span>Status:</span>
												<select class="on">
													<option>On-going</option>
												</select>
											</p>
											<p class="mtpx-35"><a href="javascript:;">More Details <i class="fa fa-caret-down"></i></a></p>
											
										</div>
									</div>
									<div class="col-sm-6">
										<div class="pr-dt">	
											<p><span>Gait:</span> Pacer</p>
											<p><span>Type:</span> Race Horse Gelding</p>
											<p><span>Location:</span> Dallas, Texas, United States</p>
											<p><span>Gender:</span> Male</p>
											<p><span>Color:</span> Black</p>
											<p><span>Age:</span> 10 y/o</p>
											
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 text-right">
								{{ HTML::image('images/admin/cont-w-chat.png', 'Hoof Trade') }}
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4">
							<div class="info-bx">
								<div class="info-head">
									<h4>Buyer information</h4>
									<a href="javascript:;" class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
								</div>
								<div class="pr-dt">
									<p><span>Name:</span> Mark Manson</p>
									<p><span>Phone:</span> 212-349-5643</p>
									<p><span>Email:</span> markmanson@gmail.com</p>
									<p><span>Shipping:</span> 4985 Deans Lane, SAINT LOUIS, Missouri</p>
									<p><span>Payment Method:</span> Debit/Credit Card</p>
									<p><span>Amount Paid:</span> $15,000</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="info-bx">
								<div class="info-head">
									<h4>Seller information</h4>
									<a href="javascript:;" class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
								</div>
								<div class="pr-dt">
									<p><span>Name:</span> Kim Johnson</p>
									<p><span>Phone:</span> 212-349-5643</p>
									<p><span>Email:</span> kimjohnson@gmail.com</p>
									<p><span>Payment Method:</span> Paypal <small>(kimjohnson@gmail.com)</small></p>
									<p><span>Amount to Pay:</span> $14,000</p>
									<p><span>Payment Status:</span> <span class="red-clr-txt">Not Paid</span></p>							
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="info-bx">
								<div class="info-head pbpx-13">
									<h4>Supporting documents</h4>
									<a href="javascript:;" class="primary-btn btn-brown-sm-sm"><i class="fa fa-upload" aria-hidden="true"></i> Upload</a>
								</div>
								<div class="pr-dt">
									<div class="c-scroll">
									<ul>
										<li>
											<i class="fa fa-file-image-o mrpx-6" aria-hidden="true"></i>  cheque-scanned.jpg 
											
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>
												 Download
											</a> 
										</li>

										<li>
											<i class="fa fa-file-pdf-o mrpx-6" aria-hidden="true"></i>  buyer’s-profile.pdf 
											 
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>  
												Download
											</a>
										</li>

										<li>
											<i class="fa fa-file-pdf-o mrpx-6" aria-hidden="true"></i>  buyer’s-profile.pdf 
											 
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>  
												Download
											</a>
										</li>

										<li>
											<i class="fa fa-file-pdf-o mrpx-6" aria-hidden="true"></i>  buyer’s-profile.pdf 
											 
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>  
												Download
											</a>
										</li>

										<li>
											<i class="fa fa-file-pdf-o mrpx-6" aria-hidden="true"></i>  buyer’s-profile.pdf 
											 
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>  
												Download
											</a>
										</li>

										<li>
											<i class="fa fa-file-pdf-o mrpx-6" aria-hidden="true"></i>  buyer’s-profile.pdf 
											 
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>  
												Download
											</a>
										</li>

										<li>
											<i class="fa fa-file-pdf-o mrpx-6" aria-hidden="true"></i>  buyer’s-profile.pdf 
											 
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>  
												Download
											</a>
										</li>

										<li>
											<i class="fa fa-file-pdf-o mrpx-6" aria-hidden="true"></i>  buyer’s-profile.pdf 
											 
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>  
												Download
											</a>
										</li>

										<li>
											<i class="fa fa-file-pdf-o mrpx-6" aria-hidden="true"></i>  buyer’s-profile.pdf 
											 
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>  
												Download
											</a>
										</li>

										<li>
											<i class="fa fa-file-pdf-o mrpx-6" aria-hidden="true"></i>  buyer’s-profile.pdf 
											 
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>  
												Download
											</a>
										</li>

										<li>
											<i class="fa fa-file-pdf-o mrpx-6" aria-hidden="true"></i>  buyer’s-profile.pdf 
											 
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>  
												Download
											</a>
										</li>

										<li>
											<i class="fa fa-file-pdf-o mrpx-6" aria-hidden="true"></i>  buyer’s-profile.pdf 
											 
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>  
												Download
											</a>
										</li>

										<li>
											<i class="fa fa-file-pdf-o mrpx-6" aria-hidden="true"></i>  buyer’s-profile.pdf 
											 
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>  
												Download
											</a>
										</li>

										<li>
											<i class="fa fa-file-pdf-o mrpx-6" aria-hidden="true"></i>  buyer’s-profile.pdf 
											 
											<a href="javascript:;" class="mlpx-10">
												<i class="fa fa-times red-clr-txt" aria-hidden="true"></i>
											</a>
											<a href="javascript:;">
												<i class="fa fa-download" aria-hidden="true"></i>  
												Download
											</a>
										</li>
									</ul>
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




