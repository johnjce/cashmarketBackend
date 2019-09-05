@extends('layouts.app')
@section('path')
<b>La empresa</b>
@endsection
@section('content')

<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>

<div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-pie"></i>
                Pie Chart Example</div>
            <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-pie"></i>
                Pie Chart Example</div>
            <div class="card-body">
                <canvas id="myPieChart2" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-chart-area"></i>
        Nuevos clientes</div>
    <div class="card-body">
        <div class="chartjs-size-monitor">
            <div class="chartjs-size-monitor-expand">
                <div class=""></div>
            </div>
            <div class="chartjs-size-monitor-shrink">
                <div class=""></div>
            </div>
        </div>
        <canvas id="myAreaChart" width="966" height="289" style="display: block; width: 966px; height: 289px;" class="chartjs-render-monitor"></canvas>
    </div>



    <div class="card-footer small text-muted">{{json_encode($customers)}}</div>
</div>

@endsection

@section('scripts')
<script src="js/backGeneral/charts/chart-area.js"></script>
<script src="js/backGeneral/charts/chart-pie.js"></script>
@endsection