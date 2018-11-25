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
        <form action="{{url('store_student')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="roll">Roll</label>
                <input type="number" class="form-control" id="roll" name="roll" placeholder="Roll">
            </div>
            <div class="form-group">
                <label for="reg">Reg</label>
                <input type="number" class="form-control" id="reg" name="reg" placeholder="Reg">
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <select class="form-control" id="department" name="department">
                    <option value=''>Select</option>
                    @foreach($departments as $department)
                    <option value='{{$department->id}}'>{{$department->department}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" name="save" value="Save" class="btn btn-sm btn-success"/>
            <input type="reset" name="reset" value="Reset" class="btn btn-sm btn-danger"/>
        </form>
    </div>
</div>
@stop