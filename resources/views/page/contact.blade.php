{{-- * Template Name : Home * --}}
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
			<div class="col-md-9 col-lg-6 ctrdv">
				<h1 class="mbpx-28">Get In Touch</h1>
				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="First Name*" name="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Last Name" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="email" placeholder="Email Address*" name="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Phone Number*" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Company" name="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Subject" name="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<textarea placeholder="Message" rows="2" cols="2"></textarea>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-12">
						<div class="field">
							<a href="javascript:;" class="primary-btn dblue">Submit</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection




