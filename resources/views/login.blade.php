<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="img/logo_klaten.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Desa Bogor
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="dropdown button-dropdown">
        <a  class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand"  rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
          Desa Bogor
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Halaman Beranda" data-placement="bottom" href="/">
                  Beranda
                </a>
              </li>
            <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Halaman Homepage" data-placement="bottom" href="homepage" >
                Homepage
                </a>
            </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Buat Akun" data-placement="bottom" href="daftar">
              Daftar
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- End Navbar -->

  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(img/sawah.jpg)"></div>
    <div class="content">
      <div class="container">

        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form name="login" method="POST" autocomplete="off" action="/login">
            @csrf
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="img/logo_klaten.png" alt="">
                </div>
                {{-- Alert dari daftar --}}
                @if(session()->has('status'))
                <div class="alert alert-success" role="alert">
                    <div class="container">
                      <div class="alert-icon">
                        <i class="now-ui-icons ui-2_like"></i>
                      </div>
                      {{session('status')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </span>
                      </button>
                    </div>
                  </div>
                @endif
                {{-- End --}}

                {{--    Alert from Login --}}
                @if(session()->has('Lerror'))
                <div class="alert alert-success" role="alert">
                    <div class="container">
                      <div class="alert-icon">
                        <i class="now-ui-icons ui-2_like"></i>
                      </div>
                      {{session('Lerror')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </span>
                      </button>
                    </div>
                  </div>
                @endif
                {{-- End --}}
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" autofocus placeholder="Username">
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="password" placeholder="Password" class="form-control" id="password" name="password"/>
                </div>
              </div>
              <div class="card-footer text-center">
                <input type="submit" class="btn btn-primary btn-round btn-lg btn-block" name="submit" id="submit" value="Masuk"/>
                <div class="pull-right">
                  <h6>
                    <a href="daftar" class="link">Buat Akun</a>
                  </h6>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class=" container ">
        <nav>
          <ul>
            <li>
                KKN TIM II
            </li>
            <li>
              Universitas Diponegoro
            </li>
            <li>
              2023
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          2023, Coded by
          <a href="https://renyaw.github.io/" target="_blank">Salma Nora Renada</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>
