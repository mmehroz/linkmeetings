
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
						<h2>@lang('admin/package.package')</h2>

{{--						<div class="tab-info">--}}
{{--							<ul>--}}
{{--								<li>--}}
{{--									<span>@lang('admin/menu.show')</span>--}}
{{--									<select>--}}
{{--										<option>20</option>--}}
{{--									</select>@lang('admin/menu.entries')--}}
{{--								</li>--}}
{{--								<li>--}}
{{--									<i class="fa fa-search"></i>--}}
{{--									<input type="text" placeholder="Search" name="">--}}
{{--								</li>--}}
{{--							</ul>--}}
{{--						</div>--}}
					</div>
					<table class="display info-data" id="data-tble-packages">
					    <thead>
					        <tr>
                                <th>@lang('admin/package.id')</th>
                                <th>@lang('admin/package.type')</th>
					            <th>@lang('admin/package.title')</th>
					            <th>@lang('admin/package.shorttitle')</th>
                                <th>@lang('admin/package.price')</th>
                                <th>@lang('admin/package.status')</th>
								<th>@lang('admin/package.created_at')</th>
					            <th>@lang('admin/package.action')</th>
					        </tr>
					    </thead>

					</table>
{{--					<div class="info-tab-ft">--}}
{{--						<div class="total">--}}
{{--							<span>Show</span>--}}
{{--							<select>--}}
{{--								<option>20</option>--}}
{{--							</select>--}}
{{--						</div>--}}
{{--						<div class="paginate">--}}
{{--							<ul>--}}
{{--								<li><a href="javascript:;" class="prev">Previous</a></li>--}}
{{--								<li><a href="javascript:;" class="active">1</a></li>--}}
{{--								<li><a href="javascript:;">2</a></li>--}}
{{--								<li><a href="javascript:;">3</a></li>--}}
{{--								<li><a href="javascript:;">4</a></li>--}}
{{--								<li><a href="javascript:;">5</a></li>--}}
{{--								<li><a href="javascript:;">6</a></li>--}}
{{--								<li><a href="javascript:;" class="next">Next</a></li>--}}
{{--							</ul>--}}
{{--						</div>--}}
{{--					</div>--}}
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
        var table = $('#data-tble-packages').DataTable({
            processing: true,
            //serverSide: true,
            ajax: '{!! route('admin_packages_data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'type', name: 'type' },
                { data: 'title', name: 'title' },
                { data: 'short_title', name: 'short_title' },
                { data: 'price', name: 'price' },
                { data: 'status', name: 'status' },
                { data: 'created_at', name: 'created_at' },
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
</script>
@endsection
