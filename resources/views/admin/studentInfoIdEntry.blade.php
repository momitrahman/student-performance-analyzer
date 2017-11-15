@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
	<!--========= Content part Start here =========-->
		   <div class="content">
			   <!--warning message  -->
			   <div class="alert alert-warning">
				   <strong>Input Error!</strong> Please fill out all field.
				   <strong>Input Error!</strong> Please fill out all field.
			   </div>
			   <!--warning message  -->

			   <div class="x-panel">
				   <div class="panel panel-primary">
					   <div class="panel-heading">Add New Student Information</div>
					   <div class="panel-body">

						   <form id="registration-form" method="POST" action="">
							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="year"> Year</label>
										   <input class="yearselect sample form-control" name="year" id="year" value="2017">
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="class">Class</label>
										   <select class="form-control" id="class" name="class">
											   <option>1</option>
											   <option>2</option>
											   <option>3</option>
											   <option>4</option>
											   <option>5</option>
											   <option>6</option>
											   <option>7</option>
											   <option>8</option>
											   <option>9</option>
											   <option>10</option>
										   </select>
									   </div>
								   </div>
							   </div>

							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="roll">Roll</label>
										   <input type="text" class="form-control" id="roll" name="roll" placeholder="Your Roll">
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="section">Section</label>
										   <select class="form-control" id="class" name="class">
 											  <option>1</option>
 											  <option>2</option>
 											  <option>3</option>
 											  <option>4</option>
 											  <option>5</option>
 											  <option>6</option>
 											  <option>7</option>
 											  <option>8</option>
 											  <option>9</option>
 											  <option>10</option>
 										  </select>
									   </div>
								   </div>
							   </div>

							   <!-- Trigger the modal with a button -->
							   <button type="button" class="btn btn-success button" data-toggle="modal" data-target="#myModal">Save<i class="fa fa-floppy-o save-icon" aria-hidden="true"></i></button>

							   <!-- modal -->
							   <div class="modal fade " id="myModal" role="dialog">
								   <div class="modal-dialog  ">
									   <!-- Modal content-->
									   <div class="modal-content">
										   <div class="modal-header  bg-primary">
											   <button type="button" class="close" data-dismiss="modal">&times;</button>
											   <h4 class="modal-title">Do you want to Save?</h4>
										   </div>
										   <!-- <div class="modal-body">
											   <p>Do you want to Save?</p>
										   </div> -->
										   <div class="modal-footer">
											   <a href="input-registration-part2.html" class="btn btn-info" role="button">Yes</a>
											   <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>

										   </div>
									   </div>
									   <!-- Modal content-->


								   </div>
							   </div>
							   <!-- /.modal -->


						   </form>


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
