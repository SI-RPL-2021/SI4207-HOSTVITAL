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
  <link href="{{ 'resource/css/main.css' }}" rel="stylesheet">

  <style>
  .shadow-custom {
    -webkit-box-shadow: 0px 12px 20px 0px rgba(0,0,0,0.34);
    -moz-box-shadow: 0px 12px 20px 0px rgba(0,0,0,0.34);
    box-shadow: 0px 12px 20px 0px rgba(0,0,0,0.34);
  }
  </style>
</head>

<body background="{{ 'resource/imgres/back-about.png' }}"
  style="background-size:100%; background-repeat: no-repeat; min-height: 100vh">
  {{-- navbar --}}
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <img src="{{ 'resource/imgres/logo-kemenkes.png' }}" alt="hostvital-logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="{{ '/' }}">Beranda</a>
          <a class="nav-link" href="{{ '/aboutus' }}">Tentang Kami</a>
          <a class="nav-link" href="#skills">Artikel</a>
          <a class="nav-link" href="#portfolio">Layanan</a>
          <a class="nav-link login-link" href="{{ '/login' }}">Login/Register</a>
        </div>
      </div>
    </div>
  </nav>


  <div class="container mb-5 pt-5 pb-5">
              <div class="row justify-content-md-center">
                  <div class="col" style="background-color: #CC4848; height: 850px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                  <center>
                  <h1 style= "margin-top: 60%; font-size: 60px; color: white">HI!</h1>
                  <h3 style= "color:white; font-weight: normal;">WELCOME BACK<h3>
                  </center>
                  </div>
                  <div class="col  shadow-custom" style="background-color: white;">
                  <form class="" style="padding-left: 100px; padding-right: 100px; margin-top: 12%;">
                      <div class="mb-3">
                        <label style="font-weight: bold;"  for="exampleInputEmail1" class="form-label">Firstname:</label>
                        <input style="border: 2px solid #CC4848; border-radius:10px" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label style="font-weight: bold;"  for="exampleInputEmail1" class="form-label">Lastname:</label>
                        <input style="border: 2px solid #CC4848; border-radius:10px" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label style="font-weight: bold;"  for="exampleInputEmail1" class="form-label">Username:</label>
                        <input style="border: 2px solid #CC4848; border-radius:10px" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label style="font-weight: bold;"  for="exampleInputEmail1" class="form-label">Email:</label>
                        <input style="border: 2px solid #CC4848; border-radius:10px" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label style="font-weight: bold;"  for="exampleInputEmail1" class="form-label">Password:</label>
                        <input style="border: 2px solid #CC4848; border-radius:10px" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label style="font-weight: bold;" for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input style="border: 2px solid #CC4848; border-radius:10px" type="password" class="form-control" id="exampleInputPassword1">
                        <br>
                        <div class="form-check form-check-inline">
                            <input style="border: 2px solid #CC4848;" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Saya setuju dengan Syarat dan Ketentuan serta Kebijakan yang berlaku</label>
                        </div>
                      </div>
                      <div class="d-grid gap-2">
                          <button class="btn" style="background-color: #CC4848; color:white; border-radius:10px" type="button">Register</button>
                      </div>
                      <br>
                      <center>
                      <h6 style="font-weight: normal;">Sudah punya akun? Login <a href="{{ '/login' }}" style="color:black;">Disini</a></h6>
                      </center>
                  </form>
                </div>
            </div>
        </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="{{ 'resource/imgres/logo.png' }}" alt="logo-hostvital" style="margin-top: 20px">
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
