@extends('master')
@section('title','Student List')
@section('main_content')
<div class="row">
    <div class="col-md-12">
        <center><h3>Student List</h3></center>
        <table class="table table-bordered">
            <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Roll No</th>
                <th>Reg No</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
            @php
            $i=1;
            @endphp
            @foreach ($students as $student)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->roll_no}}</td>
                <td>{{$student->reg_no}}</td>
                <td>{{$student->departmentss->department}}</td>
                <td>
                    <a href="{{url('edit_student',$student->id)}}" class="btn btn-sm btn-success">Edit</a>
                    <form action="{{url('delete_student',$student->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>                
            </tr>
            @endforeach
        </table>
    </div>
</div>
@stop
