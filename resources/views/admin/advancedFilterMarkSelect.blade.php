@extends('master')
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
											   <option value="one">One</option>
											   <option value="two">Two</option>
											   <option value="three">Three</option>
											   <option value="four">Four</option>
											   <option value="five">Five</option>
											   <option value="six">Six</option>
											   <option value="seven">Seven</option>
											   <option value="eight">Eight</option>
											   <option value="nine">Nine</option>
											   <option value="ten">Ten</option>
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
