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
                        <div class="clearfix"></div>
                        <div class="panel-heading">List of Game</div>
                        <div class="panel-body">

                            <form>
                                <div class="container panel-content">
                                    <div class="row ">

                                        <div class="table-responsive col-md-12">

                                            <table id="sort2" class=" table table-bordered table-striped  table-hover">

                                                <thead>
                                                    <tr class="bg-info">
                                                        <th>Game Name</th>
                                                        <th>Game Type</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="background:#fff">
                                                    <tr>
                                                        <td>Football</td>
                                                        <td>Outdoor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Debate</td>
                                                        <td>Indoor</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!--/.table-responsive  -->

                                    </div>
                                    <!--/.row  -->

                                    <div class="form-group">
                                        <a href="index.html" class="btn btn-success button" role="button">Ok<i class="fa fa-check-square-o ok-icon" aria-hidden="true"></i></a>
                                        <!-- <a href="input-registration.html" class="btn button button-unique" role="button">Update</a> -->
                                    </div>
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
