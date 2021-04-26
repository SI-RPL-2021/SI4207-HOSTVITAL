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
  <div class="row shadow" style="border-radius:10px; overflow: hidden;">
    <div class="col-md-3" style="background-color: #CC4848">
    <br>
    <ul class="nav flex-column">
  <li class="nav-item" style= "margin-right: 2rem; text-align:center;">
    <a class="nav-link active" aria-current="page" href="#">Profile saya</a>
  </li>
  <li class="nav-item" style= "margin-right: 2rem; text-align:center;" >
    <a class="nav-link" href="#">Riwayat</a>
  </li>
</ul>
    </div>
    <div class="col-md-4" style="background-color: #FFFF; text-align:center; padding-top:250px">
    <img src="{{ 'resource/imgres/profile.png' }}" alt="profile" width="20%">
    <br><br>
  <button type="button" class="btn btn-secondary btn-sm" style="width:225px border-radius:10px;">Ganti Profile</button>
    </div>
    <div class="col-md-5" style="background-color: #FFFF; padding-right:50px">
    <br><br>
 
  <form action="">
    @csrf
    @foreach($data as $d)
  
    <div class="mb-3">
  <label style="font-weight: bold;"  for="exampleInputEmail1" class="form-label">Firstname</label>
  <input style="border: 2px solid #CC4848; border-radius:10px" value="{{$d->firstname}}" type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>  
<div class="mb-3">
  <label style="font-weight: bold;"  for="exampleInputEmail1" class="form-label">Lastname</label>
  <input style="border: 2px solid #CC4848; border-radius:10px" value="{{$d->lastname}}" type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
  <label style="font-weight: bold;"  for="exampleInputEmail1" class="form-label">Username</label>
  <input style="border: 2px solid #CC4848; border-radius:10px" value="{{$d->username}} "type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
  <label style="font-weight: bold;"  for="exampleInputEmail1" class="form-label">Email</label>
  <input style="border: 2px solid #CC4848; border-radius:10px" value="{{$d->email}}" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
<label style="font-weight: bold;" for="exampleInputPassword1" class="form-label">Password</label>
<input style="border: 2px solid #CC4848; border-radius:10px" type="password" name="password" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label style="font-weight: bold;" for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
<input style="border: 2px solid #CC4848; border-radius:10px" type="password" name="confirmationpassword" class="form-control" id="exampleInputPassword1">
<br>
</div>
<br>
<div class="" style="text-align:right;">
<a class="btn btn-secondary" style="color:white; border-radius:10px" href="#" role="button">Cancel</a>
<div class="d-inline">
<button class="btn btn-success" style="color:white; border-radius:10px" type="submit">Save Data</button>
</div>
@endforeach
</form>
<br><br>
</div>
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
