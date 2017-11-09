<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Subject Entry</title>
	</head>
	<body>
		@if ($errors->any())
			<ul>
				@foreach ($errors->all() as  $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif

		@if (!empty($noclass))
			<h2>{{ $noclass }}</h2>
		@endif

		<form action={{ route('subjectStore') }} method="post">
			{{ csrf_field() }}
			@if (empty($subject_name))
				<input type="text" name="subject_name" placeholder="Subject Name" value={{ old('subject_name')}}><br>
			@else
				<input type="text" name="subject_name" placeholder="Subject Name" value= {{ $subject_name }}><br>
			@endif
			<input type="checkbox" name="one">one
			<input type="checkbox" name="two">two
			<input type="checkbox" name="three">three
			<input type="checkbox" name="four">four
			<input type="checkbox" name="five">five
			<input type="checkbox" name="six">six
			<input type="checkbox" name="seven">seven
			<input type="checkbox" name="eight">eight
			<input type="checkbox" name="nine">nine
			<input type="checkbox" name="ten">ten <br>
			<button type="submit" name="button">ok</button>
		</form>
	</body>
</html>
