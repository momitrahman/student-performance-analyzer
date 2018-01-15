@section('header')
<!--========= Heading part start here =========-->
<header>
   <nav class="nav-section" id="nav-section">
	   <div class="container-fluid">
		   <!-- Brand and toggle get grouped for better mobile display -->
		   <div class="navbar-header">
			   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		   <span class="sr-only">Toggle navigation</span>
		   <span class="icon-bar"></span>
		   <span class="icon-bar"></span>
		   <span class="icon-bar"></span>
	   </button>

		   </div>
		   <!-- Header Toggle  -->
		   <div class="navbar-header" id="sidebarCollapse">
			   <div class="toggle-btn">
				   <i class="fa fa-bars"></i>
			   </div>
		   </div>

		   <!-- Collect the nav links, forms, and other content for toggling -->
		   <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
			   <ul class="nav navbar-nav navbar-right ">
				   <li class="dropdown ">
					   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						   <span class="admin admin-online">
						   <img src="/img/admin.png" alt="admin"><i></i>
					   </span> <strong class="admin-login">{{ ucwords(session("admin_name")) }}</strong>
					   <span class="caret" ></span>
					   </a>
					   <ul class="dropdown-menu user">
						   <li><a href="{{ route("adminLogout") }}"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
					   </ul>
				   </li>
			   </ul>
		   </div>
		   <!-- /.navbar-collapse -->
	   </div>
	   <!-- /.container-fluid -->
   </nav>
</header>
<!--========= Heading part End here =========-->
@show
