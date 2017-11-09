<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Extracurricular Entry</title>
	</head>
	<body>
		@if ($errors->any())
			<ul>
				@foreach ($errors->all() as  $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif


		<form action={{ route('extracurricularStore') }} method="post">
			{{ csrf_field() }}
			<input type="text" name="title" value={{ old('title') }}> <br>
			<select name="type">
				<option value="indoor" selected>Indoor</option>
				<option value="outdoor">Outdoor</option>
			</select>
			<button type="submit" name="button">ok</button>
		</form>
	</body>
</html>
