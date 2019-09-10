<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CashMarkets V2.0</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('scriptsFirma')

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/backGeneral/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="/home">CashMarkets V2.0</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">

            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <!--<a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>-->
                    <p class="dropdown-item">Hola, {{ ucfirst(Auth::user()->name) }}.</p>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Salir') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="customersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Clientes</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="customersDropdown">
                    <a class="dropdown-item" href="/customerAdd">Agregar cliente</a>
                    <a class="dropdown-item" href="/customers">Ver clientes</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/newPurchase" id="agreementsDropdown">
                    <i class="far fa-handshake"></i>
                    <span>Contratos</span>
                </a>
                <!--<div class="dropdown-menu" aria-labelledby="agreementsDropdown">
                <h6 class="dropdown-header">Formularios:</h6>
                <a class="dropdown-item" href="newPurchase">Compra</a>
                <a class="dropdown-item" href="newDownPayment">Depósito</a>
                <a class="dropdown-item" href="newPawn">Empeño</a>
            </div>-->
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="listsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Listados</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="listsDropdown">
                    <h6 class="dropdown-header">Listados:</h6>
                    <a class="dropdown-item" href="PurchaseList">Compra</a>
                    <a class="dropdown-item" href="DownPaymentList">Depósito</a>
                    <a class="dropdown-item" href="PawnList">Empeño</a>
                </div>
            </li>
        </ul>

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">@yield('path')</li>
                <select id="agreementTask" class="form-control">
                    <option value="" selected>Nuevo Contrato</option>
                    <option value="newPurchase">Compra</option>
                    <option value="newDownPayment">Deposito</option>
                    <option value="newPawn">Empeño</option>
                </select>
            </ol>
            @yield('content')


        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="vendor/chart.js/Chart.min.js"></script>
    @yield('scripts')


    <!-- Custom scripts for all pages-->
    <script src="js/backGeneral/sb-admin.js"></script>
    <script>
        $(function() {
            // bind change event to select
            $('#agreementTask').on('change', function() {
                var url = $(this).val();
                if (url) {
                    window.location.href = url;
                }
                return false;
            });
        });
    </script>
</body>

</html>