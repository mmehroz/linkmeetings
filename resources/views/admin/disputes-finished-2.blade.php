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
								<h2>Dispute</h2>
							</div>
						</div>
					</div>
					<div class="cont-area cont-w-chat">
						<div class="row">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12">
										<div class="styled-head">
											<h3 class="mbpx-10">Horse # 1 Vivamus ac ullamcorper enim. Nam luctus rhoncus vestibulum</h3>
											<p>Suspendisse semper elementum massa, condimentum efficitur ante maximus vel. Nunc porta eros quis pretium blandit. Ut sit amet quam quis dolor tempor </p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="pr-dt">
											<p><span>ID:</span> 28902</p>
											<p><span>Opened by:</span> Kim Johnson</p>
											<p><span>Seller:</span> Sam Harris</p>
											<p><span>Created by:</span> Sam Harris</p>
											<p><span>Price:</span> $17,000</p>
											<p><span>Reason:</span> Seller did not ship the order.</p>
											<p><span>Status:</span>
												<select class="finished">
													<option>Finished</option>
												</select>
											</p>
											<p class="mtpx-35"><a href="javascript:;">More Details <i class="fa fa-caret-down"></i></a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 text-right">
								{{ HTML::image('images/admin/cont-w-chat.png', 'Hoof Trade') }}
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row mbpx-20">
				<div class="col-sm-12">	
					<div class="cont-area chat-area">
						<div class="row">
							<div class="col-sm-12">
								<h4>Chat</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="cont">
									<div class="chat-head">
										<ul>
											<li>
												<div>
													<figure>
														{{ HTML::image('images/ava-holder.png', 'Hoof Trade') }}
													</figure>
													<p>Sam Harris <span>Seller</span></p>
												</div>
											</li>
											<li>
												<div>
													<figure>
														{{ HTML::image('images/ava-holder.png', 'Hoof Trade') }}
													</figure>
													<p>Mark Manson <span>Buyer</span></p>
												</div>
											</li>
											<li>
												<div>
													<figure>
														{{ HTML::image('images/ava-holder.png', 'Hoof Trade') }}
													</figure>
													<p>You <span>Hoof Trade</span></p>
												</div>
											</li>
										</ul>
									</div>
									<div class="chat-dt">
										<ul>
											<li>
												<figure class="chat-ava">
													{{ HTML::image('images/admin/chat-head-img.png', 'Hoof Trade') }}
												</figure>
												<div>
													<h5>Mark Manson <span>5 min ago</span></h5>
													<p>Donec mattis sapien nec tincidunt bibendum. Duis laoreet felis eu mauris volutpat, id pharetra libero vulputate. Nam et eros sollicitudin, luctus nibh sed, varius lacus. Mauris tincidunt augue nec bibendum cursus.</p>

													<div class="dt-img">
														<figure>
															{{ HTML::image('images/admin/holder-sm.jpg', 'Hoof Trade') }}
														</figure>
														<figure>
															{{ HTML::image('images/admin/holder-sm.jpg', 'Hoof Trade') }}
														</figure>
														<figure>
															{{ HTML::image('images/admin/holder-sm.jpg', 'Hoof Trade') }}
														</figure>
														<figure>
															{{ HTML::image('images/admin/holder-sm.jpg', 'Hoof Trade') }}
														</figure>
														<figure>
															{{ HTML::image('images/admin/holder-sm.jpg', 'Hoof Trade') }}
														</figure>
													</div>
												</div>
											</li>
											<li>
												<figure class="chat-ava">
													{{ HTML::image('images/admin/chat-head-img.png', 'Hoof Trade') }}
												</figure>
												<div>
													<h5>Sam Harris <span>3 min ago</span></h5>
													<p>Pellentesque id tellus sed nibh rhoncus luctus eu vel lorem. Fusce interdum ipsum quis tellus suscipit rhoncus. Praesent ut ante ipsum. Cras aliquet enim lectus, vel vulputate ligula finibus at. Pellentesque diam libero, sagittis sit amet nisl hendrerit, porta facilisis nibh. Pellentesque pharetra lorem eget varius vehicula. Nam sem augue, sollicitudin non tortor at, finibus aliquam enim. Pellentesque feugiat est vel ex faucibus, laoreet ullamcorper ex congue. Quisque hendrerit tortor id ante tincidunt, vitae volutpat tortor tempus. Proin dictum, arcu eleifend aliquam condimentum, purus lacus malesuada nisi, sed lobortis erat sem venenatis lorem. Pellentesque vulputate erat lorem, non hendrerit ex iaculis vel. varius lacus. Mauris tincidunt augue nec bibendum cursus.</p>
												</div>
											</li>
											<li>
												<figure class="chat-ava">
													{{ HTML::image('images/admin/chat-head-img.png', 'Hoof Trade') }}
												</figure>
												<div>
													<h5>You <span>2 min ago</span></h5>
													<p>Pellentesque id tellus sed nibh rhoncus luctus eu vel lorem. Fusce interdum ipsum quis tellus suscipit rhoncus. Praesent ut ante ipsum. Cras aliquet enim lectus, vel vulputate ligula finibus at. Pellentesque diam libero, sagittis sit amet nisl hendrerit, porta facilisis nibh. Pellentesque pharetra lorem eget varius vehicula. Nam sem augue, sollicitudin non tortor at, finibus aliquam enim. Pellentesque feugiat est vel ex faucibus, laoreet ullamcorper ex congue. Quisque hendrerit tortor id ante tincidunt, vitae volutpat tortor tempus. Proin dictum, arcu eleifend aliquam condimentum, purus lacus malesuada nisi, sed lobortis erat sem venenatis lorem. Pellentesque vulputate erat lorem, non hendrerit ex iaculis vel.</p>
												</div>
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
	</div>
</section>

@endsection




