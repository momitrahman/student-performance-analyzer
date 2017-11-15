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
						   <div class="panel-heading">Show Student Information</div>
						   <div class="panel-body">
							   <form method="" action="">
								   <div class="flex-container">
									   <div class="info-content">
										   <div class="info-row flex-first-row">
											   <label for="">ID</label>
											   <span>:</span>
											   <strong>2010-05-32-02</strong>
										   </div>
										   <div class="info-row flex-second-row ">
											   <label for="">Name</label>
											   <span>:</span>
											   <strong>Chandler Bailey</strong>
										   </div>
										   <div class="info-row flex-first-row">
											   <label for="">Father's Name</label>
											   <span>:</span>
											   <strong>Sharon Wilkinson</strong>
										   </div>
										   <div class="info-row flex-second-row ">
											   <label for="">Mother's Name</label>
											   <span>:</span>
											   <strong>Wilfredo</strong>
										   </div>
										   <div class="info-row flex-first-row">
											   <label for="">Local Guardian Name</label>
											   <span>:</span>
											   <strong>Chandler BaileyTravis Mueller</strong>
										   </div>
										   <div class="info-row flex-second-row ">
											   <label for="">Student Birth Certificate No.</label>
											   <span>:</span>
											   <strong>19917613310011755</strong>
										   </div>
										   <div class="info-row flex-first-row">
											   <label for="">Local Guardian NID</label>
											   <span>:</span>
											   <strong>2610413965404</strong>
										   </div>

									   </div>
									   <div class="form-group">
										   <a href="index.html" class="btn btn-success button" role="button">Ok<i class="fa fa-check-square-o ok-icon" aria-hidden="true"></i></a>
										   <!-- <a href="input-registration.html" class="btn button button-unique" role="button">Update</a> -->
									   </div>

								   </div>
								   <!--/.flex-container  -->

							   </form>
						   </div>
						   <!--/ .panel-body  -->
					   </div>
					   <!--/.panel  -->
				   </div>
				   <!--/ .x-panel  -->
			   </div>
			   <!--/ #fullscreen  -->
		   </div>
		   <!--========= Content part End here =========-->

</div>
@endsection
