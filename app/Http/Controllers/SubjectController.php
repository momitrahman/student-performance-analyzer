<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubjectController extends Controller
{
	public function addSubject()
	{
		return view('admin.subjectEntry');
	}

	public function subjectStore(Request $request)
	{
		if ($request->has('subject_name')) {
		// Validation
			$validatedData = $request->validate([
				'subject_name' => 'required|unique:subject_class,subject_name',
			]);

			$class_count = 0;

		// Input data store
			$subject_name = strtolower($request->input('subject_name'));
			$one = $two = $three = $four = $five = $six = $seven = $eight = $nine = $ten = 0;

			if ($request->input('one') === 'on') {
				$one = 1;
				$class_count += 1;
			}
			if ($request->input('two') === 'on') {
				$two = 1;
				$class_count += 1;
			}
			if ($request->input('three') === 'on') {
				$three = 1;
				$class_count += 1;
			}
			if ($request->input('four') === 'on') {
				$four = 1;
				$class_count += 1;
			}
			if ($request->input('five') === 'on') {
				$five = 1;
				$class_count += 1;
			}
			if ($request->input('six') === 'on') {
				$six = 1;
				$class_count += 1;
			}
			if ($request->input('seven') === 'on') {
				$seven = 1;
				$class_count += 1;
			}
			if ($request->input('eight') === 'on') {
				$eight = 1;
				$class_count += 1;
			}
			if ($request->input('nine') === 'on') {
				$nine = 1;
				$class_count += 1;
			}
			if ($request->input('ten') === 'on') {
				$ten = 1;
				$class_count += 1;
			}
		 
		// no class selected
			if ($class_count == 0) {
				return view('admin.subjectEntry')->with('noclass', 'The class selection required')->with('subject_name', $subject_name);
			} else {
			// insert values
				DB::table('subject_class')->insertGetID(
					[
						'subject_name' => $subject_name,
						'one' => $one,
						'two' => $two,
						'three' => $three,
						'four' => $four,
						'five' => $five,
						'six' => $six,
						'seven' => $seven,
						'eight' => $eight,
						'nine' => $nine,
						'ten' => $ten,

					]
				);

				Schema::create($subject_name, function (Blueprint $table) {
					$table->increments('id');
					$table->integer('sid');
					$table->string('class');
					$table->integer('year');
					$table->integer('sem_slot');  // sem shortform of semseter
					$table->integer('sem_1')->nullable();
					$table->integer('sem_2')->nullable();
					$table->integer('sem_3')->nullable();
					$table->integer('avg_mark');
				});

				return redirect()->route('addSubject');
			}

		}
		return redirect()->route('addSubject');
	}
}