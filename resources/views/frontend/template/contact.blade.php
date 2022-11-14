{{-- * Template Name : Contact US * --}}
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
				<h1 class="mbpx-28">{{ $pageContent->short_title ?? '' }}</h1>

				<form method="POST" action="{{ route('contact_post') }}">
                    @csrf
				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="First Name*" name="first_name" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Last Name" name="last_name">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="email" placeholder="Email Address*" name="email_address" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="field">
							<input type="tel" placeholder="Phone Number*" name="phone_number" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Company" name="company" >
						</div>
					</div>
					<div class="col-md-6">
						<div class="field">
							<input type="text" placeholder="Subject" name="subject" >
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<textarea placeholder="Message" name="message" rows="2" cols="2" ></textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">						
						@if ($errors->any())
		                    <div class="alert alert-danger">
		                        <ul>
		                            @foreach ($errors->all() as $error)
		                                <li>{{ $error }}</li>
		                            @endforeach
		                        </ul>
		                    </div>
		                @endif
		                @if(session('message'))
		                    <div>   <div class="alert alert-success" >{!!session('message')!!}</div> </div>
		                @endif
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="field">
						<button type="submit" class="primary-btn squared dblue">Submit</button>
							<!-- <a href="javascript:;" class="primary-btn dblue">Submit</a> -->
						</div>
					</div>
				</div>

				</form>

			</div>
		</div>
	</div>
</section>


@endsection




