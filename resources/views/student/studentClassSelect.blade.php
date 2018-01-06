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
						   <form action={{ route("classMark") }} method="post">
							 {{ csrf_field() }}
							   <div class="row">
								   <div class="col-md-12">
									   <div class="form-group" id="div1">
										   <label for="attribute">Class: </label>
										   <select class="form-control" id="showsub" name="class">
											   	<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
												<option value="4">Four</option>
												<option value="5">Five</option>
												<option value="6">Six</option>
												<option value="7">Seven</option>
												<option value="8">Eight</option>
												<option value="9">Nine</option>
												<option value="10">Ten</option>
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
