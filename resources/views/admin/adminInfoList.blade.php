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
                                                        <th class="text-center">Super Admin</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="background:#fff">                                              @php
                                                        $no = 1;
                                                    @endphp
                                                    @foreach($admin_list as $admin)
													<tr>
                                                        <td class="text-center">{{ $no++ }}</td>
                                                        <td class="text-center">{{ ucwords($admin->name) }}</td>
                                                        <td class="text-center">0{{ $admin->mobile }}</td>
                                                        <td class="text-center">{{ ucwords($admin->occupation) }}</td>
                                                        @if($admin->type == 0)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>
													    @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>
													    @endif
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
