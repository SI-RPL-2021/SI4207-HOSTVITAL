<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="{{ 'resource/css/main.css' }}" rel="stylesheet">
</head>

<body background="{{ 'resource/imgres/back-about.png' }}" style="background-size:100%; background-repeat: no-repeat; min-height: 100vh">
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="{{ 'resource/imgres/logo-kemenkes.png' }}" alt="hostvital-logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="{{ '/' }}">Beranda</a>
                    <a class="nav-link" href="{{ '/aboutus' }}">Tentang Kami</a>
                    <a class="nav-link" href="#skills">Artikel</a>
                    <a class="nav-link" href="#portfolio">Layanan</a>
                    <a class="nav-link login-link" href="#contact">Login/Register</a>
                </div>
            </div>
        </div>
    </nav>

    <div>
        <div class="container">
            <br><br>
            <div class="shadow card" style="margin: 3rem 1rem 3rem 1rem; border-radius: 20px">
                <div class="row">
                    <div class="col-7">
                        <img src="{{ 'resource/imgres/cekkamar.png' }}" alt="logo-hostvital" width="703">
                    </div>
                    <div class="col-4">
                        <br><br>
                        <h3 class="artikel">Fasilitas</h3>
                        <br>
                        <h5 class="artikel">Kamar Premier</h5>
                        <p style="text-align:justify;">AC, 1 Bed, 1 Kamar mandi dengan air panas & dingin, Bedsite cabinet, Kulkas, Kursi tunggu, Overbed table, Meja TV
                            Lemari pakaian, Dispenser, Meja, Sofabed, Smart TV 72", Bed penunggu, Telepon, Ruang keluarga, 1 Set meja makan.</p>
                        <h5 class="artikel">Tersedia</h5>
                        <p style="text-align:justify;">2 Kamar</p>
                        <br>
                        <div class="d-grid gap-2">
                            <a class="btn" href="{{ '/cekdetailkamar' }}" style="background-color: #CC4848; color:white; border-radius:10px">Reservasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
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