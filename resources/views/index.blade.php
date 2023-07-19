<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/logo_klaten.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Desa Bogor</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gaia.css" rel="stylesheet"/>

    {{-- <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" /> --}}
    {{-- <link href="assets/css/ct-paper.css" rel="stylesheet"/> --}}
    {{-- <link href="assets/css/demo.css" rel="stylesheet" /> --}}

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="img/logo_klaten.png" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="-" class="navbar-brand">
                    Desa Bogor, Kec. Cawas, Kab. Klaten
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    {{-- <li>
                        <a href="http://www.creative-tim.com/product/gaia-bootstrap-template-pro" target="_blank"></a>
                    </li> --}}
                    <li class="dropdown">
                        <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-share-alt"></i> Media Sosial
                        </a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://www.creative-tim.com/product/gaia-bootstrap-template" class="btn btn-danger btn-fill">Masuk</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

    <div class="section section-header">
        <div class="parallax filter ">
            <div class="image"
                style="background-image: url('img/sawah.jpg')">
            </div>
            <div class="container">
                <div class="content">

                    <div class="title-area">
                        <p class="">Selamat Datang! </p>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Masuk untuk melakukan pengajuan permohonan administrasi masyarakat!
                        </div>
                        <h1 class="title-modern text-success">Desa Bogor</h1>
                        <h3 class="text-warning">Kecamatan Cawas, Kabupaten Klaten</h2>
                        <div class="separator line-separator">♦</div>

                    </div>

                    <div class="button-get-started">
                        <a href="homepage" target="_blank" class="btn btn-danger btn-fill btn-lg ">
                            Homepage
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Footer --}}
    <footer class="footer footer-big footer-color-black" data-color="black">
            <hr>
            <div class="copyright">
                 © 2023 Made With Love, Salma Nora Renada
                 <br>
                 KKN TIM II Universitas Diponegoro
            </div>
        </div>
    </footer>

</body>

<!--   core js files    -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>

</html>
