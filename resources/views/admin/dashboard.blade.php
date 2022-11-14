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
						<h2>Dashboard</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<figure>
						{{ HTML::image('images/admin/dashboard-graph-lft.jpg', 'Hoof Trade') }}
					</figure>
				</div>
				<div class="col-sm-6">
					<figure>
						{{ HTML::image('images/admin/dashboard-graph-rft.jpg', 'Hoof Trade') }}
					</figure>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="table-area">
						<h3>Recent won auctions</h3>
						<div class="table-upper-info">
							
							<div class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="DataTables_Table_0"></label></div>

							<div class="dataTables_length-c"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>

							<div class="date-picks">
								<label>
									From
								</label>
								<div class="wico">
									<input type="text" placeholder="Dec 01, 2019" name="">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</div>
								<label>
									To
								</label>
								<div class="wico">
									<input type="text" placeholder="Dec 14, 2019" name="">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</div>
							</div>
						</div>
						<table id="data-table" class="data-table data-tble">
							<thead>
					            <tr>
					                <th>ID</th>
					                <th>Product</th>
					                <th>winning bid</th>
					                <th>Posted by</th>
					                <th>Won by</th>
					                <th>ended on</th>
					                <th>status</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$12,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
					                <td>Mark Manson</td>
					                <td>Dec 14, 2019</td>
					                <td>Shipped</td>
					            </tr>
					            <tr>
					                <td>28902</td>
					                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
					                <td>$14,000</td>
					                <td>Kim Johnson</td>
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
</section>

@endsection




