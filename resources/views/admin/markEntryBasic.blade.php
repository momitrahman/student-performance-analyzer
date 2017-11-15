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
		<strong>Input Error!</strong> Please fill out all field
	</div>
	<!--warning message  -->

	<div class="x-panel">
		<div class="panel panel-primary">
			<div class="panel-heading">Please Select Information</div>
			<div class="panel-body">
				<form>
					<div class="form-group">
						<label>Class</label>
						<select class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
					</div>
					<div class="form-group">
						<label> Year</label>
						<input class="yearselect sample form-control" name="sample" id="sample" value="2017">
					</div>
					<div class="form-group">
						<label>Semester</label>
						<select class="form-control">
							<option>Select Semester</option>
							<option value="#">1</option>
							<option value="#">2</option>
							<option value="#">3</option>
						</select>
					</div>

					<div class="form-group">
						<a href="check-info-for-mark.html" class="btn button button-green " role="button"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</a>
						<a href="list-of-subject.html" class="btn btn-success button " role="button">Next<i class="fa fa-forward next-icon" aria-hidden="true"></i></a>
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
