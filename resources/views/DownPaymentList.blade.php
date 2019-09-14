@extends('layouts.app')
@section('path')
<b>Listado de Depositos</b>
@endsection
@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="table-responsive">
        <div id="tableUsers_wrapper" class="dataTables_wrapper no-footer">

            <table id="tableUsers" class="table table-bordered dataTable no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="tableUsers_info" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Contrato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($downPayments as $downPayment)
                    <tr>
                        <td>
                            {{ $downPayment->names }} {{ $downPayment->lastname }} - {{ $downPayment->dni }}
                        </td>
                        <td>{{ date('d-m-Y', strtotime($downPayment->created_at)) }}</td>
                        <td>
                            <button data-did='{{ $downPayment->documentId }}' class="btn btn-info btn-xs" role="button" data-toggle="modal" data-target="#ModalAgreements">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ $downPayment->documentId }}
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $downPayments->links() }}
        </div>
    </div>
</div>
@include('modals.agreementDownPayment')
@endsection
@section('scripts')
<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="js/backGeneral/tables/datatables-demo.js"></script>
@endsection