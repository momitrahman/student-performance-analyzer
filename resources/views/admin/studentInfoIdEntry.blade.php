@extends('admin.master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
	<!--========= Content part Start here =========-->
		   <div class="content">
			   <!--warning message  -->
			   @if ($errors->has('roll') || $errors->has('sid'))
				   <div class="alert alert-warning">
					<ul>
					@foreach ($errors->all() as  $error)
						<li># {{ $error }}</li>
					@endforeach
					</ul>
					</div>
			   @endif

			   <!--warning message  -->

			   <div class="x-panel">
				   <div class="panel panel-primary">
					   <div class="panel-heading">Entry Student Information</div>
					   <div class="panel-body">

						   <form id="registration-form" method="POST" action={{ route('studentInfoIdGenerator') }}>
								{{ csrf_field() }}
							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="year">Year</label>
										   <input class="yearselect sample form-control" name="year" id="year" value="2017">
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="class">Class</label>
										   <select class="form-control" id="class" name="class">
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

							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="roll">Roll</label>
										   <input type="text" class="form-control" id="roll" name="roll" placeholder="Student Current Roll Number" value="{{ old('roll') }}" required>
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="section">Section</label>
										   <select class="form-control" id="class" name="section">
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											  <option value="9">9</option>
											  <option value="10">10</option>
										   </select>
									   </div>
								   </div>
							   </div>

							   <!-- Trigger the modal with a button -->
							   <button type="button" class="btn button-green button" data-toggle="modal" data-target="#myModal">Next<i class="fa fa-forward next-icon" aria-hidden="true"></i></button>

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
