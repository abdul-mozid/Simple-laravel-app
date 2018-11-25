<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Par;
use App\Student;

class ParentController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data = [
            'parents' => Par::all(),
        ];
        return view('parent_list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data = [
            'students' => Student::all(),
        ];
        return view('parent_registration', $data);
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
            'phone'=>'required',
            'email'=>'required',
            'parent_of'=>'required',
        ]);
        $parent=new Par;
        $parent->name=$request->name;
        $parent->phone=$request->phone;
        $parent->email=$request->email;
        $parent->parent_of=$request->parent_of;
        $parent->save();
        return redirect('parents');
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
        $data=[
            'students'=>Student::all(),
            'parent'=>Par::find($id),
        ];
        return view('parent_edit',$data);
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
            'phone'=>'required',
            'email'=>'required',
            'parent_of'=>'required',
        ]);
        $parent=Par::find($id);
        $parent->name=$request->name;
        $parent->phone=$request->phone;
        $parent->email=$request->email;
        $parent->parent_of=$request->parent_of;
        $parent->update();
        return redirect('parents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Par::find($id)->delete();
        return redirect('parents');
    }

}
