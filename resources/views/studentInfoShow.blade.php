<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<ul>
			@foreach ($datas as $data)
				<li> {{ $data ->sid }}</li>
				<li> {{ $data ->name }}</li>
				<li> {{ $data ->father_name }}</li>
			@endforeach
		</ul>
	</body>
</html>
