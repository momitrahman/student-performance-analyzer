@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')

	            <!--========= Content part Start here =========-->
            <div class="content">
                <!--warning message  -->
                <div class="alert alert-warning">
                    <strong>Error!</strong> Your Name is not found.
                </div>
                <!--warning message  -->

                <!--search  -->
                <div class="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                        <a href="view-student-list.html" class="btn btn-success " role="button"> 
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        <span>Search</span>
                        </a>
                        </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!--/.search  -->


            </div>
            <!--========= Content part End here =========-->
</div>
@endsection
