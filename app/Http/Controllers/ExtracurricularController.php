<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExtracurricularController extends Controller
{
	public function addExtracurricular()
	{
		return view('extracurricularEntry');
	}

	public function extracurricularStore(Request $request)
	{
		// Validation
		$validatedData = $request->validate([
			'title' => 'required|unique:extracurricular,title',
		]);

		// insert values
		DB::table('extracurricular')->insertGetID(
			[
				'title' => $request->input('title'),
				'type' =>  $request->input('type'),
			]
		);
		return redirect()->route('addExtracurricular');
	}
}
