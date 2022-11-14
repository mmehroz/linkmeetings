
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
						<h2>@lang('admin/blog.title')</h2>
					</div>
                    <table class="display info-data new-tab-des data-tble-pages" id="data-tble-pages">
					    <thead>
					        <tr>
								<th>@lang('admin/list.id')</th>
					            <th>@lang('admin/list.title')</th>
					            <th>@lang('admin/list.status')</th>
								<th>@lang('admin/list.is_feature')</th>
								<!-- <th>@lang('admin/list.tag')</th> -->
								<th>@lang('admin/list.created_at')</th>
								<th>@lang('admin/list.action')</th>
					        </tr>
					    </thead>
                    </table>
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
        var table = $('.data-tble-pages').DataTable({
            processing: true,
            //serverSide: true,
            ajax: '{!! route('admin_blogs_data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
				{ data: 'status', name: 'status' },
				{ data: 'is_feature', name: 'is_feature' },
				// { data: 'tag', name: 'tag' },
                { data: 'created_at', name: 'created_at' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
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
