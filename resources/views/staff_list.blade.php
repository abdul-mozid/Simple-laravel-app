@extends('master')
@section('title','Staff List')
@section('main_content')
<div class="row">
    <div class="col-md-12">
        <center><h3>Staff List</h3></center>
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
                $i=1;
                @endphp
                @foreach($staffs as $staff)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$staff->name}}</td>
                    <td>{{$staff->phone}}</td>
                    <td>{{$staff->email}}</td>
                    <td>{{$staff->updated_at}}</td>
                    <td>{{$staff->created_at}}</td>
                    <td>
                        <a href="{{url('edit_staff',$staff->id)}}" class="btn btn-success btn-xs">Edit</a>
                        <a class="btn btn-xs btn-danger" onclick="event.preventDefault();
                                    document.getElementById('delete-form-{{ $staff->id }}').submit();">Delete</a> 
                        <form action="{{url('delete_staff',$staff->id)}}" id="delete-form-{{ $staff->id }}"method="POST">
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