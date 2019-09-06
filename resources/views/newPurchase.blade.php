@extends('layouts.app')
@section('path')
<b>Contrato de compra</b>
@endsection
@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status')}}
    </div>
    @endif
    <!-- Carrito de compra -->
    <div class="col mb-0">
        <div class="card-body">
            <div id="customer-search-input">
                <div class="input-group col-12">
                    <input type="text" id="inputSearch" class="search-query form-control" placeholder="Buscar Cliente">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>
            <div id="customersResult"></div>
        </div>
    </div>


    <form id="addProductForm" name="addProductForm" action="./savePurchase" method="post">
    @csrf
        <div class="row">
            <div class="col-12 mb-3 col-sm-12 col-md-12 col-lg-6">
                <label for="make">Marca (*)</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fab fa-apple"></i></span>
                    </div>
                    <input type="text" name="make" id="make" value="" class="form-control" placeholder="Marca" required="">
                    <div class="invalid-feedback" style="width: 100%;">
                        Marca requerida.
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3 col-sm-12 col-md-12 col-lg-6">
                <label for="model">Modelo (*)</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                    </div>
                    <input type="text" name="model" id="model" value="" class="form-control" placeholder="Modelo" required="">
                    <div class="invalid-feedback" style="width: 100%;">
                        Modelo requerido.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3 col-sm-12 col-md-12 col-lg-6">
                <label for="sn">Número de serie (*)</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                    </div>
                    <input type="text" name="sn" id="sn" value="" class="form-control" placeholder="Número de serie" required="">
                    <div class="invalid-feedback" style="width: 100%;">
                        Número de serie requerido.
                    </div>
                </div>
            </div>

            <div class="col-12 mb-3 col-sm-12 col-md-6 col-lg-4">
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
        </div>
        <div class="row">
            <div class="col-12 mb-3 col-sm-12 col-md-6 col-lg-3">
                <label for="pricePurchase">Precio de compra(*)</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-euro-sign"></i></span>
                    </div>
                    <input type="number" name="pricePurchase" id="pricePurchase" value="" class="form-control" placeholder="Precio de compra" required="">
                    <div class="invalid-feedback" style="width: 100%;">
                        Precio de compra requerido.
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3 col-sm-12 col-md-6 col-lg-3">
                <label for="priceSale">Precio de venta(*)</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-euro-sign"></i></span>
                    </div>
                    <input type="number" name="priceSale" id="priceSale" value="" class="form-control" placeholder="Precio de venta" required="">
                    <div class="invalid-feedback" style="width: 100%;">
                        Precio de venta requerido.
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3 col-sm-12 col-md-6 col-lg-3">
                <label for="stock">cantidad</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-sort-numeric-up"></i></span>
                    </div>
                    <input type="number" name="stock" id="stock" value="1" class="form-control" placeholder="Número de serie" required="">
                </div>
            </div>
            <div class="col-12 mb-3 col-sm-12 col-md-6 col-lg-3">
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
            <div class="col-12 mb-3 col-sm-12 col-md-6 col-lg-6">
                <div>
                    <button id="buttonAddProduct" class="btn btn-primary btn-lg" disabled="">Agregar <i class="fas fa-shopping-cart"></i></button>
                    <p id="message">Los campos marcados con (*) significan que son obligatorios.</p>
                </div>
            </div>
            <div class="col-12 mb-3 col-sm-12 col-md-6 col-lg-6">
                <div>
                    <button id="buttonAddAgreement" class="btn btn-primary btn-lg" disabled="">Crear contrato <i class="fas fa-file-contract"></i></button>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <!-- Carrito de compra -->
        <div class="col mb-0">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">PDA contrato compra</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tablePurchase" class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>marca</th>
                                <th>modelo</th>
                                <th>cantidad</th>
                                <th>Precio Unidad</th>
                                <th>Precio Total</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/backGeneral/customer/customerSearch.js') }}" defer></script>
<script src="{{ asset('js/backGeneral/customer/agreementPurchase.js') }}" defer></script>
@endsection