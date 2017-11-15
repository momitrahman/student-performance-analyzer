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
			// student basic info input page
			return view('admin.studentInfoIdEntry');

		} else {

			// Merge value of Student ID into $request
			$request->merge([ 'sid' => $sid]);

			// Validation
			$validatedData = $request->validate([
				'class' => 'required',
				'roll' => 'required',
				'section' => 'required',
				'year' => 'required',
				'sid' => 'required|unique:student_info,sid'
			]);

			// redirect to student other info page
			return redirect()->route('admin.studentInfoOther')->withInput();
		}
	}

	public function studentInfoOther()
	{
		// student others info input page
		return view('admin.studentInfoOtherEntry');
	}

    public function studentInfoStore(Request $request)
	{
		// Validation
		$validatedData = $request->validate([
			'name' => 'required',
			'birth_number' => 'required',
			'father_name' => 'required',
			'mother_name' => 'required',
			'guardian_name' => 'required',
			'nid_holder' => 'required',
			'nid_number' => 'required'
		]);

		// Insert values
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

		// redirect to student info page
		return redirect('admin.studentinfo');
	}

	public function studentSearch(Request $request)
	{
		// find info throug student id
		if($request->filled('sid')){
			$sid =  $request->input('sid');
			$datas = DB::table('student_info')->where('sid', $sid)->get();

			// sutdent id not found
			if(empty(json_decode($datas, true))){
				return view('admin.studentSearch')->with('noid', 'Student ID not found.');
			}

			// show student inforamtion
			return view('admin.studentInfoShow', compact('datas'));

		} else {
			// return to student id search page
			return view('admin.studentSearch');
		}
	}

}
