<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>EC Basic Info</title>
	</head>
	<body>
		<form action={{ route('selectExtra') }} method="post">
			{{ csrf_field() }}
			<input type="hidden" name="sid" value={{ $sid }}>
			<input type="text" name="class" placeholder="class">
			<input type="text" name="year" placeholder="year">
			<button type="submit" name="button">next</button>
		</form>
	</body>
</html>
