<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
	public function search(Request $request)
	{
		// find info through student id
		if ($request->filled('sid')) {
			session()->flush();
			$sid = $request->input('sid');
			$sid_infos = DB::table('student_info')->where('sid', $sid)->get();

			// student id not found
			if (empty(json_decode($sid_infos, true))) {
				return view('student.studentSearch')->with('noid', 'Student ID not found.');
			}

			$name = DB::table('student_info')->where('sid', $sid)->pluck('name');
			// return $sid_infos;
			session(['id' => $sid, 'name' => $name[0]]);
			// show student information
			return view('student.studentInfoShow', compact('sid_infos'));

		} else {
			// return to student id search page
			session()->flush();
			return view('student.studentSearch');
		}
	}

	public function dashboard(Request $request)
	{
		$sid = session('id');
		$all_avg_marks = DB::table('class_avg_mark')->where('sid', $sid)->orderBy('class', 'asc')->get();
		// return $avg_marks;
		return view('student.studentDashboard', compact('all_avg_marks'));
	}

	public function subjectSelect(Request $request)
	{
		$subject_list = DB::table('subject_class')->pluck('subject_name');
		// return $subject_list;

		return view('student.studentSubjectSelect', compact('subject_list'));
	}

	public function subjectMark(Request $request)
	{
		$subject_name = $request->input('subject');
		// return $subject_name;
		$sid = session('id');

		$subject_marks = DB::table($subject_name)->where('sid', $sid)->orderBy('class', 'asc')->get();
		// return $subject_marks;

		return view('student.studentSubjectMarksList', compact('subject_marks', 'subject_name'));
	}

	public function classSelect(Request $request)
	{
		return view('student.studentClassSelect', compact('subject_list'));
	}

	public function classMark(Request $request)
	{
		$sid = session('id');
		$class = $request->input('class');
		$all_subject_mark_list = [];
		$subject_list = DB::table('subject_class')->where($class, '=', 1)->orderBy('subject_name', 'asc')->pluck('subject_name');
		$year =  DB::table('class_avg_mark')->where('sid', $sid)->where('class', $class)->pluck('year');

		foreach ($subject_list as $subject ) {
			$subject_mark = DB::table($subject)->where('sid', $sid)->where('class', $class)->get();
			if (!empty(json_decode($subject_mark, true))) {
				$all_subject_mark_list[$subject] = $subject_mark;
			}
		}

		// return $all_subject_mark_list;
		return view('student.studentClassMarksList', compact('all_subject_mark_list', 'class', 'year'));
	}

	public function extraList(Request $request)
	{
		$sid = session('id');
		$all_extra_details_list = [];
		$extra_list = DB::table('student_extracurricular')->where('sid', $sid)->distinct()->pluck('name');

		foreach ($extra_list as $extra) {
			$reward = DB::table('student_extracurricular')->where('sid', $sid)->where('name', '=', $extra)->where('reward','!=', '')->count('reward');
			$all_extra_details_list[$extra] = $reward;
		}

		// return $extra_list;
		// return $all_extra_details_list;
		return view('student.studentExtracurricularList', compact('all_extra_details_list'));
	}

	public function extraDetails(Request $request, $extraName)
	{
		$sid = session('id');
		$extra_details = DB::table('student_extracurricular')->where('sid', $sid)->where('name','=',$extraName)->orderBy('class', 'asc')->get();
		$extra_type = DB::table('student_extracurricular')->where('name','=',$extraName)->pluck('type')->first();

		return view('student.studentExtracurricularDetailsList', compact('extra_details', 'extraName', 'extra_type'));
	}

	public function logout()
	{
		session()->flush();
		return redirect()->route('search');
	}

}
