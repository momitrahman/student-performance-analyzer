<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class MarkEntryController extends Controller
{
	public function checkStudentId(Request $request, $message = null)
	{
		// find info through student id
		if ($request->filled('sid')) {
			$sid = $request->input('sid');
			$sid_infos = DB::table('student_info')->where('sid', $sid)->get();

			// student id not found
			if (empty(json_decode($sid_infos, true))) {
				return view('admin.markEntryStudentSearch')->with('noid', 'Student ID not found.');
			}

			// show student information
			return view('admin.markEntryStudentConfirm', compact('sid_infos', 'sid'));
		} else if (!empty($message)) {
			return view('admin.markEntryStudentSearch', compact('message'));
		} else {
			return view('admin.markEntryStudentSearch');
		}
	}

	public function checkBasicInfo(Request $request)
	{
		if ($request->has(['sid', 'name'])) {
			$sid = $request->input('sid');
			$name = $request->input('name');
			$mark_entered_class = DB::table("class_avg_mark")->distinct()->pluck("class");
			return view('admin.markEntryBasic', compact('sid', 'name', 'mark_entered_class'));
		}
		return redirect()->route('checkStudentIdMark');
	}

	public function selectSubject(Request $request)
	{
		if ($request->has(['sid', 'name', 'class', 'year', 'semester_slot'])) {
			$sid = $request->input('sid');
			$name = $request->input('name');
			$class = strtolower($request->input('class'));
			$year = $request->input('year');
			$semester_slot = $request->input('semester_slot');

		// select subject list
			$subject_list = DB::table('subject_class')->where($class, '=', 1)->pluck('subject_name');
			return view('admin.markEntrySubjectSelect', compact('subject_list', 'sid', 'name', 'class', 'year', 'semester_slot'));
		}
		return redirect()->route('checkStudentIdMark');
	}

	public function subjectMarkEntry(Request $request)
	{
		if ($request->has(['sid', 'name', 'class', 'year', 'semester_slot'])) {
			$sid = $request->input('sid');
			$name = $request->input('name');
			$class = $request->input('class');
			$year = $request->input('year');
			$semester_slot = $request->input('semester_slot');
			$subject_list = $request->input('subject_list');

			return view('admin.markEntryForm', compact('subject_list', 'sid', 'name', 'class', 'year', 'semester_slot'));
		}
		return redirect()->route('checkStudentIdMark');
	}

	public function storeSubjectMark(Request $request)
	{
		if ($request->has(['sid', 'name', 'class', 'year', 'semester_slot', 'subject_list'])) {
			$sid = $request->input('sid');
			$class = $request->input('class');
			$year = $request->input('year');
			$semester_slot = $request->input('semester_slot');
			$subject_list = $request->input('subject_list');

			$class_total_mark = $subject_total_mark = $class_avg_mark = $subject_avg_mark = 0;

			if ($semester_slot == 3) {
				$sem_mark = [];
			} else {
				$sem_mark[2] = 0;
			}
			$total_subject = count($subject_list);

			for ($i = 0; $i < $total_subject; $i++) {
				$subject = $request->input("subject_list.$i");

				for ($j = $semester_slot - 1; $j >= 0; $j--) {
					$subject_sem_mark = $request->input("$subject.$j");
					array_unshift($sem_mark, $subject_sem_mark);
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
						'avg_mark' => ceil($subject_avg_mark),
					]
				);

				$class_total_mark += $subject_avg_mark;

				$subject_total_mark = $subject_avg_mark = 0;
				$sem_mark[0] = 0;
				$sem_mark[1] = 0;
				$sem_mark[2] = 0;
			}

			$class_avg_mark = $class_total_mark / $total_subject;

			DB::table('class_avg_mark')->insertGetID(
				[
					'sid' => $sid,
					'class' => $class,
					'year' => $year,
					'total_subject' => $total_subject,
					'total_mark' => $class_total_mark,
					'avg_mark' => ceil($class_avg_mark),
				]
			);
			$markAddMess = "All marks successfully added";
			return redirect()->route('checkStudentIdMark', [$markAddMess]);
		}
		return redirect()->route('checkStudentIdMark');
	}
}
