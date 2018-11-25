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
        <center><h3>Teacher Registration</h3></center>
        <form action="{{url('update',$teacher->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$teacher->name}}" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{$teacher->phone}}" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="email">Phone</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$teacher->email}}" placeholder="Email">
            </div>
            <input type="submit" class="btn btn-success" name="save" value="Update"/>
        </form>
    </div>
</div>
@stop