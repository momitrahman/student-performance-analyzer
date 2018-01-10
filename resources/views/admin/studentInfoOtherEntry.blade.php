@extends('admin.master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
	<!--========= Content part Start here =========-->
		   <div class="content">
			   <!--success alert message  -->
			   @if (!empty(old('sid')))
				   <div class="alert alert-success">
					   Congratulation! Your ID is <strong>{{ old('sid') }}</strong>
				   </div>
			   @endif
			   <!--success alert message  -->

			   <!--warning message  -->
			   @if ($errors->any())
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

						   <form id="registration-form" method="post" action={{ route('studentInfoStore') }}>
							   {{ csrf_field() }}
							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="name">Full Name</label>
										   <input type="text" class="form-control" id="name" name="name" placeholder="Student Full Name" value="{{ old('name') }}" required>
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="sBirthNo">Birth Certificate No.</label>
										   <input type="text" class="form-control" id="sBirthNo" name="birth_number" placeholder="Student Birth Certificate No." value="{{ old('birth_number') }}" required>
									   </div>
								   </div>
							   </div>

							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="fName">Father's Name</label>
										   <input type="text" class="form-control" id="fName" name="father_name" placeholder="Student Father's Name" value="{{ old('father_name') }}" required>
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="mName">Mother's Name</label>
										   <input type="text" class="form-control" id="mName" name="mother_name" placeholder="Student Mother's Name" value="{{ old('mother_name') }}" required>
									   </div>
								   </div>
							   </div>

							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="selectname">Select Guardian</label>
										   <select class="form-control" id="selectname" name="guardian_name" >
											    <option value=""></option>
											   <option value="Father">Father</option>
											   <option value="Mother">Mother</option>
											   <option value="Local">Local</option>
											</select>
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <label for="selectnid">Select NID Holder</label>
										   <select class="form-control" id="selectnid" name="nid_holder">
											   <option value=""></option>
											   <option value="Father">Father</option>
											   <option value="Mother">Mother</option>
											   <option value="Local">Local Guardian</option>
											</select>
									   </div>
								   </div>
							   </div>
							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group" id="inputname" style="display: none">
										   <label for="oName"></label>
										   <input type="text" class="form-control" id="oName" name="guardian_name_other" placeholder="Local Guardian's Full Name" value="{{ old('guardian_name_other') }}">
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group" id="inputnid" style="display: none">
										   <label for="nid"></label>
										   <input type="text" class="form-control" id="nid" name="nid_number" placeholder="Entry NID Number of Choosen Person" value={{ old('nid_number') }}>
									   </div>
								   </div>
							   </div>

							   {{--  Previous Pages Inputs --}}
								<input type="hidden" name="class" value="{{ old('class') }}">
								<input type="hidden" name="roll" value="{{ old('roll') }}">
								<input type="hidden" name="section" value="{{ old('section') }}">
								<input type="hidden" name="year" value="{{ old('year') }}">
								<input type="hidden" name="sid" value="{{ old('sid') }}">
							   <!-- Trigger the modal with a button -->
							   <button type="button" class="btn button-green button" data-toggle="modal" data-target="#myModal">Save<i class="fa fa-floppy-o save-icon" aria-hidden="true"></i></button>

							   <!-- modal -->
							   <div class="modal fade " id="myModal" role="dialog">
								   <div class="modal-dialog  ">
									   <!-- Modal content-->
									   <div class="modal-content">
										   <div class="modal-header  bg-primary">
											   <button type="button" class="close" data-dismiss="modal">&times;</button>
											   <h4 class="modal-title">Do you want to Save?</h4>
										   </div>

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
