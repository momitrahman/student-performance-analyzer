@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
	<!--========= Content part Start here =========-->
		   <div class="content">
			   <!--warning message  -->
			   @if ($errors->any())
				 <div class="alert alert-warning">
				  <ul>
				  @foreach ($errors->all() as  $error)
					  <li> {{ $error }}</li>
				  @endforeach
				  </ul>
				  </div>
	  			@endif

				@if (!empty($noclass))
					<div class="alert alert-warning">
					<ul>
						<li>{{ $noclass }}</h5></li>
					</ul>
					</div>
				@endif
			   <!--warning message  -->

				<!--success alert message  -->
			  	 @if (!empty($message) && empty($noclass) && !$errors->any())
				   <div class="alert alert-success">
					   <strong> {{ $message }}</strong>
				   </div>
			  	 @endif
			   	<!--success alert message  -->

			   <div class="x-panel">
				   <div class="panel panel-primary">
					   <div class="panel-heading">Entry Subject Name</div>
					   <div class="panel-body">

						   <div class="container-fluid">

							   <form action={{ route('subjectStore') }} method="post">
								{{ csrf_field() }}

								@if (empty($subject_name))
							   <div class="row">
								   <div class="col-md-12">
									   <div class="form-group">
										   <label>Subject Name</label>
										   <input type="text" class="form-control" name="subject_name" value="{{ old('subject_name') }}" required>
									   </div>
								   </div>
							   </div>
							   @else
								   <div class="row">
    								   <div class="col-md-12">
    									   <div class="form-group">
    										   <label>Subject Name</label>
    										   <input type="text" class="form-control" name="subject_name" value= "{{ $subject_name }}">
    									   </div>
    								   </div>
    							   </div>
							   @endif
							   <div class="row">
								   <div class="col-md-12">
									   <div class="form-group">
										   <label>Select Class</label>
									   </div>
								   </div>
							   </div>
							   <div class="row">
								   <div class="form-group">
									   <div class="col-md-6">
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" name="one">One
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" name="two">Two
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" name="three">Three
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" name="four">Four
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" name="five">Five
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
									   </div>

									   <div class="col-md-6">
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" name="six">Six
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" name="seven">Seven
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" name="eight">Eight
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" name="nine">Nine
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
										   <div class="btn-group button-group" data-toggle="buttons">
											   <label class="btn btn-primary button-cls">
											   <input type="checkbox" autocomplete="off" name="ten">Ten
											   <span class="glyphicon glyphicon-ok"></span>
										   </label>
										   </div>
									   </div>

								   </div>
								   <!--/.form-group  -->

							   </div>
							   <!--/.row  -->
						   </div>

						   <div class="col-md-12">
							   <!-- Trigger the modal with a button -->
							   <button type="button" class="btn btn-success button" data-toggle="modal" data-target="#myModal">Save<i class="fa fa-floppy-o save-icon" aria-hidden="true"></i></button>
						   </div>

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
										   <button type="submit"  class="btn btn-info">Yes</button>
										   <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
									   </div>
								   </div>
								   <!-- Modal content-->


							   </div>
						   </div>
						   <!-- /.modal -->

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
