<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Egulias\EmailValidator\Exception\ExpectingDomainLiteralClose;

class StudentInfoController extends Controller
{
	public function studentInfoIdGenerator(Request $request)
	{
		// Student Unique ID Generate
		$sid = $request->input('year') . $request->input('class') .
			$request->input('roll') . $request->input('section');

		if ($sid === '') {
			// student basic info input page
			return view('admin.studentInfoIdEntry');

		} else {

			// Merge value of Student ID into $request
			$request->merge(['sid' => $sid]);

			// Validation
			$validatedData = $request->validate([
				'class' => 'required|numeric',
				'roll' => 'required|numeric',
				'section' => 'required|numeric',
				'year' => 'required|numeric',
				'sid' => 'required|unique:student_info,sid|numeric'
			]);

			// redirect to student other info page
			return redirect()->route('studentInfoOther')->withInput();
		}
	}

	public function studentInfoOther(Request $request)
	{
		if (empty(old('sid'))) {
			return redirect()->route('studentInfoIdGenerator');
		}
		// student others info input page
		return view('admin.studentInfoOtherEntry');
	}

	public function studentInfoStore(Request $request)
	{
		$validatedData = $request->validate([
			'name' => 'required|string',
			'birth_number' => 'required|numeric',
			'father_name' => 'required|string',
			'mother_name' => 'required|string',
			'guardian_name' => 'required|string',
			'nid_holder' => 'required|string',
			'nid_number' => 'required|numeric'
		]);

		$guardian_name_other = $request->input('guardian_name_other');
		if ($guardian_name_other == '') {
			$guardian_name = $request->input('guardian_name');
		} else {
			$guardian_name = $guardian_name_other;
		}
		// Insert values
		try {
			DB::table('student_info')->insertGetID(
				[
					'sid' => $request->input('sid'),
					'name' => strtolower($request->input('name')),
					'birth_number' => $request->input('birth_number'),
					'year' => $request->input('year'),
					'class' => $request->input('class'),
					'roll' => $request->input('roll'),
					'section' => $request->input('section'),
					'father_name' => strtolower($request->input('father_name')),
					'mother_name' => strtolower($request->input('mother_name')),
					'guardian_name' => strtolower($guardian_name),
					'nid_holder' => strtolower($request->input('nid_holder')),
					'nid_number' => $request->input('nid_number'),
				]
			);
		} catch (QueryException $ex) {
			return redirect()->route('studentInfoIdGenerator');
		}
		$sid = $request->input('sid');
		return redirect()->route('studentInfoSubmitView', [$sid]);
	}

	public function studentInfoSubmitView($sid = null)
	{
		if (!empty($sid)) {
			$sid_infos = DB::table('student_info')->where('sid', $sid)->get();
			return view('admin.studentInfoShow', compact('sid_infos'));
		}
		return view('admin.studentSearch');
	}
	public function studentSearch(Request $request)
	{
		// find info throug student id
		if ($request->filled('sid')) {
			$sid = $request->input('sid');
			$sid_infos = DB::table('student_info')->where('sid', $sid)->get();

			// sutdent id not found
			if (empty(json_decode($sid_infos, true))) {
				return view('admin.studentSearch')->with('noid', 'Student ID not found.');
			}

			// show student inforamtion
			return view('admin.studentInfoShow', compact('sid_infos'));

		} else {
			// return to student id search page
			return view('admin.studentSearch');
		}
	}

	// public function studentNameSearch(Request $request)
	// {
	// 	return view("admin.studentNameSearch");
	// }

	public function studentNameList(Request $request)
	{
		if ($request->filled("name")) {
			$name = strtolower($request->input("name"));
			$student_list = DB::table("student_info")->where("name", "like", "%$name%")->orderBy("name", "asc")->get();
			if (count($student_list) === 0) {
				$name = explode(" ", $name);
				if (count($name) === 1) {
					$student_list = DB::table("student_info")->where("name", "like", "%$name[0]%")->orderBy("name", "asc")->get();
				} elseif (count($name) === 2) {
					$student_list = DB::table("student_info")->where("name", "like", "%$name[1]%")->orderBy("name", "asc")->get();
				}
			}
			return view("admin.studentNameSearchList", compact("student_list"));
		}

		return view("admin.studentNameSearch");
	}
}
