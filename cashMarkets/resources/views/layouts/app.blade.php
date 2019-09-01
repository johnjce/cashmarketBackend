<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CashMarkets V2.0</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico" />
    <link rel="bookmark" href="favicon_16.ico" />
    <!-- site css -->
    <link rel="stylesheet" href="dist/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="dist/js/site.min.js"></script>

</head>

<body>
    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
            <div class="navbar-header">
                <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/home" class="navbar-brand">CashMarkets V2.0</a>
            </div>
            <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ ucfirst(Auth::user()->name) }}, {{ __('Salir') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid">
        <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
                <ul class="list-group panel">
                    <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>SIDE PANEL</b></li>
                    <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>
                    <li class="list-group-item"><a href="/home"><i class="glyphicon glyphicon-home"></i>Dashboard </a></li>
                    <li>
                        <a href="#clients" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-certificate"></i>Clientes<span class="glyphicon glyphicon-chevron-right"></span></a>
                        <li class="collapse" id="clients">
                            <a href="" class="list-group-item">Nuevo Cliente</a>
                            <a href="" class="list-group-item">Ver cliente</a>
                        </li>
                    </li>
                    <li>
                        <a href="#agreement" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-list-alt"></i>Contratos<span class="glyphicon glyphicon-chevron-right"></span></a>
                        <li class="collapse" id="agreement">
                            <a href="" class="list-group-item">Compras</a>
                            <a href="" class="list-group-item">Depositos</a>
                            <a href="" class="list-group-item">Empe&ntilde;s</a>
                        </li>
                    </li>
                    <li>
                        <a href="#lists" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-th-list"></i>Listados<span class="glyphicon glyphicon-chevron-right"></span></a>
                        <li class="collapse" id="lists">
                            <a href="" class="list-group-item">Compras</a>
                            <a href="" class="list-group-item">Depositos</a>
                            <a href="" class="list-group-item">Empe&ntilde;s</a>
                        </li>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-9 content">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>..::jhonts Dashboard::..</h3>
                    </div>
                    <div class="panel-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
</body>

</html>