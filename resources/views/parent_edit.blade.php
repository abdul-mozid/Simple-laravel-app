@extends('master')
@section('title','Teacher Registration')
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
        <center><h3>Parent Registration</h3></center>
        <form action="{{url('parents',$parent->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$parent->name}}" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{$parent->phone}}" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$parent->email}}" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="parent_of">Parent of</label>
                <select class="form-control" id="parent_of" name="parent_of">
                    <option value=''>Select</option>
                    @foreach($students as $student)
                    <option value='{{$student->id}}' @if($student->id==$parent->parent_of) selected @endif>{{$student->name}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-success" name="save" value="Update"/>
        </form>
    </div>
</div>
@stop