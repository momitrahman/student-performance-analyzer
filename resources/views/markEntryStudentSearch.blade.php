<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Student Search For Mark Entry</title>
	</head>
	<body>
		@if (!empty($noid))
			<h2>{{ $noid }}</h2>
		@endif
		<form  action= {{ route('checkStudentId') }} method="get">
			<input type="text" name="sid" placeholder="Student ID">
			<button type="submit" name="button">Search</button>
		</form>
	</body>
</html>
