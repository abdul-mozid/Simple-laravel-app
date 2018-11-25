@extends('master')
@section('title','Student Registration')
@section('main_content')
<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <center><h3>Student Registration</h3></center>
        <form action="{{url('update_student',$student->id)}}" method="post">
            {{csrf_field()}}
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{$student->phone}}" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$student->email}}" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="roll">Roll</label>
                <input type="number" class="form-control" id="roll" name="roll" value="{{$student->roll_no}}" placeholder="Roll">
            </div>
            <div class="form-group">
                <label for="reg">Reg</label>
                <input type="number" class="form-control" id="reg" name="reg" value="{{$student->reg_no}}" placeholder="Reg">
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <select class="form-control" id="department" name="department">
                    <option value=''>Select</option>
                    @foreach($departments as $department)
                    <option value='{{$department->id}}' @if(($department->id)==($student->department_id)){{'selected'}}@endif>{{$department->department}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" name="update" value="Update" class="btn btn-sm btn-success"/>
        </form>
    </div>
</div>
@stop