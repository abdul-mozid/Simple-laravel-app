@extends('master')
@section('title','Dashboard')
@section('main_content')
<div class="row">
    <div class="col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Total Teacher</h3>
            </div>
            <div class="panel-body">
                {{$teachers}} Teachers
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Total Staff</h3>
            </div>
            <div class="panel-body">
                {{$staffs}} Staffs
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Total Student</h3>
            </div>
            <div class="panel-body">
                {{$students}} Students
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Total Parents</h3>
            </div>
            <div class="panel-body">
                {{$parents}} Parents
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div id="piechart" style="width: 100%; height: 500px;"></div>
    </div>
</div>
@stop
@push('script')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages': ['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
        ['Man Power', 'Total'],
        ['Teachers', {{$teachers}}],
        ['Staffs', {{$staffs}}],
        ['Students', {{$students}}],
        ['Parents', {{$parents}}]
    ]);

    var options = {
        title: 'Total Man power'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}
</script>
@endpush