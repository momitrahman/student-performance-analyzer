@extends('student.master')
@section('content')
<!--page-content  -->
<div id="page-content">
	@include('student.layouts.header')
<!--========= Content part Start here =========-->
            <div class="content">
            @if(!empty($all_extra_details_list))
                <div class="x-panel">

                    <div class="panel panel-primary">
                        <div class="clearfix"></div>
                        <div class="panel-heading">Extra Curricular Participant List : </div>
                        <div class="panel-body">

                            <form>
                                <div class="container panel-content">
                                    <div class="row ">

                                        <div class="table-responsive col-md-12">

                                            <table id="sort2" class=" table table-bordered table-striped  table-hover">

                                                <thead>
                                                    <tr class="bg-info">
                                                        <th class="text-center">No. </th>
                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Reward</th>
                                                        <th class="text-center">Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="background:#fff">
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    @foreach($all_extra_details_list as $key=>$value)
													<tr>
                                                        <td class="text-center">{{ $no++ }}</td>
                                                        <td class="text-center">{{ ucwords($key )}}</td>
                                                        {{--  <td class="text-center">{{ $extra->}}</td>  --}}
                                                        <td class="text-center">{{ $value }}</td>
                                                        <td class="details-link text-center">
                                                            <a href="{{ route('extraDetails', ['extraName' => $key]) }}"  class="details-icon" target="_blank"><span>Click Here</span></a>
  													    </td>
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
            @else
            <div class="alert alert-info">
                <strong> No Participation Yet</strong>.
                </div>
            @endif
            </div>
            <!--========= Content part End here =========-->

          </div>
          @endsection
