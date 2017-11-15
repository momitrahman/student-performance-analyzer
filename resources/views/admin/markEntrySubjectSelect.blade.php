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
					  <label for="">ID: <strong>2010-05-32-02</strong></label>&nbsp;&nbsp;
					  <label for="">Name: <strong>Marquis</strong></label>
				  </div>
			  </div>
			  <!--Info Panel  -->

			  <!--warning message  -->
			  <div class="alert alert-warning">
				  <strong>Input Error!</strong> Please select your all subject.
			  </div>
			  <!--warning message  -->

			  <div class="x-panel">
				  <div class="panel panel-primary">
					  <div class="panel-heading">List of Subject</div>
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
							  <div class="row subject-section">
								  <div class="form-group">
									  <div class="searchable-container">
										  <div class="items col-sm-4 col-md-3 col-lg-3">
											  <div class="info-block block-info clearfix">
												  <div class="square-box pull-left">
													  <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
												  </div>
												  <div data-toggle="buttons" class="btn-group bizmoduleselect">
													  <label class="btn btn-default">
														  <div class="bizcontent">
															  <input type="checkbox" name="var_id[]" autocomplete="off" value="">
															  <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
															  <h5>Bangla</h5>
														  </div>
													  </label>
												  </div>
											  </div>
										  </div>
										  <div class="items col-sm-4 col-md-3 col-lg-3">
											  <div class="info-block block-info clearfix">
												  <div class="square-box pull-left">
													  <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
												  </div>
												  <div data-toggle="buttons" class="btn-group bizmoduleselect">
													  <label class="btn btn-default">
														  <div class="bizcontent">
															  <input type="checkbox" name="var_id[]" autocomplete="off" value="">
															  <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
															  <h5>English</h5>
														  </div>
													  </label>
												  </div>
											  </div>
										  </div>
										  <div class="items col-sm-4 col-md-3 col-lg-3">
											  <div class="info-block block-info clearfix">
												  <div class="square-box pull-left">
													  <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
												  </div>
												  <div data-toggle="buttons" class="btn-group bizmoduleselect">
													  <label class="btn btn-default">
														  <div class="bizcontent">
															  <input type="checkbox" name="var_id[]" autocomplete="off" value="">
															  <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
															  <h5>Math</h5>
														  </div>
													  </label>
												  </div>
											  </div>
										  </div>
										  <div class="items col-sm-4 col-md-3 col-lg-3">
											  <div class="info-block block-info clearfix">
												  <div class="square-box pull-left">
													  <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
												  </div>
												  <div data-toggle="buttons" class="btn-group bizmoduleselect">
													  <label class="btn btn-default">
														  <div class="bizcontent">
															  <input type="checkbox" name="var_id[]" autocomplete="off" value="">
															  <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
															  <h5>Social Science </h5>
														  </div>
													  </label>
												  </div>
											  </div>
										  </div>
										  <div class="items col-sm-4 col-md-3 col-lg-3">
											  <div class="info-block block-info clearfix">
												  <div class="square-box pull-left">
													  <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
												  </div>
												  <div data-toggle="buttons" class="btn-group bizmoduleselect">
													  <label class="btn btn-default">
														  <div class="bizcontent">
															  <input type="checkbox" name="var_id[]" autocomplete="off" value="">
															  <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
															  <h5>Science</h5>
														  </div>
													  </label>
												  </div>
											  </div>
										  </div>
										  <div class="items col-sm-4 col-md-3 col-lg-3">
											  <div class="info-block block-info clearfix">
												  <div class="square-box pull-left">
													  <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
												  </div>
												  <div data-toggle="buttons" class="btn-group bizmoduleselect">
													  <label class="btn btn-default">
														  <div class="bizcontent">
															  <input type="checkbox" name="var_id[]" autocomplete="off" value="">
															  <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
															  <h5>Islam </h5>
														  </div>
													  </label>
												  </div>
											  </div>
										  </div>
										  <div class="items col-sm-4 col-md-3 col-lg-3">
											  <div class="info-block block-info clearfix">
												  <div class="square-box pull-left">
													  <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
												  </div>
												  <div data-toggle="buttons" class="btn-group bizmoduleselect">
													  <label class="btn btn-default">
														  <div class="bizcontent">
															  <input type="checkbox" name="var_id[]" autocomplete="off" value="">
															  <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
															  <h5>Hinduism</h5>
														  </div>
													  </label>
												  </div>
											  </div>
										  </div>
										  <div class="items col-sm-4 col-md-3 col-lg-3">
											  <div class="info-block block-info clearfix">
												  <div class="square-box pull-left">
													  <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
												  </div>
												  <div data-toggle="buttons" class="btn-group bizmoduleselect">
													  <label class="btn btn-default">
														  <div class="bizcontent">
															  <input type="checkbox" name="var_id[]" autocomplete="off" value="">
															  <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
															  <h5>Christianity</h5>
														  </div>
													  </label>
												  </div>
											  </div>
										  </div>
										  <div class="items col-sm-4 col-md-3 col-lg-3">
											  <div class="info-block block-info clearfix">
												  <div class="square-box pull-left">
													  <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
												  </div>
												  <div data-toggle="buttons" class="btn-group bizmoduleselect">
													  <label class="btn btn-default">
														  <div class="bizcontent">
															  <input type="checkbox" name="var_id[]" autocomplete="off" value="">
															  <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
															  <h5>Buddhism</h5>
														  </div>
													  </label>
												  </div>
											  </div>
										  </div>
									  </div>
								  </div>
							  </div>
							  <!--/.row  -->
							  <!--========= Subject list end here =========-->


							  <div class="form-group">
								  <a href="select-info-for-add-mark.html" class="btn button button-green" role="button"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</a>
								  <a href="add-mark.html" class="btn btn-success button" role="button">Next<i class="fa fa-forward next-icon" aria-hidden="true"></i></a>

							  </div>
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
