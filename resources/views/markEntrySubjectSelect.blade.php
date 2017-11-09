<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Choose your subjects</title>
	</head>
	<body>
		<form action={{ route('subjectMarkEntry') }} method="post">
			{{ csrf_field() }}
			<input type="hidden" name="sid" value={{ $sid }}>
			<input type="hidden" name="class" value={{ $class  }}>
			<input type="hidden" name="year" value={{ $year }}>
			<input type="hidden" name="semester_slot" value={{ $semester_slot }}>
			@foreach ($subject_list as $subject)
				<input type="checkbox" name="subject_list[]" value={{ $subject }}> {{ $subject}}
			@endforeach
			<br>
			<button type="submit" name="button">next</button>
		</form>
	</body>
</html>
