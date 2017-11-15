@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
	<!--========= Content part Start here =========-->
		   <div class="content">
			   <!--success alert message  -->
			   <div class="alert alert-success">
				   <strong>Congratulation!</strong> Your ID is 2010-05-32-02
			   </div>
			   <!--success alert message  -->

			   <!--warning message  -->
			   <div class="alert alert-warning">
				   <strong>Input Error!</strong> Please fill out all field.
			   </div>
			   <!--warning message  -->

			   <div class="x-panel">
				   <div class="panel panel-primary">
					   <div class="panel-heading">Please Fill Student Other's Information</div>
					   <div class="panel-body">

						   <form id="registration-form" method="POST" action="">
							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="name">Name</label>
										   <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="sBirthNo">Student Birth Certificate No.</label>
										   <input type="text" class="form-control" id="sBirthNo" name="sBirthNo" placeholder="Your Birth Certificate No.">
									   </div>
								   </div>
							   </div>

							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="fName">Father's Name</label>
										   <input type="text" class="form-control" id="fName" name="fName" placeholder="Your Father's Name">
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="mName">Mother's Name</label>
										   <input type="text" class="form-control" id="mName" name="mName" placeholder="Your Mother's Name">
									   </div>
								   </div>
							   </div>

							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="selectname">Local Guardian Name</label>
										   <select class="form-control" id="selectname" name="selectname">
											   <option>Select Guardian</option>
											   <option value="F">Father</option>
											   <option value="M">Mother</option>
											   <option value="O">Other's</option>
											</select>
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="selectnid">Father/Mother/Guardian NID No.</label>
										   <select class="form-control" id="selectnid" name="selectnid">
											   <option>Select F/M/G</option>
											   <option value="F">Father</option>
											   <option value="M">Mother</option>
											   <option value="G">Local Guardian</option>
											</select>
									   </div>
								   </div>
							   </div>
							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group" id="inputname" style="display: none">
										   <label for="oName"></label>
										   <input type="text" class="form-control" id="oName" name="oName" placeholder="Other's Guardian Name">
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group" id="inputnid" style="display: none">
										   <label for="nid"></label>
										   <input type="text" class="form-control" id="nid" name="nid" placeholder="NID No.">
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
											   <a href="index.html" class="btn btn-info" role="button">Yes</a>
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
