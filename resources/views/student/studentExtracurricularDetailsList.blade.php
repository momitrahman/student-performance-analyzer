@extends('student.master')
@section('content')
<!--page-content  -->
<div id="page-content">
	@include('student.layouts.header')
<!--========= Content part Start here =========-->
            <div class="content">

                <div class="x-panel">

                    <div class="panel panel-primary">
                        <div class="clearfix"></div>
                        <div class="panel-heading">Game List</div>
                        <div class="panel-body">

                            <form>
                                <div class="container panel-content">
                                    <div class="row ">

                                        <div class="table-responsive col-md-12">

                                            <table id="sort2" class=" table table-bordered table-striped  table-hover">

                                                <thead>
                                                    <tr class="bg-info">
                                                        <th class="text-center">Year</th>
                                                        <th class="text-center">Class</th>
                                                        <th class="text-center">Institute</th>
                                                        <th class="text-center">Prize</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="background:#fff">
                                                    
													<tr>
                                                        <td class="text-center">1990</td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">Reichert - Kuphal</td>
                                                        <td class="text-center">Winner</td>                                                       
                                                    </tr>

                                                   <tr>
                                                        <td class="text-center">1990</td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">Reichert - Kuphal</td>
                                                        <td class="text-center">Winner</td>                                                       
                                                    </tr>

                                                    <tr>
                                                        <td class="text-center">1990</td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">Reichert - Kuphal</td>
                                                        <td class="text-center">Winner</td>                                                       
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!--/.table-responsive  -->

                                    </div>
                                    <!--/.row  -->

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
