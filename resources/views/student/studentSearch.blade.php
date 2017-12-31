@extends('student.master') @section('content')



<!--page-content  -->
<div id="page-content">

	<!--========= Content part Start here =========-->
	<div class="content">
		<form action="">
			<div class="search-stdn">
				<input type="text" class="form-control inner-search-stdn" placeholder="Enter Student ID..." name="sid">
				<button type="submit" class="btn button-green btn-search-stdn">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					<span>Search</span>
				</button>
			</div>

		</form>
	</div>
	<!--========= Content part End here =========-->
</div>

@endsection