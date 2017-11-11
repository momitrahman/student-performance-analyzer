<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Filter Select</title>
	</head>
	<body>
		<form action={{ route("entryFilter") }} method="post">
			{{ csrf_field() }}
			<label>Subject: </label>
			<select name="subject">
				<option value="all">All</option>
				<option value="single">Single</option>
			</select>
			<br>
			<label>Class: </label>
			<select name="class">
				<option value="all">All</option>
				<option value="single">Single</option>
				<option value="range">Range</option>
			</select>
			<br>
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
				<option value="less_than">Less Than Equal</option>
				<option value="greater_than">Greater Than Equal</option>
			</select>
			<br>
			<label>Order By: </label>
			<select name="order">
				<option value="asc">Highest to Lowest Mark</option>
				<option value="desc">Lowset to Highest Mark</option>
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
