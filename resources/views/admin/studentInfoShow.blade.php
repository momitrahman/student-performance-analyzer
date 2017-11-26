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
						   <div class="panel-heading">Student Information</div>
						   <div class="panel-body">

							   @foreach ($sid_infos as $sid_info)

							   <form method="">
								   <div class="flex-container">
									   <div class="info-content">
										   <div class="info-row flex-first-row">
											   <label for="">Student ID</label>
											   <span>:</span>
											   <strong>{{ ucwords($sid_info->sid) }}</strong>
										   </div>
										   <div class="info-row flex-second-row ">
											   <label for="">Name</label>
											   <span>:</span>
											   <strong>{{ ucwords($sid_info->name) }}</strong>
										   </div>
										   {{--  <div class="info-row flex-second-row ">
											   <label for="">Year</label>
											   <span>:</span>
											   <strong>{{ ucwords($sid_info->year) }}</strong>
										   </div>
										   <div class="info-row flex-second-row ">
											   <label for="">Class</label>
											   <span>:</span>
											   <strong>{{ ucwords($sid_info->class) }}</strong>
										   </div>
										   <div class="info-row flex-second-row ">
										   		<label for="">Roll</label>
										   		<span>:</span>
										   		<strong>{{ ucwords($sid_info->roll) }}</strong>
									   		</div>
										   <div class="info-row flex-second-row ">
											   <label for="">Section</label>
											   <span>:</span>
											   <strong>{{ ucwords($sid_info->section) }}</strong>
										   </div>  --}}
										   <div class="info-row flex-second-row ">
											   <label for="">Student Birth Certificate No.</label>
											   <span>:</span>
											   <strong>{{ ucwords($sid_info->birth_number) }}</strong>
										   </div>
										   <div class="info-row flex-first-row">
											   <label for="">Father's Name</label>
											   <span>:</span>
											   <strong>{{ ucwords($sid_info->father_name) }}</strong>
										   </div>
										   <div class="info-row flex-second-row ">
											   <label for="">Mother's Name</label>
											   <span>:</span>
											   <strong>{{ ucwords($sid_info->mother_name) }}</strong>
										   </div>
										   <div class="info-row flex-first-row">
											   <label for="">Local Guardian Name</label>
											   <span>:</span>
											   <strong>{{ ucwords($sid_info->guardian_name) }}</strong>
										   </div>
										   <div class="info-row flex-first-row">
											   <label for="">Student Guardian NID Holder</label>
											   <span>:</span>
											   <strong>{{ ucwords($sid_info->nid_holder) }}</strong>
										   </div>
										   <div class="info-row flex-first-row">
											   <label for="">Student Guardian NID No.</label>
											   <span>:</span>
											   <strong>{{ ucwords($sid_info->nid_number) }}</strong>
										   </div>

									   </div>
									   <div class="form-group">
										   <a href={{ route('studentInfoIdGenerator') }} class="btn btn-success button" role="button">Ok<i class="fa fa-check-square-o ok-icon" aria-hidden="true"></i></a>
										   <!-- <a href="input-registration.html" class="btn button button-unique" role="button">Update</a> -->
									   </div>

								   </div>
								   <!--/.flex-container  -->

							   </form>

							 @endforeach

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
