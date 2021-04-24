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
    <link href="{{ url('resource/css/main.css') }}" rel="stylesheet">
</head>

<body background="{{ 'resource/imgres/back-about.png' }}"
    style="background-size:100%; background-repeat: no-repeat; min-height: 100vh">
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="{{ url('resource/imgres/logo-kemenkes.png') }}" alt="hostvital-logo">
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
                    <div class="col-7" align="center">
                        <img src="{{ url('resource/imgres/'.$data->foto) }}" alt="logo-hostvital"
                            style="height: 505px;">
                    </div>
                    <div class="col-4" style="margin-top: 50px;">
                        <h3 class="artikel">{{$data->nama}}</h3>
                        <pre
                            style="text-align:justify;white-space:pre-wrap;font-family:var(--bs-font-sans-serif);">{{$data->deskripsi}}</pre>
                        <br>
                        <form action="{{ route('formpemesananobat') }}">
                            <input type="hidden" name="obat_id" value="{{ $data->id }}">
                            <input type="hidden" name="harga" value="{{ $data->harga }}">
                            <h5 class="artikel">Kuantitas </h5>
                            <div class="input-group counter" align="center">
                                <span class="input-group-btn down" onClick='decreaseCount(event, this)'>
                                    <button class="btn btn-white btn-minuse " type="button">-</button>
                                </span>
                                <input type="text" name="qty" class="form-control no-padding add-color text-center height-20"
                                    maxlength="3" value="1">
                                <span class="input-group-btn up" onClick='increaseCount(event, this)'>
                                    <button class="btn btn-red btn-pluss " type="button">+</button>
                                </span>
                            </div>
                            <br>
                            <div class="d-grid gap-2" align="center">
                                <button class="btn" type="submit"
                                    style="background-color: #CC4848; color:white; border-radius:10px">Beli Obat</button>
                            </div>
                            <br>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br>
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
<script type="text/javascript">
    function increaseCount(a, b) {
        var input = b.previousElementSibling;
        var value = parseInt(input.value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        input.value = value;
    }
    function decreaseCount(a, b) {
        var input = b.nextElementSibling;
        var value = parseInt(input.value, 10);
        if (value > 1) {
            value = isNaN(value) ? 0 : value;
            value--;
            input.value = value;
        }
    }
</script>

</html>