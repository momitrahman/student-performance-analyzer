<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<form action={{ route("filterFormSelect") }} method="post">
		{{ csrf_field() }}
		<label>Class</label>
		<select name="class">
			<option value="one">One</option>
			<option value="three">Two</option>
			<option value="five">Three</option>
		</select>
		<br>
		{{-- <label>Subject</label>
		<select name="subject">
			@foreach ($subject_list as $subject)
				<option value= {{ $subject }} >{{ $subject }}</option>
			@endforeach
		</select> --}}
		<br>
		<button type="submit" name="button">next</button>
	</form>
	</body>
</html>
