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
					   <div class="panel-heading">Extra Curricular Advanced Filter</div>
					   <div class="panel-body">

						   <form action= method="post">

							   <div class="row">
								   <div class="col-md-12">
									   <div class="form-group" id="div1">
										   <label for="attribute">Attribute</label>
										   <select class="form-control" id="showsub" name="subject">
											   
											  	 <option value="">Cricket</option>
											  	 <option value="">Football</option>
											  	 <option value="">Debate</option>
											  
										   </select>
									   </div>
								   </div>
							   </div>
						   		

							   <!-- Trigger the modal with a button -->
								<a href={{ route('selectOption') }} class="btn button button-green" role="button"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</a>
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
