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
                <div class="input-group col-md-12">
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


    <form id="addProductForm" name="addProductForm" action="./index.php?controller=Purchase&amp;action=save" enctype="multipart/form-data">
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
                    <select name="type" class="form-control">
                        <option value="1" title="Altavoces para automóvil, Autoradios...">Accesorios Coche</option>
                        <option value="2" title="Cascos de motocicleta, Ropa y calzado de moto...">Accesorios Moto</option>
                        <option value="3" title="Alimentación bebé, Artículos de paseo bebé...">Bebé</option>
                        <option value="4" title="Bicicleta Mountain bike, Bicicletas BMX Freestyle y Trial...">Bicicletas</option>
                        <option value="5" title="Equipos de medición-detección, Herramientas a batería...">Bricolaje</option>
                        <option value="6" title="Bisutería, Bolsos y monederos...">Complementos Y Artículos De Viaje</option>
                        <option value="7" title="Artículos de pesca, Fitness...">Deportes</option>
                        <option value="8" title="Plumas estilográficas, Bolígrafos...">Escritura</option>
                        <option value="9" title="Cámaras clásicas, Cámaras digitales compactas...">Fotografía</option>
                        <option value="10" title="Alianzas, Anillos con brillantes...">Joyería</option>
                        <option value="11" title="Coches de colección, Juegos de mesa...">Juguetes</option>
                        <option value="12" title="Alcatel, Blackberry, Iphone, Samsung...">Móviles Y Smartphones</option>
                        <option value="13" title="Relojes de lujo, Relojes de caballero...">Relojes</option>
                        <option value="14" title="Altavoces, Cadena musical...">Sonido</option>
                        <option value="15" title="Videocámaras con disco duro, Videocámaras con DVD...">Videocámaras</option>
                        <option value="16" title="Consolas, Videojuegos...">Videojuegos Y Consolas</option>
                        <option value="17" title="Artículos de menaje, Aspiradoras y vaporettas">Hogar Y Decoración</option>
                        <option value="18" title="Televisores, Reproductores DVD, Blu ray, VHS">Imagen</option>
                        <option value="19" title="Ordenadores de sobremesa, Ordenadores portátiles">Informática</option>
                        <option value="20" title="Amplificadores, Bajos y guitarras eléctricas">Instrumentos Musicales</option>
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
<script src="{{ asset('js/customer.js')}}" defer></script>
@endsection