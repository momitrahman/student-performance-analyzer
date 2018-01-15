<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvancedFilterExtraController extends Controller
{
    public function selectOption()
    {
        if (session()->has('admin_login')) {
            $extracurricular = DB::table("extracurricular")->pluck("title");
            return view("admin.advancedFilterExtraSelect", compact("extracurricular"));
        } else {
            return redirect()->route('home');
        }
    }

    public function filterFormSelect(Request $request)
    {
        if (session()->has('admin_login')) {
            if ($request->has('extra')) {
                $extra = $request->input("extra");
                return view("admin.advancedFilterExtraFormSelect", compact("extra"));
            }
            return redirect()->route('selectOptionExtra');
        } else {
            return redirect()->route('home');
        }
    }

    public function entryFilter(Request $request)
    {
        if (session()->has('admin_login')) {
            if ($request->has('extra')) {
                $extra = $request->input("extra");
                $class = $request->input("class");
                $year = $request->input("year");
                $reward = $request->input("reward");
                return view("admin.advancedFilterExtraForm", compact("extra", "class", "year", "reward"));
            }
            return redirect()->route('selectOptionExtra');
        } else {
            return redirect()->route('home');
        }
    }

    public function showFilterResult(Request $request)
    {
        if (session()->has('admin_login')) {
        // return $request->all();
            if ($request->has('extra')) {
                $extra = $request->input("extra");
                $class = $request->input("class");
                $year = $request->input("year");
                $reward = $request->input("reward");

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

                if ($reward === "with") {
                    $reward_query = "reward != ?";
                    $reward_value = "";
                } else if ($reward === "without") {
                    $reward_query = "reward = ?";
                    $reward_value = "";
                } else if ($reward === "all") {
                    $reward_query = "reward IS NOT NULL";
                    $reward_value = "";
                }

            // DB::enableQueryLog();
                $datas = DB::table("student_extracurricular")
                    ->selectRaw('*')
                    ->whereRaw("name = ?", $extra)
                    ->whereRaw($class_query, $class_value)
                    ->whereRaw($year_query, $year_value)
                    ->whereRaw($reward_query, $reward_value)
                    ->get();
            // dd(DB::getQueryLog());
                return view("admin.advancedFilterExtraView", compact("datas", "extra"));
            }
            return redirect()->route('selectOptionExtra');
        } else {
            return redirect()->route('home');
        }
    }
}
