@extends('layouts.app')
@section('path')
<b>Listado de compras</b>
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
                    @foreach ($purchases as $purchase)
                    <tr>
                        <td>
                            {{ $purchase->names }} {{ $purchase->lastname }} - {{ $purchase->dni }}
                        </td>
                        <td>{{ date('d-m-Y', strtotime($purchase->created_at)) }}</td>
                        <td>
                            <button data-did='{{ $purchase->documentId }}' class="btn btn-info btn-xs" role="button" data-toggle="modal" data-target="#ModalAgreements">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ $purchase->documentId }}
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $purchases->links() }}
        </div>
    </div>
</div>
@include('modals.agreementPurchase')
@endsection
@section('scripts')
<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="js/backGeneral/tables/datatables-demo.js"></script>
<script>
    //rellena la info del contrato, recibe  documentid 
    $('#ModalAgreements').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // De donde saco la info 
        var documentId = button.data('did') // Extract info from data-* attributes

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/purchaseAgreementData',
            type: 'post',
            data: {
                "documentId": documentId
            },
            success: function(data) {
                var modal = $(this)
                $('.names').text(data[0]['names'] + " " + data[0]['lastname'])
                $('.dni').text(data[0]['dni'])
                $('.mobile').text(data[0]['telephone'])
                $('.amount').text(data[0]['pricePurchase'])
                $('.created').text(data[0]['created_at'])
                $('.modal-title').text('Contrato de compra - ' + data[0]['documentId'])
                //$("#signatureImage").src();

                let documento = "<table width='100%' border='1' cellpadding='5' cellspacing='0' bordercolor='#3D3C2C'>" +
                    "    <tr>" +
                    "        <th></th>" +
                    "        <th>Marca</th>" +
                    "        <th>Modelo</th>" +
                    "        <th>S/N</th>" +
                    "        <th>Estado de<br />producto</th>" +
                    "        <th>Precio unidad</th>" +
                    "        <th>Cantidad</th>" +
                    "        <th>Total</th>" +
                    "    </tr>";
                let key=0;
                let total = 0;
                data.forEach(product => {
                    key++;
                    documento += " <tr><td>" + key + "</td>" +
                        "<td>" + product.make + "</td>" +
                        "<td>" + product.model + "</td>" +
                        "<td>" + product.sn + "</td>";

                    let state = product.state == 1 ? "Nuevo" : "Segundamano";

                    documento += "<td>" + state + "</td>" +
                        "        <td>" + product.pricePurchase + "&euro;</td>" +
                        "        <td>" + product.stock + "</td>";

                    let productPrice = product.stock * product.pricePurchase;
                    documento += "    <td>" + productPrice + "&euro;</td>";
                    total += productPrice;
                    documento += "</tr>";
                });
                documento += "</table>";
                console.log(documento);
                $('.productsTable').html(documento);
                $('.total').text(total);
            },
            error: function(jqXhr, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
    })
</script>
@endsection