@extends('layouts.app')
@section('path')
<b>Deposito</b>
@endsection
@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status')}}
    </div>
    @endif

    <p id="message">Los campos marcados con (*) significan que son obligatorios.</p>
    <div class="row py-2 text-left">
        <div class="input-group col-12">
            <input type="text" id="inputSearch" class="search-query form-control" placeholder="Buscar Cliente">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </span>
        </div>
        <div id="customersResult"></div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12 col-md-12 mb-0">
            <form id="addProductForm" name="addProductForm" action="./savePurchase" method="post">
                @csrf
                <div class="row">
                    <div class="mb-1 col-12">
                        <label for="make">Marca (*)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-apple"></i></span>
                            </div>
                            <input type="text" name="make" id="make" value="" class="form-control" placeholder="Marca">
                            <div class="invalid-feedback" style="width: 100%;">
                                Marca requerida.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-1">
                        <label for="model">Modelo (*)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                            </div>
                            <input type="text" name="model" id="model" value="" class="form-control" placeholder="Modelo">
                            <div class="invalid-feedback" style="width: 100%;">
                                Modelo requerido.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-1">
                        <label for="sn">SN (*)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                            </div>
                            <input type="text" name="sn" id="sn" value="" class="form-control" placeholder="Número de serie">
                            <div class="invalid-feedback" style="width: 100%;">
                                Número de serie requerido.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-1">
                        <label for="priceDownPayment">Monto prestado(*)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-euro-sign"></i></span>
                            </div>
                            <input type="number" name="priceDownPayment" id="priceDownPayment" value="" class="form-control" placeholder="Monto prestado">
                            <div class="invalid-feedback" style="width: 100%;">
                                Monto prestado requerido.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-1">
                        <label for="downPaymentPercent">%</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">%</span>
                            </div>
                            <input type="number" name="downPaymentPercent" id="downPaymentPercent" value="30" min="1" max="100" class="form-control" placeholder="Precio de venta">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-1">
                        <label for="sn">Tipo de producto (*)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-angle-double-down"></i></span>
                            </div>
                            <select name='type' name="type" class="form-control">
                                @foreach($productTypes as $productType)
                                <option value='{{ $productType->id }}' title='{{ $productType->comment }}'>{{ ucwords(strtolower($productType->type)) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-1">
                        <label for="state">Estado de producto</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-angle-double-down"></i></span>
                            </div>
                            <select name="state" class="form-control">
                                <option value="1" selected="selected">Nuevo</option>
                                <option value="0">Segunda mano</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-1 text-center">
                        <video muted="muted" id="video"></video>
                        <canvas id="canvasProductPicture" style="display: none;"></canvas>
                        <br />
                        <select name="deviceList" id="deviceList"></select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-1 text-center">
                        <button id="buttonAddProduct" class="btn btn-primary btn-lg" disabled="">
                            Agregar <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-12 mb-0">
            <div id="downPaymentAmount"></div>
            <h2 class="py-2 font-weight-bold text-primary">PDA Deposito</h2>
            <div id="productsPda" class="row">
                <!--//se llena desde javascript-->
            </div>

            <div class="row">
                <div class="col-12 mb-1 text-center">
                    <label for="terms">Condiciones Extra</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-sort-numeric-up"></i></span>
                        </div>
                        <textarea rows="4" name="terms" id="terms" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-12 mb-1 text-center">
                    <label for="lastDayOfPay">Fecha limite</label>
                    <div class="input-group date">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                        </div>
                        <input type="text" class="form-control datepicker" name="lastDayOfPay" id="lastDayOfPay">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 col-md-12 my-2 text-center text-bottom">
                    <div>
                        <button id="buttonAddAgreement" class="btn btn-primary btn-lg" disabled="">Crear contrato <i class="fas fa-file-contract"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@include('modals.agreementDownPayment')
@endsection

@section('scripts')
<!-- Datepicker Files -->
<script src="{{secure_asset('js/bootstrap-datepicker.js')}}"></script>
<!-- Languaje -->
<script src="{{secure_asset('js/bootstrap-datepicker.es.min.js')}}"></script>

<script src="{{ secure_asset('js/backGeneral/customer/customerSearch.js') }}" defer></script>
<script src="{{ secure_asset('js/backGeneral/webcamControl.js') }}" defer></script>
<script src="{{ secure_asset('js/backGeneral/generalAgreements.js') }}" defer></script>
<script src="{{ secure_asset('js/backGeneral/agreementDownPayment.js') }}" defer></script>
<script>
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        todayBtn: "linked",
        language: "es",
        autoclose: true
    });
    </script>
@endsection

@section('scriptsFirma')
<link rel="stylesheet" href="{{secure_asset('css/bootstrap-datepicker.css')}}">
<link rel="stylesheet" href="{{secure_asset('css/bootstrap-datepicker.standalone.css')}}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" type="text/css" href="{{ secure_asset('js/backGeneral/signature/signatureButtons.css') }}" defer />
<script type="text/javascript" src="{{ secure_asset('js/backGeneral/signature/BigInt.js') }}" defer></script>
<script type="text/javascript" src="{{ secure_asset('js/backGeneral/signature/sjcl.js') }}" defer></script>
<script type="text/javascript" src="{{ secure_asset('js/backGeneral/signature/signatureButtons_encryption.js') }}" defer></script>
<script src="{{ secure_asset('js/backGeneral/signature/q.js') }}" defer charset="UTF-8"></script>
<script src="{{ secure_asset('js/backGeneral/signature/wgssStuSdk.js') }}" defer charset="UTF-8"></script>
<script src="{{ secure_asset('js/backGeneral/signatureControl.js') }}" defer></script>

<script>
function printDocument(aaa) {
        var ventana = window.open("", "", "");
        var contenido = "<head>" +
            "<link href='https://cashmarkets.es/css/backGeneral/sb-admin.css' rel='stylesheet'>" +
            "<link href='https://cashmarkets.es/vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>" +
            '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">' +
            "<link href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i' rel='stylesheet'>" +
            "</head><body onload='window.print();close();'>";
        contenido = contenido + $("#AgreementContrato").html() + "</body></html>";
        ventana.document.open();
        ventana.document.write(contenido);
        ventana.document.close();
    }
</script>
@endsection