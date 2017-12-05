@extends('master')
@section('content')
@include('admin.layouts.sidebar')
<!--page-content  -->
<div id="page-content">
	@include('admin.layouts.header')
	<!--========= Content part Start here =========-->
	<div class="content">

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
					<div class="panel-heading">Advance Filter Show</div>
					<div class="panel-body">
						<form>
							<div class="container panel-content">
								<div class="row ">

									<div class="table-responsive col-md-12 ">

										<table id="sort2" class=" table table-bordered table-striped  table-hover text-center">
											@if (!empty($datas))
											<thead>
												<tr class="bg-info ">
													<th class="text-center">No.</th>
													<th class="text-center">Student ID</th>
													<th class="text-center">Class</th>
													<th class="text-center">Year</th>
													<th class="text-center">Place</th>
													<th class="text-center">Reward</th>
												</tr>
											</thead>
											<tbody style="background:#fff">
												@php $no=1 @endphp
												@foreach ($datas as $data)
												<tr>
													<td>{{ $no++ }}</td>
													<td>{{ $data->sid}}</td>
													<td>{{ ucwords($data->class) }}</td>
													<td>{{ $data->year}}</td>
													<td>{{ ucwords($data->place) }}</td>
													<td>{{ ucwords($data->reward) }}</td>
												</tr>
												@endforeach
											@else
											<div class="alert alert-info">
  												<strong>No Data Found</strong>
											</div>
											@endif
											</tbody>
										</table>
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
			</div>
			<!-- .full-screen -->

		</div>
		<!--========= Content part End here =========-->
	</div>
	@endsection