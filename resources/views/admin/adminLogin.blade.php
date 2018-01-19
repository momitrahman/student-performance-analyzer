@extends('admin.master') @section('content')


<div class="admin-login-page">
    	   <!--warning message  -->
			   @if (!empty($message))
				   <div class="alert alert-warning">
                       {{ $message }}
                    </div>
			   @endif

			   <!--warning message  -->
<form method="POST" action="{{ route("adminLoginAttempt")}}">
        {{ csrf_field() }}
        <h2 class="text-center">Log-in</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number..." value="" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Your Password..." value="" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Login
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                </button>
            </div>
        </div>

    </div>
</div>