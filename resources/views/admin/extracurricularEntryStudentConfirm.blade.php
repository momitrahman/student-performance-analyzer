@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
	<!--========= Content part Start here =========-->
		   <div class="content">
			   <div class="x-panel">
				   <div class="panel panel-primary">
					   <div class="panel-heading">Check Student Information</div>
					   <div class="panel-body">
						   <form method="" action="#">
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
								   </div>
								   <!--/.info-content  -->

								   <div class="form-group">
									   <a href="search-info-for-mark.html" class="btn button button-green" role="button"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</a>
									   <a href="select-info-for-add-mark.html" class="btn btn-success button" role="button">Next<i class="fa fa-forward next-icon" aria-hidden="true"></i></a>
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
		   <!-- /.content  -->

	   </div>
	   <!--========= Content part End here =========-->
</div>
@endsection
