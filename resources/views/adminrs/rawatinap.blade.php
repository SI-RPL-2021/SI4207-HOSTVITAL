<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  {{-- css --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="{{ '/resource/css/main.css' }}" rel="stylesheet">

  <style>
    .shadow-custom {
      -webkit-box-shadow: 0px 12px 20px 0px rgba(0, 0, 0, 0.34);
      -moz-box-shadow: 0px 12px 20px 0px rgba(0, 0, 0, 0.34);
      box-shadow: 0px 12px 20px 0px rgba(0, 0, 0, 0.34);
    }

  </style>
</head>

<body background="{{ '/resource/imgres/back-about.png' }}"
  style="background-size:100%; background-repeat: no-repeat; min-height: 100vh">
  {{-- navbar --}}
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <img src="{{ '/resource/imgres/logo-kemenkes.png' }}" alt="hostvital-logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="navbar-nav ms-auto">
          <a class="nav-link login-link" style="color: red;" href="{{ '/logout' }}">Logout</a>
        </div>
      </div>
    </div>
  </nav>


  <div class="container mb-5 pt-5 pb-5">
    <div class="row shadow" style=" border-radius:10px; overflow: hidden;">
      <div class="col-md-3" style="background-color: #CC4848">
        <br>
        <ul class="nav flex-column">
          <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
            <a class="nav-link active" href="#"
              style="font-weight: bold; font-size: 16px; text-decoration: none; color:#CC4848;">Data Rawat Inap</a>
          </li>

          <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
            <a class="nav-link" href="#"
              style="font-weight: bold; font-size: 16px; text-decoration: none; color:#FFFFFF;">Saran & Masukan</a>
          </li>

          <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
            <a class="nav-link" href="#"
              style="font-weight: bold; font-size: 16px; text-decoration: none; color:#FFFFFF;">Edit Data</a>
          </li>
        </ul>

      </div>
      <div class="col-md-9" style="background-color: #FFFF;  ">
        <h2 class="pt-3" style="font-size: 18px; font-weight: bold; text-decoration: underline;">Laporan Data
          Rawat Inap</h2>
        <a href="/printpdfrsrawatinap" class="btn btn-success">Print Pdf</a>

        <table class="table table-borderless w-auto small">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Depan</th>
              <th scope="col">Nama Belakang</th>
              <th scope="col">username</th>
              <th scope="col">email</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>


          </tbody>
        </table>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="{{ '/resource/imgres/logo.png' }}" alt="logo-hostvital" style="margin-top: 20px">
        </div>
        <div class="col-md-3">
          <p style="margin-bottom: 0; font-weight: 600">Site Map</p>
          <a class="f-link" href="#">FAQ</a><br>
          <a class="f-link" href="#">Syarat & Ketentuan</a>
        </div>
        <div class="col-md-5" style="text-align: right">
          <p style="margin-bottom: 0; font-weight: 600">Hubungi Kami</p>
          <p class="address">Gedung Hostvital, Jl. Sukabirus. B32-33, Bandung 12345</p>
          <p class="address">Phone: 021-6969-6969</p>
          <p class="address">Email: help@hostvital.com</p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
