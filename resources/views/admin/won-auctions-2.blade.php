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
								<h2>Won Auctions</h2>
							</div>
						</div>
					</div>
					<div class="cont-area cont-w-chat mbpx-30">
						<div class="row">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12">
										<div class="styled-head">
											<h3 class="mbpx-10">Auction # 1 Vivamus ac ullamcorper enim. Nam luctus rhoncus vestibulum</h3>
											<p>Suspendisse semper elementum massa, condimentum efficitur ante maximus vel. Nunc porta eros quis pretium blandit. Ut sit amet quam quis dolor tempor </p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="pr-dt">
											<p><span>ID:</span> 28902</p>
											<p><span>Winning Bid:</span> $14,000</p>
											<p><span>Posted by:</span> Kim Johnson</p>
											<p><span>Won by:</span> Mark Manson</p>
											<p><span>Ended on:</span> Dec 14, 2019</p>
											<p><span>Status:</span> <span class="shipped bx-dt">Shipped</span></p>
												
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

					<div class="cont-area auc-timeline">
						<div class="row">
							<div class="col-sm-12">
								<h3>Auction timeline</h3>
							</div>
						</div>
						<div class="row pbpx-30">
							<div class="col-sm-10 text-center ctrdv">
								<div class="timeline-head">
									<ul>
										<li class="done">1. Payment <i class="fa fa-check-circle" aria-hidden="true"></i> </li>
										<li class="current">2. Shipment</li>
										<li>3. Verification</li>
										<li>4. Completed</li>
									</ul>                                            
								</div>	
								<div class="timeline">
									<ul>
										<li>
											<h5>dec 14, 2019</h5>
											<p class="update">Buyer made the payment</p>
											<p><span>Payment Method:</span> Debit/Credit Card</p>
										</li>
										<li>
											<h5>dec 19, 2019</h5>
											<p class="update">Seller Shipped the order</p>
											<p><span>Shipment ID:</span> 1387600</p>
											<p><span>Carrier:</span> USPS</p>
											<p><span>Estimated Delivery:</span> 02/19/2019</p>
											<p><span>Actual Delivery:</span> 02/19/2019</p>
											<p><span>Created:</span> 01/17/2019 at 1:11pm</p>
											<p><span>Destination:</span> Dallas, Texas, USA</p>
											<p><span>Origin:</span> Totowa, New Jersey, USA</p>
										</li>
										<li>
											<h5>dec 21, 2019</h5>
											<p class="update">Shipment Update</p>
											<p><span>Status:</span> Seller has shipped your order</p>
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
</section>

@endsection




