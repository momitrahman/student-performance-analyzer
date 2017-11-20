@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
	<!--========= Content part Start here =========-->
              <div class="content">
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
                          <div class="panel-heading">Advanced Filter</div>
                          <div class="panel-body">

							  <form action={{ route("showFilterResult") }} method="post">
		  				  		{{ csrf_field() }}
                                  <div class="row">
									  @if (!empty($subject))
										  <input type="hidden" name="subject" value={{ $subject }}>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="class" class="col-md-2">Class</label>
                                              <div class="col-md-10">
												  @if ($class === "all")
													  <label for="all" class="col-md-10" style="font-weight:bold">All</label>
													  <input type="hidden" name="class[]" value="all">
												  @elseif ($class === "single")
													<input type="hidden" name="class[]" value="single">
                                                  <select class="form-control" id="class" name="class[]">
                                                      <option value="one">One</option>
                                                      <option value="two">Two</option>
                                                      <option value="three">Three</option>
                                                      <option value="four">Four</option>
                                                      <option value="five">Five</option>
                                                      <option value="six">Six</option>
                                                      <option value="seven">Seven</option>
                                                      <option value="eight">Eight</option>
                                                      <option value="nine">Nine</option>
                                                      <option value="ten">Ten</option>
                                                   </select>
											   	@else
													<input type="hidden" name="class[]" value="range">
													<div class="col-md-6">
													<select class="form-control" id="class" name="class[]">
														<option value="one">One</option>
														<option value="two">Two</option>
														<option value="three">Three</option>
														<option value="four">Four</option>
														<option value="five">Five</option>
														<option value="six">Six</option>
														<option value="seven">Seven</option>
														<option value="eight">Eight</option>
														<option value="nine">Nine</option>
														<option value="ten">Ten</option>
													 </select>
												 	</div>
													<label> to </label>
													<div class="col-md-6">
													<select class="form-control" id="class" name="class[]">
														<option value="one">One</option>
														<option value="two">Two</option>
														<option value="three">Three</option>
														<option value="four">Four</option>
														<option value="five">Five</option>
														<option value="six">Six</option>
														<option value="seven">Seven</option>
														<option value="eight">Eight</option>
														<option value="nine">Nine</option>
														<option value="ten">Ten</option>
													 </select>
												 	</div>
                                              </div>
                                              <!-- <label for="subject" class="col-md-10" style="font-weight:bold">All</label> -->
                                          </div>
									  	@endif
                                      </div>

								  @else
									<input type="hidden" name="subject" value="all">
		  					  		<input type="hidden" name="class[]" value= {{ $class }}>
	  							  @endif

						      <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="year" class="col-md-2">Year</label>
									  @if ($year === "all")
										  <input type="hidden" name="year[]" value="all">
										  <label for="year" class="col-md-10" style="font-weight:bold">All</label>
									  @elseif ($year === "single" )
										  <!--Single year  -->
										  <div class="col-md-10">
											  <input type="hidden" name="year[]" value="single">
											  <input class="yearselect sample form-control " name="year[]" id="year" value="2017">
										  </div>
										  <!--Single year  -->
										@else
                                          <!--Rang year  -->
										  	<input type="hidden" name="year[]" value="range">
                                          <div class="col-md-10">
                                              <div class="col-md-6">
                                                  <input class="yearselect sample form-control side-left" name="year[]" id="year" value="2010">
                                              </div>
											  <label>to</label>
                                              <div class="col-md-6">
                                                  <input class="yearselect sample form-control side-right" name="year[]" id="year" value="2017">
                                              </div>
                                          </div>
                                      <!--Rang year  -->
								  @endif
                                  </div>
                              </div>

                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="mark" class="col-md-2">Marks</label>
									  @if ($mark === "all")
										  <input type="hidden" name="mark[]" value="all">
										  <label for="year" class="col-md-10" style="font-weight:bold">All</label>
										  <!--For Rang  -->
									  @elseif ($mark === "range")
										  <input type="hidden" name="mark[]" value="range">
                                          <div class="col-md-10">
                                              <div class="col-md-6 ">
                                                  <input type="text" class="form-control side-left" name="mark[]">
                                              </div>
											  <label>to</label>
                                              <div class="col-md-6 ">
                                                  <input type="text" class="form-control side-right" name="mark[]">
                                              </div>
                                          </div>
                                      <!--For Equal to  -->
								  	@elseif ($mark === "equal")
								  		<input type="hidden" name="mark[]" value="equal">
                                      	<div class="col-md-10">
                                     	<input type="text" class="form-control" name="mark[]" placeholder="Equal To">
                                      </div>
                                      <!--For Equal to  -->
									  <!--Less than Equal to  -->
								  @elseif ($mark === "less_than")
								  	<input type="hidden" name="mark[]" value="less_than">
                                     <div class="col-md-10"  >
                                          <input type="text" class="form-control"  name="mark[]" placeholder="Less than Equal to">
                                      </div>
                                      <!--Less than Equal to  -->
									  <!--Greater than Equal to  -->
								  @else
								  	<input type="hidden" name="mark[]" value="greater_than">
                                      <div class="col-md-10"  >
                                          <input type="text" class="form-control" name="mark[]" placeholder="Greater than Equal to">
                                      </div>
                                      <!--Greater than Equal to  -->
								  @endif
                                  </div>
                              </div>

                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="order" class="col-md-2">Order by</label>

                                      <!--Lowest to Highest Mark  -->
									  @if ($order === "asc")
										  	<input type="hidden" name="order" value="asc">
										   <label for="order" class="col-md-10" style="font-weight:bold">Lowest to Highest Mark</label>
                                      <!--Lowest to Highest Mark  -->
								  	  @else
                                      <!--Highest to Lowest Mark  -->
									  <input type="hidden" name="order" value="desc">
                                      <label for="order" class="col-md-10" style="font-weight:bold">Highest to Lowest Mark</label>
                                      <!--Highest to Lowest Mark  -->
								  	@endif
                                  </div>
                              </div>

                              <div class="col-md-12">
                                  <div class="form-group">
									  <label for="limit" class="col-md-2">Output Limit</label>
									  <!-- All -->
									  @if ($output_limit === "all")
										  <input type="hidden" name="output_limit" value="all">
                                      		<label for="limit" class="col-md-10" style="font-weight:bold">All</label>
                                      <!--All  -->

                                      <!-- Maximum -->
                                      	@else
											<input type="text" class="form-control" name="output_limit" placeholder="Maximum Limit.">
										@endif
                                      <!-- Maximum  -->
                                  </div>
                              </div>
                          </div>

                                  <!-- Trigger the modal with a button -->
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
