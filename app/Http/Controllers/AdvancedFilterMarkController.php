<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class AdvancedFilterMarkController extends Controller
{
	public function selectOption($message = null)
	{
		if (!empty($message)) {
			return view("admin.advancedFilterMarkOption", compact('message'));
		}
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
		if ($request->has('subject') || $request->has('class')) {
			$subject = $request->input("subject");
			$class = $request->input("class");
			$year = $request->input("year");
			$mark = $request->input("mark");
			$order = $request->input("order");
			$output_limit = $request->input("output_limit");
			$query = "";

			if ($subject === "all") {
				$query = "SELECT * FROM class_avg_mark ";
			} else {
				$query = "SELECT * FROM $subject ";
			}

			if ($class[0] === "single") {
				$query .= "WHERE class='$class[1]' ";
			} else if ($class[0] === "range") {
				$query .= "WHERE (class BETWEEN '$class[1]' AND '$class[2])' ";
			} else if ($subject === "all") {
				$query .= "WHERE class='$class[0]' ";
			}

			if ($year[0] === "single") {
				$query .= "WHERE year=$year[1] ";
			} else if ($year[0] === "range") {
				$query .= "WHERE (year BETWEEN $year[1] AND $year[2]) ";
			}

			if ($mark[0] === "equal") {
				$query .= "WHERE avg_mark=$mark[1] ";
			} else if ($mark[0] === "less_than") {
				$query .= "WHERE avg_mark<=$mark[1] ";
			} else if ($mark[0] === "greater_than") {
				$query .= "WHERE avg_mark>=$mark[1] ";
			} else if ($mark[0] === "range") {
				$query .= "WHERE (avg_mark BETWEEN $mark[1] AND $mark[2]) ";
			}

			if ($order === "asc") {
				$query .= "ORDER BY avg_mark ASC ";
			} else {
				$query .= "ORDER BY avg_mark DESC ";
			}

			if ($output_limit !== "all") {
				$query .= "LIMIT $output_limit ";
			}

			$new_query = "";
			if (strpos($query, "WHERE") !== false) {
				if (strpos($query, "WHERE") == strrpos($query, "WHERE")) {
					$new_query = $query;
				} else {
					$position = strpos($query, "WHERE");
					$new_query_start = substr($query, 0, ($position + 5));
					$new_query_end = substr($query, $position + 5);
					$new_query_end = str_replace("WHERE", "AND", $new_query_end);
					$new_query = $new_query_start . $new_query_end;
				}
			} else {
				$new_query = $query;
			}

		//  return $new_query;
			try {
				$datas = DB::select($new_query);
				if ($subject === "all") {
					$class = $class[0];
					return view('admin.advancedFilterMarkClassShow', compact('datas', 'class'));
				} else {
					return view('admin.advancedFilterMarkSubjectShow', compact('datas', 'subject'));
				}
			// return $datas;
			} catch (QueryException $ex) {
				$message =  "query_error";
				return redirect()->route('selectOptionMark', [$message]);
			}
		}
		return redirect()->route('selectOptionMark');
	}
}
