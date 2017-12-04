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
					   <div class="panel-heading">Advanced Filter</div>
					   <div class="panel-body">
							<!--success alert message  -->
								@if (!empty($message))
									<div class="alert alert-success">
										<ul>
											<li><strong> {{ $message }}</strong></li>
											<li>You query was wrong. Please try again.</strong></li>
										</ul>
									</div>
								@endif
							<!--success alert message  -->
						   <form action={{ route("selectFilter") }} method="post">
							   {{ csrf_field() }}
							   <div class="row">
								   <div class="col-md-6">
									   <div class="form-group">
										   <button type="submit" name="option" class="btn btn-sub button" value="subject">Subject</button>
									   </div>
								   </div>
								   <div class="col-md-6">
									   <div class="form-group">
										   <button type="submit" name="option" class="btn btn-cls button" value="class">Class</button>
									   </div>
								   </div>
							   </div>
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
