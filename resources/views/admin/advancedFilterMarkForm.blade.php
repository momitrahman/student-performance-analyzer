@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
    @include('admin.layouts.header')
    <!--========= Content part Start here =========-->
    <div class="content">
        <!--warning message  -->
        @if ($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $error)
                <li># {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!--warning message  -->

        <div class="x-panel">
            <div class="panel panel-primary">
                <div class="panel-heading">Fillup all field</div>
                <div class="panel-body">

                    <form action={{ route( "showFilterResultMark") }} method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            @if (!empty($subject))
                            <input type="hidden" name="subject" value="{{ $subject }}">
                            <div class="col-md-12">
                                <div class="col-md-2">
                                    <label for="class">Class</label>
                                </div>
                                @if ($class === "all")
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="all" style="font-weight:bold">All</label>
                                        <input type="hidden" name="class[]" value="all">
                                    </div>
                                </div>
                                @elseif ($class === "single")
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="hidden" name="class[]" value="single">
                                        <select class="form-control" id="class" name="class[]">
                                            <option value="one">One</option>
                                            <option value="two">Two</option>
                                            <option value="three">Three</option>
                                            <option value="four">Four</option>
                                            <option value="five">Five</option>
                                            <option value="six">Six</option>
                                            <option value="seven">Seven</option>
                                            <option value="eight">Eight</option>
                                            <option value="nine">Nine</option>
                                            <option value="ten">Ten</option>
                                        </select>
                                    </div>
                                </div>
                                @else
                                <div class="col-md-10">
                                    <input type="hidden" name="class[]" value="range">
                                    <div class="col-md-5" style="padding:0">
                                        <select class="form-control" id="class" name="class[]">
                                                <option value="one">One</option>
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                                <option value="four">Four</option>
                                                <option value="five">Five</option>
                                                <option value="six">Six</option>
                                                <option value="seven">Seven</option>
                                                <option value="eight">Eight</option>
                                                <option value="nine">Nine</option>
                                                <option value="ten">Ten</option>
                                            </select>
                                    </div>
                                    <div class="col-md-2" style="text-align:center">
                                        <label> to </label>
                                    </div>
                                    <div class="col-md-5" style="padding:0">
                                        <div class="form-group">
                                            <select class="form-control" id="class" name="class[]">
                                                <option value="one">One</option>
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                                <option value="four">Four</option>
                                                <option value="five">Five</option>
                                                <option value="six">Six</option>
                                                <option value="seven">Seven</option>
                                                <option value="eight">Eight</option>
                                                <option value="nine">Nine</option>
                                                <option value="ten">Ten</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-md-10 -->
                                <!-- <label for="subject" class="col-md-10" style="font-weight:bold">All</label> -->
                                @endif
                            </div>
                            <!-- /. col-md-12 -->

                            @else
                            <input type="hidden" name="subject" value="all">
                            <input type="hidden" name="class[]" value="{{ $class }}">
							@endif

                            <div class="col-md-12">
                                <div class="col-md-2">
                                    <label for="year">Year</label>
                                </div>
                                @if ($year === "all")
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="hidden" name="year[]" value="all">
                                        <label for="year" style="font-weight:bold">All</label>
                                    </div>
                                </div>
                                @elseif ($year === "single" )
                                <div class="col-md-10">
                                    <!--Single year  -->
                                    <div>
                                        <div class="form-group">
                                            <input type="hidden" name="year[]" value="single">
                                            <input class="yearselect sample form-control " name="year[]" id="year" value="2017">
                                        </div>
                                    </div>
                                    <!--Single year  -->
                                </div>
                                @else
                                <div class="col-md-10">
                                    <!--Rang year  -->
                                    <input type="hidden" name="year[]" value="range">
                                    <div class="col-md-5" style="padding:0">
                                        <input class="yearselect sample form-control" name="year[]" id="year" value="2010">
                                    </div>
                                    <div class="col-md-2" style="text-align:center">
                                        <label> to </label>
                                    </div>
                                    <div class="col-md-5" style="padding:0">
                                        <div class="form-group">
                                            <input class="yearselect sample form-control" name="year[]" id="year" value="2017">
                                        </div>
                                    </div>
                                    <!--Rang year  -->

                                </div>
                                <!-- /.col-md-10 -->
                                @endif
                            </div>
                            <!-- /. col-md-12 -->

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-2">
                                        <label for="mark">Marks</label>
                                    </div>
                                    @if ($mark === "all")
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <input type="hidden" name="mark[]" value="all">
                                            <label for="" style="font-weight:bold">All</label>
                                        </div>
                                    </div>
                                    @elseif ($mark === "range")
                                    <div class="col-md-10">
                                        <!--For Rang  -->
                                        <input type="hidden" name="mark[]" value="range">
                                        <div class="col-md-5 " style="padding:0">
                                            <input type="text" class="form-control " name="mark[]" required>
                                        </div>
                                        <div class="col-md-2" style="text-align:center">
                                            <label> to </label>
                                        </div>
                                        <div class="col-md-5 " style="padding:0">
                                            <div class="form-group">
                                                <input type="text" class="form-control " name="mark[]" required>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif ($mark === "equal")
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <!--For Equal to  -->
                                            <input type="hidden" name="mark[]" value="equal">
                                            <div>
                                                <input type="text" class="form-control" name="mark[]" placeholder="Equal To" required>
                                            </div>
                                            <!--For Equal to  -->
                                        </div>
                                    </div>
                                    @elseif ($mark === "less_than")
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <!--Less than Equal to  -->
                                            <input type="hidden" name="mark[]" value="less_than">
                                            <div>
                                                <input type="text" class="form-control" name="mark[]" placeholder="Less than Equal to" required>
                                            </div>
                                            <!--Less than Equal to  -->
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <!--Greater than Equal to  -->
                                            <input type="hidden" name="mark[]" value="greater_than">
                                            <div>
                                                <input type="text" class="form-control" name="mark[]" placeholder="Greater than Equal to" required>
                                            </div>
                                            <!--Greater than Equal to  -->
                                        </div>
                                    </div>
                                    <!-- /.col-md-10 -->
                                    @endif
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col-md-12 -->

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-2">
                                        <label for="order">Order by</label>
                                    </div>
                                    @if ($order === "asc")
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <!--Lowest to Highest Mark  -->
                                            <input type="hidden" name="order" value="asc">
                                            <label for="order" style="font-weight:bold">Lowest to Highest Mark</label>
                                            <!--Lowest to Highest Mark  -->
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <!--Highest to Lowest Mark  -->
                                            <input type="hidden" name="order" value="desc">
                                            <label for="order" style="font-weight:bold">Highest to Lowest Mark</label>
                                            <!--Highest to Lowest Mark  -->
                                        </div>
                                    </div>
                                    <!-- /.col-md-10 -->
                                    @endif
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col-md-12 -->

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-2">
                                        <label for="limit">Output Limit</label>
                                    </div>
                                    @if ($output_limit === "all")
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <!-- All -->
                                            <input type="hidden" name="output_limit" value="all">
                                            <label for="limit" style="font-weight:bold">All</label>
                                            <!--All  -->
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <!-- Maximum -->
                                            <input type="text" class="form-control" name="output_limit" placeholder="Maximum Limit." required>
                                            <!-- Maximum  -->
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-2">
                                    <!-- Trigger the modal with a button -->
                                    <button type="submit" class="btn btn-success button">Next
                                        <i class="fa fa-forward next-icon" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="col-md-10"></div>

                            </div>

                        </div>
                        <!-- /.row -->
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