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
						<h2>Members</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3">
					<div class="top-info-bx">
						<h4>Total Members</h4>
						<p>192,238</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="top-info-bx">
						<h4>Total buyers</h4>
						<p>122,535</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="top-info-bx">
						<h4>Total sellers</h4>
						<p>69,703</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="table-area">
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
							<ul class="tabc tabs-list">
								<li><a href="javascript:;" class="active" data-tabc="buyer">buyers</a></li>
								<li><a href="javascript:;" data-tabc="seller">Sellers</a></li>
							</ul>
						</div>
						<div class="tab-contentac-2 buyer" style="display: block";>
							<table class="data-table data-tble">
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
						<div class="tab-contentac-2 seller">
							<table class="data-table data-tble">
								<thead>
						            <tr>
						                <th>ID</th>
						                <th>member</th>
						                <th>type</th>
						                <th>member since</th>
						                <th>renew date</th>
						                <th>phone</th>
						                <th>email</th>
						                <th>Package</th>
						                <th>staus</th>
						            </tr>
						        </thead>
						        <tbody>
						            
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Seller</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>212-436-8767</td>
						                <td>markmanson@gmail.com</td>
						                <td>Monthly</td>
						                <td>Active</td>
						            </tr>

						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Seller</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>212-436-8767</td>
						                <td>markmanson@gmail.com</td>
						                <td>Monthly</td>
						                <td>Active</td>
						            </tr>

						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Seller</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>212-436-8767</td>
						                <td>markmanson@gmail.com</td>
						                <td>Monthly</td>
						                <td>Active</td>
						            </tr>

						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Seller</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>212-436-8767</td>
						                <td>markmanson@gmail.com</td>
						                <td>Monthly</td>
						                <td>Active</td>
						            </tr>

						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Seller</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>212-436-8767</td>
						                <td>markmanson@gmail.com</td>
						                <td>Monthly</td>
						                <td>Active</td>
						            </tr>

						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Seller</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>212-436-8767</td>
						                <td>markmanson@gmail.com</td>
						                <td>Monthly</td>
						                <td>Active</td>
						            </tr>

						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Seller</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>212-436-8767</td>
						                <td>markmanson@gmail.com</td>
						                <td>Monthly</td>
						                <td>Active</td>
						            </tr>

						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Seller</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>212-436-8767</td>
						                <td>markmanson@gmail.com</td>
						                <td>Monthly</td>
						                <td>Active</td>
						            </tr>

						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Seller</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>212-436-8767</td>
						                <td>markmanson@gmail.com</td>
						                <td>Monthly</td>
						                <td>Active</td>
						            </tr>

						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Seller</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>212-436-8767</td>
						                <td>markmanson@gmail.com</td>
						                <td>Monthly</td>
						                <td>Active</td>
						            </tr>

						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Seller</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>212-436-8767</td>
						                <td>markmanson@gmail.com</td>
						                <td>Monthly</td>
						                <td>Active</td>
						            </tr>

						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Seller</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>212-436-8767</td>
						                <td>markmanson@gmail.com</td>
						                <td>Monthly</td>
						                <td>Active</td>
						            </tr>

						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Seller</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>212-436-8767</td>
						                <td>markmanson@gmail.com</td>
						                <td>Monthly</td>
						                <td>Active</td>
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




