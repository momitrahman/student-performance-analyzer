@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
	<!--========= Content part Start here =========-->
		 <div class="content">
			 <!--warning message  -->
			 @if (!empty($noid))
			 <div class="alert alert-warning">
				 <strong>Error!</strong> {{ $noid }}
			 </div>
			 @endif
			 <!--warning message  -->
			<!--success alert message  -->
			   @if (!empty($message))
				   <div class="alert alert-success">
					   <strong> {{ $message }}</strong>
				   </div>
			   @endif
			<!--success alert message  -->

			 <form  action= {{ route('checkStudentIdExtra') }} method="get">
			 <div class="search">
				 <div class="input-group">
					 <input type="text" class="form-control" placeholder="Enter Student ID..." name="sid">
					 <span class="input-group-btn">
					 <button type="submit" class="btn btn-success">
						 <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						 <span>Search</span>
					 </button>
					 </a>
					 </span>
				 </div>
				 <!-- /input-group -->
			 </div>
			 <!--/.search  -->
			 <form>


		 </div>
	<!--========= Content part End here =========-->
</div>
@endsection
