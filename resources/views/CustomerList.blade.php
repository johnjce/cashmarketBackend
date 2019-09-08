@extends('layouts.app')
@section('path')
<b>Listado de clientes</b>
@endsection
@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Clientes
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombres y apellidos</th>
                            <th>Dni</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th>Registrado desde</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nombres y apellidos</th>
                            <th>Dni</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th>Registrado desde</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->IDCL }}</td>
                            <td>{{ $customer->names }} {{ $customer->lastname }}</td>
                            <td>{{ $customer->dni }}</td>
                            <td>{{ $customer->telephone }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ date('d-m-Y', strtotime($customer->created_at)) }}</td>
                            <td><a href="/{{ $customer->IDCL }}/customer">Ver cliente</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="js/backGeneral/tables/datatables-demo.js"></script>
@endsection