@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
	<!--========= Content part Start here =========-->
	            <div class="content">
	                <!--Info Panel  -->
					<div class="card card-light text-center">
						<div class="card-body">
							<label for="">Student ID: <strong>{{ $sid }}</strong></label>&nbsp;&nbsp;
							<label for="">Name: <strong>{{ ucwords($name) }}</strong></label>
						</div>
					</div>
	                <!--Info Panel  -->

	                 <div class="x-panel">
	                    <div class="panel panel-primary">
	                        <div class="panel-heading">Select Options</div>
	                        <div class="panel-body">
	                         <form action={{ route('selectExtra') }} method="post">
								 {{ csrf_field() }}

	 							   <input type="hidden" name="sid" value={{ $sid }}>
	 							   <input type="hidden" name="name" value="{{ $name }}">
	                                <div class="form-group">
	                                    <label>Class</label>
										<select class="form-control" id="class" name="class">
				   	 					   <option>One</option>
				   	 					   <option>Two</option>
				   	 					   <option>Three</option>
				   	 					   <option>Four</option>
				   	 					   <option>Five</option>
				   	 					   <option>Six</option>
				   	 					   <option>Seven</option>
				   	 					   <option>Eight</option>
				   	 					   <option>Nine</option>
				   	 					   <option>Ten</option>
				   	 				   </select>
	                                </div>
	                                <div class="form-group">
	                                    <label> Year</label>
	                                    <input class="yearselect sample form-control" name="year" id="sample" value="2017">
	                                </div>

	                                <div class="form-group">
	                                    	<button type="submit" class="btn btn-success button">Next<i class="fa fa-forward next-icon" aria-hidden="true"></i></button>
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
