
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

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<h2>Manage DMCs</h2>
					<div class="row">
					@if( !empty($hotels) )

							@foreach( $hotels as $key => $hotel )
                                <div class="col-md-6 col-lg-3">
                                    <div class="bx">
                                        @if( !empty($hotel) )
                                            <figure>
                                                @if($hotel->id == 1 && $hotel->getPrimaryImage())
                                                    <img src="{{ asset('images/' . $hotel->getPrimaryImage() ) }}" />
                                                @else
                                                    @if($hotel->getPrimaryImage())
                                                        <img src="{{ asset('uploads/hotels/'.$hotel->hotel_id.'/'.$hotel->getPrimaryImage()) }}" />
                                                    @endif
                                                @endif
                                            </figure>
                                        @endif

								<h3>{{ $hotel->name ?? '' }}</h3>
								<p>{{ $hotel->address ?? '' }}</p>
								<ul>
									<li>
										<i class="icon icon-m-view"></i>
										302k
									</li>
									<li>
										<i class="icon icon-m-comment"></i>
										126
									</li>
									<li>
										<i class="icon icon-m-calndr"></i>
										64
									</li>
								</ul>
								<a href="{{ route('edit_hotel_view',['id'=>$hotel->id]) }}" class="primary-btn dblue-bdr">Edit Hotel</a>
                                    </div>
                                </div>
                                    @endforeach

						@endif
						<div class="col-md-6 col-lg-3 lst">
							<div class="bx add-more">
									<div class="cont" onclick="location.href='{{ URL::to('/add-hotel') }}';">
										<div>
											<i class="icon icon-m-add-more"></i>
											<h3>Add a New Hotel</h3>
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




