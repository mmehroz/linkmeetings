
@extends('layout.user.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!} 
@stop
@section('body-class') @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<div class="panel-tab-info">
						<h2>Activities</h2>
						
						<div class="tab-info">
							<ul>
								<li>
									<span>Show</span>
									<select>
										<option>20</option>
									</select>
								</li>
								<li>
									<i class="fa fa-search"></i>
									<input type="text" placeholder="Search" name="">
								</li>
							</ul>
						</div>
					</div>
					<table class="display info-data-user-activity">
					    <thead>
					        <tr>
					            <th>Activity</th>
					            <th width="50%">Date</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td><span class="blue-clr">Tom Morello</span> has changed his password</td><td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					        	<td><span class="blue-clr">Leo Gill</span> has confirmed a booking <span class="blue-clr">Microsoft Annual Event</span> on <span class="blue-clr">Sunway Velocity Hotel</span></td>
					            <td>Apr 22, 2020</td>
					        </tr>	
					        <tr>
					            <td><span class="blue-clr">Tom Morello</span> has changed his password</td><td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					        	<td><span class="blue-clr">Leo Gill</span> has confirmed a booking <span class="blue-clr">Microsoft Annual Event</span> on <span class="blue-clr">Sunway Velocity Hotel</span></td>
					            <td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					            <td><span class="blue-clr">Tom Morello</span> has changed his password</td><td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					        	<td><span class="blue-clr">Leo Gill</span> has confirmed a booking <span class="blue-clr">Microsoft Annual Event</span> on <span class="blue-clr">Sunway Velocity Hotel</span></td>
					            <td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					            <td><span class="blue-clr">Tom Morello</span> has changed his password</td><td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					        	<td><span class="blue-clr">Leo Gill</span> has confirmed a booking <span class="blue-clr">Microsoft Annual Event</span> on <span class="blue-clr">Sunway Velocity Hotel</span></td>
					            <td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					            <td><span class="blue-clr">Tom Morello</span> has changed his password</td><td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					        	<td><span class="blue-clr">Leo Gill</span> has confirmed a booking <span class="blue-clr">Microsoft Annual Event</span> on <span class="blue-clr">Sunway Velocity Hotel</span></td>
					            <td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					            <td><span class="blue-clr">Tom Morello</span> has changed his password</td><td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					        	<td><span class="blue-clr">Leo Gill</span> has confirmed a booking <span class="blue-clr">Microsoft Annual Event</span> on <span class="blue-clr">Sunway Velocity Hotel</span></td>
					            <td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					            <td><span class="blue-clr">Tom Morello</span> has changed his password</td><td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					        	<td><span class="blue-clr">Leo Gill</span> has confirmed a booking <span class="blue-clr">Microsoft Annual Event</span> on <span class="blue-clr">Sunway Velocity Hotel</span></td>
					            <td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					            <td><span class="blue-clr">Tom Morello</span> has changed his password</td><td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					        	<td><span class="blue-clr">Leo Gill</span> has confirmed a booking <span class="blue-clr">Microsoft Annual Event</span> on <span class="blue-clr">Sunway Velocity Hotel</span></td>
					            <td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					            <td><span class="blue-clr">Tom Morello</span> has changed his password</td><td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					        	<td><span class="blue-clr">Leo Gill</span> has confirmed a booking <span class="blue-clr">Microsoft Annual Event</span> on <span class="blue-clr">Sunway Velocity Hotel</span></td>
					            <td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					            <td><span class="blue-clr">Tom Morello</span> has changed his password</td><td>Apr 22, 2020</td>
					        </tr>
					        <tr>
					        	<td><span class="blue-clr">Leo Gill</span> has confirmed a booking <span class="blue-clr">Microsoft Annual Event</span> on <span class="blue-clr">Sunway Velocity Hotel</span></td>
					            <td>Apr 22, 2020</td>
					        </tr>		       
					    </tbody>
					</table>
					<div class="info-tab-ft">
						<div class="total">
							<span>Show</span>
							<select>
								<option>20</option>
							</select>
						</div>
						<div class="paginate">
							<ul>
								<li><a href="javascript:;" class="prev">Previous</a></li>
								<li><a href="javascript:;" class="active">1</a></li>
								<li><a href="javascript:;">2</a></li>
								<li><a href="javascript:;">3</a></li>
								<li><a href="javascript:;">4</a></li>
								<li><a href="javascript:;">5</a></li>
								<li><a href="javascript:;">6</a></li>
								<li><a href="javascript:;" class="next">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection




