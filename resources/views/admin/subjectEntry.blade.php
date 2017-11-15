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
			   </div>
			   <!--warning message  -->

			   <div class="x-panel">
				   <div class="panel panel-primary">
					   <div class="panel-heading">Please Select Information</div>
					   <div class="panel-body">

						   <div class="container-fluid">
							   <div class="row">
								   <div class="col-md-12">
									   <div class="form-group">
										   <label>Subject Name</label>
										   <input type="text" class="form-control" placeholder="Subject Name">
									   </div>
								   </div>
							   </div>
							   <div class="row">
								   <div class="col-md-12">
									   <div class="form-group">
										   <label>Select Subject</label>
									   </div>
								   </div>
							   </div>
							   <div class="row">
								   <div class="form-group">
									   <div class="col-md-6">
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" checked>Class 1
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" checked>Class 2
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" checked>Class 3
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" checked>Class 4
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" checked>Class 5
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
									   </div>

									   <div class="col-md-6">
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" checked>Class 6
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" checked>Class 7
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" checked>Class 8
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" checked>Class 9
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" checked>Class 10
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
									   </div>

								   </div>
								   <!--/.form-group  -->

							   </div>
							   <!--/.row  -->
						   </div>

						   <div class="col-md-12">
							   <!-- Trigger the modal with a button -->
							   <button type="button" class="btn btn-success button" data-toggle="modal" data-target="#myModal">Save<i class="fa fa-floppy-o save-icon" aria-hidden="true"></i></button>
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
									   <!-- <div class="modal-body">
											   <p>Do you want to Save?</p>
										   </div> -->
									   <div class="modal-footer">
										   <a href="index.html" class="btn btn-info" role="button">Yes</a>
										   <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>

									   </div>
								   </div>
								   <!-- Modal content-->


							   </div>
						   </div>
						   <!-- /.modal -->

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
{

}
