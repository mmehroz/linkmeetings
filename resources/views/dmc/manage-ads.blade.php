

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
@section('body-class') @stop
@section('content')

<div class="content-area">
	<div class="container-fluid">

		<div class="row">
			<div class="col-12">
				<div class="panel">
					<div class="panel-tab-info">
						<h2>Manage Ads</h2>
						
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
									<a href="{{ URL::to('/dmc/create-an-ad') }}" class="primary-btn dblue">+ Create An Ad</a>
								</li>
							</ul>
						</div>
					</div>
					<table class="display info-data-user">
					    <thead>
					        <tr>
					            <th>ID</th>
					            <th>Hotel</th>
					            <th>Position</th>
					            <th>From</th>
					            <th>To</th>
					            <th>Created On</th>
					            <th>Price</th>
					            <th>Status</th>
					            <th width="15%">&nbsp;</th>
					            
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>0011</td>
					            <td>Mardi Gras Hotel & Casino</td>					            
					            <td>Hot Deals Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$109.99</td>
					            <td class="t-green">Active</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Sunway Velocity Hotel</td>				            
					            <td>Search Page Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$80.99</td>
					            <td class="t-green">Active</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mardi Gras Hotel & Casino</td>					            
					            <td>Home Page Slide Main Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$109.99</td>
					            <td class="t-green">Active</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mardi Gras Hotel & Casino</td>					            
					            <td>Hot Deals Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$109.99</td>
					            <td class="t-green">Active</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Sunway Velocity Hotel</td>				            
					            <td>Search Page Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$80.99</td>
					            <td class="t-green">Active</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mardi Gras Hotel & Casino</td>					            
					            <td>Home Page Slide Main Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$109.99</td>
					            <td class="t-green">Active</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mardi Gras Hotel & Casino</td>					            
					            <td>Hot Deals Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$109.99</td>
					            <td class="t-green">Active</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Sunway Velocity Hotel</td>				            
					            <td>Search Page Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$80.99</td>
					            <td class="t-green">Active</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mardi Gras Hotel & Casino</td>					            
					            <td>Home Page Slide Main Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$109.99</td>
					            <td class="t-orange">Pending</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mardi Gras Hotel & Casino</td>					            
					            <td>Hot Deals Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$109.99</td>
					            <td class="t-orange">Pending</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Sunway Velocity Hotel</td>				            
					            <td>Search Page Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$80.99</td>
					            <td class="t-orange">Pending</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mardi Gras Hotel & Casino</td>					            
					            <td>Home Page Slide Main Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$109.99</td>
					            <td class="t-orange">Pending</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mardi Gras Hotel & Casino</td>					            
					            <td>Hot Deals Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$109.99</td>
					            <td class="t-orange">Pending</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Sunway Velocity Hotel</td>				            
					            <td>Search Page Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$80.99</td>
					            <td class="t-red">Expired</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mardi Gras Hotel & Casino</td>					            
					            <td>Home Page Slide Main Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$109.99</td>
					            <td class="t-red">Expired</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mardi Gras Hotel & Casino</td>					            
					            <td>Hot Deals Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$109.99</td>
					            <td class="t-red">Expired</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Sunway Velocity Hotel</td>				            
					            <td>Search Page Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$80.99</td>
					            <td class="t-red">Expired</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mardi Gras Hotel & Casino</td>					            
					            <td>Home Page Slide Main Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$109.99</td>
					            <td class="t-red">Expired</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mardi Gras Hotel & Casino</td>					            
					            <td>Hot Deals Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$109.99</td>
					            <td class="t-red">Expired</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Sunway Velocity Hotel</td>				            
					            <td>Search Page Ad</td>
					            <td>Apr 22, 2020</td>
					            <td>Apr 24, 2020</td>
					            <td>Apr 05, 2020</td>
					            <td>$80.99</td>
					            <td class="t-red">Expired</td>
					            <td class="text-right">
					            	<a href="javascript:;" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        			       
					    </tbody>
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
    			<option>Mardi Gras Hotel & Casino</option>
    			<option>Sunway Velocity Hotel</option>
    		</select>
    	</div>
    	<div>
    		<a href="javascript:;" class="primary-btn dblue">+ Add User</a>
    	</div>
    </form>
</div>

@endsection




