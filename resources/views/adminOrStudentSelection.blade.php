@extends('admin.master')
@section('content')

        <div class="admin-or-student-selection">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <a href="{{ route("adminLogin") }}">
                                <button name="option" class="btn btn-sub button" value="admin">Admin</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <a href="{{ route("search") }}">
                                <button name="option" class="btn btn-sub button" value="admin">Student</button>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
