@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
<!--========= Content part Start here =========-->
<div class="content">
   <!--Info Panel  -->
   <div class="card card-light text-center">
	 <div class="card-body">
		 <label for="">Student ID: <strong>{{ $sid }}</strong></label>
		 <label for=""> | Name: <strong>{{ ucwords($name) }}</strong></label>
		 <label for=""> | Class: <strong>{{ ucwords($class) }}</strong></label>
		 <label for=""> | Year: <strong>{{ ucwords($year) }}</strong></label>
	 </div>
   </div>
   <!--Info Panel  -->

   <div class="x-panel">

	   <div class="panel panel-primary">
		   <div class="clearfix"></div>
		   <div class="panel-heading">Add Place and Reward </div>
		   <div class="panel-body">

			  <form action={{ route('storeExtraEntry') }} method="post">
				  {{ csrf_field() }}
				  <input type="hidden" name="sid" value={{ $sid }}>
				  <input type="hidden" name="class" value="{{ $class  }}">
				  <input type="hidden" name="year" value={{ $year }}>

				   <div class="container panel-content">
					   <div class="row ">

						   <div class="table-responsive col-md-12">
							   <table id="sort2" class=" table table-bordered table-striped  table-hover">

								   @if(!empty($indoor_list) || !empty($outdoor_list) )
								    <!--info alert message  -->
								<div class="alert alert-info">
									<strong>Please fillout all place field.</strong>
								</div>
								<!--info alert message  -->
								   <thead>
									   <tr class="bg-info">
										   <th>Activities Type</th>
										   <th>Activities Name</th>
										   <th>Place</th>
										   <th>Reward</th>
									   </tr>
								   </thead>

								   	<tbody style="background:#fff">
										@if(!empty($indoor_list))
										@foreach ($indoor_list as $name)
									   	<tr>
										   <td>Indoor</td>
										   <td>{{ ucwords((str_replace("_", " ", $name))) }}</td>
										   <input type="hidden" name="indoor_list[]" value="{{ $name }}">
										   <td><input type="text" class="form-control" name={{ $name . '[]' }} placeholder="Enter your  place name.." required></td>
										   <td><input type="text" class="form-control" name={{ $name . '[]' }} placeholder="Enter your  Reward.."></td>
									   	</tr>
								   		@endforeach
										@endif

										@if(!empty($outdoor_list))
										@foreach ($outdoor_list as $name)
									   	<tr>
										   <td>Indoor</td>
										   <td>{{ ucwords((str_replace("_", " ", $name))) }}</td>
										   <input type="hidden" name="outdoor_list[]" value="{{ $name }}">
										   <td><input type="text" class="form-control" name={{ $name . '[]' }} placeholder="Enter your  place name.." required></td>
										   <td><input type="text" class="form-control" name={{ $name . '[]' }} placeholder="Enter your  Reward.."></td>
									   	</tr>
								   		@endforeach
										@endif

								@else
									<div class="alert alert-warning">
					   				 	<strong>No Activities Selected</strong>
					   			 	</div>
								@endif
								   	</tbody>
							   </table>
						   </div>
						   <!--/.table-responsive  -->

					   </div>
					   <!--/.row  -->

					   <!-- Trigger the modal with a button -->
					   <div class="form-group">
					   		<button type="button" class="btn btn-success button next-btn" data-toggle="modal" data-target="#myModal">Save<i class="fa fa-floppy-o save-icon" aria-hidden="true"></i></button>
						</div>
					   <!-- modal -->
					   <div class="modal fade " id="myModal" role="dialog">
						   <div class="modal-dialog  ">
							   <!-- Modal content-->
							   <div class="modal-content">
								   <div class="modal-header  bg-primary">
									   <button type="button" class="close" data-dismiss="modal">&times;</button>
									   <h4 class="modal-title">Do you want to Save?</h4>
								   </div>
								   <div class="modal-footer">
									   <button type="submit"  class="btn btn-info">Yes</button>
									   <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
								   </div>
							   </div>
							   <!-- Modal content-->

						   </div>
					   </div>
					   <!-- /.modal -->


			   </form>

			   <form class="" action={{ route('selectExtra') }} method="post">
					  {{ csrf_field() }}
					  <div class="form-group">
						  <input type="hidden" name="sid" value={{ $sid }}>
							 <input type="hidden" name="name" value="{{ $name }}">
							 <input type="hidden" name="class" value="{{ $class  }}">
							 <input type="hidden" name="year" value={{ $year }}>
						  <button type="submit" class="btn button button-green back-btn"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</button>
					  </div>
				  </form>
			</div>
			<!--/.container  -->

		   </div>
		   <!--/ .panel-body  -->
	   </div>
	   <!--/.panel  -->
   </div>
   <!--/ .x-panel  -->
</div>
<!--========= Content part End here =========-->

</div>
@endsection
