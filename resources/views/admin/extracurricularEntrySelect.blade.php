@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
<!--========= Content part Start here =========-->
<div class="content">
    <!--Info Panel  -->
    <div class="card card-light text-center">
        <div class="card-body">
            <label for="">ID: <strong>2010-05-32-02</strong></label>&nbsp;&nbsp;
            <label for="">Name: <strong>Marquis</strong></label>
        </div>
    </div>
    <!--Info Panel  -->

    <!--warning message  -->
    <div class="alert alert-warning">
        <strong>Input Error!</strong> Please select atleast one game.
    </div>
    <!--warning message  -->

    <div class="x-panel">
        <div class="panel panel-primary">
            <div class="panel-heading">List of Game</div>
            <div class="panel-body">

                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group">
                            <div>
                                <input type="search" class="form-control" id="search" placeholder="search your game..">
                            </div>
                        </div>
                    </div>

                    <!--========= Indoor Game Start here =========-->
                    <div class="row subject-section">
                        <div class="form-group">
                            <div class="searchable-container">
                                <h3 class="well well-sm text-primary ">Indoor Game </h3>
                                <div class="items col-sm-4 col-md-3 col-lg-3">
                                    <div class="info-block block-info clearfix">
                                        <div class="square-box pull-left">
                                            <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                                        </div>
                                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                            <label class="btn btn-default">
                                                <div class="bizcontent">
                                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                    <h5>Ludo</h5>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--/.items  -->

                            </div>
                            <!-- /.searchable-container  -->
                        </div>
                        <!-- /.form-group  -->
                    </div>
                    <!--/.row  -->
                    <!--========= Indoor Game Eng here =========-->

                    <!--========= Outdoor Game Start here =========-->
                    <div class="row subject-section">
                        <div class="form-group">
                            <div class="searchable-container">
                                <h3 class="well well-sm text-primary ">Outdoor Game </h3>

                                <div class="items col-sm-4 col-md-3 col-lg-3">
                                    <div class="info-block block-info clearfix">
                                        <div class="square-box pull-left">
                                            <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                                        </div>
                                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                            <label class="btn btn-default">
                                                <div class="bizcontent">
                                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                    <h5>Kabaddi</h5>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--/.items  -->

                            </div>
                            <!-- /.searchable-container  -->
                        </div>
                        <!-- /.form-group  -->
                    </div>
                    <!--/.row  -->
                    <!--========= Outdoor Game Eng here =========-->


                    <div class="form-group">
                        <a href="select-info-for-extra-curr.html" class="btn button button-green" role="button"><i class="fa fa-backward back-icon" aria-hidden="true"></i>Back</a>
                        <a href="add-extra-curr.html" class="btn btn-success button" role="button">Next<i class="fa fa-forward next-icon" aria-hidden="true"></i></a>

                    </div>
                </div>
                <!-- /.container-fluid  -->

            </div>
            <!--/ .panel-body  -->
        </div>
        <!--/.panel  -->
    </div>
    <!--/ .x-panel  -->
</div>
<!--/.content  -->
<!--========= Content part End here =========-->

</div>
@endsection
