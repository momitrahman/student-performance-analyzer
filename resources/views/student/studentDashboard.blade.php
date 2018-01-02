@extends('student.master')
@section('content')
<!--page-content  -->
<div id="page-content">
    @include('student.layouts.header')

<!--========= Content part Start here =========-->
            <div class="content">

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
                    <div class="panel-heading">Timeline Graph</div>
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
                                    <div data-percentage="50" class="bar"></div>
                                    <span>Class 1</span>
                                </li>
                                <li>
                                    <div data-percentage="20" class="bar"></div>
                                    <span>Class 2</span>
                                </li>
                                <li>
                                    <div data-percentage="30" class="bar"></div>
                                    <span>Class 3</span>
                                </li>
                                <li>
                                    <div data-percentage="40" class="bar"></div>
                                    <span>Class 4</span>
                                </li>
                                <li>
                                    <div data-percentage="50" class="bar"></div>
                                    <span>Class 5</span>
                                </li>
                                <li>
                                    <div data-percentage="60" class="bar"></div>
                                    <span>Class 6</span>
                                </li>
                                <li>
                                    <div data-percentage="70" class="bar"></div>
                                    <span>Class 7</span>
                                </li>
                                <li>
                                    <div data-percentage="80" class="bar"></div>
                                    <span>Class 8</span>
                                </li>
                                <li>
                                    <div data-percentage="90" class="bar"></div>
                                    <span>Class 9</span>
                                </li>
                                <li>
                                    <div data-percentage="100" class="bar"></div>
                                    <span>Class 10</span>
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
