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

						  	<form action={{ route("entryFilterExtra") }} method="post">
								{{ csrf_field() }}
								<input type="hidden" name="extra" value="{{ $extra }}">
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

							   <div class="row">
								   <div class="col-md-12">
									   <div class="form-group">
										   <label for="year"> Year</label>
										   <select class="form-control" id="year" name="year">
											   <option value="all">All</option>
											   <option value="single">Single</option>
											   <option value="range">Range</option>
										   </select>
									   </div>
								   </div>
							   </div>

							    <div class="row">
								   <div class="col-md-12">
									   <div class="form-group">
										   <label for="reward">Reward</label>
										   <select class="form-control" id="rewardd" name="reward">
											   <option value="all">All</option>
											   <option value="with">With Reward</option>
											   <option value="without">Without reward</option>
										   </select>
									   </div>
								   </div>
							   </div>


							   <!-- Trigger the modal with a button -->
								<a href={{ route('selectOptionExtra') }} class="btn button button-green" role="button"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</a>
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
