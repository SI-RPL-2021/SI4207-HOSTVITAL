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
</head>

<body background="{{ url('resource/imgres/back-about.png') }}" style="background-size:100%; background-repeat: no-repeat; min-height: 100vh">
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

    <div>
        <div class="container">
            <br><br>
            <div class="shadow card" style="margin: 3rem 1rem 3rem 1rem; padding: 3rem; border-radius: 10px">
                <div class="row">
                    <div class="col-5">
                        <img src="{{ url('resource/imgres/'.$data->foto) }}" alt="logo-hostvital" width="450; overflow: hidden;">
                    </div>
                    <div class="col-6" style="margin-left: 35px;">
                        <h3 class="artikel">Fasilitas</h3>
                        <br>
                        <h5 class="artikel">{{$data->nama}}</h5>
                        <p style="text-align:justify;">{{$data->deskripsi}}</p>
                        <br>
                        <h5 class="artikel">Tersedia</h5>
                        <p style="text-align:justify;">{{$data->tersedia}} Kamar</p>
                        <br>
                        <div class="d-grid gap-2">
                            <a class="btn" href="{{ '/reservasi/'.$data->id }}" style="background-color: #CC4848; color:white; border-radius:10px">Reservasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ url('resource/imgres/logo.png') }}" alt="logo-hostvital" style="margin-top: 20px">
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