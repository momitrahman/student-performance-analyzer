<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function addSubject()
	{
		return view('subjectEntry');
	}

	public function subjectStore(Request $request)
	{
		// Validation
		$validatedData = $request->validate([
			'subject_name' => 'required',
		]);

		$class_count = 0;

		// Input data store
		$subject_name = $request->input('subject_name');
		$one = $two = $three = $four = $five = $six = $seven = $eight = $nine = $ten = 0;

		if($request->input('one') === 'on' ) {
		 	$one = 1;
			$class_count += 1;
	 	}
		if($request->input('two') === 'on') {
		 	$two = 1;
			$class_count += 1;
	 	}
		if($request->input('three') === 'on') {
		 	$three = 1;
			$class_count += 1;
	 	}
		if($request->input('four') === 'on') {
		 	$four = 1;
			$class_count += 1;
	 	}
		if($request->input('five') === 'on') {
		 	$five = 1;
			$class_count += 1;
	 	}
		if($request->input('six') === 'on') {
		 	$six = 1;
			$class_count += 1;
	 	}
		if($request->input('seven') === 'on') {
		 	$seven = 1;
			$class_count += 1;
	 	}
		if($request->input('eight') === 'on') {
		 	$eight = 1;
			$class_count += 1;
	 	}
		if($request->input('nine') === 'on') {
		 	$nine = 1;
			$class_count += 1;
	 	}
		if($request->input('ten') === 'on') {
		 	$ten = 1;
			$class_count += 1;
	 	}

		// no class selected
		if($class_count == 0) {
			return view('subjectEntry')->with('noclass', 'The class selection required')->with('subject_name', $subject_name);
		} else {
			DB::table('subject_class')->insertGetID(
				[
					'subject_name' => $subject_name,
					'one' => $one,
					'two' => $two,
					'three' => $three,
					'four' => $four,
					'five' => $five,
					'six' => $six,
					'seven' => $seven,
					'eight' => $eight,
					'nine' => $nine,
					'ten' => $ten,

				]
			);

			return view('subjectEntry');
		}

	}
}