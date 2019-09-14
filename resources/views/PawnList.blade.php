@extends('layouts.app')
@section('path')
<b>Listado de empeños</b>
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
                    @foreach ($pawns as $pawn)
                    <tr>
                        <td>
                            {{ $pawn->names }} {{ $pawn->lastname }} - {{ $pawn->dni }}
                        </td>
                        <td>{{ date('d-m-Y', strtotime($pawn->created_at)) }}</td>
                        <td>
                            <button data-did='{{ $pawn->documentId }}' class="btn btn-info btn-xs" role="button" data-toggle="modal" data-target="#ModalAgreements">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ $pawn->documentId }}
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pawns->links() }}
        </div>
    </div>
</div>
@include('modals.agreementPawn')
@endsection
@section('scripts')
<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="js/backGeneral/tables/datatables-demo.js"></script>
@endsection