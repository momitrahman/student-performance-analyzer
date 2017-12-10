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
					   <div class="panel-heading">Select Options</div>
					   <div class="panel-body">

						  	<form action={{ route("entryFilterMark") }} method="post">
								{{ csrf_field() }}

								@if (!empty($subject))
								<input type="hidden" name="subject" value="{{ $subject }}">
							   	<div class="row">
								   <div class="col-md-12">
									   <div class="form-group">
										   <label for="class">Class</label>
										   <select class="form-control" id="class" name="class">
											   <option value="all">All</option>
											   <option value="single">Single</option>
											   <option value="range">Range</option>
										   </select>
									   </div>
								   </div>
							   </div>
						   		@else
									<input type="hidden" name="class" value="{{ $class }}">
								@endif

							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="year"> Year</label>
										   <select class="form-control" id="year" name="year">
											   <option value="all">All</option>
											   <option value="single">Single</option>
											   <option value="range">Range</option>
										   </select>
									   </div>
								   </div>

								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="mark">Marks</label>
										   <select class="form-control" id="mark" name="mark">
												<option value="all">All</option>
		   						   				<option value="range">Range</option>
												<option value="equal">Equal To</option>
												<option value="less_than">Less Than Equal</option>
												<option value="greater_than">Greater Than Equal</option>
										   </select>
									   </div>
								   </div>
							   </div>

							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="order"> Order By</label>
										   <select class="form-control" id="order" name="order">
											   <option value="asc">Lowset to Highest Mark</option>
   								   				<option value="desc">Highest to Lowest Mark</option>
										   </select>
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="output">Output Limit</label>
										   <select class="form-control" id="output" name="output_limit">
											   <option value="all">All</option>
											   <option value="limit">Maximum Limit</option>
										   </select>
									   </div>
								   </div>
							   </div>


							   <!-- Trigger the modal with a button -->
								<a href={{ route('selectOptionMark') }} class="btn button button-green" role="button"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</a>
							   <button type="submit" class="btn btn-success button">Next<i class="fa fa-forward next-icon" aria-hidden="true"></i></button>
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
