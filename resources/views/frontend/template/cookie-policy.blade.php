{{-- * Template Name : Cookie Policy * --}}
@extends('layout.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!} 
@stop
@section('body-class') inner-pg @stop
@section('content')

<section class="cookie-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="main">{{ $pageContent->title ?? '' }}</h1>
				<p><small>Last updated: {{ $pageContent->updated_at ?? '' }}</small></p>
				{!! $pageContent->content ?? '' !!}
				
			</div>
		</div>
	</div>
</section>


@endsection




