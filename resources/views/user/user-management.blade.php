
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
									<a data-fancybox="add-user" data-src="#add-user" href="javascript:;" class="primary-btn dblue">+ Add User</a>
								</li>
							</ul>
						</div>
					</div>
					<table class="display info-data-user">
					    <thead>
					        <tr>
					            <th>ID</th>
					            <th>Full Name</th>
					            <th>Email Address</th>
					            <th>Phone Number</th>
					            <th>Hotel</th>
					            <th>Position</th>
					            <th width="27%">&nbsp;</th>
					            
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>0011</td>
					            <td>Mark Manson</td>
					            <td>markmanson@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Mardi Gras Hotel & Casino</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Robert Shulz</td>
					            <td>robertshulz@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Sunway Velocity Hotel</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>	
					        <tr>
					            <td>0011</td>
					            <td>Mark Manson</td>
					            <td>markmanson@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Mardi Gras Hotel & Casino</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Robert Shulz</td>
					            <td>robertshulz@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Sunway Velocity Hotel</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mark Manson</td>
					            <td>markmanson@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Mardi Gras Hotel & Casino</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Robert Shulz</td>
					            <td>robertshulz@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Sunway Velocity Hotel</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mark Manson</td>
					            <td>markmanson@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Mardi Gras Hotel & Casino</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Robert Shulz</td>
					            <td>robertshulz@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Sunway Velocity Hotel</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mark Manson</td>
					            <td>markmanson@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Mardi Gras Hotel & Casino</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Robert Shulz</td>
					            <td>robertshulz@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Sunway Velocity Hotel</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mark Manson</td>
					            <td>markmanson@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Mardi Gras Hotel & Casino</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Robert Shulz</td>
					            <td>robertshulz@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Sunway Velocity Hotel</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mark Manson</td>
					            <td>markmanson@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Mardi Gras Hotel & Casino</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Robert Shulz</td>
					            <td>robertshulz@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Sunway Velocity Hotel</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mark Manson</td>
					            <td>markmanson@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Mardi Gras Hotel & Casino</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Robert Shulz</td>
					            <td>robertshulz@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Sunway Velocity Hotel</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mark Manson</td>
					            <td>markmanson@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Mardi Gras Hotel & Casino</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Robert Shulz</td>
					            <td>robertshulz@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Sunway Velocity Hotel</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Mark Manson</td>
					            <td>markmanson@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Mardi Gras Hotel & Casino</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
					            		<i class="fa fa-pencil" aria-hidden="true"></i>
					            	</a>
					            	<a href="javascript:;" class="tab-btn delete">
					            		<i class="fa fa-trash" aria-hidden="true"></i>
					            	</a>
					            </td>
					        </tr>
					        <tr>
					            <td>0011</td>
					            <td>Robert Shulz</td>
					            <td>robertshulz@gmail.com</td>
					            <td>+1 256 9876</td>
					            <td>Sunway Velocity Hotel</td>
					            <td>Asst. Manager</td>
					            <td class="text-right">
					            	<a href="{{ URL::to('/user-detail') }}" class="tab-btn edit">
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




