<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExtracurricularentryController extends Controller
{
	public function checkStudentId(Request $request, $message = null)
	{
		// find info through student id
		if ($request->filled('sid')) {
			$sid = $request->input('sid');
			$sid_infos = DB::table('student_info')->where('sid', $sid)->get();

			// student id not found
			if (empty(json_decode($sid_infos, true))) {
				return view('admin.extracurricularEntryStudentSearch')->with('noid', 'Student ID not found.');
			}

			// show student information
			return view('admin.extracurricularEntryStudentConfirm', compact('sid_infos', 'sid'));
		} else if (!empty($message)) {
			return view('admin.extracurricularEntryStudentSearch', compact('message'));
		} else {
			return view('admin.extracurricularEntryStudentSearch');
		}
	}

	public function checkBasicInfo(Request $request)
	{
		if ($request->has(['sid', 'name'])) {
			$sid = $request->input('sid');
			$name = $request->input('name');
			return view('admin.extracurricularEntryBasic', compact('sid', 'name'));
		}
		return redirect()->route('checkStudentIdExtra');
	}

	public function selectExtra(Request $request)
	{
		if ($request->has(['sid', 'name', 'class', 'year'])) {
			$sid = $request->input('sid');
			$name = $request->input('name');
			$class = $request->input('class');
			$year = $request->input('year');

		// select subject list
			$extra_list = DB::table('extracurricular')->get();
			return view('admin.extracurricularEntrySelect', compact('extra_list', 'name', 'sid', 'class', 'year'));
		}
		return redirect()->route('checkStudentIdExtra');
	}

	public function extraEntry(Request $request)
	{
		if ($request->has(['sid', 'name', 'class', 'year'])) {
			$sid = $request->input('sid');
			$name = $request->input('name');
			$class = $request->input('class');
			$year = $request->input('year');
			$indoor_list = $request->input('indoor_list');
			$outdoor_list = $request->input('outdoor_list');
			return view('admin.extracurricularEntryForm', compact('indoor_list', 'outdoor_list', 'sid', 'name', 'class', 'year'));
		}
		return redirect()->route('checkStudentIdExtra');
	}

	public function storeExtraEntry(Request $request)
	{
		$sid = $request->input('sid');
		$class = strtolower($request->input('class'));
		$year = $request->input('year');
		$indoor_list = $request->input('indoor_list');
		$outdoor_list = $request->input('outdoor_list');

		$total_indoor_list = count($indoor_list);
		$total_outdoor_list = count($outdoor_list);

		// return $request->input("$indoor_list[0].1");
		for ($i = 0; $i < $total_indoor_list; $i++) {
			DB::table('student_extracurricular')->insertGetID(
				[
					'sid' => $sid,
					'year' => $year,
					'class' => $class,
					'name' => strtolower($indoor_list[$i]),
					'type' => 'indoor',
					'place' => strtolower($request->input("$indoor_list[$i].0")),
					'reward' => strtolower($request->input("$indoor_list[$i].1")),
				]
			);
		}

		for ($i = 0; $i < $total_outdoor_list; $i++) {
			DB::table('student_extracurricular')->insertGetID(
				[
					'sid' => $sid,
					'year' => $year,
					'class' => $class,
					'name' => strtolower($outdoor_list[$i]),
					'type' => 'outdoor',
					'place' => strtolower($request->input("$outdoor_list[$i].0")),
					'reward' => strtolower($request->input("$outdoor_list[$i].1"))
				]
			);
		}

		$extraAddMess = "All Extra Curricular Activity Details Successfully Added";
		return redirect()->route('checkStudentIdExtra', [$extraAddMess]);
	}

}
