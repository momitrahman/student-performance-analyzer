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
					   <div class="panel-heading">Select an option</div>
					   <div class="panel-body">

						   <form action={{ route("filterFormSelectMark") }} method="post">
							   {{ csrf_field() }}

								@if(!empty($subject_list))
							   <div class="row">
								   <div class="col-md-12">
									   <div class="form-group" id="div1">
										   <label for="subject">Subject</label>
										   <select class="form-control" id="showsub" name="subject">
											   @foreach ($subject_list as $subject)
											  	 <option value="{{ $subject }}">{{ ucwords(str_replace("_", " ", $subject)) }}</option>
											   @endforeach
										   </select>
									   </div>
								   </div>
							   </div>
						   		@else
							   <div class="row">
								   <div class="col-md-12">
									   <div class="form-group" id="div2">
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
						   	@endif

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
