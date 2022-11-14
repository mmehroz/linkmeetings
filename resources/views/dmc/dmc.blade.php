
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
@section('body-class') manage-pg @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		@if (session('success'))
		    <div class="col-sm-12">
		        <div class="alert  alert-success alert-dismissible fade show" role="alert">
		            {!! session('success') !!}
		        </div>
		    </div>
		@endif

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<h2>DMC</h2>
					<?php //print_b($dmcs); exit; ?>
					<div class="row">
						@if( !empty($dmcs) )
							@foreach( $dmcs as $key => $dmc )
							<div class="col-md-6 col-lg-3">
								<div class="bx">
									@if( !empty( $dmc->image) )
									<figure>
										<img src="{{ asset('uploads/dmc/'.$dmc->id.'/'.$dmc->image) }}" />
									</figure>
									@endif
									<h3>{{ $dmc->getDescriptionByLanguageID($language_id)->name }}</h3>
									<p>{{ $dmc->location ?? '' }} {{ $dmc->city ?? ''}} {{ $dmc->state ?? ''}} 
									{{ $dmc->zip ?? ''}}</p>
									
									<a href="{{ route('get_edit',['id'=>$dmc->id]) }}">Edit DMC</a>
								</div>
							</div>
							@endforeach
						@endif									
					</div>		

					 
						<div class="col-md-6 col-lg-4 lst">
							<div class="bx add-more">
								<div class="cont" style="height: 340px;" onclick="location.href='{{ route('add_dmc') }}';">
									<div>
										<i class="icon icon-m-add-more"></i>
										<h3>Add a New DMC</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection




