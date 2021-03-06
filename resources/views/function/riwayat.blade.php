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
                    <a class="nav-link active" aria-current="page" href="{{ '/' }}">Beranda</a>
                    <a class="nav-link" href="{{ '/aboutus' }}">Tentang Kami</a>
                    <a class="nav-link" href="#skills">Artikel</a>
                    <a class="nav-link" href="#portfolio">Layanan</a>
                    <a class="nav-link login-link" href="{{ '/logout' }}">Logout</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="container mb-5 pt-5 pb-5">
        <div class="row shadow" style="height: 450px; border-radius:10px; overflow: hidden;">
            <div class="col-md-3" style="background-color: #CC4848">
                <br>
                <ul class="nav flex-column">
                    <li class="nav-item" style="margin-right: 2rem; text-align:center;">
                        <a class="nav-link"  href="{{ url('/editprofile/'.session()->get('id')) }}" >Profile saya</a>
                    </li>
                    <li class="nav-item" style="margin-right: 2rem; text-align:center;">
                        <a class="nav-link active" aria-current="page" href="#">Riwayat</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9" style="background-color: #FFFF; ">
                <h2><u>Rawat Inap</u></h2> 
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Rumah Sakit</th>
                        <th scope="col">Tipe Kamar</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Status</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                    </thead>
                        <tbody>
                        @foreach($riwayatInap as $i)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$i->namars}}</td>
                                <td>{{$i->tipekamar}}</td>
                                <td>{{$i->harga}}</td>
                                <td>{{$i->status}}</td>
                                @if($i->keter=="review")
                                <td><a href="{{ 'ulasan/'.$i->id_riwayat }}" >Tulis Review</a></td>
                                @elseif($i->ket=="uploadbayar")
                                <td><a href="#" >Upload Bukti Pembayaran</a></td>
                                @else
                                <td>Sudah Review</td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <h2><u>Obat</u></h2> 
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">Nama Obat</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                        <tbody>
                        @foreach($riwayatobat as $o)
                        @php
                            
                        $obat = App\Models\Obat::find($o->obat_id)
                        @endphp
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$o->nama_lengkap}}</td>
                                <td>{{$obat->nama}}</td>
                                <td>{{$o->qty}}</td>
                                <td>{{$obat->harga}}</td>
                                <td>{{$o->total}}</td>
                                <td>{{$o->status}}</td>
                            </tr>
                            @endforeach
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