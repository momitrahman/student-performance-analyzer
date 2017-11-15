@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
<!--========= Content part Start here =========-->
   <div class="content">

	   <div id="fullscreen">
		   <div class="x-panel">
			   <!--full-Screen Button start -->
			   <div class="fullscreen">
				   <a href="#" class="requestfullscreen"><span class="glyphicon glyphicon-fullscreen"></span></a>
				   <a href="#" class="exitfullscreen" style="display: none"><span class="glyphicon glyphicon-resize-small"></span></a>
			   </div>
			   <!--full-Screen Button end -->

			   <div class="panel panel-primary">
				   <div class="panel-heading">View Mark</div>
				   <div class="panel-body">
					   <form>
						   <div class="container panel-content">
							   <div class="row ">

								   <div class="table-responsive col-md-12 ">

									   <table id="sort2" class=" table table-bordered table-striped  table-hover text-center">

										   <thead>
											   <tr class="bg-info ">
												   <th class="text-center">Student ID</th>
												   <th class="text-center">Class</th>
												   <th class="text-center">Year</th>
												   <th class="text-center">Semester Slot</th>
												   <th class="text-center">Average Mark</th>
												   <th class="text-center">Details</th>
											   </tr>
										   </thead>
										   <tbody style="background:#fff">
											   <tr>
												   <td>2010-05-32-02</td>
												   <td>Five</td>
												   <td>2010</td>
												   <td>2</td>
												   <td>76%</td>
												   <td>
													    <a href="#" class="btn details-icon">Click Here <i class="fa fa-link" aria-hidden="true"></i>
												   </td>
											   </tr>

										   </tbody>
									   </table>
									   <div class="form-group">
										   <a href="index.html" class="btn btn-success button" role="button">Ok<i class="fa fa-check-square-o ok-icon" aria-hidden="true"></i></a>
										   <!-- <a href="input-registration.html" class="btn button button-unique" role="button">Update</a> -->
									   </div>
								   </div>
								   <!--/.table-responsive  -->

							   </div>
							   <!--/.row  -->
						   </div>
						   <!--/.container  -->

					   </form>

				   </div>
				   <!--/ .panel-body  -->
			   </div>
			   <!--/.panel  -->
		   </div>
		   <!--/ .x-panel  -->
	   </div>
	   <!-- .full-screen -->

   </div>
   <!--========= Content part End here =========-->
</div>
@endsection
