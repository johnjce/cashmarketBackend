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
                    <span>Compra</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/newPawn" id="agreementsDropdown">
                    <i class="far fa-handshake"></i>
                    <span>Empeño</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/newDownPayment" id="agreementsDropdown">
                    <i class="far fa-handshake"></i>
                    <span>Deposito</span>
                </a>
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



    <!-- Custom scripts for all pages-->
    <script src="js/backGeneral/sb-admin.js"></script>

    @yield('scripts')
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
    @yield('scriptsFirma')
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
                    console.log(data);
                    let capitalName = data[0]['names'] + " " + data[0]['lastname'].toLowerCase().replace(/\b[a-z]/g, function(txtVal) {
                        return txtVal.toUpperCase();
                    });
                    let capitalAddress = data[0]['address'].toLowerCase().replace(/\b[a-z]/g, function(txtVal) {
                        return txtVal.toUpperCase();
                    });
                    let agreementType = data[0]['typeDocument']=='pawn'?'empeño':data[0]['typeDocument'];
                    $('.names').text(capitalName)
                    $('.address').text(capitalAddress)
                    $('.dni').text(data[0]['dni'].toUpperCase())
                    $('.mobile').text(data[0]['telephone'])
                    $('.amount').text(data[0]['pricePurchase'])
                    $('.endTimeToPay').text(data[0]['lastDayOfPay'])
                    $('.created').text(data[0]['created_at'])
                    $('.modal-title').text('Contrato de '+ agreementType +'- ' + data[0]['documentId'])
                    $("#signatureImage_" + data[0]['documentId']).attr("src", data[0]['signatureCustomer']);
                    $('.terms').text("");

                    let documento = "<br/>" +
                        "<table width='100%' border='1' cellpadding='5' cellspacing='0' bordercolor='#3D3C2C'>" +
                        "    <tr>" +
                        "        <th></th>" +
                        "        <th>Marca</th>" +
                        "        <th>Modelo</th>" +
                        "        <th>S/N</th>" +
                        "        <th>Estado de<br />producto</th>" +
                        "        <th>Precio unidad</th>" +
                        "        <th>";
                    documento += data[0]['stock'] == null ? "Porcentaje" : "Cantidad";
                    documento += "</th>" +
                        "        <th>Total</th>" +
                        "    </tr>";
                    let key = 0;
                    let total = intereses = prestado = 0;
                    data.forEach(product => {
                        key++;
                        documento += " <tr><td>" + key + "</td>" +
                            "<td>" + product.make + "</td>" +
                            "<td>" + product.model + "</td>" +
                            "<td>" + product.sn + "</td>";
                            
                            let productPrice = product.pricePurchase == null ? product.pricePawn : product.pricePurchase;
                            let productStock = product.stock == null ? product.pawnPercent : product.stock;
                            intereses += parseFloat(productStock * productPrice / 100, 2);
                            prestado += productPrice;
                            let state = product.productState == 1 ? "Nuevo" : "Segundamano";
                            let sSymbol = product.stock == null ? "%" : "";
                            documento += "<td>" + state + "</td>" +
                            "        <td>" + productPrice + "&euro;</td>" +
                            "        <td>" + productStock + sSymbol + "</td>";
                            
                            productPrice = product.pricePawn == null ? parseFloat(productStock * productPrice, 2) : parseFloat(productStock * productPrice / 100, 2) + parseFloat(product.pricePawn == null ? 0 : product.pricePawn, 2);
                            documento += "    <td>" + productPrice + "&euro;</td>";
                            total += productPrice;
                            documento += "</tr>";
                            $('.terms').append(product.terms+", ");
                    });
                    documento += "</table>" + "<br/>";
                    $('.productsTable').html(documento);
                    $('.total').text(parseFloat(total, 2));
                    $('.priceObjects').text(parseFloat(prestado, 2));
                    $('.priceInterest').text(parseFloat(intereses, 2));
                },
                error: function(jqXhr, textStatus, errorThrown) {
                    console.log(errorThrown);
                }
            });
        })
    </script>
</body>

</html>