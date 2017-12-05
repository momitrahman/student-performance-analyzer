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
					  <label for="">Student ID: <strong>{{ $sid }}</strong></label>
					  <label for=""> | Name: <strong>{{ ucwords($name) }}</strong></label>
					  <label for=""> | Class: <strong>{{ ucwords($class) }}</strong></label>
					  <label for=""> | Year: <strong>{{ ucwords($year) }}</strong></label>
					  <label for=""> | Semester Slot: <strong>{{ ucwords($semester_slot) }}</strong></label>
				  </div>
			  </div>
			  <!--Info Panel  -->

			  <div class="x-panel">
				  <div class="panel panel-primary">
					  <div class="panel-heading">Select Subject</div>
					  <div class="panel-body">

						  <div class="container-fluid">
							  <div class="row">
								  <div class="form-group">
									  <div class="col-sm-12 col-md-12 col-lg-12">
										  <input type="search" class="form-control" id="search" placeholder="search your subject..">
									  </div>
								  </div>
							  </div>

							  <!--========= Subject list Start here =========-->
							  <form action={{ route('subjectMarkEntry') }} method="post">
								 {{ csrf_field() }}

							   <input type="hidden" name="sid" value={{ $sid }}>
							   <input type="hidden" name="name" value="{{ $name }}">
							   <input type="hidden" name="class" value="{{ $class  }}">
							   <input type="hidden" name="year" value={{ $year }}>
							   <input type="hidden" name="semester_slot" value={{ $semester_slot }}>


							  <div class="row subject-section">
								  <div class="form-group">
									  <div class="searchable-container">
									  	@foreach ($subject_list as $subject)
										  <div class="items col-sm-4 col-md-3 col-lg-3">
											  <div class="info-block block-info clearfix">
												  <div class="square-box pull-left">
													  <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
												  </div>
												  <div data-toggle="buttons" class="btn-group bizmoduleselect">
													  <label class="btn btn-default">
														  <div class="bizcontent">
															  <input type="checkbox" name="subject_list[]" autocomplete="off" value="{{ $subject }}">
															  <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
															  <h4>{{ ucwords(str_replace("_", " ", $subject)) }}</h4>
														  </div>
													  </label>
												  </div>
											  </div>
										  </div>
										@endforeach
									  </div>
								  </div>
							  </div>
							  <!--/.row  -->

							  <!--========= Subject list end here =========-->

							  <div class="form-group">
								  {{-- <a href={{ route('checkStudentIdMark') }} class="btn button button-green" role="button"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</a> --}}
								  <button type="submit" class="btn btn-success button next-btn">Next<i class="fa fa-forward next-icon" aria-hidden="true"></i></button>
							  </div>
						  </form>

						  <form class="" action={{ route('checkBasicInfoMark') }} method="post">
							  {{ csrf_field() }}
							  <div class="form-group">
								  <input type="hidden" name="sid" value={{ $sid }}>
								 <input type="hidden" name="name" value="{{ $name }}">
								  <button type="submit" class="btn button button-green back-btn"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</button>
							  </div>
						  </form>
						  </div>
						  <!-- /.container-fluid  -->
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
