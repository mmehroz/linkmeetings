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
			<div class="col-md-9 col-lg-6 ctrdv">
				<h1>{{ $pageContent->title ?? '' }}</h1>

				@if (session('success'))
				    <div class="col-sm-12">
				        <div class="alert  alert-success alert-dismissible fade show" role="alert">
				            {!! session('success') !!}
				                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                    <span aria-hidden="true">&times;</span>
				                </button>
				        </div>
				    </div>
				@endif

                <h1>Login</h1>
                <p>Not a member yet? </a><a href="{{ URL::to('/sign-up-as-meeting-planner') }}">Sign Up</a></p>
				<div class="row with-api">
					<div class="col-md-6">
						<figure>
							<a href="{{ url('/auth/redirect/google') }}">{{ HTML::image('images/login-google.jpg', 'Link Meetings') }}</a>
						</figure>
					</div>
					<div class="col-md-6">
						<figure>
							<a href="{{ url('/redirect/facebook') }}">{{ HTML::image('images/login-fb.jpg', 'Link Meetings') }}</a>
						</figure>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="or-sep">
							<span>OR</span>
						</div>
					</div>
				</div>
				

				<form method="POST" action="{{ route('login_post') }}">
                    @csrf
					<div class="row">
						<div class="col-12">
							<div class="field">
								<input type="text" placeholder="Email Address or username*" name="email" value="{{ old('email') }}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="field">
								<input type="Password" placeholder="Password*" name="password">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 chk-fld">
							<div class="field">
								<label>
									<input type="checkbox" name="">
									Remember me
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							@if(session('message'))
								<div>   <div class="alert alert-success" >{!!session('message')!!}</div> </div>
			      			@endif
							@if ($errors->any())
			                    <div class="alert alert-danger">
			                        <ul>
			                            @foreach ($errors->all() as $error)
			                                <li>{{ $error }}</li>
			                            @endforeach
			                        </ul>
			                    </div>
			                @endif
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="field">
							<button type="submit" value="Login" class="primary-btn squared dblue">Login</button>
								<!-- <button type="submit" value="Login" class="primary-btn squared dblue"></button> -->
								<!-- <a href="{{ URL::to('/saved-venues') }}" class="primary-btn dblue">Login</a> -->
							</div>
						</div>
					</div>
					<div class="row forgot text-center">
						<div class="col-12">
						<!-- 	<div class="clearfix">
								<a href="javascript:;">Forgot your email address?</a>
							</div> -->
							<div class="clearfix">
								<a href="javascript:;" onclick="sendemail()">Forgot your Password?</a> 
								{{-- <input type="button" onclick="sendemail()" name="" value="Forgot your Password?"> --}}
							</div>
						</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function sendemail(){
        // alert("Yes");
        swal("Enter Your Email", {
            content: "input",
        })
            .then((value) => {
                if (value != null) {
                    $email = value;
                    $.get('{{ URL::to("/sendforgetpasswordemail")}}/'+$email);
                    swal(`Check Your Email`);
                    // window.location.reload();
                }else{
                    swal(`Enter Correct Email`);
                }
            });
    }
</script>

@endsection




