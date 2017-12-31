@section('header')
<!--========= Heading part start here =========-->
<header>
	<nav class="nav-section" id="nav-section">

		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
			 aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="head-menu">
			<ul>
				<li>
					<a href="#">Sucject</a>
				</li>
				<li>
					<a href="#">Class</a>
				</li>
				<li>
					<a href="#">Status</a>
				</li>
				<li>
					<a href="#">Extra Curricular</a>
				</li>
			</ul>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="user-stdn">
			<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right ">
					<li class="dropdown ">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

							<span class="user-name-stdn">
								<span class="user-name-stdn-innner">
									<strong>Muhammad Rasel</strong>
									<span class="caret"></span>
									<br/>
									<p class="user-name-stdn-id">2017105</p>
								</span>

							</span>
						</a>
						<ul class="dropdown-menu user">
							<!-- <li>
								<a href="#">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit Profile</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-user" aria-hidden="true"></i> My Account</a>
							</li>
							<li role="separator" class="divider"></li> -->
							<li>
								<a href="#">
									<i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
	</nav>
</header>
<!--========= Heading part End here =========-->
@show