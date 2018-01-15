<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminAuthController extends Controller
{
    public function login(Request $request)
    {
        $mobile = $request->input("mobile");
        $password = sha1($request->input("password"));
        $admin_get = DB::table('admin')->where('mobile', $mobile)->get();


        if (count($admin_get) > 0) {
            $admin = [];
            foreach ($admin_get as $value) {
                $admin["name"] = $value->name;
                $admin["mobile"] = $value->mobile;
                $admin["password"] = $value->password;
                $admin["type"] = $value->type;
            }

            if ($admin["password"] === $password) {
                session([
                    'admin_name' => $admin["name"],
                    'admin_type' => $admin["type"],
                    'admin_login' => "login"
                ]);
                return redirect()->route("adminHome");
            } else {
                $message = "Your mobile number or password doesn't match.";
                return view("admin.adminLogin", compact("message"));
            }
        } else {
            $message = "Your mobile number or password doesn't match.";
            return view("admin.adminLogin", compact("message"));
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route("home");
    }

    public function admin()
    {
        if (session()->has('admin_login')) {
            return view('admin.home');
        } else {
            return redirect()->route('home');
        }
    }

    public function adminCreate()
    {
        if (session()->has('admin_login') && session('admin_type') === 0) {
            return view("admin.adminInfoEntry");
        } else {
            return redirect()->route('adminHome');
        }
    }

    public function adminStore(Request $request)
    {
        if (session()->has('admin_login') && session('admin_type') === 0) {

            $validatedData = $request->validate([
                'name' => 'required|string',
                'mobile' => 'required|unique:admin,mobile|numeric',
                'occupation' => 'required|string',
                'password' => 'required|string|min:6',
            ]);

            DB::table('admin')->insertGetID(
                [
                    'mobile' => $request->input('mobile'),
                    'name' => strtolower($request->input('name')),
                    'password' => sha1($request->input('password')),
                    'occupation' => strtolower($request->input('occupation')),
                    'type' => $request->input('type'),
                ]
            );
            return redirect()->back();
        } else {
            return redirect()->route('adminHome');
        }
    }

    public function adminList(Request $request)
    {
        if (session()->has('admin_login') && session('admin_type') === 0) {

            $admin_list = DB::table('admin')->select('mobile', 'name', 'occupation', 'type')->get();
            return view("admin.adminInfoList", compact("admin_list"));
        } else {
            return redirect()->route('adminHome');
        }
    }

}