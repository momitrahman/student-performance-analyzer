<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Choose your extracurricular Activites</title>
	</head>
	<body>
		<form action={{ route('extraEntry') }} method="post">
			{{ csrf_field() }}
			<input type="hidden" name="sid" value={{ $sid }}>
			<input type="hidden" name="class" value={{ $class  }}>
			<input type="hidden" name="year" value={{ $year }}>
			<h2>Indoor</h2>
			@foreach ($extra_list as $extra)
				@if ($extra->type === 'indoor')
					<input type="checkbox" name="indoor_list[]" value={{ $extra->title  }}> {{ $extra->title  }}
				@endif
			@endforeach
			<h2>Outdoor</h2>
			@foreach ($extra_list as $extra)
				@if ($extra->type === 'outdoor')
					<input type="checkbox" name="outdoor_list[]" value={{ $extra->title  }}> {{ $extra->title  }}
				@endif
			@endforeach
			<br>
			<button type="submit" name="button">next</button>
		</form>
	</body>
</html>
