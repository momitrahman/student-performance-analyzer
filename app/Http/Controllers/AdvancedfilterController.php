<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvancedfilterController extends Controller
{
    public function selectfilter()
    {
		$subject_list = DB::table("subject_class")->pluck("subject_name");
		return view("advancedFilterSelect", compact('subject_list'));
    }

    public function filterFormSelect(Request $request)
    {
		$subject = $request->input("subject");
		$class = $request->input("class");

		return view("advancedFilterFormSelect", compact("subject", "class"));
}

    public function entryFilter(Request $request)
    {
		$subject = $request->input("subject");
		$class = $request->input("class");
		$year = $request->input("year");
		$mark = $request->input("mark");
		$order = $request->input("order");
		$output_limit = $request->input("output_limit");

		return view("advancedFilterForm", compact("subject", "class", "year",
											"mark","order", "output_limit"));
}

	public function storeFilterEntry(Request $request)
	{
		$subject = $request->input("subject");
		$class = $request->input("class");
		$year = $request->input("year");
		$mark = $request->input("mark");
		$order = $request->input("order");
		$output_limit = $request->input("output_limit");
		$query = "";

		if($subject === "all") {
			$query = "SELECT * FROM class_avg_mark ";
		} else {
			$query = "SELECT * FROM $subject ";
		}

		if ($class[0] === "single") {
			$query .= "WHERE class='$class[1]' ";
		} else if ($class[0] === "range"){
			$query .= "WHERE (class BETWEEN '$class[1]' AND '$class[2])' ";
		}

		if ($year[0] === "single") {
			$query .= "WHERE year=$year[1] ";
		} else if ($year[0] === "range"){
			$query .= "WHERE (year BETWEEN $year[1] AND $year[2]) ";
		}

		if ($mark[0] === "equal") {
			$query .= "WHERE avg_mark=$mark[1] ";
		} else if($mark[0] === "less_than") {
			$query .= "WHERE avg_mark<=$mark[1] ";
		} else if($mark[0] === "greater_than"){
			$query .= "WHERE avg_mark>=$mark[1] ";
		} else if($mark[0] === "range"){
			$query .= "WHERE (avg_mark BETWEEN $mark[1] AND $mark[2]) ";
		}

		if($order === "asc") {
			$query .= "ORDER BY avg_mark ASC ";
		} else {
			$query .= "ORDER BY avg_mark DESC ";
		}

		if($output_limit !== "all") {
			$query .= "LIMIT $output_limit ";
		}

		$new_query = "";
		if(strpos($query, "WHERE") !== false){
			if(strpos($query, "WHERE") == strrpos($query, "WHERE")) {
				$new_query = $query;
			} else {
				$position = strpos($query, "WHERE");
				$new_query_start = substr($query, 0, ($position + 5)) ;
				$new_query_end= substr($query, $position + 5) ;
				$new_query_end = str_replace("WHERE", "AND", $new_query_end);
				$new_query = $new_query_start . $new_query_end;
			}
		} else {
			$new_query = $query;
		}

		return $new_query;
		$datas = DB::select($new_query);
		return $datas;
	}
}
