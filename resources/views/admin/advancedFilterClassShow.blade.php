@extends('master') @section('content') @include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
    @include('admin.layouts.header')
    <!--========= Content part Start here =========-->
    <div class="content">

        <div id="fullscreen">
            <div class="x-panel">
                <!--full-Screen Button start -->
                <div class="fullscreen">
                    <a href="#" class="requestfullscreen"><span class="glyphicon glyphicon-fullscreen"></span></a>
                    <a href="#" class="exitfullscreen" style="display: none"><span class="glyphicon glyphicon-resize-small"></span></a>
                </div>
                <!--full-Screen Button end -->

                <div class="panel panel-primary">
                    <div class="panel-heading">{{ 'Class : ' . $class }}</div>
                    <div class="panel-body">
                        <form>
                            <div class="container panel-content">
                                <div class="row ">

                                    <div class="table-responsive col-md-12 ">

                                        <table id="sort2" class=" table table-bordered table-striped  table-hover text-center">

                                            <thead>
                                                <tr class="bg-info ">
                                                    <th class="text-center">Student ID</th>
                                                    <th class="text-center">Year</th>
                                                    <th class="text-center">Total Subject</th>
                                                    <th class="text-center">Total Mark</th>
                                                    <th class="text-center">Average Mark</th>
                                                    <th class="text-center">Details</th>
                                                </tr>
                                            </thead>
                                            <tbody style="background:#fff">
                                                @foreach ($datas as $data)
                                                <tr>
                                                    <td>{{ $data->sid }}</td>
                                                    <td>{{ $data->year }}</td>
                                                    <td>{{ $data->total_subject }}</td>
                                                    <td>{{ $data->total_mark }}</td>
                                                    <td>{{ $data->avg_mark }}</td>
                                                    <td>
                                                        <button class="details-icon">
															<span>Click Here</span>
														</button>
  													 </td>
  												 </tr>
  										 @endforeach
									   </tbody>
								   </table>
                                    <div class="form-group">
                                        <a href="#" class="btn btn-success button" role="button">Ok<i class="fa fa-check-square-o ok-icon" aria-hidden="true"></i></a>
                                    </div>
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
    <!-- .full-screen -->


</div>
<!--========= Content part End here =========-->
</div>
@endsection