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
                      <strong>Input Error!</strong> Please fill out all field.
                  </div>
                  <!--warning message  -->

                  <div class="x-panel">
                      <div class="panel panel-primary">
                          <div class="panel-heading">Advance Filter</div>
                          <div class="panel-body">

                              <form method="POST" action="" class="form-horizontal">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="class" class="col-md-2">Class</label>
                                              <div class="col-md-10">
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
                                              <!-- <label for="subject" class="col-md-10" style="font-weight:bold">All</label> -->
                                          </div>
                                      </div>

                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="year" class="col-md-2">Year</label>

                                              <!--Rang year  -->
                                              <div class="col-md-10">
                                                  <div class="col-md-6">
                                                      <input class="yearselect sample form-control side-left" name="year" id="year" value="2010">
                                                  </div>
                                                  <div class="col-md-6">
                                                      <input class="yearselect sample form-control side-right" name="year" id="year" value="2017">
                                                  </div>
                                              </div>
                                              <!--Rang year  -->

                                              <!--Single year  -->
                                              <div class="col-md-10" style="display:none">
                                                  <input class="yearselect sample form-control " name="year" id="year" value="2017">
                                              </div>
                                              <!--Single year  -->

                                              <!--All  -->
                                              <!-- <label for="subject" class="col-md-10" style="font-weight:bold">All</label> -->
                                              <!--All  -->
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="mark" class="col-md-2">Marks</label>

                                              <!--All  -->
                                              <!-- <label for="subject" class="col-md-10" style="font-weight:bold">All</label> -->
                                              <!--All  -->

                                              <!--For Rang  -->
                                              <div class="col-md-10">
                                                  <div class="col-md-6 ">
                                                      <input type="text" class="form-control side-left" id="" placeholder="From">
                                                  </div>

                                                  <div class="col-md-6 ">
                                                      <input type="text" class="form-control side-right" id="" placeholder="To">
                                                  </div>
                                              </div>
                                              <!--For Rang  -->

                                              <!--For Equal to  -->
                                              <div class="col-md-10" style="display:none">
                                                  <input type="text" class="form-control" id="" placeholder="Equal To">
                                              </div>
                                              <!--For Equal to  -->

                                              <!--Less than Equal to  -->
                                              <div class="col-md-10" style="display:none">
                                                  <input type="text" class="form-control" id="" placeholder="Less than Equal to">
                                              </div>
                                              <!--Less than Equal to  -->

                                              <!--Greater than Equal to  -->
                                              <div class="col-md-10" style="display:none">
                                                  <input type="text" class="form-control" id="" placeholder="Greater than Equal to">
                                              </div>
                                              <!--Greater than Equal to  -->

                                          </div>
                                      </div>

                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="order" class="col-md-2">Order by</label>

                                              <!--Lowest to Highest Mark  -->
                                              <label for="order" class="col-md-10" style="font-weight:bold">Lowest to Highest Mark</label>
                                              <!--Lowest to Highest Mark  -->

                                              <!--Highest to Lowest Mark  -->
                                              <!-- <label for="order" class="col-md-10" style="font-weight:bold">Highest to Lowest Mark</label> -->
                                              <!--Highest to Lowest Mark  -->
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="limit" class="col-md-2">Output Limit</label>
                                              <!-- All -->
                                              <label for="limit" class="col-md-10" style="font-weight:bold">All</label>
                                              <!--All  -->

                                              <!-- Maximum -->
                                              <!-- <label for="limit" class="col-md-10" style="font-weight:bold">All</label> -->
                                              <!-- Maximum  -->
                                          </div>
                                      </div>
                                  </div>

                                  <!-- Trigger the modal with a button -->
                                  <a href="select-info-for-filter.html" class="btn button button-green" role="button"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</a>
                                  <button type="button" class="btn btn-success button" data-toggle="modal" data-target="#myModal">Next<i class="fa fa-forward next-icon" aria-hidden="true"></i></button>

                                  <!-- modal -->
                                  <div class="modal fade " id="myModal" role="dialog">
                                      <div class="modal-dialog  ">
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                              <div class="modal-header  bg-primary">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Do you want to go Next Page?</h4>
                                              </div>
                                              <!-- <div class="modal-body">
                                                  <p>Do you want to Save?</p>
                                              </div> -->
                                              <div class="modal-footer">
                                                  <a href="view-single-sub-mark.html" class="btn btn-info" role="button">Yes</a>
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>

                                              </div>
                                          </div>
                                          <!-- Modal content-->


                                      </div>
                                  </div>
                                  <!-- /.modal -->


                              </form>


                          </div>
                          <!--/ .panel-body  -->
                      </div>
                      <!--/.panel  -->
                  </div>
                  <!--/ .x-panel  -->


                  <div class="x-panel">
                      <div class="panel panel-primary">
                          <div class="panel-heading">Advance Filter</div>
                          <div class="panel-body">

                              <form method="POST" action="" class="form-horizontal">
                                  <div class="row">

                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="year" class="col-md-2">Year</label>

                                              <!--Rang year  -->
                                              <div class="col-md-10">
                                                  <div class="col-md-6">
                                                      <input class="yearselect sample form-control side-left" name="year" id="year" value="2010">
                                                  </div>
                                                  <div class="col-md-6">
                                                      <input class="yearselect sample form-control side-right" name="year" id="year" value="2017">
                                                  </div>
                                              </div>
                                              <!--Rang year  -->

                                              <!--Single year  -->
                                              <div class="col-md-10" style="display:none">
                                                  <input class="yearselect sample form-control " name="year" id="year" value="2017">
                                              </div>
                                              <!--Single year  -->

                                              <!--All  -->
                                              <!-- <label for="subject" class="col-md-10" style="font-weight:bold">All</label> -->
                                              <!--All  -->
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="mark" class="col-md-2">Marks</label>

                                              <!--All  -->
                                              <!-- <label for="subject" class="col-md-10" style="font-weight:bold">All</label> -->
                                              <!--All  -->

                                              <!--For Rang  -->
                                              <div class="col-md-10">
                                                  <div class="col-md-6 ">
                                                      <input type="text" class="form-control side-left" id="" placeholder="From">
                                                  </div>

                                                  <div class="col-md-6 ">
                                                      <input type="text" class="form-control side-right" id="" placeholder="To">
                                                  </div>
                                              </div>
                                              <!--For Rang  -->

                                              <!--For Equal to  -->
                                              <div class="col-md-10" style="display:none">
                                                  <input type="text" class="form-control" id="" placeholder="Equal To">
                                              </div>
                                              <!--For Equal to  -->

                                              <!--Less than Equal to  -->
                                              <div class="col-md-10" style="display:none">
                                                  <input type="text" class="form-control" id="" placeholder="Less than Equal to">
                                              </div>
                                              <!--Less than Equal to  -->

                                              <!--Greater than Equal to  -->
                                              <div class="col-md-10" style="display:none">
                                                  <input type="text" class="form-control" id="" placeholder="Greater than Equal to">
                                              </div>
                                              <!--Greater than Equal to  -->

                                          </div>
                                      </div>

                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="order" class="col-md-2">Order by</label>

                                              <!--Lowest to Highest Mark  -->
                                              <label for="order" class="col-md-10" style="font-weight:bold">Lowest to Highest Mark</label>
                                              <!--Lowest to Highest Mark  -->

                                              <!--Highest to Lowest Mark  -->
                                              <!-- <label for="order" class="col-md-10" style="font-weight:bold">Highest to Lowest Mark</label> -->
                                              <!--Highest to Lowest Mark  -->
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="limit" class="col-md-2">Output Limit</label>
                                              <!-- All -->
                                              <label for="limit" class="col-md-10" style="font-weight:bold">All</label>
                                              <!--All  -->

                                              <!-- Maximum -->
                                              <!-- <label for="limit" class="col-md-10" style="font-weight:bold">All</label> -->
                                              <!-- Maximum  -->
                                          </div>
                                      </div>
                                  </div>

                                  <!-- Trigger the modal with a button -->
                                  <a href="select-info-for-filter.html" class="btn button button-green" role="button"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</a>
                                  <button type="button" class="btn btn-success button" data-toggle="modal" data-target="#myModal">Next<i class="fa fa-forward next-icon" aria-hidden="true"></i></button>

                                  <!-- modal -->
                                  <div class="modal fade " id="myModal" role="dialog">
                                      <div class="modal-dialog  ">
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                              <div class="modal-header  bg-primary">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Do you want to go Next Page?</h4>
                                              </div>
                                              <!-- <div class="modal-body">
                                                  <p>Do you want to Save?</p>
                                              </div> -->
                                              <div class="modal-footer">
                                                  <a href="view-single-sub-mark.html" class="btn btn-info" role="button">Yes</a>
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>

                                              </div>
                                          </div>
                                          <!-- Modal content-->


                                      </div>
                                  </div>
                                  <!-- /.modal -->


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
