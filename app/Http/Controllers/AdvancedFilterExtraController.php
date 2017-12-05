<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class AdvancedFilterExtraController extends Controller
{
    public function selectOption($message = null)
    {
        if (!empty($message)) {
            return view("admin.advancedFilterExtraSelect", compact('message'));
        }
        $extracurricular = DB::table("extracurricular")->pluck("title");
        return view("admin.advancedFilterExtraSelect", compact("extracurricular"));
    }

    public function filterFormSelect(Request $request)
    {
        // return $request->all();
        if ($request->has('extra')) {
            $extra = $request->input("extra");
            return view("admin.advancedFilterExtraFormSelect", compact("extra"));
        }
        return redirect()->route('selectOptionExtra');
    }

    public function entryFilter(Request $request)
    {
        if ($request->has('extra')) {
            $extra = $request->input("extra");
            $class = $request->input("class");
            $year = $request->input("year");
            $reward = $request->input("reward");
            return view("admin.advancedFilterExtraForm", compact("extra", "class", "year", "reward"));
        }
        return redirect()->route('selectOptionExtra');
    }

    public function showFilterResult(Request $request)
    {
        if ($request->has('extra')) {
            $extra = $request->input("extra");
            $class = $request->input("class");
            $year = $request->input("year");
            $reward = $request->input("reward");

            $query = "SELECT * FROM student_extracurricular WHERE name='$extra' ";

            if ($class[0] === "single") {
                $query .= "WHERE class='$class[1]' ";
            } else if ($class[0] === "range") {
                $query .= "WHERE (class BETWEEN '$class[1]' AND '$class[2])' ";
            }

            if ($year[0] === "single") {
                $query .= "WHERE year=$year[1] ";
            } else if ($year[0] === "range") {
                $query .= "WHERE (year BETWEEN $year[1] AND $year[2]) ";
            }

            if ($reward === "with") {
                $query .= "WHERE reward!='' ";
            } else if ($reward === "without") {
                $query .= "WHERE reward=''";
            }

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

        // return $new_query;
            try {
                $datas = DB::select($new_query);
            // return $datas;
                return view("admin.advancedFilterExtraView", compact("datas"));
            } catch (QueryException $ex) {
                $message = "query_error";
                return redirect()->route('selectOptionExtra');
            }
        }
        return redirect()->route('selectOptionExtra');
    }
}
