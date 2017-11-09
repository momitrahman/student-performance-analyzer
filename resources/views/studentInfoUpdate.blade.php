<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Student Info</title>
	</head>
	<body>
		<form action={{ route('studentInfoStore') }} method="get">
			{{ csrf_field() }}
			<input type="text" name="name" placeholder="name" value="{{ old('name') }}">
			<br>
			<input type="text" name="birth_number" placeholder="birth_number" value="{{ old('birth_number') }}">
			<br>
			<input type="text" name="father_name" placeholder="father_name" value="{{ old('father_name') }}">
			<br>
			<input type="text" name="mother_name" placeholder="mother_name" value="{{ old('mother_name') }}">
			<br>
			<input type="text" name="guardian_name" placeholder="guardian_name" value="{{ old('guardian_name') }}">
			<br>
			<input type="text" name="nid_holder" placeholder="nid_holder" value="{{ old('nid_holder') }}">
			<br>
			<input type="text" name="nid_number" placeholder="nid_number" value="{{ old('nid_number') }}">
			<br>
			<input type="hidden" name="class" value="{{ old('class') }}">
			<br>
			<input type="hidden" name="roll" value="{{ old('roll') }}">
			<br>
			<input type="hidden" name="section" value="{{ old('section') }}">
			<br>
			<input type="hidden" name="year" value="{{ old('year') }}">
			<br>
			<input type="hidden" name="sid" value="{{ old('sid') }}">
			<br>
			<button type="submit" name="button">OK</button>
		</form>
	</body>
</html>
