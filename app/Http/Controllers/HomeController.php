<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function admin(){
        return view('admin_login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }


}
