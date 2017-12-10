@extends('admin.master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
	<!--========= Content part Start here =========-->
		   <div class="content">
			   <div class="x-panel">
				   <div class="panel panel-primary">
					   <div class="panel-heading">Check Student Information </div>
					   <div class="panel-body">

						    @foreach ($sid_infos as $sid_info)

						   <form action={{ route('checkBasicInfoMark') }} method="post">
							   {{ csrf_field() }}

							   <input type="hidden" name="sid" value={{ $sid }}>
							   <input type="hidden" name="name" value="{{ $sid_info->name }}">
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
								   </div>
								   <!--/.info-content  -->

								   <div class="form-group">
									   <a href={{ route('checkStudentIdMark') }} class="btn button button-green" role="button"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</a>
									   <button type="submit" class="btn btn-success button">Next<i class="fa fa-forward next-icon" aria-hidden="true"></i></button>
								   </div>
							   </div>
							   <!--/.flex-container  -->
						   </form>

					   		@endforeach
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
