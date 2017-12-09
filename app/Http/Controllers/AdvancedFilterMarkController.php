<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvancedFilterMarkController extends Controller
{
	public function selectOption()
	{
		return view("admin.advancedFilterMarkOption");
	}

	public function selectFilter(Request $request)
	{
		if ($request->has('option')) {
			$option = $request->input('option');
			if ($option === 'subject') {
				$subject_list = DB::table("subject_class")->orderBy("subject_name")->pluck("subject_name");
				return view("admin.advancedFilterMarkSelect", compact('subject_list'));
			} else {
				return view("admin.advancedFilterMarkSelect");
			}
		}
		return redirect()->route('selectOptionMark');
	}

	public function filterFormSelect(Request $request)
	{
		if ($request->has('subject') || $request->has('class')) {
			$subject = $request->input("subject");
			$class = $request->input("class");

			return view("admin.advancedFilterMarkFormSelect", compact("subject", "class"));
		}
		return redirect()->route('selectOptionMark');
	}

	public function entryFilter(Request $request)
	{
		if ($request->has('subject') || $request->has('class')) {
			$subject = $request->input("subject");
			$class = $request->input("class");
			$year = $request->input("year");
			$mark = $request->input("mark");
			$order = $request->input("order");
			$output_limit = $request->input("output_limit");

			return view("admin.advancedFilterMarkForm", compact(
				"subject",
				"class",
				"year",
				"mark",
				"order",
				"output_limit"
			));
		}
		return redirect()->route('selectOptionMark');
	}

	public function showFilterResult(Request $request)
	{
		// return $request->all();
		if ($request->has('subject') || $request->has('class')) {
			$subject = $request->input("subject");
			$class = $request->input("class");
			$year = $request->input("year");
			$mark = $request->input("mark");
			$order = $request->input("order");
			$output_limit = $request->input("output_limit");

			if ($class[0] === "single") {
				$class_query = "class = ?";
				$class_value = [$class[1]];
			} else if ($class[0] === "range") {
				$class_query = "class BETWEEN ? AND ? ";
				$class_value = [$class[1], $class[2]];
			} else if ($class[0] === "all") {
				$class_query = "class IS NOT NULL";
				$class_value = [];
			}

			if ($year[0] === "single") {
				$year_query = "year = ? ";
				$year_value = [$year[1]];
			} else if ($year[0] === "range") {
				$year_query = "year BETWEEN ? AND ? ";
				$year_value = [$year[1], $year[2]];
			} else if ($year[0] === "all") {
				$year_query = "year IS NOT NULL ";
				$year_value = [];
			}

			if ($mark[0] === "equal") {
				$mark_query = "avg_mark = ? ";
				$mark_value = $mark[1];
			} else if ($mark[0] === "less_than") {
				$mark_query = "avg_mark <= ? ";
				$mark_value = $mark[1];
			} else if ($mark[0] === "greater_than") {
				$mark_query = "avg_mark >= ? ";
				$mark_value = $mark[1];
			} else if ($mark[0] === "range") {
				$mark_query = "avg_mark BETWEEN ? AND ? ";
				$mark_value = [$mark[1], $mark[2]];
			} else if ($mark[0] === "all") {
				$mark_query = "avg_mark IS NOT NULL";
				$mark_value = [];
			}

			if ($order === "asc") {
				$order_query = "avg_mark ASC ";
			} else {
				$order_query = "avg_mark DESC ";
			}

			// DB::enableQueryLog();
			if ($subject === "all") {
				if ($output_limit === "all") {
					$datas = DB::table("class_avg_mark")
						->selectRaw('*')
						->whereRaw($class_query, $class_value)
						->whereRaw($year_query, $year_value)
						->whereRaw($mark_query, $mark_value)
						->orderByRaw($order_query)
						->get();
					} else {
						$datas = DB::table("class_avg_mark")
						->selectRaw('*')
						->whereRaw($class_query, $class_value)
						->whereRaw($year_query, $year_value)
						->whereRaw($mark_query, $mark_value)
						->orderByRaw($order_query)
						->limit($output_limit)
						->get();
					}
					$class = $class[1];
					// dd(DB::getQueryLog());
				return view('admin.advancedFilterMarkClassShow', compact('datas', 'class'));
			} else {
				if ($output_limit === "all") {
					$datas = DB::table($subject)
						->selectRaw('*')
						->whereRaw($class_query, $class_value)
						->whereRaw($year_query, $year_value)
						->whereRaw($mark_query, $mark_value)
						->orderByRaw($order_query)
						->get();
				} else {
					$datas = DB::table($subject)
						->selectRaw('*')
						->whereRaw($class_query, $class_value)
						->whereRaw($year_query, $year_value)
						->whereRaw($mark_query, $mark_value)
						->orderByRaw($order_query)
						->limit($output_limit)
						->get();
				}
				// dd(DB::getQueryLog());
				return view('admin.advancedFilterMarkSubjectShow', compact('datas', 'subject'));
			}
		}
	}
}

