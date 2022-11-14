
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
@section('body-class') @stop
@section('content')


<div class="content-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="panel">
					<div class="panel-tab-info">

						@if (session('delete'))
					    <div class="col-sm-12">
					        <div class="alert  alert-success alert-dismissible fade show" role="alert">
					            {!! session('delete') !!}
					                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					                    <span aria-hidden="true">&times;</span>
					                </button>
					        </div>
					    </div>
						@endif		
						<h2>User Management </h2>

						<div class="tab-info">
							<ul>
								<li>
									<span>Show</span>
									<select>
										<option>20</option>
									</select>
								</li>
								<li>
									<i class="fa fa-search"></i>
									<input type="text" placeholder="Search" name="">
								</li>
								<li>
									<a data-fancybox="add-user" data-src="#add-user" href="javascript:;" class="primary-btn dblue userpopup">+ Add User</a>
								</li>
							</ul>
						</div>
					</div>
					<table class="display info-data" id="usertable">
					    <thead>
					        <tr>
					            <th>ID</th>
					            <th>Full Name</th>
					            <th>Email Address</th>
					            <th>Phone Number</th>
					            <!-- <th>Package</th> -->
					            <th>Role</th>
                                <th>Status</th>

					            <th>Action</th>
					        </tr>
					    </thead>

					</table>
					<div class="info-tab-ft">
						<div class="total">
							<span>Show</span>
							<select>
								<option>20</option>
							</select>
						</div>
						<div class="paginate">
							<ul>
								<li><a href="javascript:;" class="prev">Previous</a></li>
								<li><a href="javascript:;" class="active">1</a></li>
								<li><a href="javascript:;">2</a></li>
								<li><a href="javascript:;">3</a></li>
								<li><a href="javascript:;">4</a></li>
								<li><a href="javascript:;">5</a></li>
								<li><a href="javascript:;">6</a></li>
								<li><a href="javascript:;" class="next">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="add-user" class="popup" style="display: none; width: 100%; max-width: 530px;">

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
      	@endif

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

		
    	<h2>Create User</h2>

        <form action="{{ route('admin_add_user') }}" method="post" >
					@csrf
					<!-- <input type="hidden" name="account_type_old" value="hotel"> -->
					<input type="hidden" name="payment_type" value="free">
					<input type="hidden" name="user_add_by_admin" value="User_Add_By_Admin">
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<select name="account_type" id="acc_type" required="">
									<option value="">Account Type</option>
									<option value="hotel">Hotel</option>
									<option value="dmc">DMC</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row text-left mtpx-20">
						<div class="col-md-12">
							<div class="field" style='display:none;' id='hotel'>
								<label>Number of Hotels</label>
							</div>
							<div class="field" style='display:none;' id='dmc'>
								<label>Number of DMC</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<input type="text" placeholder="Enter Required Accounts" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="qty-multiply" name="quantity" required value="{{ old('quantity') }}" >
								<input type="button" value="+" class="qtyplus-inc" field="quantity">
								<input type="button" value="-" class="qtyminus-inc" field="quantity">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="field" style="display: none;" id="hotelpackages">
								<select name="package_id">
								@foreach( $packages as $key => $package )
									<option value="{{ $package->id }}">{{ $package->title }}</option>
								@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field" style="display: none;" id='dmcpackages'>
								<select name="package_id">
								@foreach( $dmcpackages as $key => $dmcpackage )
									<option value="{{ $dmcpackage->id }}">{{ $dmcpackage->title }}</option>
								@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="row text-left mtpx-20">
						<div class="col-md-12">
							<div class="field">
								<label>Registration Information</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Company legal Name" name="company_name" value="{{ old('company_name') }}" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Commercial Name" name="commercial_name" value="{{ old('commercial_name') }}" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<input type="text" placeholder="EIN or fiscal reg number" name="ein_fiscal_reg_number" value="{{ old('ein_fiscal_reg_number') }}" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<input type="text" placeholder="Address" name="address" value="{{ old('address') }}">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<input type="text" placeholder="City" name="city" value="{{ old('city') }}">
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
								<input type="text" placeholder="State" name="state" value="{{ old('state') }}">
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
								<input type="text" placeholder="Zip Code" name="zip_code" value="{{ old('zip_code') }}">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Main Contact Person Name" name="main_contact_person" value="{{ old('main_contact_person') }}" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Position" name="position" value="{{ old('position') }}">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Email" name="email" value="{{ old('email') }}">
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Phone" name="phone_number" value="{{ old('phone_number') }}">
							</div>
						</div>
					</div>

					<div class="row text-left mtpx-20">
						<div class="col-md-12">
							<div class="field">
								<label>Login Information</label>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<input type="text" placeholder="Username*" name="username" value="{{ old('username') }}" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<input type="email" placeholder="Email Address*" name="email" value="{{ old('email') }}" required="required">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<input type="password" placeholder="Password*" name="password" value="{{ old('password') }}" required="required">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<input type="password" placeholder="Confirm Password*" name="confirm_password" value="{{ old('confirm_password') }}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 chk-fld">
							<div class="field">
								<label>
									<input type="checkbox" name="send_newsletter">
									Send me ocassional Promotional deals & newsletters
								</label>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="field">
								<button class="primary-btn dblue" type="submit">Create</button>
							</div>
						</div>
					</div>
				</form>
</div>

@endsection

@section('footer_script')
@if (count($errors) > 0 || session('success'))
	<script type="text/javascript">
		$( ".userpopup" ).trigger( "click" );
	</script>
@endif
    {{--<a href="javascript:;" class="trigger_popup_fricc">Click here to show the popup</a>--}}


<script>
    $(function() {
        var table = $('#usertable').DataTable({
            processing: true,
            //serverSide: true,
            ajax: '{!! route('admin_manage_users_list') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'full_name', name: 'full_name' },
                { data: 'email', name: 'email' },
                { data: 'phone_number', name: 'phone_number' },
                //{ data: 'package', name: 'package' },
                { data: 'account_type', name: 'account_type' },
                { data: 'status', name: 'status' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            searching: true,
            lengthChange: true,
        });
        table.on( 'draw', function () {
            /*$('.livicon').each(function(){
                $(this).updateLivicon();
            });*/
        } );

        // #column3_search is a <input type="text"> element
        $('.search_field').on( 'keyup', function () {
            table
                //.columns( 3 ) //to search in specific column
                .search( this.value )
                .draw();
        } );

        $('.page_length').on( 'click', function () {
            table.page.len( $(this).val() ).draw();
        } );
    });
$(document).ready(function(){
    $('#acc_type').on('change', function() {
      if ( this.value == 'hotel')
      //.....................^.......
      {
        $("#hotel").show();
        $("#dmc").hide();
        $("#hotelpackages").show();
        $("#dmcpackages").hide();
      }
      else
      {
        $("#dmc").show();
        $("#hotel").hide();
        $("#dmcpackages").show();
        $("#hotelpackages").hide();
      }
    });
});
</script>
@endsection




