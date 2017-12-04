<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExtracurricularController extends Controller
{
	public function addExtracurricular($message = null)
	{
		if (!empty($message)) {
			return view('admin.extracurricularEntry', compact('message'));
		}
		return view('admin.extracurricularEntry');
	}

	public function extracurricularStore(Request $request)
	{
		if ($request->has('title')) {
			$snake_case_title = str_replace(" ", "_", $request->input("title"));
			$request->merge(['title' => $snake_case_title]);

		// Validation
			$validatedData = $request->validate([
				'title' => 'required|unique:extracurricular,title',
			]);

		// insert values
			DB::table('extracurricular')->insertGetID(
				[
					'title' => strtolower($request->input('title')),
					'type' => strtolower($request->input('type'))
				]
			);

			$extraAddMess = ucwords(str_replace("_", " ", $request->input('title'))) . " : extra curricular activity successfully added.";
			return redirect()->route('addExtracurricular', [$extraAddMess]);
		}
		return redirect()->route('addExtracurricular');
	}

	public function extracurricularShow()
	{
		$extracurricular_list = DB::table('extracurricular')->orderBy('title')->get();
		return view('admin.extracurricularList', compact('extracurricular_list'));
	}
}
