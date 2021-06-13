<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  {{-- css --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="{{ url('resource/css/main.css') }}" rel="stylesheet">

  <style>
    .background {
      background-image: url('resource/imgres/back-about.png');
      background-size: 100%;
      background-repeat: no-repeat;
      background-position: bottom;
    }

    .shadow-custom {
      -webkit-box-shadow: 0px 12px 20px 0px rgba(0, 0, 0, 0.34);
      -moz-box-shadow: 0px 12px 20px 0px rgba(0, 0, 0, 0.34);
      box-shadow: 0px 12px 20px 0px rgba(0, 0, 0, 0.34);
    }

  </style>
</head>

<body>
  {{-- navbar --}}
  <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="{{ url('resource/imgres/logo-kemenkes.png') }}" alt="hostvital-logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="{{ '/' }}">Beranda</a>
                    <a class="nav-link" href="{{ '/aboutus' }}">Tentang Kami</a>
                    <a class="nav-link" href="#skills">Artikel</a>
                    <a class="nav-link" href="#portfolio">Layanan</a>
                    @if(session()->get('login') == true)
          <a class="nav-link" href="{{ url('/editprofile/'.session()->get('id')) }}" >Hi, {{ session()->get('login') }}</a>
          <a class="nav-link login-link" href="{{ '/logout' }}">Logout</a>
          @else
          <a class="nav-link login-link" href="{{ '/login' }}">Login/Register</a>
          @endif
                </div>
            </div>
        </div>
    </nav>
  <div class="background">
    <div class="container mb-5 pt-5 pb-5">
      <div class="row justify-content-md-center">
        <div class="col-8  shadow-custom" style="background-color: white;">
          <form style="padding-left: 100px; padding-right: 100px; margin-top: 10%;" action="/updatedatadokter/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="formStep1">
              <center>
              <h5 style="color:#CC4848">Input Data Dokter </h5>
              </center>
             
              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputnamawali" class="form-label">Nama Dokter</label>
                <input name="nama" value="{{ $data->nama }}" style="border: 2px solid #CC4848; border-radius:10px" type="text" class="form-control"
                  id="exampleInputnamawali" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label style="font-weight: bold;" for="" class="form-label">Rubah Foto</label>
                  <div class="form-group">
                  <input type="file" name="foto" class="form-control-file" id="">
                </div>
                <br>
                <label style="font-weight: bold;" for="" class="form-label text-center">Foto Sebelumnya</label>
                <img src="{{ asset('resource/imgres/'.$data->foto) }}" class="d-block w-50" alt="...">
                
              </div>
              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputnamapasien" class="form-label">Spesialis</label>
                <input name="spesialis"  value="{{ $data->spesialis }}" style="border: 2px solid #CC4848; border-radius:10px" type="text" class="form-control"
                  id="exampleInputnamapasien" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputnamapasien" class="form-label">Deskripsi</label>
                <input name="deskripsi"  value="{{ $data->deskripsi }}" style="border: 2px solid #CC4848; border-radius:10px" type="text" class="form-control"
                  id="exampleInputnamapasien" aria-describedby="emailHelp">
              </div>


              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputktp" class="form-label">Rumah Sakit</label>

                  <select name="rumahsakit" id="" class="form-control"  style="border: 2px solid #CC4848; border-radius:10px">
                          <option value="{{ $data->rumahsakit }}" >{{ $data->rumahsakit }} </option>
                          @foreach ($rumahsakit as $data )
                          <option value="{{ $data->nama }}">{{ $data->nama }}</option>
                          @endforeach
                        </select>
              </div>
              

            

            <div class="d-grid gap-2">
                <button type="submit" class="btn"  style="background-color: #CC4848; color:white; border-radius:10px;"
                type="button">Simpan Data</button>
            </div>
            <br>
          </form>
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

