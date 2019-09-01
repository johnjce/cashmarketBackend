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
        <canvas 
            id="myAreaChart" 
            width="966" 
            height="289" 
            style="display: block; width: 966px; height: 289px;" 
            class="chartjs-render-monitor"></canvas>
    </div>
    <div class="card-footer small text-muted">{{json_encode($customers)}}</div>
</div>


<script src="{{ asset('js/customer.js') }}" defer></script>
@endsection