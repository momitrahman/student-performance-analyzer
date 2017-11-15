@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
<!--========= Content part Start here =========-->
<div class="content">
<!--Info Panel  -->
<div class="card card-light text-center ">
   <div class="card-body">
	   <label for="">ID: <strong>2010-05-32-02</strong></label>&nbsp;&nbsp;
	   <label for="">Name: <strong>Marquis</strong></label>
   </div>
</div>
<!--Info Panel  -->

<!--warning message  -->
<div class="alert alert-warning">
   <strong>Input Error!</strong> Please fill out all field
</div>
<!--warning message  -->

<div class="x-panel">

   <div class="panel panel-primary">
	   <div class="clearfix"></div>
	   <div class="panel-heading">Add Mark</div>
	   <div class="panel-body">

		   <form>
			   <div class="container panel-content">
				   <div class="row ">

					   <div class="table-responsive col-md-12">

						   <table id="sort2" class=" table table-bordered table-striped  table-hover">

							   <thead>
								   <tr class="bg-info">
									   <th>Subject</th>
									   <th>Semester 1</th>
									   <th>Semester 2</th>
									   <th>Semester 3</th>
								   </tr>
							   </thead>
							   <tbody style="background:#fff">
								   <tr>
									   <td>Bangla</td>
									   <td><input type="text" value="" class="form-control" placeholder="Enter mark"></td>
									   <td><input type="text" value="" class="form-control" placeholder="Enter mark"></td>
									   <td><input type="text" value="" class="form-control" placeholder="Enter mark"></td>
								   </tr>

							   </tbody>
						   </table>
					   </div>
					   <!--/.table-responsive  -->

				   </div>
				   <!--/.row  -->
				   <a href="list-of-subject.html" class="btn button button-green" role="button"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</a>

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
							   <!-- <div class="modal-body">
							   <p>Do you want to Save?</p>
						   </div> -->
							   <div class="modal-footer">
								   <a href="search-info-for-mark.html" class="btn btn-info" role="button">Yes</a>
								   <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>

							   </div>
						   </div>
						   <!-- Modal content-->
					   </div>
				   </div>
				   <!-- /.modal -->
			   </div>
			   <!--/.container  -->

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
