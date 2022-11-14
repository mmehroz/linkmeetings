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
						<h2>For Sale</h2>
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
								<li><a href="javascript:;" class="active" data-tabc="all">ALL</a></li>
								<li><a href="javascript:;" data-tabc="on-going">On-going</a></li>
								<li><a href="javascript:;" data-tabc="completed">Completed</a></li>
							</ul>
						</div>
						<div class="tab-contentac-2 all" style="display: block";>
							<table class="data-table data-tble">
								<thead>
						            <tr>
						                <th>ID</th>
						                <th>Product</th>
						                <th>Posted by</th>
						                <th>Buyer</th>
						                <th>Created on</th>
						                <th>Deal price</th>
						                <th>Status</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>On-going</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>On-going</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>On-going</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>On-going</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>On-going</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>On-going</td>
						            </tr>					            
							</table>
						</div>
						<div class="tab-contentac-2 on-going">
							<table class="data-table data-tble">
								<thead>
						            <tr>
						                <th>ID</th>
						                <th>Product</th>
						                <th>Posted by</th>
						                <th>Buyer</th>
						                <th>Created on</th>
						                <th>Deal price</th>
						                <th>Status</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>On-going</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>On-going</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>On-going</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>On-going</td>
						            </tr>	
						            
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>On-going</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>On-going</td>
						            </tr>						            
							</table>
						</div>
						<div class="tab-contentac-2 completed" >
							<table class="data-table data-tble">
								<thead>
						            <tr>
						                <th>ID</th>
						                <th>Product</th>
						                <th>Posted by</th>
						                <th>Buyer</th>
						                <th>Created on</th>
						                <th>Deal price</th>
						                <th>Status</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            	<tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
						            </tr>	

						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
					                 	<td>Mark Manson</td>
						                <td>Dec 14, 2019</td>
						                <td>$17,000</td>
						                <td>Completed</td>
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




