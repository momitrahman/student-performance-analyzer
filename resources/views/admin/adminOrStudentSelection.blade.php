@extends('admin.master') 
@section('content')

        <div class="admin-or-student-selection">

            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" name="option" class="btn btn-sub button" value="admin">Admin</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" name="option" class="btn btn-cls button" value="student">Student</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>

