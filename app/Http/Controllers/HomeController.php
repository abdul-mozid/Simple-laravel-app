<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Staff;
use App\Student;
use App\Par;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'teachers'=>Teacher::count(),
            'staffs'=>Staff::count(),
            'students'=>Student::count(),
            'parents'=>Par::count(),
        ];
        return view('dashboard',$data);
    }
}
