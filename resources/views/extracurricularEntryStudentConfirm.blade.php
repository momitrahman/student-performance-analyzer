<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Student Info Show For EC Entry</title>
	</head>
	<body>
		<ul>
			@foreach ($datas as $data)
				<li> {{ $data ->sid }}</li>
				<li> {{ $data ->name }}</li>
				<li> {{ $data ->father_name }}</li>
				<li> {{ $data ->mother_name }}</li>
			@endforeach

			<form action={{ route('checkBasicInfoExtra') }} method="post">
				{{ csrf_field() }}
				<input type="hidden" name="sid" value={{ $sid }}>
				<button type="submit" name="button">confirm</button>
			</form>
		</ul>
	</body>
</html>
