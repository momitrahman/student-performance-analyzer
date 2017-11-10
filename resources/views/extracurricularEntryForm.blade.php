<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>EC Entry</title>
	</head>
	<body>
		<form action={{ route('storeExtraEntry') }} method="post">
			{{ csrf_field() }}
			<input type="hidden" name="sid" value={{ $sid }}>
			<input type="hidden" name="class" value={{ $class  }}>
			<input type="hidden" name="year" value={{ $year }}>

			@foreach ($indoor_list as $name)
				<label>Indoor</label> : <label>{{ $name }}</label>
				<input type="hidden" name="indoor_list[]" value={{ $name }}>
				<input type="text" name={{ $name . '[]' }} placeholder="place">
				<input type="text" name={{ $name . '[]' }} placeholder="reward">
				<br>
			@endforeach

			@foreach ($outdoor_list as $name)
				<label>Outdoor</label> : <label>{{ $name }}</label>
				<input type="hidden" name="outdoor_list[]" value={{ $name }}>
				<input type="text" name={{ $name . '[]' }} placeholder="place">
				<input type="text" name={{ $name . '[]' }} placeholder="reward">
				<br>
			@endforeach
			<button type="submit" name="button">Submit</button>
		</form>
	</body>
</html>
