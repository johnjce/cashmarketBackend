@extends('layouts.app')
@section('path')
<b>Crear o Editar Cliente</b>
@endsection
@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status')}}
    </div>
    @endif

    <div class="content-row">
        <div class="panel panel-default">
            <div class="panel-body">
                <form id="addCustomerForm" action="./customerAdd" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group-prepend">
                                <label class="col-md-2 control-label" for="names">Nombres (*)</label>
                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                <input type="text" name="names" id="names" value="{{ old('body')}}" class="form-control" placeholder="Nombres" required="">
                            </div>
                            <div class="invalid-feedback" style="width: 100%;">
                                Nombres requerido.
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group-prepend">
                                <label class="col-md-2 control-label" for="lastname">Apellidos (*)</label>
                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                <input type="text" name="lastname" id="lastname" value="{{ old('lastname')}}" class="form-control" placeholder="Apellidos" required="">
                            </div>
                            <div class="invalid-feedback" style="width: 100%;">
                                Apellidos requerido.
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group-prepend">
                                <label class="col-md-2 control-label" for="dni">DNI / etc. (*)</label>
                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                <input type="text" name="dni" id="dni" value="{{ old('dni')}}" class="form-control" placeholder="DNI" required="">
                            </div>
                            <div class="invalid-feedback" style="width: 100%;">
                                DNI requerido.
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group-prepend">
                                <label class="col-md-2 control-label" for="telephone">Telefono (*)</label>
                                <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                <input type="number" name="telephone" id="telephone" value="{{ old('telephone')}}" class="form-control" data-format="+34 ddd dd-dd-dd" placeholder="684000000" required="">
                            </div>
                            <div class="invalid-feedback" style="width: 100%;">
                                Telefono requerido.
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group-prepend">
                                <label class="col-md-2 control-label" for="address">Domicilio (*)</label>
                                <span class="input-group-text"><i class="fas fa-home"></i></span>
                                <input type="text" name="address" id="address" value="{{ old('address')}}" class="form-control" placeholder="Domicilio" required="">
                            </div>
                            <div class="invalid-feedback" style="width: 100%;">
                                Domicilio requerido.
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group-prepend">
                                <label class="col-md-2 control-label" for="email">Email</label>
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                                <input type="email" name="email" id="email" value="{{ old('email')}}" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-left">

                            <p id="state">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                Los campos marcados con (*) significan que son obligatorios.
                            </p>
                            <button id="buttonCapture" class="btn btn-primary btn-lg ligth-text block" disabled>Guardar <i class="far fa-save"></i></button>
                            <input type="hidden" value="{{ @$_GET['id'] != null ? $_GET['id'] : ''}}" name="IDCL" id="IDCL" />
                        </div>
                        <div class="col-md-6 text-right">
                            <video muted="muted" id="video"></video>
                            <canvas id="canvasDni" style="display: none;"></canvas>
                            <br />
                            <select name="deviceList" id="deviceList"></select>
                        </div>

                        <!--
                        <div class="col-md-6">
                            <div id="signatureDiv">
                                Signature image:<br />
                                <img id="signatureImage" src="#" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button id="signButton" value="Start demo" class="btn btn-primary btn-lg ligth-text block" onClick="tabletDemo()" disabled>Firmar <i class="fas fa-signature"></i></button>
                        </div>
-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/backGeneral/customer/customer.js')}}" defer></script>
@endsection
