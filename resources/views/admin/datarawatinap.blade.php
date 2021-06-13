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
                        background-color: white;
                                                font-weight: bold;
                                                   font-size: 16px;
                                                   text-decoration: none;
                                                   color:#CC4848;;" aria-current="page" href="/datarawatinap">Data
                            Rawat Inap</a>
                    </li>
                    <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
                        <a class="nav-link" style="border-radius: 12px; 
                                                font-weight: bold;
                                                   font-size: 16px;
                                                   text-decoration: none;
                                                   color:#FFFFFF;;" aria-current="page" href="#">Data Rumah Sakit</a>
                    </li>
                    <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
                        <a class="nav-link" style="border-radius: 12px; 
                                                font-weight: bold;
                                                   font-size: 16px;
                                                   text-decoration: none;
                                                   color:#FFFFFF;;" aria-current="page" href="/datapenjualanobat">Data
                            Penjualan
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
                    Rawat Inap</h2>
                <a href="/printpdfrawayinap" class="btn btn-success">Print Pdf</a>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Nama Rumah Sakit</th>
                            <th scope="col">Tipe Kamar</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Bukti</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no =1;
                        @endphp
                        @foreach ($data as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                @php
                                $user = App\Models\User::find($row->id_user)
                                @endphp
                                {{ $user->firstname}} {{ $user->lastname}}
                            </td>
                            <td>{{ $row->namars }}</td>
                            <td>{{ $row->tipekamar }}</td>
                            
                            <td>IDR {{ number_format($row->harga, 0, ',', '.') }}</td>
                            <td>
                                @php
                                $bukti = App\Models\reservasi::find($row->reservasi_id)
                                @endphp
                                
                                <a href="#" class="btn" data-toggle="modal" data-target="#exampleModalCenter{{ $row->id_riwayat }}"><img style="width: 50px;" src="{{ asset('buktipembayaran/'.$bukti->bukti_pembayaran) }}"
                                    alt=""> </a>
                            <!-- Button trigger modal -->
                               

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter{{ $row->id_riwayat }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle{{ $row->id_riwayat }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle{{ $row->id_riwayat }}">Bukti Pembayaran</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                       <img src="{{ asset('buktipembayaran/'.$bukti->bukti_pembayaran) }}"
                                    alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                    </div>
                                    </div>
                                </div>
                                </div>


                            </td>
                            <td>{{   date('d-m-Y', strtotime($bukti->created_at))}} </td>
                            <td>{{ $row->status }}</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm accept" data-id={{ $row->id_riwayat }}>Accept</a>
                                <a href="#" class="btn btn-danger btn-sm decline " data-id={{ $row->id_riwayat }}>Decline</a>
                            </td>
                        </tr>
                        @endforeach


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

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Data Statistik Reservasi Bulan ini'
        },

        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total Reservasi'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b> of total<br/>'
        },

        series: [
            {
                name: "Rumah sakit",
                colorByPoint: true,
                data: {!!json_encode($response)!!}
            }
        ]
    });
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script> 

          $('.accept').click( function(){
              var pelangganid = $(this).attr('data-id');
              
              swal({
                    title: "Yakin?",
                    text: "Melakukan Update status Accept untuk data ini ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location= "/updatestatusrawatinap/"+pelangganid+""
                        swal("Sukses Merubah status data", {
                        icon: "success",
                        });
                    } else {
                        swal("Tidak ada perubahan");
                    }
                }); 
          });

</script>

  <script> 

          $('.decline').click( function(){
              var pelangganid = $(this).attr('data-id');
              
              swal({
                    title: "Yakin?",
                    text: "Melakukan Update status decline untuk data ini ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location= "/updatestatusrawatinapdecline/"+pelangganid+""
                        swal("Sukses Merubah status data", {
                        icon: "success",
                        });
                    } else {
                        swal("Tidak ada perubahan");
                    }
                }); 
          });

</script>