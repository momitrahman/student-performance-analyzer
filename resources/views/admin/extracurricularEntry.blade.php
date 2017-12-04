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
					 <li># {{ $error }}</li>
				 @endforeach
				 </ul>
				 </div>
	 	 		@endif
			   <!--warning message  -->

				<!--success alert message  -->
			   	@if (!empty($message)  && !$errors->any())
				   <div class="alert alert-success">
					   <strong> {{ $message }}</strong>
				   </div>
			  	@endif
			   <!--success alert message  -->

			   <div class="x-panel">

				   <form action={{ route('extracurricularStore') }} method="post">
				   {{ csrf_field() }}
				   <div class="panel panel-primary">
					   <div class="panel-heading">Entry Extra Curricular Activities Name</div>
					   <div class="panel-body">

						   <div class="container-fluid">
							   <div class="row">
								   <div class="form-group">
									   <label>Activities Name</label>
									   <input type="text" class="form-control" name="title" value="{{ ucwords(str_replace("_", " ",old("title"))) }}" required>
								   </div>
							   </div>
							   <div class="row">
								   <div class="form-group">
									   <label>Activities Type</label>
									   <select class="form-control" name="type">
										   <option value="indoor">Indoor</option>
										   <option value="outdoor">Outdoor</option>
								   	</select>
								   </div>
							   </div>
						   </div>
						   <!--container-fluid  -->

						   <!-- Trigger the modal with a button -->
						   <button type="button" class="btn btn-success button" data-toggle="modal" data-target="#myModal">Save<i class="fa fa-floppy-o save-icon" aria-hidden="true"></i></button>

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
			   </form>
			   </div>
			   <!--/ .x-panel  -->
		   </div>
		   <!--========= Content part End here =========-->

</div>
@endsection
