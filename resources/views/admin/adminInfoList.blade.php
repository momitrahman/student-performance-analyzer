@extends('admin.master')
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
                        <div class="panel-heading">List of Admin</div>
                        <div class="panel-body">

                            <form >
                                <div class="container panel-content">
                                    <div class="row ">

                                        <div class="table-responsive col-md-12">

                                            <table id="sort2" class=" table table-bordered table-striped  table-hover">

                                                <thead>
                                                    <tr class="bg-info">
                                                        <th class="text-center">No.</th>
                                                        <th class="text-center">Full Name</th>
                                                        <th class="text-center">Mobile</th>                                     
                                                        <th class="text-center">Occupation</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="background:#fff">                                                 
													<tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">Doyle Abbott</td>
                                                        <td class="text-center">1-105-541-1209 x242</td>
                                                        <td class="text-center">Teacher</td>
                                                        <td class="action text-center">
                                                            <a href="#"  class="btn button button-green-action" ><span>Edit</span></a>
                                                            <a href="#"  class="btn button button-brown" ><span>Delete</span></a>
  													    </td>
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
