
@extends('layout.dmc.master')

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
						<h2>Inquiries </h2>
						
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
					<table class="display info-data">
					    <thead>
					        <tr>
					            <th>ID</th>
					            <th>Event Name</th>
					            <th>Event Type</th>
					            <th>Meeting Planner</th>
					            <th>From</th>
					            <th>To</th>
					            <th>Booking Date</th>
					            <th>Attendees</th>
					            <th>Schedule</th>
					            <th>Status</th>
					            
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>0011</td>
					            <td>Microsoft Annual Event</td>
					            <td>Conference</td>
					            <td>Leo Gill</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Google Event</td>
					            <td>Seminar</td>
					            <td>Guillermo Raffaele</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Microsoft Annual Event</td>
					            <td>Conference</td>
					            <td>Leo Gill</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Google Event</td>
					            <td>Seminar</td>
					            <td>Guillermo Raffaele</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Microsoft Annual Event</td>
					            <td>Conference</td>
					            <td>Leo Gill</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Google Event</td>
					            <td>Seminar</td>
					            <td>Guillermo Raffaele</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Microsoft Annual Event</td>
					            <td>Conference</td>
					            <td>Leo Gill</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Google Event</td>
					            <td>Seminar</td>
					            <td>Guillermo Raffaele</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Microsoft Annual Event</td>
					            <td>Conference</td>
					            <td>Leo Gill</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Google Event</td>
					            <td>Seminar</td>
					            <td>Guillermo Raffaele</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Microsoft Annual Event</td>
					            <td>Conference</td>
					            <td>Leo Gill</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Google Event</td>
					            <td>Seminar</td>
					            <td>Guillermo Raffaele</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Microsoft Annual Event</td>
					            <td>Conference</td>
					            <td>Leo Gill</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Google Event</td>
					            <td>Seminar</td>
					            <td>Guillermo Raffaele</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Microsoft Annual Event</td>
					            <td>Conference</td>
					            <td>Leo Gill</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Google Event</td>
					            <td>Seminar</td>
					            <td>Guillermo Raffaele</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Microsoft Annual Event</td>
					            <td>Conference</td>
					            <td>Leo Gill</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Google Event</td>
					            <td>Seminar</td>
					            <td>Guillermo Raffaele</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Microsoft Annual Event</td>
					            <td>Conference</td>
					            <td>Leo Gill</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Google Event</td>
					            <td>Seminar</td>
					            <td>Guillermo Raffaele</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>200</td>
					            <td><a href="javascript:;">View</a></td>
					            <td class="t-orange">Proposal Sent on April 30, 2020 (06:15 PM)</td>
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




