
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

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<h2>DMC</h2>

					<div class="row">
						<div class="col-md-6 col-lg-4 lst">
							<div class="bx add-more">
								<div class="cont" style="height: 340px;" onclick="location.href='{{ URL::to('/dmc/add-dmc') }}';">
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




