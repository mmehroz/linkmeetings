
@extends('layout.customer.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!} 
@stop
@section('body-class') inner-pg logged-in my-account-pg @stop
@section('content')



<section class="main-sec">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h2 class="main">My Account</h2>
			</div>

			<div class="col-md-3">
				@include('layout.customer.usernav')
				@yield('usernav')
			</div>

			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						<table class="display info-data">
						    <thead>
						        <tr>
						            <th>Hotel</th>
						            <th>From - To</th>
						            <th>Date</th>
						            <th>Proposal</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						            <td>Mardi Gras Hotel & Casino</td>
						            <td>28 Mar, 2020 - 08 Apr, 2020</td>
						            <td>12 Mar, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        <tr>
						            <td>Conrad Chicago</td>
						            <td>14 Feb, 2020 - 20 Feb, 2020</td>
						            <td>14 Feb, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        <tr>
						            <td>Mardi Gras Hotel & Casino</td>
						            <td>28 Mar, 2020 - 08 Apr, 2020</td>
						            <td>12 Mar, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        <tr>
						            <td>Conrad Chicago</td>
						            <td>14 Feb, 2020 - 20 Feb, 2020</td>
						            <td>14 Feb, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        <tr>
						            <td>Mardi Gras Hotel & Casino</td>
						            <td>28 Mar, 2020 - 08 Apr, 2020</td>
						            <td>12 Mar, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        <tr>
						            <td>Conrad Chicago</td>
						            <td>14 Feb, 2020 - 20 Feb, 2020</td>
						            <td>14 Feb, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        <tr>
						            <td>Mardi Gras Hotel & Casino</td>
						            <td>28 Mar, 2020 - 08 Apr, 2020</td>
						            <td>12 Mar, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        <tr>
						            <td>Conrad Chicago</td>
						            <td>14 Feb, 2020 - 20 Feb, 2020</td>
						            <td>14 Feb, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        <tr>
						            <td>Mardi Gras Hotel & Casino</td>
						            <td>28 Mar, 2020 - 08 Apr, 2020</td>
						            <td>12 Mar, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        <tr>
						            <td>Conrad Chicago</td>
						            <td>14 Feb, 2020 - 20 Feb, 2020</td>
						            <td>14 Feb, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        <tr>
						            <td>Mardi Gras Hotel & Casino</td>
						            <td>28 Mar, 2020 - 08 Apr, 2020</td>
						            <td>12 Mar, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        <tr>
						            <td>Conrad Chicago</td>
						            <td>14 Feb, 2020 - 20 Feb, 2020</td>
						            <td>14 Feb, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        <tr>
						            <td>Mardi Gras Hotel & Casino</td>
						            <td>28 Mar, 2020 - 08 Apr, 2020</td>
						            <td>12 Mar, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        <tr>
						            <td>Conrad Chicago</td>
						            <td>14 Feb, 2020 - 20 Feb, 2020</td>
						            <td>14 Feb, 2020</td>
						            <td><a href="{{ URL::to('/received-proposals-detail') }}">View</a></td>
						        </tr>
						        
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection




