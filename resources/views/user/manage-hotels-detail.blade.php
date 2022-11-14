
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
@section('body-class') add-hotel-pg @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xl-11">	

							<div class="row">
								<div class="col-xl-8">
									<h2>Edit Hotel</h2>
								
									<div class="row">
										<div class="col-sm-12">
											<div class="field">
												<label>Hotel Name*</label>
												<input type="text" name="" value="Antis Hotel">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="field">
												<label>Hotel Address*</label>
												<input type="text" name="" value="Sultanahmet Mah. Akbiyik Degirmeni Sok. No:98, Sultanahmet, Istanbul, Turkey, 34122">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-4">
											<div class="field">
												<label>City*</label>
												<input type="text" name="" value="Istanbul">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="field">
												<label>State*</label>
												<select>
													<option>Cağaloğlu</option>
												</select>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="field">
												<label>Zip</label>
												<input type="text" name="" value="34010">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<h4>Space</h4>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Meeting Room*</label>
												<input type="text" name="" value="10">
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Meeting Space*</label>
												<input type="text" name="" value="10">
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Guest Rooms*</label>
												<input type="text" name="" value="500">
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Restaurant & Bars*</label>
												<input type="text" name="" value="20">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Chain Name</label>
												<input type="text" name="" value="Paradise Resort">
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Built Year</label>
												<input type="text" name="" value="2006">
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Total Meeting Space Area</label>
												<input type="text" name="" value="50,000 sq. ft.">
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Brand Name</label>
												<input type="text" name="" value="Paradise Hotel">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Renovation Year</label>
												<input type="text" name="" value="2016">
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>All-inclusive Hotel</label>
												<select>
													<option>Yes</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>AAA Rating</label>
												<select id="aaa">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5" selected="">5</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Trip Advisor Rating</label>
												<select>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="2.5">2.5</option>
													<option value="3">3</option>
													<option value="3.5">3.5</option>
													<option value="4">4</option>
													<option value="4.5">4.5</option>
													<option value="5" selected="">5</option>
												</select>
											</div>
										</div>
									</div>


									<div class="row">
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>DMC</label>
												<input type="text" name="" value="Link Meeting">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<hr>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<h4>Amenities</h4>
										</div>
									</div>

									<div class="row show-amm">
										<div class="col-sm-12">
											<div class="dt">
												<div class="row">
													<div class="amenty-bx internet" style="display: block;">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-wifi.png', 'WIFI') }}
															</figure>
															<span>Internet / Wi-Fi</span>
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx airport" style="display: block;">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-plane.png', '') }}
															</figure>
															<span>Airport transfer</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx coffee">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-coffee.png', '') }}
															</figure>
															<span>Coffee Machine</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx iron">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-iron.png', '') }}
															</figure>
															<span>Iron Board and Iron</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx bathrobes">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-bathrobes.png', '') }}
															</figure>
															<span>Bathrobes</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx work">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-work-stations.png', '') }}
															</figure>
															<span>Work station</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx minibar">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-minibar.png', '') }}
															</figure>
															<span>Minibar</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx jacuzzi">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-jacuzzi.png', '') }}
															</figure>
															<span>Jacuzzi</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx bathtub">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-bathtub.png', '') }}
															</figure>
															<span>Bathtub</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx kosher">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-kosher.png', '') }}
															</figure>
															<span>Kosher Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx halal">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-halal.png', '') }}
															</figure>
															<span>Halal Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx vegan">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-vegan.png', '') }}
															</figure>
															<span>Vegan Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx gluten">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-gluten.png', '') }}
															</figure>
															<span>Gluten Free Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx allergic">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-allergic.png', '') }}
															</figure>
															<span>Allergic Options</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="field wico">
												<select class="add-hotel-slct">
													<option>Add an Amenity</option>
													<option value="internet">Internet / Wi-Fi</option>
													<option value="airport">Airport transfers</option>
													<option value="coffee">Coffee Machine</option>
													<option value="iron">Iron Board and Iron</option>
													<option value="bathrobes">Bathrobes</option>
													<option value="work">Work station</option>
													<option value="minibar">Minibar</option>
													<option value="jacuzzi">Jacuzzi</option>
													<option value="bathtub">Bathtub</option>
													<option value="kosher">Kosher Food</option>
													<option value="halal">Halal Food</option>
													<option value="vegan">Vegan Food</option>
													<option value="gluten">Gluten Free Food</option>
													<option value="allergic">Allergic Options</option>
												</select>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<h4>Facilities</h4>
										</div>
									</div>
									<div class="row show-amm">
										<div class="col-sm-12">
											<div class="dt">
												<div class="row">
													<div class="amenty-bx internet">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-wifi.png', 'WIFI') }}
															</figure>
															<span>Internet / Wi-Fi</span>
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx airport">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-plane.png', '') }}
															</figure>
															<span>Airport transfer</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx coffee">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-coffee.png', '') }}
															</figure>
															<span>Coffee Machine</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx iron">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-iron.png', '') }}
															</figure>
															<span>Iron Board and Iron</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx bathrobes">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-bathrobes.png', '') }}
															</figure>
															<span>Bathrobes</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx work">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-work-stations.png', '') }}
															</figure>
															<span>Work station</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx minibar">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-minibar.png', '') }}
															</figure>
															<span>Minibar</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx jacuzzi">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-jacuzzi.png', '') }}
															</figure>
															<span>Jacuzzi</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx bathtub">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-bathtub.png', '') }}
															</figure>
															<span>Bathtub</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx kosher">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-kosher.png', '') }}
															</figure>
															<span>Kosher Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx halal">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-halal.png', '') }}
															</figure>
															<span>Halal Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx vegan">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-vegan.png', '') }}
															</figure>
															<span>Vegan Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx gluten">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-gluten.png', '') }}
															</figure>
															<span>Gluten Free Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx allergic">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-allergic.png', '') }}
															</figure>
															<span>Allergic Options</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="field wico">
												<select class="add-hotel-slct">
													<option>Add a Facility</option>
													<option value="internet">Internet / Wi-Fi</option>
													<option value="airport">Airport transfers</option>
													<option value="coffee">Coffee Machine</option>
													<option value="iron">Iron Board and Iron</option>
													<option value="bathrobes">Bathrobes</option>
													<option value="work">Work station</option>
													<option value="minibar">Minibar</option>
													<option value="jacuzzi">Jacuzzi</option>
													<option value="bathtub">Bathtub</option>
													<option value="kosher">Kosher Food</option>
													<option value="halal">Halal Food</option>
													<option value="vegan">Vegan Food</option>
													<option value="gluten">Gluten Free Food</option>
													<option value="allergic">Allergic Options</option>
												</select>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<h4>Services</h4>
										</div>
									</div>
									<div class="row show-amm">
										<div class="col-sm-12">
											<div class="dt">
												<div class="row">
													<div class="amenty-bx internet">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-wifi.png', 'WIFI') }}
															</figure>
															<span>Internet / Wi-Fi</span>
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx airport">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-plane.png', '') }}
															</figure>
															<span>Airport transfer</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx coffee">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-coffee.png', '') }}
															</figure>
															<span>Coffee Machine</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx iron">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-iron.png', '') }}
															</figure>
															<span>Iron Board and Iron</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx bathrobes">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-bathrobes.png', '') }}
															</figure>
															<span>Bathrobes</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx work">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-work-stations.png', '') }}
															</figure>
															<span>Work station</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx minibar">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-minibar.png', '') }}
															</figure>
															<span>Minibar</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx jacuzzi">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-jacuzzi.png', '') }}
															</figure>
															<span>Jacuzzi</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx bathtub">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-bathtub.png', '') }}
															</figure>
															<span>Bathtub</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx kosher">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-kosher.png', '') }}
															</figure>
															<span>Kosher Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx halal">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-halal.png', '') }}
															</figure>
															<span>Halal Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx vegan">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-vegan.png', '') }}
															</figure>
															<span>Vegan Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx gluten">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-gluten.png', '') }}
															</figure>
															<span>Gluten Free Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx allergic">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-allergic.png', '') }}
															</figure>
															<span>Allergic Options</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="field wico">
												<select class="add-hotel-slct">
													<option>Add a Service</option>
													<option value="internet">Internet / Wi-Fi</option>
													<option value="airport">Airport transfers</option>
													<option value="coffee">Coffee Machine</option>
													<option value="iron">Iron Board and Iron</option>
													<option value="bathrobes">Bathrobes</option>
													<option value="work">Work station</option>
													<option value="minibar">Minibar</option>
													<option value="jacuzzi">Jacuzzi</option>
													<option value="bathtub">Bathtub</option>
													<option value="kosher">Kosher Food</option>
													<option value="halal">Halal Food</option>
													<option value="vegan">Vegan Food</option>
													<option value="gluten">Gluten Free Food</option>
													<option value="allergic">Allergic Options</option>
												</select>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<h4>Recreational Activities</h4>
										</div>
									</div>
									<div class="row show-amm">
										<div class="col-sm-12">
											<div class="dt">
												<div class="row">
													<div class="amenty-bx internet">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-wifi.png', 'WIFI') }}
															</figure>
															<span>Internet / Wi-Fi</span>
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx airport">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-plane.png', '') }}
															</figure>
															<span>Airport transfer</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx coffee">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-coffee.png', '') }}
															</figure>
															<span>Coffee Machine</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx iron">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-iron.png', '') }}
															</figure>
															<span>Iron Board and Iron</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx bathrobes">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-bathrobes.png', '') }}
															</figure>
															<span>Bathrobes</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx work">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-work-stations.png', '') }}
															</figure>
															<span>Work station</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx minibar">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-minibar.png', '') }}
															</figure>
															<span>Minibar</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx jacuzzi">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-jacuzzi.png', '') }}
															</figure>
															<span>Jacuzzi</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx bathtub">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-bathtub.png', '') }}
															</figure>
															<span>Bathtub</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx kosher">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-kosher.png', '') }}
															</figure>
															<span>Kosher Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx halal">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-halal.png', '') }}
															</figure>
															<span>Halal Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx vegan">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-vegan.png', '') }}
															</figure>
															<span>Vegan Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx gluten">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-gluten.png', '') }}
															</figure>
															<span>Gluten Free Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx allergic">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-allergic.png', '') }}
															</figure>
															<span>Allergic Options</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="field wico">
												<select class="add-hotel-slct">
													<option>Add an Activity</option>
													<option value="internet">Internet / Wi-Fi</option>
													<option value="airport">Airport transfers</option>
													<option value="coffee">Coffee Machine</option>
													<option value="iron">Iron Board and Iron</option>
													<option value="bathrobes">Bathrobes</option>
													<option value="work">Work station</option>
													<option value="minibar">Minibar</option>
													<option value="jacuzzi">Jacuzzi</option>
													<option value="bathtub">Bathtub</option>
													<option value="kosher">Kosher Food</option>
													<option value="halal">Halal Food</option>
													<option value="vegan">Vegan Food</option>
													<option value="gluten">Gluten Free Food</option>
													<option value="allergic">Allergic Options</option>
												</select>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<h4>Venue Accessed by</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="field">
												<input type="text" name="" value="Add an address or place">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<h4>Equipment</h4>
										</div>
									</div>
									<div class="row show-amm">
										<div class="col-sm-12">
											<div class="dt">
												<div class="row">
													<div class="amenty-bx internet">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-wifi.png', 'WIFI') }}
															</figure>
															<span>Internet / Wi-Fi</span>
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx airport">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-plane.png', '') }}
															</figure>
															<span>Airport transfer</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx coffee">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-coffee.png', '') }}
															</figure>
															<span>Coffee Machine</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx iron">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-iron.png', '') }}
															</figure>
															<span>Iron Board and Iron</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx bathrobes">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-bathrobes.png', '') }}
															</figure>
															<span>Bathrobes</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx work">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-work-stations.png', '') }}
															</figure>
															<span>Work station</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx minibar">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-minibar.png', '') }}
															</figure>
															<span>Minibar</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx jacuzzi">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-jacuzzi.png', '') }}
															</figure>
															<span>Jacuzzi</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx bathtub">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-bathtub.png', '') }}
															</figure>
															<span>Bathtub</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx kosher">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-kosher.png', '') }}
															</figure>
															<span>Kosher Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx halal">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-halal.png', '') }}
															</figure>
															<span>Halal Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx vegan">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-vegan.png', '') }}
															</figure>
															<span>Vegan Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx gluten">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-gluten.png', '') }}
															</figure>
															<span>Gluten Free Food</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
													<div class="amenty-bx allergic">
														<div class="cont">
															<figure>
																{{ HTML::image('images/icon-allergic.png', '') }}
															</figure>
															<span>Allergic Options</span> 
															<i class="fa fa-times"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="field wico">
												<select class="add-hotel-slct">
													<option>Add an Equipment</option>
													<option value="internet">Internet / Wi-Fi</option>
													<option value="airport">Airport transfers</option>
													<option value="coffee">Coffee Machine</option>
													<option value="iron">Iron Board and Iron</option>
													<option value="bathrobes">Bathrobes</option>
													<option value="work">Work station</option>
													<option value="minibar">Minibar</option>
													<option value="jacuzzi">Jacuzzi</option>
													<option value="bathtub">Bathtub</option>
													<option value="kosher">Kosher Food</option>
													<option value="halal">Halal Food</option>
													<option value="vegan">Vegan Food</option>
													<option value="gluten">Gluten Free Food</option>
													<option value="allergic">Allergic Options</option>
												</select>
											</div>
										</div>
									</div>


									<div class="row">
										<div class="col-12">
											<hr>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<h4>Meeting Space (in sq. ft.)</h4>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6 col-md-3">
											<div class="field mbpx-10">
												<label>Total Meeting Space</label>
												<input type="text" name="" value="50,000 sq. ft.">
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field mbpx-10">
												<label>Largest Room</label>
												<input type="text" name="" value="19,375 sq. ft.">
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field mbpx-10">
												<label>Second Largest Room</label>
												<input type="text" name="" value="7,965 sq. ft.">
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field mbpx-10">
												<label>Exhibit Space</label>
												<input type="text" name="" value="50,000 sq. ft.">
											</div>
										</div>
									</div>

									<div class="row mbpx-25">
										<div class="col-sm-12">
											<a href="javascript:;" class="download">
												<img src="http://dev.weblogies.tech/link-meeting/public/images/icon-file-download.png" alt="File">
												Visualizer - enjoy a walk through our hotel!

												<span>
													<i class="fa fa-trash"></i>
												</span>
											</a>
											<a href="javascript:;" class="download">
												<img src="http://dev.weblogies.tech/link-meeting/public/images/icon-file-download.png" alt="File">
												ijVENUES factsheet

												<span>
													<i class="fa fa-trash"></i>
												</span>
											</a>
										</div>
									</div>

									<div class="row mbpx-0">
										<div class="col-sm-12">
											<div class="addFileStyle">
												<input type="file" >
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<hr>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<h4>Room</h4>
										</div>
									</div>

									<div class="to-clone-hotel">
										<div class="row">
											<div class="col-sm-12">
												<div class="field wico altr-b">
													<label>Name</label>
													<input type="text" name="">
													<span class="delete-ico remove-add-hotel">
														<i class="fa fa-trash"></i>
													</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>Area</label>
													<input type="text" name="">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>Height</label>
													<input type="text" name="">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>Size</label>
													<input type="text" name="">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>Cocktail</label>
													<input type="text" name="">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>Theatre</label>
													<input type="text" name="">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>School</label>
													<input type="text" name="">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>Banquet</label>
													<input type="text" name="">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>Imperial</label>
													<input type="text" name="">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>U-shape</label>
													<input type="text" name="">
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<a href="javascript:;" class="add-more-hotel">+  Add another room</a>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<hr>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<h4 class="mbpx-20">Catering Service</h4>
											<h5>Tell us more about your catering services</h5>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<textarea cols="2" rows="2" class="mbpx-15">Phasellus at metus tempor, interdum libero in, pulvinar lectus. Nam congue justo at ultrices commodo. Sed nec venenatis mauris, a viverra elit. Sed nec pulvinar dolor. Mauris posuere dapibus sapien, non scelerisque neque. In hac habitasse platea dictumst. Mauris facilisis leo eu semper tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris eu viverra neque. Sed mattis sodales ornare. Vivamus imperdiet magna sit amet ligula eleifend gravida. Proin quis volutpat augue. Nam consequat orci eget dictum consectetur. In auctor lectus tempor.</textarea>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12 mbpx-10">
											<figure class="up-img">
												{{ HTML::image('images/add-hot-cat-img.jpg', 'File') }}
												<span class="delete-ico del-img">
													<i class="fa fa-trash"></i>
												</span>
											</figure>
										</div>
										<div class="col-sm-12">											
											<div class="addFileStyle photo">
											    <input type="file" />
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<hr>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<h4>Guest Rooms</h4>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Total Guest Rooms</label>
												<input type="text" name="" value="10">
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Doubles (2 beds)</label>
												<input type="text" name="" value="10">
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Room Types</label>
												<input type="text" name="" value="31">
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="field">
												<label>Tax</label>
												<div class="tax-terms">
													<label>Yes <input type="radio" class="yes" name="tax-dt" checked=""></label>
													<label>No <input type="radio" class="no" name="tax-dt"></label>
												</div>
											</div>
										</div>
									</div>

									<div class="row show-if-tax" style="display: block;">
										<div class="col-sm-12">										
											<div class="field">
												<input type="text" name="" value="Type of taxes">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<hr>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<h4>Room Details</h4>
										</div>
									</div>

									<div class="to-clone-hotel-1 show-amm">
										<div class="row">
											<div class="col-sm-6 col-md-9">
												<div class="field wico altr-b">
													<label>Name</label>
													<input type="text" name="" value="Premium Room (Main Wing)">
													<span class="delete-ico remove-add-hotel">
														<i class="fa fa-trash"></i>
													</span>
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>Quantity</label>
													<input type="text" name="" value="300">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<div class="dt">
													<div class="row">
														<div class="amenty-bx internet" style="display: block;">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-wifi.png', 'WIFI') }}
																</figure>
																<span>Internet / Wi-Fi</span>
																<i class="fa fa-times"></i>
															</div>
														</div>
														<div class="amenty-bx airport" style="display: block;">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-plane.png', '') }}
																</figure>
																<span>Airport transfer</span> 
																<i class="fa fa-times"></i>
															</div>
														</div>
														<div class="amenty-bx coffee">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-coffee.png', '') }}
																</figure>
																<span>Coffee Machine</span> 
																<i class="fa fa-times"></i>
															</div>
														</div>
														<div class="amenty-bx iron">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-iron.png', '') }}
																</figure>
																<span>Iron Board and Iron</span> 
																<i class="fa fa-times"></i>
															</div>
														</div>
														<div class="amenty-bx bathrobes">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-bathrobes.png', '') }}
																</figure>
																<span>Bathrobes</span> 
																<i class="fa fa-times"></i>
															</div>
														</div>
														<div class="amenty-bx work">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-work-stations.png', '') }}
																</figure>
																<span>Work station</span> 
																<i class="fa fa-times"></i>
															</div>
														</div>
														<div class="amenty-bx minibar">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-minibar.png', '') }}
																</figure>
																<span>Minibar</span> 
																<i class="fa fa-times"></i>
															</div>
														</div>
														<div class="amenty-bx jacuzzi">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-jacuzzi.png', '') }}
																</figure>
																<span>Jacuzzi</span> 
																<i class="fa fa-times"></i>
															</div>
														</div>
														<div class="amenty-bx bathtub">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-bathtub.png', '') }}
																</figure>
																<span>Bathtub</span> 
																<i class="fa fa-times"></i>
															</div>
														</div>
														<div class="amenty-bx kosher">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-kosher.png', '') }}
																</figure>
																<span>Kosher Food</span> 
																<i class="fa fa-times"></i>
															</div>
														</div>
														<div class="amenty-bx halal">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-halal.png', '') }}
																</figure>
																<span>Halal Food</span> 
																<i class="fa fa-times"></i>
															</div>
														</div>
														<div class="amenty-bx vegan">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-vegan.png', '') }}
																</figure>
																<span>Vegan Food</span> 
																<i class="fa fa-times"></i>
															</div>
														</div>
														<div class="amenty-bx gluten">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-gluten.png', '') }}
																</figure>
																<span>Gluten Free Food</span> 
																<i class="fa fa-times"></i>
															</div>
														</div>
														<div class="amenty-bx allergic">
															<div class="cont">
																<figure>
																	{{ HTML::image('images/icon-allergic.png', '') }}
																</figure>
																<span>Allergic Options</span> 
																<i class="fa fa-times"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="field wico">
													<select class="add-hotel-slct">
														<option>Add a Facility</option>
														<option value="internet">Internet / Wi-Fi</option>
														<option value="airport">Airport transfers</option>
														<option value="coffee">Coffee Machine</option>
														<option value="iron">Iron Board and Iron</option>
														<option value="bathrobes">Bathrobes</option>
														<option value="work">Work station</option>
														<option value="minibar">Minibar</option>
														<option value="jacuzzi">Jacuzzi</option>
														<option value="bathtub">Bathtub</option>
														<option value="kosher">Kosher Food</option>
														<option value="halal">Halal Food</option>
														<option value="vegan">Vegan Food</option>
														<option value="gluten">Gluten Free Food</option>
														<option value="allergic">Allergic Options</option>
													</select>
												</div>
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-sm-12">
											<a href="javascript:;" class="add-more-hotel-1 add-mre">+  Add another room</a>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<hr>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<h4>Resturant & Bar</h4>
										</div>
									</div>

									<div class="to-clone-hotel-2">

										<div class="row">
											<div class="col-sm-12">
												<div class="field wico altr-b">
													<label>Name</label>
													<input type="text" name="" value="Naons">
													<span class="delete-ico remove-add-hotel">
														<i class="fa fa-trash"></i>
													</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<div class="field">
													<label>More Information</label>
													<input type="text" name="" value="International dishes prepare infront of you and served buffet-style">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>Cuisine</label>
													<input type="text" name="" value="International Buffet">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>Opening Time</label>
													<select>
														<option>Breakfast to Dinner</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>Dress Code</label>
													<select>
														<option>Resort Casual</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="field">
													<label>Access</label>
													<select>
														<option>Open for everyone</option>
													</select>
												</div>
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-sm-12">
											<a href="javascript:;" class="add-more-hotel-2 add-mre">+  Add another Restaurant or Bar</a>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<hr>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
											<h4>Nearby Places</h4>
										</div>
									</div>

									<div class="to-clone-hotel-3">
										<div class="row">
											<div class="col-sm-12">
												<div class="field wico altr-c">
													<i class="fa fa-map-marker"></i>
													<input type="text" name="" value="Hagia Sophia Museum">
													<span class="delete-ico remove-add-hotel">
														<i class="fa fa-trash"></i>
													</span>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<a href="javascript:;" class="add-more-hotel-3 add-mre">+  Add another Place</a>
										</div>
									</div>

								</div>	


								<div class="col-xl-4 rht-sd">
									<h4>Upload Hotel Photos & Video</h4>

									<div class="row">
										<div class="col-sm-12">											
											<div class="upload-bx">
												<div class="addFileStyle photo">
											    <input type="file" />
											</div>
											</div>
										</div>

										<div class="col-sm-12 mbpx-30">	
											<figure class="show-img-multi">
												{{ HTML::image('images/hotel-dt-img-2.jpg', 'Link Meetings') }}

												<span class="delete-ico del-img-multi">
													<i class="fa fa-trash"></i>
												</span>

												<h6><i class="fa fa-picture-o" aria-hidden="true"></i> Make It Cover</h6>
											</figure>
											<figure class="show-img-multi">
												{{ HTML::image('images/hotel-dt-img-3.jpg', 'Link Meetings') }}

												<span class="delete-ico del-img-multi">
													<i class="fa fa-trash"></i>
												</span>

												<h6><i class="fa fa-picture-o" aria-hidden="true"></i> Make It Cover</h6>
											</figure>
											<figure class="show-img-multi">
												{{ HTML::image('images/hotel-dt-img-4.jpg', 'Link Meetings') }}

												<span class="delete-ico del-img-multi">
													<i class="fa fa-trash"></i>
												</span>

												<h6><i class="fa fa-picture-o" aria-hidden="true"></i> Make It Cover</h6>
											</figure>		
										</div>
									</div>

									<h4>Add Tags</h4>

									<div class="show-amm mbpx-20">

										<div class="row">
											<div class="col-sm-12">
												<div class="field mbpx-15">
													<select class="add-hotel-slct">
														<option>Add Tags</option>
														<option value="beach">Beach Resort</option>
														<option value="c-hotel">City Hotel</option>
														<option value="c-resort">City Resort</option>
														<option value="sky-resort">Sky Resort</option>
														<option value="spa">Spa wellness</option>
														<option value="moun">Mountain & Countryside Resort</option>
													</select>
												</div>
											</div>
										</div>
										<div class="dt">
											<div class="row">
												<div class="col-sm-12 ">
													<div class="amenty-bx tg beach" style="display: block;">
														<span>Beach Resort</span>
														<i class="fa fa-times"></i>
													</div>

													<div class="amenty-bx tg c-hotel" style="display: block;">
														<span>City Hotel</span>
														<i class="fa fa-times"></i>
													</div>


													<div class="amenty-bx tg c-resort">
														<span>City Resort</span>
														<i class="fa fa-times"></i>
													</div>


													<div class="amenty-bx tg sky-resort">
														<span>Sky Resort</span>
														<i class="fa fa-times"></i>
													</div>


													<div class="amenty-bx tg spa">
														<span>Spa wellness</span>
														<i class="fa fa-times"></i>
													</div>

													<div class="amenty-bx tg moun">
														<span>Mountain & Countryside Resort</span>
														<i class="fa fa-times"></i>
													</div>
												</div>
											</div>
										</div>
									</div>

									<h4>Add Users</h4>

									<div class="show-amm mbpx-30">

										<div class="row">
											<div class="col-sm-12">
												<div class="field mbpx-15">
													<select class="add-hotel-slct">
														<option>Add Users</option>
														<option value="mark">Mark Manson</option>
														<option value="robert">Robert Shulz</option>
													</select>
												</div>
											</div>
										</div>
										<div class="dt">
											<div class="row">
												<div class="col-sm-12 ">
													<div class="amenty-bx mark mbpx-15" style="display: block;">
														<span>Mark Manson</span>
														<i class="fa fa-times"></i>
													</div>
												</div>
												<div class="col-sm-12 ">
													<div class="amenty-bx robert mbpx-15" style="display: block;">
														<span>Robert Shulz</span>
														<i class="fa fa-times"></i>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="row mbpx-20">
										<div class="col-sm-12">
											<h4>Hotel Link</h4>
											<div class="field wico altr-b ht-link">
												<input type="text" value="www.linkmeetings.com/antishotel" name="">
												<span class="delete-ico mtpx-0">
													<i class="fa fa-link" aria-hidden="true"></i>
												</span>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<a href="{{ URL::to('/manage-hotels') }}" class="primary-btn dblue-bdr-altr extended mbpx-13"><i class="fa fa-eye-slash" aria-hidden="true"></i> Update Information</a>{{-- 
											<a href="{{ URL::to('/manage-hotels') }}" class="primary-btn redbdr extended"><i class="fa fa-trash" aria-hidden="true"></i> Delete this Hotel</a> --}}
										</div>
									</div>
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




