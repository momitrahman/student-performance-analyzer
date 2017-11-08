<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentInfoController extends Controller
{
	public function studentInfoIdGenearter(Request $request)
	{
		// Student Unique ID Generate
		$sid = $request->input('year') . $request->input('class') .
				$request->input('roll') . $request->input('section');

		if($sid === '') {

			return view('studentInfoIdEntry');

		} else {

			// Merge value of Student ID into $request
			$request->merge([ 'sid' => $sid]);

			// validation
			$validatedData = $request->validate([
				'class' => 'required',
				'roll' => 'required',
				'section' => 'required',
				'year' => 'required',
				'sid' => 'required|unique:student_info,sid'
			]);

			return redirect()->route('studentInfoOther')->withInput();
		}
	}

	public function studentInfoOther()
	{
		return view('studentInfoOtherEntry');
	}

    public function studentInfoStore(Request $request)
	{

		$validatedData = $request->validate([
			'name' => 'required',
			'birth_number' => 'required',
			'father_name' => 'required',
			'mother_name' => 'required',
			'guardian_name' => 'required',
			'nid_holder' => 'required',
			'nid_number' => 'required'
		]);

		DB::table('student_info')->insertGetID(
			[
				'sid' => $request->input('sid'),
				'name' => $request->input('name'),
				'birth_number' => $request->input('birth_number'),
				'year' => $request->input('year'),
				'class' => $request->input('class'),
				'roll' => $request->input('roll'),
				'section' => $request->input('section'),
				'father_name' => $request->input('father_name'),
				'mother_name' => $request->input('mother_name'),
				'guardian_name' => $request->input('guardian_name'),
				'nid_holder' => $request->input('nid_holder'),
				'nid_number' => $request->input('nid_number'),
			]
		);

		return redirect('studentinfo');
	}



}
