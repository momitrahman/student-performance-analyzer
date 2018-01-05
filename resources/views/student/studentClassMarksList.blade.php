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
                        <div class="panel-heading">Class Seven</div>
                        <div class="panel-body">

                            <form>
                                <div class="container panel-content">
                                    <div class="row ">

                                        <div class="table-responsive col-md-12">

                                            <table id="sort2" class=" table table-bordered table-striped  table-hover">

                                                <thead>
                                                    <tr class="bg-info">
                                                        <th class="text-center">Subject Name</th>
                                                        <th class="text-center">Semester 1</th>
                                                        <th class="text-center">Semester 2</th>
                                                        <th class="text-center">Semester 3</th>
                                                        <th class="text-center">Average</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="background:#fff">
                                                    
													<tr>
                                                        <td class="text-center">Bangla</td>
                                                        <td class="text-center">54</td>
                                                        <td class="text-center">65</td>
                                                        <td class="text-center">56</td>
                                                        <td class="text-center">65</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-center">Bangla</td>
                                                        <td class="text-center">54</td>
                                                        <td class="text-center">65</td>
                                                        <td class="text-center">56</td>
                                                        <td class="text-center">65</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-center">Bangla</td>
                                                        <td class="text-center">54</td>
                                                        <td class="text-center">65</td>
                                                        <td class="text-center">56</td>
                                                        <td class="text-center">65</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-center">Bangla</td>
                                                        <td class="text-center">54</td>
                                                        <td class="text-center">65</td>
                                                        <td class="text-center">56</td>
                                                        <td class="text-center">65</td>
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

                        <!-- Chart Start-->
        <div id="fullscreen">
            <div class="x-panel">
                <!--full-Screen Button start -->
                <div class="fullscreen">
                    <a href="#" class="requestfullscreen">
                        <span class="glyphicon glyphicon-fullscreen"></span>
                    </a>
                    <a href="#" class="exitfullscreen" style="display: none">
                        <span class="glyphicon glyphicon-resize-small"></span>
                    </a>
                </div>
                <!--full-Screen Button end -->
                <div class="panel panel-primary">
                    <div class="panel-heading">Class Seven</div>
                    <div class="panel-body">

                        <div id="chart">
                            <ul id="numbers">
                                <li>
                                    <span>100%</span>
                                </li>
                                <li>
                                    <span>90%</span>
                                </li>
                                <li>
                                    <span>80%</span>
                                </li>
                                <li>
                                    <span>70%</span>
                                </li>
                                <li>
                                    <span>60%</span>
                                </li>
                                <li>
                                    <span>50%</span>
                                </li>
                                <li>
                                    <span>40%</span>
                                </li>
                                <li>
                                    <span>30%</span>
                                </li>
                                <li>
                                    <span>20%</span>
                                </li>
                                <li>
                                    <span>10%</span>
                                </li>
                                <li>
                                    <span>0%</span>
                                </li>
                            </ul>

                            <ul id="bars">
                                <li>
                                    <div data-percentage="87" class="bar"></div>
                                    <span>Bangla</span>
                                </li>
                                <li>
                                    <div data-percentage="20" class="bar"></div>
                                    <span>English</span>
                                </li>
                                <li>
                                    <div data-percentage="75" class="bar"></div>
                                    <span>Math</span>
                                </li>
                                <li>
                                    <div data-percentage="84" class="bar"></div>
                                    <span>Science</span>
                                </li>                             

                            </ul>
                        </div>

                    </div>
                    <!--/ .panel-body  -->
                </div>
                <!--/.panel  -->
            </div>
            <!--/ .x-panel  -->
        </div>
        <!--/ #fullscreen  -->
        <!-- Chart End -->
            </div>
            <!--========= Content part End here =========-->

          </div>
          @endsection
