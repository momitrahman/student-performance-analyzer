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
		<label for="">Studen ID: <strong>{{ $sid }}</strong></label>
		<label for=""> | Name: <strong>{{ ucfirst($name) }}</strong></label>
		<label for=""> | Class: <strong>{{ ucfirst($class) }}</strong></label>
		<label for=""> | Year: <strong>{{ ucfirst($year) }}</strong></label>
		<label for=""> | Semester Slot: <strong>{{ ucfirst($semester_slot) }}</strong></label>
	</div>
</div>
<!--Info Panel  -->

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

<div class="x-panel">

   <div class="panel panel-primary">
	   <div class="clearfix"></div>
	   <div class="panel-heading">Add Mark</div>
	   <div class="panel-body">

		   <form action={{ route('storeSubjectMark') }} method="post">
			   {{ csrf_field() }}

			   <input type="hidden" name="sid" value={{ $sid }}>
			   <input type="hidden" name="name" value={{ $name }}>
			   <input type="hidden" name="class" value={{ $class  }}>
			   <input type="hidden" name="year" value={{ $year }}>
			   <input type="hidden" name="semester_slot" value={{ $semester_slot }}>

			   <div class="container panel-content">
				   <div class="row ">

					   <div class="table-responsive col-md-12">

						   <table id="sort2" class=" table table-bordered table-striped  table-hover">


							@if (!empty($subject_list))
								<thead>
									<tr class="bg-info">
										<th>Subject</th>
										<th>Semester 1</th>
										<th>Semester 2</th>
										@if ($semester_slot == 3)
											<th>Semester 3</th>
										@endif
									</tr>
								</thead>
								@foreach ($subject_list as $subject)

								<tbody style="background:#fff">
									<tr>
										<td>{{ ucfirst($subject) }}</td>
										<input type="hidden" name='subject_list[]' value={{ $subject }}>

									 @for ($i=1; $i <= $semester_slot; $i++)
										 <td><input type="text" name={{ $subject . '[]'}}  class="form-control" placeholder="Enter mark"></td>
									 @endfor
									</tr>
								</tbody>

								@endforeach
							@else
								<div class="alert alert-warning">
				   				 	<strong>No Subject Selected</strong>
				   			 	</div>
							@endif

						   </table>
					   </div>
					   <!--/.table-responsive  -->

				   </div>
				   <!--/.row  -->

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
								   <button type="submit"  class="btn btn-info">Yes</button>
								   <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
							   </div>
						   </div>
						   <!-- Modal content-->
						   <!-- Modal content-->
					   </div>
				   </div>
				   <!-- /.modal -->
			   </div>
			   <!--/.container  -->
		   </form>

		   <form class="" action={{ route('selectSubject') }} method="post">
				  {{ csrf_field() }}
				  <div class="form-group">
					  <input type="hidden" name="sid" value={{ $sid }}>
 					 <input type="hidden" name="name" value={{ $name }}>
 					 <input type="hidden" name="class" value={{ $class  }}>
 					 <input type="hidden" name="year" value={{ $year }}>
 					 <input type="hidden" name="semester_slot" value={{ $semester_slot }}>
					  <button type="submit" class="btn button button-green ">Back<i class="fa fa-backward back-icon" aria-hidden="true"></i></button>
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
