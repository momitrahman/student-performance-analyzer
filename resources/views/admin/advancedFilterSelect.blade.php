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
					   <div class="panel-heading">Advance Filter</div>
					   <div class="panel-body">

						   <form method="POST" action="">
							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <button type="button" class="btn btn-sub button" id="showdiv1">Subject</button>
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <button type="button" class="btn btn-cls button" id="showdiv2">Class</button>
									   </div>
								   </div>
							   </div>

							   <div class="row">
								   <div class="col-md-12">
									   <div class="form-group" id="div1" style="display:none">
										   <label for="subject">Subject</label>
										   <select class="form-control" id="showsub" name="subject">
											   <option>Bangla</option>
											   <option>English</option>
											   <option>Math</option>
											   <option>Social Science</option>
											   <option>Science</option>
											   <option>Islam</option>
										   </select>
									   </div>
								   </div>
							   </div>

							   <div class="row">
								   <div class="col-md-12">
									   <div class="form-group" id="div2" style="display:none">
										   <label for="class">Class</label>
										   <select class="form-control" id="class" name="class">
											   <option>One</option>
											   <option>Two</option>
											   <option>Three</option>
											   <option>Four</option>
											   <option>Five</option>
											   <option>Six</option>
											   <option>Seven</option>
											   <option>Eight</option>
											   <option>Nine</option>
											   <option>Ten</option>
										   </select>
									   </div>
								   </div>
							   </div>


							   <!-- Trigger the modal with a button -->
							   <button type="button" class="btn btn-success button" data-toggle="modal" data-target="#myModal">Next<i class="fa fa-forward next-icon" aria-hidden="true"></i></button>

							   <!-- modal -->
							   <div class="modal fade " id="myModal" role="dialog">
								   <div class="modal-dialog  ">
									   <!-- Modal content-->
									   <div class="modal-content">
										   <div class="modal-header  bg-primary">
											   <button type="button" class="close" data-dismiss="modal">&times;</button>
											   <h4 class="modal-title">Do you want to go Next Page?</h4>
										   </div>
										   <!-- <div class="modal-body">
											   <p>Do you want to Save?</p>
										   </div> -->
										   <div class="modal-footer">
											   <a href="select-filter-for-sub.html" class="btn btn-info" role="button">Yes</a>
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
