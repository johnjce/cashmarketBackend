<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CashMarkets V2.0</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo asset('css/frontGeneral/animate.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/frontGeneral/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/frontGeneral/jquery.fancybox.min.css') ?>">

    <link rel="stylesheet" href="<?php echo asset('fonts/ionicons/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('fonts/fontawesome/css/font-awesome.min.css') ?>">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('css/frontGeneral/style.css') }}">
</head>

<body>
    <header role="banner">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand " href="{{ url('/') }}">CashMarkets</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav pl-md-5 ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('login'))
                            @auth
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            @else
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                            @endauth
                            @endif
                        </li>
                    </ul>


                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <div class="top-shadow"></div>

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('img/hero_1.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <h1 class="mb-4" style="text-shadow: 2px 2px 2px #222;"><span>Traenos lo que no uses</span></h1>
                        <p class="mb-5 w-75" style="text-shadow: 2px 2px 2px #222;">Nuestro equipo lo valorara y le ofrecerá el mejor precio</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url('img/hero_2.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <h1 style="text-shadow: 2px 2px 2px #222;"><span></span></h1>
                        <p class="mb-5 w-75" style="text-shadow: 2px 2px 2px #222;"></p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- END slider -->
    </div>

    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4 mb-5">
                    <h3>Nosotros</h3>
                    <p class="mb-5">CashMarkets es una empresa joven con sus objetivos claros, nuestra misión es dar una oportunidad a los articulos de segunda mano evitando generar basura, contribuyendo con el medio ambiente y por supuesto generando ganancias por cosas que no usas. </p>
                    <ul class="list-unstyled footer-link d-flex footer-social">
                        <li><a href="https://www.facebook.com/pages/category/Shopping---Retail/Cashmarkets-319222485698989/" class="p-2" target="_blank"><span class="fa fa-facebook"></span></a></li>
                        <!--<li><a href="#" class="p-2" target="_blank" ><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" class="p-2" target="_blank" ><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#" class="p-2" target="_blank" ><span class="fa fa-instagram"></span></a></li>-->
                    </ul>

                </div>
                <div class="col-md-5 mb-5 pl-md-5">
                    <h3>Información de contacto</h3>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block">
                            <span class="d-block">Dirección:</span>
                            <span>Ayala 33 bajo, Don Benito, Badajoz</span></li>
                        <li class="d-block"><span class="d-block">Teléfono:</span><span>+34 642760330</span></li>
                        <li class="d-block"><span class="d-block">Email:</span><span>info@cashmarkets.com</span></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12 text-md-center text-left">
                <p>
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Todos los derechos reservados Cashmartkets | </i> by <a href="https://johnjce.github.io/inicio/" target="_blank" class="text-primary">..::jhonts::..</a>
                </p>
            </div>
        </div>
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/frontGeneral/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/frontGeneral/owl.carousel.min.js"></script>
    <script src="js/frontGeneral/jquery.waypoints.min.js"></script>
    <script src="js/frontGeneral/jquery.fancybox.min.js"></script>
    <script src="js/frontGeneral/main.js"></script>
    
</body>

</html>