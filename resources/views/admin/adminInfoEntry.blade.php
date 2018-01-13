@extends('admin.master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
	<!--========= Content part Start here =========-->
		   <div class="content">
			   <!--warning message  -->
			  
				   <div class="alert alert-warning">
					<ul>				
					    <li> Error Found! </li>			
					</ul>
					</div>
	

			   <!--warning message  -->

			   <div class="x-panel">
				   <div class="panel panel-primary">
					   <div class="panel-heading">Admin Information Entry</div>
					   <div class="panel-body">

						   <form id="registration-form" method="POST" action={{ route('studentInfoIdGenerator') }}>
								
							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="name">Full Name</label>
										   <input type="text" class="form-control" id="name" name="name" placeholder="Admin Name" value="" required>
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="mobile">Mobile</label>
										   <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" value="" required>
									   </div>
								   </div>
							   </div>

							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="name">Occupation</label>
										   <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation" value="" required>
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="name">Password</label>
										   <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" required>
									   </div>
								   </div>
							   </div>

							   <!-- Trigger the modal with a button -->
							   <button type="button" class="btn button-green button" data-toggle="modal" data-target="#myModal">Save<i class="fa fa-floppy-o save-icon" aria-hidden="true"></i></button>

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
											   <button type="submit"  class="btn button-green">Yes</button>
											   <button type="button" class="btn button-brown" data-dismiss="modal">No</button>
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
