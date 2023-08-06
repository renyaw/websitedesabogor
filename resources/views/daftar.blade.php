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
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">Dropdown header</a>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
        </div>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
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
                <a class="nav-link" rel="tooltip" title="Halaman Homepage" data-placement="bottom" href="homepage">
                Homepage
                </a>
            </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Masuk" data-placement="bottom" href="login">
              Masuk
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(img/sawah.jpg)"></div>
    <div class="mt-5">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form method="POST" autocomplete="on" name="form" onsubmit="" action="/daftar">
            @csrf
              <div class="card-body">
                <div class="input-group no-border input-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons text_caps-small"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control  @error('nik')
                    is-invalid @enderror" placeholder="NIK" id="nik" name="nik" value="{{old('nik')}}">
                    @error('nik')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control  @error('nama')
                  is-invalid @enderror" placeholder="Nama Lengkap" id="nama" name="nama" value="{{old('nama')}}">
                  @error('nama')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control  @error('tempat_lahir')
                  is-invalid @enderror" placeholder="Tempat Lahir (Isikan tanggal di bawah)" id="tempat_lahir" name="tempat_lahir" value="{{old('tempat_lahir')}}">
                  @error('tempat_lahir')
                  <div class="invalid-feedback">{{$message}}</div>
                 @enderror
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="date" class="form-control  @error('tanggal_lahir')
                  is-invalid @enderror" placeholder="Tanggal Lahir" id="tgl_lahir" name="tgl_lahir" value="{{old('tgl_lahir')}}">
                  @error('tgl_lahir')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control  @error('no_telp')
                  is-invalid @enderror" placeholder="Nomor Telepon" id="no_telp" name="no_telp" value="{{old('no_telp')}}">
                  @error('no_telp')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control @error('dukuh')
                  is-invalid @enderror" placeholder="Dukuh" id="dukuh" name="dukuh" value="{{old('dukuh')}}">
                  @error('dukuh')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="number" class="form-control @error('rw')
                  is-invalid @enderror" placeholder="RW" id="rw" name="rw" value="{{old('rw')}}">
                  @error('rw')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="number" class="form-control @error('rt')
                  is-invalid @enderror" placeholder="RT" id="rt" name="rt" value="{{old('rt')}}">
                  @error('rt')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>


                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control @error('username')
                  is-invalid @enderror" placeholder="Username" id="username" name="username" value="{{old('username')}}">
                  @error('username')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"  placeholder="Masukkan Password" />
                  @error('password')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
        </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Masukkan Ulang Password" />
                  @error('password_confirmation')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
                </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-round btn-lg btn-block">Daftar</button>
                    <div class="pull-right">
                        <h6>
                          <a href="login" class="link">Masuk</a>
                        </h6>
                </div>
            </div>
            </form>
            </div>
          </div>
        </div>
      </div>

    <footer class="footer mt-3">
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
