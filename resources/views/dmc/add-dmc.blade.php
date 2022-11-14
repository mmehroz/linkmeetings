
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

			@if ($errors->any())
                <div class="has-error">
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<h2>Add a DMC</h2>

					<form action="{{ route('post_dmc') }}" method="post" enctype="multipart/form-data">
					@csrf
					<input type="hidden" value="{{ old('latitude') }}" name="latitude" id="latitude" />
                                            <input type="hidden" value="{{ old('longitude') }}" name="longitude" id="longitude" />

					<div class="row">
						<div class="col-sm-12 col-md-10 col-lg-7">
							<div class="row">
								<div class="col-md-12">
									<div class="field">

										
									<div id="logoHotel"></div>
										<label>Hotel Logo*</label>
										<div class="addFileStyle logo">
										    <input type="file" accept="image/*" name="hotelLogo" class="hotelLogo" />
										</div>
									</div>
								</div>
							</div>

							<?php if($languages->count()): ?>
                                <?php foreach($languages as $language): ?>
                                    <?php $iso = $language->{'iso_639-1'}; ?>
                                    <div class="row mtpx-30">
                                        <div class="col-sm-12">
                                            <div class="field lang-{{ $iso }}">
                                                <label>DMC Name*</label>
                                                <input type="text" name="dmc_name-{{ $language->id }}" placeholder="DMC Name {{ $language->name }}" value="{{ old('dmc_name-'.$language->id) }}" />
                                            </div>
                                        </div>
                            		</div>
                                <?php endforeach; ?>
                            <?php endif; ?>

							
							<div class="row">
								<div class="col-md-12">
									<div class="field">
										<label>Location</label>
										<input type="text" name="dmc_location" id="dmc_location">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4">
									<div class="field">
										<label>City</label>
										<input type="text" name="city" id="locality" value="">
									
									</div>
								</div>
								<div class="col-md-4">
									<div class="field">
										<label>State</label>
										<input type="text" name="state" id="administrative_area_level_1">
									</div>
								</div>
								<div class="col-md-4">
									<div class="field">
										<label>Zip</label>
										<input type="text" name="zip" id="postal_code">
									</div>
								</div>
							</div>

							<!-- section top -->
							<div class="to-clone">
								<input type="hidden" value="" name="section_top[]">
								<div class="row">
									<div class="col-md-6">
										<div class="field wico altr-b">
											<div class="addFileStyle drag">
											    <input type="file" accept="image/*" name="section_image[]"  class="section_imagefile" />
											</div>
										</div>
										<div class="sectionImage"></div>
									</div>
									<div class="col-md-6">
									

			                       	<?php if($languages->count()): ?>
			                       		<?php $section_to_count = 0; ?>
		                                <?php foreach($languages as $language): ?>
		                                    <?php $iso = $language->{'iso_639-1'}; ?>
		                                    <div class="row mtpx-30">
		                                        <div class="col-sm-12">
		                                            <div class="field lang-{{ $iso }}">
		                                                <label>Heading</label>
		                                                <input type="text" name="heading-{{ $language->id }}[{{$section_to_count}}]" placeholder="Heading {{ $language->name }}" value="<?php  old('heading-'.$language->id) ?>" />
		                                            </div>
		                                        </div>
		                                    </div>

		                                    <div class="row mtpx-30">
			                                        <div class="col-sm-12">
			                                            <div class="field lang-{{ $iso }}">
			                                                <label>Paragraph</label>                        
			                                                <textarea rows="2" cols="2" name="paragraph-{{ $language->id }}[{{$section_to_count}}]"></textarea>
			                                            </div>
			                                        </div>
			                                    </div>
		                                <?php endforeach; ?>
	                            	<?php endif; ?>

	                            	
		                           	
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<a href="javascript:;" class="add-fld-more add-more-section11">+  Add another section</a>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<hr class="mtpx-30 mbpx-30">
								</div>
							</div>

							<!-- fleet -->
							<div class="row">
								<div class="col-sm-12">
									<h4 class="mbpx-30">Add Your Fleet</h4>
								</div>
							</div>

							<div class="to-clone-1">
							<input type="hidden" value="" name="fleet[]">
								<div class="row">
									<div class="col-md-6">
										<div class="field wico altr-b">
											<div class="addFileStyle drag-f">
											    <input type="file" accept="image/*" name="fleet_image[]"  class="fleet_image section_imagefile" />
											</div>
										</div>
										<div class="sectionImage"></div>
									</div>
									<div class="col-md-6">

									<?php if($languages->count()): ?>
										<?php $fleet_count = 0; ?>
		                                <?php foreach($languages as $language): ?>
		                                    <?php $iso = $language->{'iso_639-1'}; ?>
		                                   <div class="row">
		                                        <div class="col-sm-12">
		                                            <div class="field lang-{{ $iso }}">
		                                                <label>Vehicle Name</label>
		                                                <input type="text" name="vehicle_name-{{ $language->id }}[{{ $fleet_count }}]" placeholder="Vehicle {{ $language->name }}" value="<?php  old('vehicle_name-'.$language->id) ?>" />
		                                            </div>
		                                        </div>
		                                    </div>
		                                    <div class="row">
		                                        <div class="col-sm-12">
		                                            <div class="field lang-{{ $iso }}">
		                                               <label>Capacity</label>
		                                                <input type="text" name="capacity-{{ $language->id }}[{{ $fleet_count }}]" placeholder="Capacity {{ $language->name }}" value="<?php  old('capacity-'.$language->id) ?>" />
		                                            </div>
		                                        </div>
		                                    </div>
		                                <?php endforeach; ?>
	                            	<?php endif; ?>

	                            								

		                           
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-sm-12">
									<a href="javascript:;" class="add-fld-more add-more-fleet">+  Add another Vehicle</a>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<hr class="mtpx-30 mbpx-30">
								</div>
							</div>

							<!-- section bottom -->
							<div class="to-clone-2">
							<input type="hidden" value="" name="section_bottom[]">
								<div class="row">
									<div class="col-md-6">
										<div class="field wico altr-b">
											<div class="addFileStyle drag">
											    <input type="file" accept="image/*" name="section_image_bottom[]" class="section_imagefile" />
											</div>
										</div>
										<div class="sectionImage"></div>
									</div>
									<div class="col-md-6">

									<?php if($languages->count()): ?>
									<?php $section_bottom_count = 0 ?>
		                                <?php foreach($languages as $language): ?>
		                                    <?php $iso = $language->{'iso_639-1'}; ?>
		                                   <div class="row">
		                                        <div class="col-sm-12">
		                                            <div class="field lang-{{ $iso }}">
		                                                <label>Heading Name</label>
		                                                <input type="text" name="heading_name-{{ $language->id }}[{{ $section_bottom_count }}]" placeholder="Heading {{ $language->name }}" value="<?php  old('heading_name-'.$language->id) ?>" />
		                                            </div>
		                                        </div>
		                                    </div>

		                                    <div class="row">
		                                        <div class="col-sm-12">
		                                            <div class="field lang-{{ $iso }}">
		                                                <label>Paragraph</label>                 
		                                                <textarea rows="2" cols="2" name="paragraph_bottom-{{ $language->id }}[{{ $section_bottom_count }}]"><?php  old('paragraph_bottom-'.$language->id) ?></textarea>
		                                            </div>
		                                        </div>
		                                    </div>
		                                <?php endforeach; ?>
	                            	<?php endif; ?>
		
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-sm-12">
									<a href="javascript:;" class="add-fld-more add-section_bottom">+  Add another section</a>
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
											<input type="checkbox" name="agree">
											I accept the <a href="javascript:;">Terms & Conditions</a>
										</label>
									</div>
								</div>
							</div>
							

							<div class="row va-ctr">
								<div class="col-sm-5">
										
									<input type="submit" class="primary-btn dblue" value="Add DMC">
									
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('footer_script')
           

            <script type="text/javascript">

            	$(document).on("click",".remove-add-dmc",function() {
                    $(this).parents('.clone-item').remove();
                });

                $(document).on("click",".remove-add-fleet",function() {
                    $(this).parents('.clone-item').remove();
                });

                $(document).on("click",".remove-add-section_bottom",function() {
                    $(this).parents('.clone-item').remove();
                });


                $(document).ready(function(){

                    $('.add-more-section11').click(function(){
                        section_1();
                    });

                    $('.add-more-fleet').click(function(){
                        fleet();
                    });

                    $('.add-section_bottom').click(function(){
                        section_bottom();
                    });
                });

            	var section_count 	= 	1;
            	var fleet_count 	= 	1;
            	var section_bottom_count 	= 	1;

            	//fleet section
              	function section_bottom()
                {	
                var section_bottom = '';

             	section_bottom+='<input type="hidden" value="" name="section_bottom[]">';
             	section_bottom+='<a href="javascript:;" class="remove-add-section_bottom links-md"><i class="fa fa-times" aria-hidden="true"></i></a>';
				section_bottom+='<div class="row">';				
				section_bottom+='<div class="col-md-6">';				
				section_bottom+='<div class="field wico altr-b">';
				section_bottom+='<div class="addFileStyle drag"><div class="upldwrap"><input type="file" name="section_image_bottom[]" accept="image/*" style="opacity: 0;" class="section_imagefile"><input type="text"> <input type="button" value="Browse" class="grey_btn"></div></div>';
				section_bottom+='</div>';
				section_bottom+='<div class="sectionImage"></div>';
				section_bottom+='</div>';
				section_bottom+='<div class="col-md-6">';
				
			<?php if($languages->count()): ?>
					<?php foreach($languages as $language): ?>
						<?php $iso = $language->{'iso_639-1'}; ?>
				section_bottom+="<div class='row mtpx-30'>";
				section_bottom+='<div class="col-sm-12">';
				section_bottom+='<div class="field lang-{{ $iso }}">';
				section_bottom+='<label>Heading</label>';
				section_bottom+='<input type="text" name="heading_name-{{ $language->id }}['+section_bottom_count+']" placeholder="Vehicle {{ $language->name }}" />';
				section_bottom+='</div>';
				section_bottom+='</div>';
				section_bottom+='</div>';

				section_bottom+="<div class='row mtpx-30'>";
				section_bottom+='<div class="col-sm-12">';
				section_bottom+='<div class="field lang-{{ $iso }}">';
				section_bottom+='<label>Capacity</label>';
				section_bottom+='<textarea rows="2" cols="2" name="paragraph_bottom-{{ $language->id }}['+section_count+']"></textarea>';
				section_bottom+='</div>';
				section_bottom+='</div>';
				section_bottom+='</div>';

                <?php endforeach; ?>
                <?php endif; ?>	

				section_bottom+='</div>';
				section_bottom+='</div>';
                    $('.to-clone-2').append('<div class="clone-item clearfix mtpx-27 test">'+section_bottom+'</div>');
                section_bottom_count++;
                }


				//fleet section
              	function fleet()
                {	
                var fleet = '';
             	fleet+='<input type="hidden" value="" name="fleet[]">';
             	fleet+='<a href="javascript:;" class="remove-add-fleet links-md"><i class="fa fa-times" aria-hidden="true"></i></a>';
				fleet+='<div class="row">';				
				fleet+='<div class="col-md-6">';				
				fleet+='<div class="field wico altr-b">';
				fleet+='<div class="addFileStyle drag"><div class="upldwrap"><input type="file" name="fleet_image[]" accept="image/*" style="opacity: 0;" class="section_imagefile"><input type="text"> <input type="button" value="Browse" class="grey_btn"></div></div>';
				fleet+='</div>';
				fleet+='<div class="sectionImage"></div>';
				fleet+='</div>';
				fleet+='<div class="col-md-6">';
				
			<?php if($languages->count()): ?>
					<?php foreach($languages as $language): ?>
						<?php $iso = $language->{'iso_639-1'}; ?>
				fleet+="<div class='row mtpx-30'>";
				fleet+='<div class="col-sm-12">';
				fleet+='<div class="field lang-{{ $iso }}">';
				fleet+='<label>Heading</label>';
				fleet+='<input type="text" name="vehicle_name-{{ $language->id }}['+fleet_count+']" placeholder="Vehicle {{ $language->name }}" />';
				fleet+='</div>';
				fleet+='</div>';
				fleet+='</div>';

				fleet+="<div class='row mtpx-30'>";
				fleet+='<div class="col-sm-12">';
				fleet+='<div class="field lang-{{ $iso }}">';
				fleet+='<label>Capacity</label>';
				fleet+='<input type="text" name="capacity-{{ $language->id }}['+fleet_count+']" placeholder="Vehicle {{ $language->name }}" />';
				fleet+='</div>';
				fleet+='</div>';
				fleet+='</div>';
				
				
                    
                <?php endforeach; ?>
                <?php endif; ?>	

				fleet+='</div>';
				fleet+='</div>';
                    $('.to-clone-1').append('<div class="clone-item clearfix mtpx-27 test">'+fleet+'</div>');
                fleet_count++;
                }

                //section top
                function section_1()
                {	
                var section_1 = '';
             	section_1+='<input type="hidden" value="" name="section_top[]">';
             	section_1+='<a href="javascript:;" class="remove-add-dmc links-md"><i class="fa fa-times" aria-hidden="true"></i></a>';
				section_1+='<div class="row">';				
				section_1+='<div class="col-md-6">';				
				section_1+='<div class="field wico altr-b">';
				section_1+='<div class="addFileStyle drag"><div class="upldwrap"><input type="file" name="section_image[]" accept="image/*" style="opacity: 0;" class="section_imagefile"><input type="text"> <input type="button" value="Browse" class="grey_btn"></div></div>';
				section_1+='</div>';
				section_1+='<div class="sectionImage"></div>';
				section_1+='</div>';
				section_1+='<div class="col-md-6">';
				
			<?php if($languages->count()): ?>
					<?php foreach($languages as $language): ?>
						<?php $iso = $language->{'iso_639-1'}; ?>
				section_1+="<div class='row mtpx-30'>";
				section_1+='<div class="col-sm-12">';
				section_1+='<div class="field lang-{{ $iso }}">';
				section_1+='<label>Heading</label>';
				section_1+=' <input type="text" name="heading-{{ $language->id }}['+section_count+']" placeholder="Heading {{ $language->name }}" />';
				section_1+='</div>';
				section_1+='</div>';
				section_1+='</div>';

				section_1+="<div class='row mtpx-30'>";
				section_1+='<div class="col-sm-12">';
				section_1+='<div class="field lang-{{ $iso }}">';
				section_1+='<label>paragraph</label>';
				section_1+=' <textarea rows="2" cols="2" name="paragraph-{{ $language->id }}['+section_count+']"></textarea>';
				section_1+='</div>';
				section_1+='</div>';
				section_1+='</div>';
				
				
                    
                    <?php endforeach; ?>
                	<?php endif; ?>	

				section_1+='</div>';
				
                    
     
                	section_1+='</div>';
                    $('.to-clone').append('<div class="clone-item clearfix mtpx-27 test">'+section_1+'</div>');

                    section_count++;
                }
            



            	$("#locality_dropdown").val( $('#locality').val());  

				function readURL(input, selector) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {

                            var img_html = '';
                            img_html += '<figure class="up-img">';
                            img_html += '<img class="thumbnail" src="'+e.target.result+'" />';
                            img_html += '<span class="delete-ico del-img">';
                            img_html += '<i class="fa fa-trash"></i>';
                            img_html += '</span>';
                            img_html += '</figure>';

                            $(selector).html(img_html);
                        }

                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }  

                $(document).on('change',".hotelLogo",function(){
                    readURL(this,'#logoHotel');
                });

                $(document).on('change',".section_imagefile",function(){
                    readURL(this,$(this).parent().parent().parent().next());
                });
               
  	
                let placeSearch;
                let autocomplete;
                const componentForm = {
                    //street_number: "short_name",
                    //route: "long_name",
                    locality: "long_name",
                    administrative_area_level_1: "short_name",
                    //country: "long_name",
                    postal_code: "short_name"
                };

                function initAutocomplete()
                {
                    autocomplete = new google.maps.places.Autocomplete(
                        document.getElementById("dmc_location"),
                        {
                            types: ["geocode","establishment"]
                        }
                    );

                    autocomplete.addListener("place_changed", fillInAddress);
                }

                function fillInAddress() {
                    // Get the place details from the autocomplete object.
                    const place = autocomplete.getPlace();

                    for (const component in componentForm) {
                        document.getElementById(component).value = "";
                        document.getElementById(component).disabled = false;
                    } // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.

                    for (const component of place.address_components) {
                        const addressType = component.types[0];

                        if (componentForm[addressType]) {
                            const val = component[componentForm[addressType]];
                            document.getElementById(addressType).value = val;
                        }
                    }

                    var lat = place.geometry.location.lat();
                    var lng = place.geometry.location.lng();

                    if(lat != undefined)
                        document.getElementById("latitude").value = lat;

                    if(lng != undefined)
                        document.getElementById("longitude").value = lng;
                } // Bias the autocomplete object to the user's geographical location,

                //Auto complete for nearby locations
                function nearbyautocompleteDefault()
                {
                    var cindex = 0;

                    $('.to-clone-hotel-3-old .nearby_autocomplete').each(function(){
                        var ccls = $(this).attr('data-index');
                        var autocomp = new google.maps.places.Autocomplete(
                            document.getElementsByClassName("nearby_autocomplete")[cindex],
                            {
                                types: ["geocode","establishment"]
                            }
                        );

                        autocomp.latitude_class = 'nearby_latitude'+ccls;
                        autocomp.longitude_class = 'nearby_longitude'+ccls;

                        google.maps.event.addListener(autocomp,"place_changed", function(){
                            var plc = autocomp.getPlace();

                            var lat = plc.geometry.location.lat();
                            var lng = plc.geometry.location.lng();

                            $('.'+this.latitude_class).val(lat);
                            $('.'+this.longitude_class).val(lng);
                        });

                        cindex++;
                    });
                }

                $(document).ready(function(){
                    nearbyautocompleteDefault();
                });
                //Auto complete for nearby locations ends

            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC75FUC_L6EcgsaY8WTjDVHghNLv9uQmGk&callback=initAutocomplete&libraries=places&v=weekly" defer ></script>
@endsection




