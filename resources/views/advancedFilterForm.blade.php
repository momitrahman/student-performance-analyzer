<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Filter Entry</title>
	</head>
	<body>
		<form action={{ route("storeFilterEntry") }} method="post">
			{{ csrf_field() }}
			<label>Subject: </label>
			@if ($subject === "all")
				<input type="hidden" name="subject" value="all">
			@else
				<select name="subject">
				@foreach ($subject_list as $subject)
					<option value= {{ $subject }}>{{ $subject }}</option>
				@endforeach
				</select>
			@endif
			<br>
			<label>Class: </label>
			@if ($class === "all")
				<label>All</label>
				<input type="hidden" name="class[]" value="all">
			@elseif ($class === "single" )
				<input type="hidden" name="class[]" value="single">
				<input type="text" name="class[]">
			@else
				<input type="hidden" name="class[]" value="range">
				<input type="text" name="class[]"> - <input type="text" name="class[]">
			@endif
			<br>
			<label>Year: </label>
			@if ($year === "all")
				<label>All</label>
				<input type="hidden" name="year[]" value="all">
			@elseif ($year === "single" )
				<input type="hidden" name="year[]" value="single">
				<input type="text" name="year[]">
			@else
				<input type="hidden" name="year[]" value="range">
				<input type="text" name="year[]"> - <input type="text" name="year[]">
			@endif
			<br>
			<label>Mark: </label>
			@if ($mark === "all")
				<label>All</label>
				<input type="hidden" name="mark[]" value="all">
			@elseif ($mark === "less_than")
				<label>Less Than Equal:</label>
				<input type="hidden" name="mark[]" value="less_than">
				<input type="text" name="mark[]">
			@else
				<label>Greater Than Equal:</label>
				<input type="hidden" name="mark[]" value="greater_than">
				<input type="text" name="mark[]">
			@endif
			<br>
			<label>Order: </label>
			@if ($order === "asc")
				<label>Highest to Lowest Mark</label>
				<input type="hidden" name="order" value="asc">
			@else
				<label>Lowset to Highest Mark</label>
				<input type="hidden" name="order" value="desc">
			@endif
			<br>
			<label>Output Limit: </label>
				@if ($output_limit === "all")
					<label>All</label>
					<input type="hidden" name="output_limit" value="all">
				@else
					<label>Maximum</label>
					<input type="text" name="output_limit">
				@endif
			<br>
			<button type="submit" name="button">Next</button>
		</form>
	</body>
</html>
