<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExtracurricularentryController extends Controller
{
	public function checkStudentId(Request $request)
    {
		// find info throug student id
		if($request->filled('sid')){
			$sid =  $request->input('sid');
			$datas = DB::table('student_info')->where('sid', $sid)->get();

			// sutdent id not found
			if(empty(json_decode($datas, true))){
				return view('admin.extracurricularEntryStudentSearch')->with('noid', 'Student ID not found.');
			}

			// show student inforamtion
			return view('admin.extracurricularEntryStudentConfirm', compact('datas', 'sid'));
    	} else {
			return view('admin.extracurricularEntryStudentSearch');
		}
	}

	public function checkBasicInfo(Request $request)
	{
		$sid = $request->input('sid');
		return view('admin.extracurricularEntryBasic')->with('sid', $sid);
	}

	public function selectExtra(Request $request)
	{
		$sid = $request->input('sid');
		$class = $request->input('class');
		$year = $request->input('year');

		// select subject list
		$extra_list = DB::table('extracurricular')->get();
		return view('admin.extracurricularEntrySelect', compact('extra_list', 'sid', 'class', 'year'));
	}

	public function extraEntry(Request $request)
	{

		$sid = $request->input('sid');
		$class = $request->input('class');
		$year = $request->input('year');
		$indoor_list = $request->input('indoor_list');
		$outdoor_list = $request->input('outdoor_list');
		return view('admin.extracurricularEntryForm', compact('indoor_list', 'outdoor_list', 'sid', 'class', 'year'));
	}

	public function storeExtraEntry(Request $request)
	{
		// return $request->all();
		$sid = $request->input('sid');
		$class = $request->input('class');
		$year = $request->input('year');
		$indoor_list = $request->input('indoor_list');
		$outdoor_list = $request->input('outdoor_list');

		$total_indoor_list = count($indoor_list);
		$total_outdoor_list = count($outdoor_list);

		// return $request->input("$indoor_list[0].1");
		for ($i=0; $i < $total_indoor_list; $i++) {
			DB::table('student_extracurricular')->insertGetID(
				[
					'sid' => $sid,
					'year' => $year,
					'class' => $class,
					'name' => $indoor_list[$i],
					'type' => 'indoor',
					'place' => $request->input("$indoor_list[$i].0"),
					'reward' => $request->input("$indoor_list[$i].1")
				]
			);
		}

		for ($i=0; $i < $total_outdoor_list; $i++) {
			DB::table('student_extracurricular')->insertGetID(
				[
					'sid' => $sid,
					'year' => $year,
					'class' => $class,
					'name' => $outdoor_list[$i],
					'type' => 'outdoor',
					'place' => $request->input("$outdoor_list[$i].0"),
					'reward' => $request->input("$outdoor_list[$i].1")
				]
			);
		}
		return redirect()->route('checkStudentIdExtra');
	}

}
