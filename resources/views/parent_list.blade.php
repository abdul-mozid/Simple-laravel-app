@extends('master')
@section('title','Teacher List')
@section('main_content')

<div class="row">
    <div class="col-md-12">
        <center><h3>Parent List</h3></center>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Parent of</th>
                    <th>Created At</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i=1
                @endphp
                @foreach ($parents as $key => $parents)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$parents->name}}</td>
                    <td>{{$parents->phone}}</td>
                    <td>{{$parents->email}}</td>
                    <td>{{$parents->parents_of_a->name}}</td>
                    <td>{{$parents->created_at}}</td>
                    <td>{{$parents->updated_at}}</td>
                    <td>
                        <a href="{{url('parents/'.$parents->id.'/edit')}}" class="btn btn-sm btn-success">Edit</a> 
                        <a class="btn btn-sm btn-danger" onclick="event.preventDefault();
                                    document.getElementById('delete-form-{{ $parents->id }}').submit();">Delete</a> 
                        <form class="form-inline" id="delete-form-{{ $parents->id }}" action="{{url('parents',$parents->id)}}" method="POST">
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