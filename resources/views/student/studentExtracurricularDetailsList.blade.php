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
                        <div class="panel-heading">{{ucwords($extraName) }} ({{ucwords($extra_type) }})</div>
                        <div class="panel-body">

                            <form>
                                <div class="container panel-content">
                                    <div class="row ">

                                        <div class="table-responsive col-md-12">

                                            <table id="sort2" class=" table table-bordered table-striped  table-hover">

                                                <thead>
                                                    <tr class="bg-info">
                                                        <th class="text-center">Class</th>
                                                        <th class="text-center">Year</th>
                                                        <th class="text-center">Place</th>
                                                        <th class="text-center">Reward</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="background:#fff">
                                                    @foreach($extra_details as $extra)
													<tr>
                                                        <td class="text-center">{{ $extra->class}}</td>
                                                        <td class="text-center">{{ $extra->year}}</td>
                                                        <td class="text-center">{{ ucwords($extra->place) }}</td>
                                                        <td class="text-center">{{ ucwords($extra->reward) }}</td>
                                                    </tr>
                                                    @endforeach
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
