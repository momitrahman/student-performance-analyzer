<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Student Search</title>
	</head>
	<body>
		@if (!empty($noid))
			<h2>{{ $noid }}</h2>
		@endif
		<form  action= {{ route('studentSearch') }} method="get">
			<input type="text" name="sid" placeholder="Student ID">
			<button type="submit" name="button">Search</button>
		</form>
	</body>
</html>
