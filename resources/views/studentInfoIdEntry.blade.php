<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>StudentInfoIdGenerate</title>
	</head>
	<body>

		@if ($errors->any())
			<ul>
				@foreach ($errors->all() as  $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif

		<form action={{ route('studentInfoIdGenearter') }} method="get">
			{{ csrf_field() }}
			<input type="text" name="class" placeholder="class" value="{{ old('class') }}">
			<br>
			<input type="text" name="roll" placeholder="roll" value="{{ old('roll') }}">
			<br>
			<input type="text" name="section" placeholder="section" value="{{ old('section') }}">
			<br>
			<input type="text" name="year" placeholder="year" value="{{ old('year') }}">
			<br>
			<button type="submit" name="button" value="ok">Next</button>
		</form>
	</body>
</html>
