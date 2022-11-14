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
						<h2>Payments</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3">
					<div class="top-info-bx">
						<h4>Total</h4>
						<p>$500,000</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="top-info-bx">
						<h4>Total for sale</h4>
						<p>$130,000</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="top-info-bx">
						<h4>Total auctions</h4>
						<p>$530,000</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="top-info-bx">
						<h4>Total packages</h4>
						<p>$30,000</p>
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
								<li><a href="javascript:;" class="active" data-tabc="for-sale">For Sale</a></li>
								<li><a href="javascript:;" data-tabc="auctions">Auctions</a></li>
								<li><a href="javascript:;" data-tabc="packages">packages</a></li>
							</ul>
						</div>
						<div class="tab-contentac-2 for-sale" style="display: block";>
							<table class="data-table data-tble">
								<thead>
						            <tr>
						                <th>ID</th>
						                <th>Product</th>
						                <th>made by</th>
						                <th>paid on</th>
						                <th>method</th>
						                <th>invoice #</th>
						                <th>amount</th>
						                <th>Status</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            
							</table>
						</div>
						<div class="tab-contentac-2 auctions" >
							<table class="data-table data-tble">
								<thead>
						            <tr>
						                <th>ID</th>
						                <th>Product</th>
						                <th>won by</th>
						                <th>paid on</th>
						                <th>method</th>
						                <th>invoice #</th>
						                <th>amount</th>
						                <th>Status</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Listing #1 Vestibulum sapien elit, tincidunt at consequat <br> in, volutpat non nulla. Vivamus odio tellus.</td>
						                <td>Kim Johnson</td>
						                <td>Dec 14, 2019</td>
						                <td>Credit Card</td>
						                <td>N-9827</td>
						                <td>$14,000</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            
							</table>
						</div>
						<div class="tab-contentac-2 packages" >
							<table class="data-table data-tble">
								<thead>
						            <tr>
						                <th>ID</th>
						                <th>member</th>
						                <th>Package</th>
						                <th>paid on</th>
						                <th>renew date</th>
						                <th>invoice #</th>
						                <th>method</th>
						                <th>amount</th>
						                <th>Status</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
						            </tr>
						            <tr>
						                <td>28902</td>
						                <td>Mark Manson</td>
						                <td>Monthly</td>
						                <td>Dec 14, 2019</td>
						                <td>Jan 14, 2020</td>
						                <td>N-9827</td>
						                <td>Credit Card</td>
						                <td>$200</td>
						                <td class="green-c">Paid</td>
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




