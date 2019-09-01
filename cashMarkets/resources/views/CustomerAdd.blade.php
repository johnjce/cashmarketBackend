@extends('layouts.app')

@section('content')

<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="content-row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><b>Crear/Editar Cliente</b>
                </div>

                <div class="panel-options">
                    <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
                    <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
                    <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <form id="addCustomerForm" action="./" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="names">Nombres (*)</label>
                        <div class="col-md-10">
                            <input type="text" name="names" value="names" id="names" class="form-control" placeholder="Nombres" required="">
                            <div class="invalid-feedback" style="width: 100%;">
                                Nombres requerido.
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="lastname">Apellidos (*)</label>
                        <div class="col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                            </div>
                            <input type="text" name="lastname" id="lastname" value="lastname" class="form-control" placeholder="Apellidos" required="">
                            <div class="invalid-feedback" style="width: 100%;">
                                Apellidos requerido.
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="dni">DNI / pasaporte / etc. (*)</label>
                        <div class="col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                            </div>
                            <input type="text" name="dni" id="dni" value="dni" class="form-control" placeholder="DNI" required="">
                            <div class="invalid-feedback" style="width: 100%;">
                                DNI requerido.
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="telephone">Telefono (*)</label>
                        <div class="col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                            </div>
                            <input type="tel" name="telephone" id="telephone" value="telephone" class="form-control" data-format="+34 ddd dd-dd-dd" placeholder="684000000" required="">
                            <div class="invalid-feedback" style="width: 100%;">
                                Telefono requerido.
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="address">Domicilio (*)</label>
                        <div class="col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-home"></i></span>
                            </div>
                            <input type="text" name="address" id="address" value="address" class="form-control" placeholder="Domicilio" required="">
                            <div class="invalid-feedback" style="width: 100%;">
                                Domicilio requerido.
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="email">Email</label>
                        <div class="col-md-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="email" name="email" value="email" id="email" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <video muted="muted" id="video"></video>
                            <canvas id="canvas" style="display: none;"></canvas>
                            <br />

                            <select name="deviceList" id="deviceList"></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <button id="buttonCapture" class="btn btn-primary btn-lg ligth-text" disabled>Guardar <i class="far fa-save"></i></button>
                            <p id="state">Los campos marcados con (*) significan que son obligatorios.</p>
                            <input type="hidden" value="<?php echo @$_GET['id'] != null ? $_GET['id'] : ""; ?>" name="IDCL" id="IDCL" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/customer.js') }}" defer></script>
@endsection