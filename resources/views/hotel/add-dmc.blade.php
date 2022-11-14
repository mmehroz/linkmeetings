
@extends('layout.dmc.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!} 
@stop
@section('body-class') create-ad-pg ban-ad-pg @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<h2>Add a DMC</h2>

					<div class="row">
						<div class="col-sm-12 col-md-10 col-lg-7">
							<div class="row">
								<div class="col-md-12">
									<div class="field">
										<label>Hotel Logo*</label>
										<div class="addFileStyle logo">
										    <input type="file" />
										</div>
									</div>
								</div>
							</div>
							<div class="row mtpx-30">
								<div class="col-md-12">
									<div class="field">
										<label>DMC Name*</label>
										<input type="text" name="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="field">
										<label>Location</label>
										<input type="text" name="">
									</div>
								</div>
							</div>

							<div class="to-clone">
								<div class="row">
									<div class="col-md-6">
										<div class="field wico altr-b">
											<div class="addFileStyle drag">
											    <input type="file" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-sm-12">											
												<div class="field">
													<label>Heading</label>
													<input type="text" name="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">											
												<div class="field">
													<label>Paragraph</label>
													<textarea rows="2" cols="2"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<a href="javascript:;" class="add-fld-more add-more">+  Add another section</a>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<hr class="mtpx-30 mbpx-30">
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<h4 class="mbpx-30">Add Your Fleet</h4>
								</div>
							</div>

							<div class="to-clone-1">

								<div class="row">
									<div class="col-md-6">
										<div class="field wico altr-b">
											<div class="addFileStyle drag-f">
											    <input type="file" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-sm-12">											
												<div class="field">
													<label>Vehicle Name</label>
													<input type="text" name="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">											
												<div class="field">
													<label>Capacity</label>
													<input type="text" name="">
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-sm-12">
									<a href="javascript:;" class="add-fld-more add-more-1">+  Add another Vehicle</a>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<hr class="mtpx-30 mbpx-30">
								</div>
							</div>

							<div class="to-clone-2">

								<div class="row">
									<div class="col-md-6">
										<div class="field wico altr-b">
											<div class="addFileStyle drag">
											    <input type="file" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-sm-12">											
												<div class="field">
													<label>Heading</label>
													<input type="text" name="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">											
												<div class="field">
													<label>Paragraph</label>
													<textarea rows="2" cols="2"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-sm-12">
									<a href="javascript:;" class="add-fld-more add-more-2">+  Add another section</a>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<hr class="mtpx-30 mbpx-30">
								</div>
							</div>

							<div class="row">
								<div class="col-12 ">
									<div class="field chkfield">
										<label>
											<input type="checkbox" name="">
											I accept the <a href="javascript:;">Terms & Conditions</a>
										</label>
									</div>
								</div>
							</div>
							

							<div class="row va-ctr">
								<div class="col-sm-5">
									<a href="{{ URL::to('/dmc/dmc/') }}" class="primary-btn dblue">Add DMC</a>			
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection




