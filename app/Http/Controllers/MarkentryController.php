<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarkentryController extends Controller
{
    public function checkStudentId(Request $request)
    {
		// find info throug student id
		if($request->filled('sid')){
			$sid =  $request->input('sid');
			$datas = DB::table('student_info')->where('sid', $sid)->get();

			// sutdent id not found
			if(empty(json_decode($datas, true))){
				return view('markEntryStudentSearch')->with('noid', 'Student ID not found.');
			}

			// show student inforamtion
			return view('markEntryStudentConfirm', compact('datas', 'sid'));
    	} else {
			return view('markEntryStudentSearch');
		}
	}

	public function checkBasicInfo(Request $request)
	{
		$sid = $request->input('sid');
		return view('markEntryBasic')->with('sid', $sid);
	}

	public function selectSubject(Request $request)
	{
		$sid = $request->input('sid');
		$class = $request->input('class');
		$year = $request->input('year');
		$semester_slot = $request->input('semester_slot');

		// select subject list
		$subject_list = DB::table('subject_class')->where($class, '=', 1)->pluck('subject_name');
		return view('markEntrySubjectSelect', compact('subject_list', 'sid', 'class', 'year', 'semester_slot'));
	}

	public function subjectMarkEntry(Request $request)
	{
		// return $request->all();
		$sid = $request->input('sid');
		$class = $request->input('class');
		$year = $request->input('year');
		$semester_slot = $request->input('semester_slot');
		$subject_list = $request->input('subject_list');

		return view('markEntryForm', compact('subject_list', 'sid', 'class', 'year', 'semester_slot'));
	}

	public function storeSubjectMark(Request $request)
	{
		// return $request->all();
		$sid = $request->input('sid');
		$class = $request->input('class');
		$year = $request->input('year');
		$semester_slot = $request->input('semester_slot');
		$subject_list = $request->input('subject_list');

		$class_total_mark = $subject_total_mark = $class_avg_mark = $subject_avg_mark = 0;
		$sem_mark = [];
		$total_subject = count($subject_list);

		for($i = 0; $i < $total_subject; $i++) {
			$subject =  $request->input("subject_list.$i");

			for($j = 0; $j < $semester_slot; $j++) {
				$subject_sem_mark = $request->input("$subject.$j");
				array_push($sem_mark, $subject_sem_mark);

				$subject_total_mark += $subject_sem_mark;
			}

			$subject_avg_mark = $subject_total_mark / $semester_slot;

			DB::table($subject)->insertGetID(
				[
					'sid' => $sid,
					'class' => $class,
					'year' => $year,
					'sem_slot' => $semester_slot,
					'sem_1' => $sem_mark[0],
					'sem_2' => $sem_mark[1],
					'sem_3' => $sem_mark[2],
					'avg_mark' => $subject_avg_mark,
				]
			);

			$class_total_mark += $subject_avg_mark;

			$subject_total_mark = $subject_avg_mark =0;
			$sem_mark = [];
		}

		$class_avg_mark = $class_total_mark / $total_subject;

		DB::table('class_avg_mark')->insertGetID(
			[
				'sid' => $sid,
				'class' => $class,
				'year' => $year,
				'total_subject' => $total_subject,
				'total_mark' => $class_total_mark,
				'avg_mark' => $class_avg_mark,
			]
		);

		return redirect()->route('checkStudentId');

	}
}
