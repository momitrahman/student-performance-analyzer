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
                       <div class="panel-heading">List of Subject</div>
                       <div class="panel-body">

                           <form>
                               <div class="container panel-content">
                                   <div class="row ">

                                       <div class="table-responsive col-md-12">

                                           <table id="sort2" class=" table table-bordered table-striped  table-hover">

                                               <thead>
                                                   <tr class="bg-info">
                                                       <th>Name</th>
                                                       <th>One</th>
                                                       <th>Two</th>
                                                       <th>Three</th>
                                                       <th>Four</th>
                                                       <th>Five</th>
                                                       <th>Six</th>
                                                       <th>Seven</th>
                                                       <th>Eight</th>
                                                       <th>Nine</th>
                                                       <th>Ten</th>
                                                   </tr>
                                               </thead>
                                               <tbody style="background:#fff">
											   @foreach($subject_list as $subject)
                                                   <tr>
                                                       <td>{{ ucfirst($subject->subject_name) }}</td>

													   @if($subject->one === 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>														   
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>														
													   @endif
                                                       
													   @if($subject->two === 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>														   
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>														
													   @endif
                                                       
													   @if($subject->three === 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>														   
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>														
													   @endif
                                                       
													   @if($subject->four === 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>														   
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>														
													   @endif
                                                       
													   @if($subject->five === 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>														   
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>														
													   @endif
                                                       
													   @if($subject->six === 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>														   
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>														
													   @endif
                                                       
													   @if($subject->seven === 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>														   
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>														
													   @endif
                                                       
													   @if($subject->eight === 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>														   
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>														
													   @endif
                                                       
													   @if($subject->nine === 1)
                                                      	 	<td class="text-center"><i class="fa fa-check-circle-o check-icon" aria-hidden="true"></i></td>														   
													   @else
                                                    		<td class="text-center"><i class="fa fa-times-circle-o times-icon" aria-hidden="true"></i></td>														
													   @endif
                                                       
													   @if($subject->ten === 1)
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
