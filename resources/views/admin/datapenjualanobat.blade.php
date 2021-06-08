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
                        <a class="nav-link" href="#" style="font-weight: bold;
                               font-size: 16px;
                               text-decoration: none;
                               color:#FFFFFF;">Data User</a>
                    </li>

                    <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
                        <a class="nav-link" style="border-radius: 12px; 
                        
                                                font-weight: bold;
                                                   font-size: 16px;
                                                   text-decoration: none;
                                                   color:#FFFFFF;" aria-current="page" href="/datarawatinap">Data Rawat Inap</a>
                    </li>
                    <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
                        <a class="nav-link" style="border-radius: 12px; 
                                                font-weight: bold;
                                                   font-size: 16px;
                                                   text-decoration: none;
                                                   color:#FFFFFF;" aria-current="page" href="#">Data Rumah Sakit</a>
                    </li>
                    <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
                        <a class="nav-link" style="border-radius: 12px;
                                                    background-color: white;
                                                font-weight: bold;
                                                   font-size: 16px;
                                                   text-decoration: none;
                                                   color:#CC4848;;" aria-current="page" href="/datapenjualanobat">Data Penjualan
                            Obat</a>
                    </li>
                    <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
                        <a class="nav-link" style="border-radius: 12px; 
                                                                    font-weight: bold;
                                                                       font-size: 16px;
                                                                       text-decoration: none;
                                                                       color:#FFFFFF;;" aria-current="page"
                            href="/editdata">Edit Data</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9" style="background-color: #FFFF;  ">
                <h2 class="pt-3" style="font-size: 18px; font-weight: bold; text-decoration: underline;">Laporan Data
                    Penjualan Obat</h2>
                    <a href="/printpdfobat" class="btn btn-success">Print Pdf</a>
                <table class="table table-borderless w-auto small">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pembeli</th>
                            <th scope="col">Nama Obat</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Total</th>
                            <th scope="col">Bukti</th>
                            <th scope="col">status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <a href="#" class="btn" data-toggle="modal" data-target=""><img style="width: 50px;" src=""
                                    alt=""> </a>
                            <!-- Button trigger modal -->
                            
                                <!-- Modal -->
                                <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="">Bukti Pembayaran</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                       <img src=""
                                    alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                            <td></td>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <h2 class="pt-3 mt-3" style="font-size: 18px; font-weight: bold; text-decoration: underline;"> Grafik
                </h2>
                <div class="card border-0 mb-2">
                    <div class="card-body " style="height: 500px; width: 800px" id="container">
                    </div>
                </div>

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