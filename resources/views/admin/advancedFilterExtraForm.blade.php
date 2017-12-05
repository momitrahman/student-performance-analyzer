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
                <div class="panel-heading">Fillup all field</div>
                <div class="panel-body">

                    <form action={{ route("showFilterResultExtra") }} method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="extra" value="{{ $extra }}" >
                        <div class="row">
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
                                @endif
                                <!-- /.col-md-10 -->
                                <!-- <label for="subject" class="col-md-10" style="font-weight:bold">All</label> -->

                            </div>
                            <!-- /. col-md-12 -->


                            <div class="col-md-12">
                                <div class="col-md-2">
                                    <label for="year">Year</label>
                                </div>
                                @if($year === "all")
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="hidden" name="year[]" value="all">
                                        <label for="year" style="font-weight:bold">All</label>
                                    </div>
                                </div>
                                @elseif ($year === "single")
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
                                @endif
                                <!-- /.col-md-10 -->
                            </div>
                            <!-- /. col-md-12 -->

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-2">
                                        <label for="reward">Reward</label>
                                    </div>
                                    @if ($reward === "all")
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <input type="hidden" name="reward" value="all">
                                            <label for="" style="font-weight:bold">All</label>
                                        </div>
                                    </div>
                                    @elseif ($reward === "with")
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <input type="hidden" name="reward" value="with">
                                            <label for="" style="font-weight:bold">With Reward</label>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-10">
                                         <div class="form-group">
                                            <input type="hidden" name="reward" value="without">
                                            <label for="" style="font-weight:bold">Without Reward</label>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <!-- /.form-group -->
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

                            <!-- /.col-md-12 -->


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