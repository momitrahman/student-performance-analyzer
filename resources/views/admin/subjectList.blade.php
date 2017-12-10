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
                       <div class="panel-heading">List of Subject</div>
                       <div class="panel-body">

                           <form>
                               <div class="container panel-content">
                                   <div class="row ">

                                       <div class="table-responsive col-md-12">

                                           <table id="sort2" class=" table table-bordered table-striped  table-hover">

                                               <thead>
                                                   <tr class="bg-info">
												   	   <th class="text-center">No.</th>
                                                       <th class="text-center">Name</th>
                                                       <th class="text-center">One</th>
                                                       <th class="text-center">Two</th>
                                                       <th class="text-center">Three</th>
                                                       <th class="text-center">Four</th>
                                                       <th class="text-center">Five</th>
                                                       <th class="text-center">Six</th>
                                                       <th class="text-center">Seven</th>
                                                       <th class="text-center">Eight</th>
                                                       <th class="text-center">Nine</th>
                                                       <th class="text-center">Ten</th>
                                                   </tr>
                                               </thead>
                                               <tbody style="background:#fff">

											   @php $no = 1; @endphp
											   @foreach($subject_list as $subject)
                                                   <tr>
												       <td>{{ $no++ }}</td>
                                                       <td>{{ ucwords(str_replace("_", " ", $subject->subject_name)) }}</td>

													   @if($subject->{1} === 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>
													   @endif

													   @if($subject->{2} == 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>
													   @endif

													   @if($subject->{3} == 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>
													   @endif

													   @if($subject->{4} == 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>
													   @endif

													   @if($subject->{5} == 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>
													   @endif

													   @if($subject->{6} == 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>
													   @endif

													   @if($subject->{7} === 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>
													   @endif

													   @if($subject->{8} === 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>
													   @endif

													   @if($subject->{9} === 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>
													   @endif

													   @if($subject->{10} === 1)
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
