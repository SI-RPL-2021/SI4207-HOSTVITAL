<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  {{-- css --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" />

  <link href="{{ 'resource/css/main.css' }}" rel="stylesheet">

  <style>
    .shadow-custom {
      -webkit-box-shadow: 0px 12px 20px 0px rgba(0, 0, 0, 0.34);
      -moz-box-shadow: 0px 12px 20px 0px rgba(0, 0, 0, 0.34);
      box-shadow: 0px 12px 20px 0px rgba(0, 0, 0, 0.34);
    }

    .form-section {
      display: none;
    }

    .form-section.current {
      display: inherit;
    }

    .parsley-errors-list {
      list-style-type: none;
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

  <section>
    <div class="container mb-5 pt-5 pb-5">
      <div class="row justify-content-md-center">
        <div class="col"
          style="background-color: #CC4848; height: 670px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
          <center>
            <h1 style="margin-top: 60%; font-size: 60px; color: white">Reservasi</h1>
          </center>
        </div>
        <div class="col shadow-custom" style="background-color: white;">
{{-- 
          @if (Session::has('sukses'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('sukses') }}
          </div>
          @endif --}}
          <form action="{{ route('transaction') }}" class="content-form" method="POST" enctype="multipart/form-data"
            style="padding-left: 100px; padding-right: 100px; margin-top: 10%;">
            @csrf
            <input type="hidden" name="cart_id" value="{{ $datacart->id }}">
            <input type="hidden" name="obat_id" value="{{ $datacart->obat->id }}">
            <input type="hidden" name="qty" value="{{ $datacart->qty }}">
            <input type="hidden" name="total" value="{{ $datacart->total }}">

            <div class="form-section">
              <center>
                <h5 style="color:#CC4848">STEP 1 - MENGISI FORM PEMBELIAN</h5>
              </center>
              <h6 style="font-weight: bold">{{ $datacart->obat->nama }}</h6>
              <h6 style="font-weight: normal">Kuantitas: {{ $datacart->qty }}</h6>
              <h6 style="font-weight: bold">IDR {{number_format($datacart->total, 0, ',', '.') }}</h6>

              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputnamawali" class="form-label">Nama Lengkap:</label>
                <input name="nama_lengkap" style="border: 2px solid #CC4848; border-radius:10px" type="text"
                  class="form-control" id="exampleInputnamawali" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputnamapasien" class="form-label">No Handphone:</label>
                <input name="no_telpon" style="border: 2px solid #CC4848; border-radius:10px" type="number"
                  class="form-control" id="exampleInputnamapasien" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputkelamin" class="form-label">Alamat:</label>
                <input name="alamat" style="border: 2px solid #CC4848; border-radius:10px" type="text"
                  class="form-control" id="exampleInputkelamin" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputktp" class="form-label">Metode Pembayaran:</label>
                <select id="inputState" name="metode_pembayaran" class="form-control"
                  style="border: 2px solid #CC4848; border-radius:10px">
                  <option selected>Pilih</option>
                  <option value="transfer_bank">Transfer Bank</option>
                  <option value="gopay">Gopay</option>
                  <option value="ovo">Ovo</option>
                </select>
              </div><br>
            </div>

            <div class="form-section">
              <center>
                <h5 style="color:#CC4848">STEP 2 - UPLOAD BUKTI PEMBAYARAN</h5>
              </center>
              <br><br>
              <div class="mb-3">
                <div class="form-group">
                  <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <br><br>

              </div>
              <br>

            </div>


            <div class="form-navigation">
              <div class="d-grid gap-2">
                <button type="button" class="btn previous"
                  style="background-color: #CC4848; color:white; border-radius:10px">Kembali</button>
                <button type="button" class="btn next"
                  style="background-color: #CC4848; color:white; border-radius:10px">Lanjut</button>

                <button type="submit" class="btn"
                  style="background-color: #CC4848; color:white; border-radius:10px">Selesai</button>

              </div>
            </div>

            <br>
          </form>



        </div>
      </div>
    </div>
  </section>

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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"
    integrity="sha512-Fq/wHuMI7AraoOK+juE5oYILKvSPe6GC5ZWZnvpOO/ZPdtyA29n+a5kVLP4XaLyDy9D1IBPYzdFycO33Ijd0Pg=="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous"></script>
  <script>
    $(function () {

      var $sections = $('.form-section');

      function navigateTo(index) {
        $sections.removeClass('current').eq(index).addClass('current');
        $('.form-navigation .previous').toggle(index > 0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation [type=submit]').toggle(atTheEnd);
      }

      function curIndex() {
        return $sections.index($sections.filter('.current'));
      }
      $('.form-navigation .previous').click(function () {
        navigateTo(curIndex() - 1);
      });

      $('.form-navigation .next').click(function () {
        $('.content-form').parsley().whenValidate({
          group: 'block-' + curIndex()
        }).done(function () {
          navigateTo(curIndex() + 1);
        });
      });

      $sections.each(function (index, section) {
        $(section).find(':input').attr('data-parsley-group', 'block-' + index);
      });

      navigateTo(0);

    });
  </script>


  @if(Session::has('sukses'))
  <script>
    toastr.success("{!! Session::get('sukses') !!}")
  </script>
  @endif
</body>




</html>