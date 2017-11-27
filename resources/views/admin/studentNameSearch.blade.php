@extends('master') 
@section('content') 
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')

	<!--========= Content part Start here =========-->
	<div class="content">
		<!--search  -->
		<div class="search">
			<form action={{ route("studentNameList") }} method="post">
                {{ csrf_field() }}
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search for name..." name="name">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-success " role="button">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							<span>Search</span>
					</span>
			</form>
			</div>
			<!-- /input-group -->
		</div>
		<!--/.search  -->


	</div>
	<!--========= Content part End here =========-->
</div>
@endsection