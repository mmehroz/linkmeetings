
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
						<h2>Contact List</h2>
						
						<!-- <div class="tab-info">
							<ul>
								<li>
									<span>@lang('admin/menu.show')</span>
									<select>
										<option>20</option>
									</select> @lang('admin/menu.entries')
								</li>
								<li>
									<i class="fa fa-search"></i>
									<input type="text" placeholder="Search" name="">
								</li>
							</ul>
						</div> -->
					</div>
					<table class="display info-data" id="contact-list">
					    <thead>
					        <tr>
								<th>ID</th>
								<th>First Name</th>
								<th>Last Name</th>
					            <th>Email Address</th>
					            <th>Phone Numbers</th>
								<th>Company</th>
								<th>Subject</th>
								<th>Message</th>
								<th>Created At</th>
					        </tr>
					    </thead>
					    
					</table>
					<!-- <div class="info-tab-ft">
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
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('footer_script')
    {{--<a href="javascript:;" class="trigger_popup_fricc">Click here to show the popup</a>--}}


<script>
    $(function() {
        var table = $('#contact-list').DataTable({
            processing: true,
            // serverSide: true,
            ajax: '{!! route('admin_contacts_data') !!}',
            columns: [
                { data: 'id', name: 'id' },
				{ data: 'first_name', name: 'first_name' },
				{ data: 'last_name', name: 'last_name' },
				{ data: 'email_address', name: 'email_address' },
				{ data: 'phone_number', name: 'phone_number' },
				{ data: 'company', name: 'company' },
				{ data: 'subject', name: 'subject' },
				{ data: 'message', name: 'message' },
				{ data: 'created_at', name: 'created_at' },
                // { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            searching: true,
            lengthChange: true,
        });
        table.on( 'draw', function () {
            // $('.livicon').each(function(){
            //     $(this).updateLivicon();
            // });
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
</script>
@endsection
