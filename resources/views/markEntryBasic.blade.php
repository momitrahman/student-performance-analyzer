<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Basic Info</title>
	</head>
	<body>
		<form action={{ route('selectSubject') }} method="post">
			{{ csrf_field() }}
			<input type="hidden" name="sid" value={{ $sid }}>
			<input type="text" name="class" placeholder="class">
			<input type="text" name="year" placeholder="year">
			<input type="text" name="semester_slot" placeholder="semester_slot">
			<button type="submit" name="button">next</button>
		</form>
	</body>
</html>
