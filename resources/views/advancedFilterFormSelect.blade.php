<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Filter Select</title>
	</head>
	<body>
		<form action={{ route("entryFilter") }} method="post">
			{{ csrf_field() }}

			@if (!empty($subject))
				<input type="hidden" name="subject" value= {{ $subject }}>
				<label>Class: </label>
				<select name="class">
					<option value="all">All</option>
					<option value="single">Single</option>
					<option value="range">Range</option>
				</select>
				<br>
			@else
				<input type="hidden" name="class" value= {{ $class }}>
			@endif

			<label>Year: </label>
			<select name="year">
				<option value="all">All</option>
				<option value="single">Single</option>
				<option value="range">Range</option>
			</select>
			<br>
			<label>Mark: </label>
			<select name="mark">
				<option value="all">All</option>
				<option value="range">Range</option>
				<option value="equal">Equal To</option>
				<option value="less_than">Less Than Equal</option>
				<option value="greater_than">Greater Than Equal</option>
			</select>
			<br>
			<label>Order By: </label>
			<select name="order">
				<option value="asc">Lowset to Highest Mark</option>
				<option value="desc">Highest to Lowest Mark</option>
			</select>
			<br>
			<label>Output Limit: </label>
			<select name="output_limit">
				<option value="all">All</option>
				<option value="limit">Maximum Limit</option>
			</select>
			<br>
			<button type="submit" name="button">Next</button>
		</form>
	</body>
</html>
