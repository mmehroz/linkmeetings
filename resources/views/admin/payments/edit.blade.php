
@extends('layout.user.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!}
@stop
@section('body-class') user-dt @stop
@section('content')



<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-lg-9">

						@if (count($errors) > 0)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <div class="error">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        </div>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        @endif

							<div class="row">
								<div class="col-sm-12">
									<div class="user-info-bx">
										<figure>
											{{ HTML::image('images/user-edit-ava.jpg', 'Link Meetings') }}
										</figure>
										<h2>{{ $user->company_name ?? '' }}</h2>
									</div>
								</div>
							</div>
							 {!! Form::open(array('route' => array('admin_post_edit_user',$id), 'method' => 'post')) !!}
							<div class="row">
								<div class="col-sm-6">
									<div class="field">
										<label>Full Name*</label>
										<input type="text" placeholder="" class="bg-fld" name="company_name" value="{{ $user->company_name ?? '' }}">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="field">
										<label>Email Address*</label>
										<input type="text" placeholder="markmanson@gmail.com" class="bg-fld" name="email" value="{{ $user->email ?? '' }}">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="field">
										<label>Phone Number*</label>
										<input type="text" placeholder="+1 256 9876" class="bg-fld" name="phone_number" value="{{ $user->phone_number ?? '' }}">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="field">
										<label>Position*</label>
										<input type="text" placeholder="Asst. Manager" class="bg-fld" name="account_type" disabled value="{{ $user->account_type ??''}}">
									</div>
								</div>
							</div>
							<!-- <div class="row">
								<div class="col-sm-12">
									<div class="field">
										<label>Hotel*</label>
										<select>
											<option>Mardi Gras Hotel & Casino</option>
										</select>
									</div>
								</div>
							</div> -->
							<div class="row">
								<div class="col-sm-6">
									<!-- <a href="{{ URL::to('/user-management') }}" class="primary-btn dblue">Update Information</a> -->
									<button type="submit" class="primary-btn dblue">Update Information</button>
								</div>
								<div class="col-sm-6">
									<a onclick="return confirm('Are you sure?')" href="{{ route('admin_delete_user',['id'=>$id ?? ''])}}" class="primary-btn redbdr"><i class="fa fa-trash" aria-hidden="true"></i> Delete this Hotel</a>
								</div>
							</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div id="add-user" class="popup" style="display: none; width: 100%; max-width: 530px;">
    <h2 >
        Create User
    </h2>
    <form>
    	<div class="field">
    		<label>Full Name*</label>
    		<input type="text" name="">
    	</div>
    	<div class="field">
    		<label>Email Address*</label>
    		<input type="text" name="">
    	</div>
    	<div class="field">
    		<label>Hotel</label>
    		<select>
    			<option></option>
    		</select>
    	</div>
    	<div>
    		<a href="javascript:;" class="primary-btn dblue">+ Add User</a>
    	</div>
    </form>
</div>

@endsection




