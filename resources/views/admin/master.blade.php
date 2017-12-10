<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="Rasel, Momit">
    <title>Student Performance Analyser</title>

	<!-- Favicon -->
    <link rel="shortcut icon" href="img/fav-icon/favicon.ico">

    <!-- Font Awesome -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap vendors -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS   -->
    <link href="/css/adminStyle.css" rel="stylesheet">

    <!-- Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">

</head>

<body>
	<div id="wrapper">
	@yield('content')

	@section('javascipt')
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript " src="/js/jquery.min.js "></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript " src="/js/popper.min.js "></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!--Smooth Transition  -->
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
		<!-- Year selection dropdown   -->
		<script type="text/javascript" src="/js/year-select.js"></script>
		<!--Full Screeen  -->
		<script type="text/javascript" src="/js/jquery.fullscreen.min.js"></script>

		<!--Custom JS  -->
		<script type="text/javascript " src="/js/adminScript.js "></script>
	@show
</div>
</body>
</html>
