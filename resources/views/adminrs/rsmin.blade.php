<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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


        ::placeholder {
            color: white !important;
            opacity: 1;
            /* Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: white !important;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: white !important;
        }

        [aria-expanded="false"]>.expanded,
        [aria-expanded="true"]>.collapsed {
            display: none;
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
        <div class="row shadow" style="min-height: 450px; border-radius:10px; overflow: hidden;">
            <div class="col-md-3" style="background-color: #CC4848">
                <br>
                <ul class="nav flex-column">
          <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
            <a class="nav-link" href="/rsrawatinap"
              style="font-weight: bold; font-size: 16px; text-decoration: none; color:#FFFFFF;">Data Rawat Inap</a>
          </li>

          <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
            <a class="nav-link" href="/rsreview"
              style="font-weight: bold; font-size: 16px; text-decoration: none; color:#FFFFFF;">Saran & Masukan</a>
          </li>

          <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
            <a class="nav-link active" href="/rsmin"
              style="font-weight: bold; font-size: 16px; text-decoration: none; color:#CC4848;">Edit Data</a>
          </li>
        </ul>
            </div>
            
            <div class="col-md-9" style="background-color: #FFFF;  ">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
                {{ $message }}
            </div>
                @endif

                <div class="row pt-2">
                    <div class="col">
                        <h2 class="px-2" style="font-size: 18px; font-weight: bold; text-decoration: underline;">Data Rumah Sakit</h2>
                    </div>
                    <div class="col justify-content-end text-end">
                        <a class="px-5 btn" data-toggle="collapse" href="#collapseExampledatarumahsakit" role="button"
                            aria-expanded="false" aria-controls="collapseExample"
                            style="color: red; font-size: 20px; font-weight: bold;">
                            <span class="collapsed">+</span>
                            <span class="expanded">-</span>
                        </a>
                    </div>
                </div>

                <div class="collapse" id="collapseExampledatarumahsakit">
                    <div class="row">
                        <div class="col-1">
                            <a href="/formtambahdatarumahsakit" class="btn btn-success" style="border-radius: 12px;">Add</a>
                        </div>
                        <div class="col-10">
                            <div class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2"
                                    style="background-color: #CC4848; border-radius: 12px; color:#FFFFFF !important;"
                                    type="text" name="searcrumahsakit" id="searcrumahsakit" placeholder="Cari Data">

                            </div>
                        </div>
                    </div>
                    
                    <table class="table table-borderless w-auto small">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Rumah Sakit</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No Telpon</th>
                                <th scope="col">website</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="datarumahsakit">
                        {{-- @php
                            $no=1;
                        @endphp
                            @foreach ($datarumahsakit as $data)
                                
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->notelp }}</td>
                                <td>{{ $data->website }}</td>
                                <td>bukti.png</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                             @endforeach
                           --}}

                        </tbody>
                    </table>
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
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

{{-- data rumah sakit  --}}
<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('live_search.rumahsakit') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('.datarumahsakit').html(data.table_data_rumahsakit);
    
   }
  })
 }

 $(document).on('keyup', '#searcrumahsakit', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
$(document).ready( function () {
{{-- Rumahsakitdelete --}}
    $('body').on('click','.delete-confirm',function(event){
                event.preventDefault();
                    var name = $(this).attr('data-id');
                    const url = $(this).attr('href');

                    swal({
                        title: "Yakin?",
                        text: "Mau dihapus data ini ??",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        console.log(willDelete);
                        if (willDelete) {
                            
                            window.location.href = url;
                            swal("Data telah berhasil dihapus!", {
                            icon: "success",
                        
                            });
                        
                        } else {
                            swal("Data  Tidak jadi di hapus ");
                        }
                    });
        });

</script>

</html>