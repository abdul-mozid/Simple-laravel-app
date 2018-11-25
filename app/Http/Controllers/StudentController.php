<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;
use App\Department;

class StudentController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data = array(
            'students' => Student::all(),
        );
        return view('student_list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registration() {
        $data = array(
            'departments' => Department::all(),
        );
        return view('student_registration', $data);
    }

    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'roll' => 'required|numeric',
            'reg' => 'required|numeric',
            'department' => 'required|numeric',
        ]);
        $student = new Student;
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->roll_no = $request->roll;
        $student->reg_no = $request->reg;
        $student->department_id = $request->department;
        $student->save();
        return redirect('student_list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $data = [
            'departments' => Department::all(),
            'student' => Student::find($id),
        ];
        return view('student_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'roll' => 'required|numeric',
            'reg' => 'required|numeric',
            'department' => 'required|numeric',
        ]);
        $student = Student::find($id);
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->roll_no = $request->roll;
        $student->reg_no = $request->reg;
        $student->department_id = $request->department;
        $student->update();
        return redirect('student_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Student::find($id)->delete();
        return redirect('student_list');
    }

}
