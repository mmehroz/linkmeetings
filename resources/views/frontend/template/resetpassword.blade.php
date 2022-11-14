{{-- * Template Name : Login * --}}
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

<section class="login-sec wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<form action="{{url('reset_submit')}}" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="verify_token" value="{{$verify_token}}">
				<div class="form-group">
					<label>New Password</label>
					<!-- <input class="form-control" name="password" type="password"> -->
					<input type="password" name="password"  class="form-control" required>
				</div>
				<div class="form-group text-center">
					<button class="btn btn-primary account-btn" type="submit">Reset</button>
				</div>
			</form>
		</div>
	</div>
</section>	

@endsection




