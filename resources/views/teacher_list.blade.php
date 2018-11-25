@extends('master')
@section('title','Teacher List')
@section('main_content')

<div class="row">
    <div class="col-md-12">
        <center><h3>Teacher List</h3></center>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i=1
                @endphp
                @foreach ($teachers as $key => $teachers)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$teachers->name}}</td>
                    <td>{{$teachers->phone}}</td>
                    <td>{{$teachers->email}}</td>
                    <td>{{$teachers->created_at}}</td>
                    <td>{{$teachers->updated_at}}</td>
                    <td>
                        <a href="{{url('edit_teacher',$teachers->id)}}" class="btn btn-sm btn-success">Edit</a> 
                        <a class="btn btn-sm btn-danger" onclick="event.preventDefault();
                                    document.getElementById('delete-form-{{ $teachers->id }}').submit();">Delete</a> 
                        <form class="form-inline" id="delete-form-{{ $teachers->id }}" action="{{url('delete_teacher',$teachers->id)}}" method="POST">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
@push('css')
<link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>
@endpush
@push('script')
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
                                        $(document).ready(function () {
                                        $('#myTable').DataTable();
                                        });
</script>
@endpush