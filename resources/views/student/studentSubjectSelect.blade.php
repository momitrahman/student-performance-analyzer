@extends('student.master')
@section('content')
<!--page-content  -->
<div id="page-content">
	@include('student.layouts.header')
	<!--========= Content part Start here =========-->
		   <div class="content">
			   <div class="x-panel">
				   <div class="panel panel-primary">
					   <div class="panel-heading">Select an option</div>
					   <div class="panel-body">
						   <form action={{ route("filterFormSelectExtra") }} method="post">
							
							   <div class="row">
								   <div class="col-md-12">
									   <div class="form-group" id="div1">
										   <label for="attribute">Subject: </label>
										   <select class="form-control" id="showsub" name="extra">											
											  	 <option value="" >Bangla</option>
											  	 <option value="" >English</option>
											  	 <option value="" >Math</option>
											
										   </select>
									   </div>
								   </div>
							   </div>

							   <!-- Trigger the modal with a button -->
							   <button type="submit" class="btn button-green button">Next<i class="fa fa-forward next-icon" aria-hidden="true"></i></button>
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
