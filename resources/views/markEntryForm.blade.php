<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mark Entry</title>
	</head>
	<body>
		<form action={{ route('storeSubjectMark') }} method="post">
			{{ csrf_field() }}
			<input type="hidden" name="sid" value={{ $sid }}>
			<input type="hidden" name="class" value={{ $class  }}>
			<input type="hidden" name="year" value={{ $year }}>
			<input type="hidden" name="semester_slot" value={{ $semester_slot }}>
			@foreach ($subject_list as $subject)
				<h3>{{ $subject }}</h3>
				<input type="hidden" name='subject_list[]' value={{ $subject }}>
				@for ($i=1; $i <= $semester_slot; $i++)
					<input type="text" name={{ $subject . '[]'}} placeholder= {{ 'Semester-' . $i }}>
				@endfor
				<br><br>
			@endforeach
			<button type="submit" name="button">Submit</button>
		</form>
	</body>
</html>
