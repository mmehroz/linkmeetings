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
								<h2>Auctions</h2>
							</div>
						</div>
					</div>
					<div class="cont-area cont-w-chat">
						<div class="row mbpx-50">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12">
										<div class="styled-head">
											<h3 class="mbpx-10">Auction # 1 Vivamus ac ullamcorper enim. Nam luctus rhoncus vestibulum</h3>
											<p>Suspendisse semper elementum massa, condimentum efficitur ante maximus vel. Nunc porta eros quis pretium blandit. Ut sit amet quam quis dolor tempor </p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="pr-dt">	
											<p><span>ID:</span> 28902</p>
											<p><span>Posted by:</span> Kim Johnson</p>
											<p><span>Created on:</span> Dec 14, 2019</p>
											<p><span>Ends on:</span> Dec 14, 2019</p>
											<p><span>Opening Bid:</span> $12,000</p>
											<p><span>Last Bid:</span> $14,000</p>
											
										</div>
									</div>
									<div class="col-sm-6">
										<div class="pr-dt">	
											<p><span>Gait:</span> Pacer</p>
											<p><span>Type:</span> Race Horse Gelding</p>
											<p><span>Location:</span> Dallas, Texas, United States</p>
											<p><span>Gender:</span> Male</p>
											<p><span>Color:</span> Black</p>
											<p><span>Age:</span> 10 y/o</p>
											
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 text-right">
								{{ HTML::image('images/admin/cont-w-chat.png', 'Hoof Trade') }}
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<ul class="main-tabac-2 tabc">
									<li><a href="javascript:;" class="active" data-tabc="Description">Description</a></li>

									<li><a href="javascript:;" data-tabc="Racelines">Racelines</a></li>

									<li><a href="javascript:;" data-tabc="Bloodline">Bloodline</a></li>

									<li><a href="javascript:;" data-tabc="Shipping">Shipping</a></li>

									<li><a href="javascript:;" data-tabc="Financing">Financing</a></li>

									<li><a href="javascript:;" data-tabc="Insurance">Insurance</a></li>
								</ul>

								<div class="tab-contentac-2 Description" style="display: block;">
										<p>Vivamus ac ullamcorper enim. Nam luctus rhoncus vestibulum. Suspendisse potenti. Nam orci mauris, fermentum id sagittis sit amet, tincidunt a ligula. Aliquam venenatis tortor eros, eu tincidunt ex pharetra vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla sit amet mi fermentum, porta est ut, ullamcorper eros. Proin in mollis neque. Donec cursus tristique rhoncus. Duis malesuada, ex vitae rhoncus eleifend, nisi nisl facilisis justo, ut viverra lorem lectus non est. <br><br> uspendisse semper elementum massa, condimentum efficitur ante maximus vel. Nunc porta eros quis pretium blandit. Ut sit amet quam quis dolor tempor pharetra. Fusce vitae eros bibendum, faucibus neque porta, lacinia velit. Donec vitae tortor et ante ornare ullamcorper ac a mi. Nam faucibus lectus nulla, in imperdiet sapien eleifend sed. Cras eget sollicitudin libero.<br><br>Pellentesque molestie tortor a consectetur pharetra. Integer pretium urna dui, ac varius nulla posuere eu. Suspendisse dignissim, nunc at lacinia elementum, justo massa facilisis mauris, vel luctus eros odio a ante. Integer tempus, justo non dictum condimentum, dui libero faucibus ligula, nec placerat enim orci tincidunt ex. Sed libero enim, volutpat vel augue non, bibendum ultricies risus. Aliquam a elit eget libero malesuada euismod eget et tellus. Nulla luctus eros non enim placerat pellentesque. Nam tempus pretium leo, quis sodales leo faucibus quis. Aliquam finibus blandit sem, eu tempus ex hendrerit euismod. Aliquam ut nisl placerat, elementum lorem et, sollicitudin dolor. Nulla fermentum fringilla erat sit amet consequat. Aenean tempor enim eros, a ornare nulla tempus eu.<br><br> Donec sed ipsum vel arcu sodales luctus. Curabitur vestibulum libero orci, ac tincidunt orci gravida ac. Praesent erat ipsum, cursus a posuere at, convallis ut eros. Vivamus lobortis dui enim, vitae tempor risus bibendum non. Maecenas vulputate lacus non sapien vulputate imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec lobortis nibh non tellus imperdiet egestas. Nullam elementum dapibus lectus at rutrum. Donec posuere metus ac dui cursus porttitor. Morbi commodo porttitor turpis ut scelerisque. Morbi lacinia commodo ipsum et elementum. Phasellus gravida est et nulla rutrum mattis.<br><br>Integer maximus, urna dapibus dignissim congue, nisi urna pellentesque leo, ac aliquam mauris sem ut tortor. In rhoncus orci vel nisl lacinia, ut porta magna egestas. In semper, tortor nec eleifend molestie, dui diam rhoncus sem, vitae interdum neque ante sed leo. Vestibulum odio augue, interdum non ipsum quis, sagittis aliquam purus. Vivamus ultricies efficitur ornare. Donec commodo magna non fringilla vulputate. Suspendisse nec tellus quis ante iaculis fermentum elementum id velit. Suspendisse iaculis molestie nulla, ut interdum sapien vulputate id. Donec libero nibh, elementum euismod maximus nec, consectetur eu libero. Vestibulum posuere ornare nulla ut ultricies. Phasellus a nulla in turpis malesuada ultricies in eget dolor.</p>
								</div>

								<div class="tab-contentac-2 Racelines">
									<p>Vivamus ac ullamcorper enim. Nam luctus rhoncus vestibulum. Suspendisse potenti. Nam orci mauris, fermentum id sagittis sit amet, tincidunt a ligula. Aliquam venenatis tortor eros, eu tincidunt ex pharetra vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla sit amet mi fermentum, porta est ut, ullamcorper eros. Proin in mollis neque. Donec cursus tristique rhoncus. Duis malesuada, ex vitae rhoncus eleifend, nisi nisl facilisis justo, ut viverra lorem lectus non est. </p>
								</div>
								<div class="tab-contentac-2 Bloodline">
									<p>Vivamus ac ullamcorper enim. Nam luctus rhoncus vestibulum. Suspendisse potenti. Nam orci mauris,</p>
								</div>
								<div class="tab-contentac-2 Shipping">
									<p>Vivamus ac ullamcorper enim. Nam luctus rhoncus vestibulum. Suspendisse potenti. Nam orci mauris,</p>
								</div>
								<div class="tab-contentac-2 Financing">
									<p>Vivamus ac ullamcorper enim. Nam luctus rhoncus vestibulum. Suspendisse potenti. Nam orci mauris,</p>
								</div>
								<div class="tab-contentac-2 Insurance">
									<p>Vivamus ac ullamcorper enim. Nam luctus rhoncus vestibulum. Suspendisse potenti. Nam orci mauris,</p>
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




