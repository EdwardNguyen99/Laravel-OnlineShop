<?php


namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Illuminate\Support\Facades\Hash;
session_start();
class AdminController
{
    public function admin(){
        return view('admin_login');
    }

    public function show_dashboard(){
        return view('admin.dashboard');
    }

    public function dashboard(Request $request){
        $admin_email =$request->admin_email;
        $admin_password=$request->admin_password;
        $result =DB::table('tbl_admin')->where ('admin_email',$admin_email)->where ('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }else
            Session::put('message','Wrong password!!! Please try again');
            return Redirect::to('/admin');
        return view('admin_layout');
    }

    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}
