
@extends('layout.hotel.master')

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
		<div class="row mbpx-25">
			<div class="col-md-12 col-lg-7 col-xl-8">
				<div class="panel ht">
					<h2>Yearly Stats</h2>
					<figure>
						{{ HTML::image('images/yearly-stat.jpg', 'Link Meetings') }}
					</figure>
				</div>
			</div>
			<div class="col-md-12 col-lg-5 col-xl-4">
				<div class="panel sm mbpx-9">
					<span class="icon-hold">
						<i class="icon icon-new-inq"></i>
					</span>
					<div class="text">
						<div class="selection">
							<select>
								<option>This Week</option>
							</select>
						</div>
						<h4>New Inquiries</h4>
						<h3>52</h3>
						<div class="progress">
							<figure>
								{{ HTML::image('images/progress.jpg', 'Link Meetings') }}
							</figure>
						</div>
						<p>60% Increase in 28 Days</p>user-info
					</div>
				</div>

				<div class="panel sm mbpx-9">
					<span class="icon-hold">
						<i class="icon icon-new-book"></i>
					</span>
					<div class="text">
						<div class="selection">
							<select>
								<option>This Week</option>
							</select>
						</div>
						<h4>New Bookings</h4>
						<h3>155</h3>
						<div class="progress">
							<figure>
								{{ HTML::image('images/progress.jpg', 'Link Meetings') }}
							</figure>
						</div>
						<p>60% Increase in 28 Days</p>
					</div>
				</div>

				<div class="panel sm">
					<span class="icon-hold">
						<i class="icon icon-total-view"></i>
					</span>
					<div class="text">
						<div class="selection">
							<select>
								<option>This Week</option>
							</select>
						</div>
						<h4>Total Views</h4>
						<h3>22,520</h3>
						<div class="progress">
							<figure>
								{{ HTML::image('images/progress.jpg', 'Link Meetings') }}
							</figure>
						</div>
						<p>60% Increase in 28 Days</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row mbpx-25">
			<div class="col-12">
				<div class="panel">
					<div class="panel-tab-info">
						<h2>New Inquiries <a href="javascript:;"><span>See All</span></a></h2>

						<div class="tab-info">
							<ul>
								<li>
									<span>Show</span>
									<select>
										<option>10</option>
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
					            <td class="t-blue">New Inquiry</td>
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
					            <td class="t-blue">New Inquiry</td>
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
					            <td class="t-blue">New Inquiry</td>
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
					            <td class="t-blue">New Inquiry</td>
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
					            <td class="t-blue">New Inquiry</td>
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
					            <td class="t-blue">New Inquiry</td>
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
					            <td class="t-blue">New Inquiry</td>
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
					            <td class="t-blue">New Inquiry</td>
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
					            <td class="t-blue">New Inquiry</td>
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
					            <td class="t-blue">New Inquiry</td>
					        </tr>
					    </tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<div class="panel-tab-info">
						<h2>Confirmed Bookings <a href="javascript:;"><span>See All</span></a></h2>

						<div class="tab-info">
							<ul>
								<li>
									<span>Show</span>
									<select>
										<option>10</option>
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
					            <td class="t-green">Confirmed on May 02, 2020 (05:00 PM)</td>
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
					            <td class="t-green">Confirmed on May 02, 2020 (05:00 PM)</td>
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
					            <td class="t-green">Confirmed on May 02, 2020 (05:00 PM)</td>
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
					            <td class="t-green">Confirmed on May 02, 2020 (05:00 PM)</td>
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
					            <td class="t-green">Confirmed on May 02, 2020 (05:00 PM)</td>
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
					            <td class="t-green">Confirmed on May 02, 2020 (05:00 PM)</td>
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
					            <td class="t-green">Confirmed on May 02, 2020 (05:00 PM)</td>
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
					            <td class="t-green">Confirmed on May 02, 2020 (05:00 PM)</td>
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
					            <td class="t-green">Confirmed on May 02, 2020 (05:00 PM)</td>
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
					            <td class="t-green">Confirmed on May 02, 2020 (05:00 PM)</td>
					        </tr>
					    </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection




