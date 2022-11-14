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
					<div class="cont-area buyer-profile">
						<div class="row field mbpx-35">
							<div class="col-sm-12">
								<div class="usr-info clearfix">
									<figure>
										{{ HTML::image('images/admin/buyer-profile-ava.png', 'Hoof Trade') }}
									</figure>
									<h3>Kim Johnson	</h3> 
									<h4>kimjohnson_2920</h4> 
									<p class="stat active">Active</p> 
									<div class="btns">
										<a href="javascript:;" class="primary-btn btn-brown-sm-bdr">
											<i class="fa fa-user"></i> reset password
										</a>
										<a href="javascript:;" class="primary-btn btn-brown-sm-bdr mlpx-10">
											<i class="fa fa-ban" aria-hidden="true"></i> ban user
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="pr-dt">
									<p><span>ID:</span> 28902</p>
									<p><span>Type:</span> Buyer</p>
									<p><span>Phone:</span> 212-436-8767</p>
									<p><span>Email:</span> kimjohnson@gmail.com</p>
									<p><span>Address:</span> 896 Logan Lane, Denver, CO, Colorado</p>
									<p><span>Alternate Phone:</span> 212-436-2367</p>
									<p><span>Alternate Email:</span> kimjohnson@yahoo.com</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="pr-dt">
									<p><span>City:</span> Denver</p>
									<p><span>State:</span> Colorado</p>
									<p><span>Country:</span> United States</p>
									<p><span>Zip:</span> 24598</p>
									<p><span>Member Since:</span> Dec 14, 2019</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="table-area">
						<div class="table-upper-info">

							<div class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="DataTables_Table_0"></label></div>

							<div class="dataTables_length-c"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>
							<ul class="tabc tabs-list">
								<li><a href="javascript:;" class="active" data-tabc="won-auc">Won Auctions</a></li>
								<li><a href="javascript:;" data-tabc="act-bids">Active Bids</a></li>
								<li><a href="javascript:;" data-tabc="for-sale">for sale</a></li>
								<li><a href="javascript:;" data-tabc="payments">payments</a>
							</ul>
						</div>
						<div class="tab-contentac-2 won-auc" style="display: block";>
							<table class="data-table data-tble">
								<thead>
						            <tr>
						                <th>ID</th>
						                <th>Product</th>
						                <th>winning bid</th>
						                <th>Posted by</th>
						                <th>ended on</th>
						                <th>Status</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>	
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>			            
							</table>
						</div>
						<div class="tab-contentac-2 act-bids">
							<table class="data-table data-tble">
								<thead>
						            <tr>
						                <th>ID</th>
						                <th>Product</th>
						                <th>winning bid</th>
						                <th>Posted by</th>
						                <th>ended on</th>
						                <th>Status</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>	
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            			            
							</table>
						</div>
						<div class="tab-contentac-2 for-sale" >
							<table class="data-table data-tble">
								<thead>
						            <tr>
						                <th>ID</th>
						                <th>Product</th>
						                <th>winning bid</th>
						                <th>Posted by</th>
						                <th>ended on</th>
						                <th>Status</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>	
						            			            
							</table>
						</div>	
						<div class="tab-contentac-2 payments" >
							<table class="data-table data-tble">
								<thead>
						            <tr>
						                <th>ID</th>
						                <th>Product</th>
						                <th>winning bid</th>
						                <th>Posted by</th>
						                <th>ended on</th>
						                <th>Status</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>	
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>$14,000</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>Shipped</td>
						            </tr>			            
							</table>
						</div>					
					</div>				
				</div>
			</div>
		</div>
	</div>
</section>

@endsection




