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
        <div class="col"
          style="background-color: #CC4848; height: 870px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
          <center>
            <h1 style="margin-top: 60%; font-size: 60px; color: white">Reservasi</h1>
          </center>
        </div>
        <div class="col  shadow-custom" style="background-color: white;">
          <form style="padding-left: 100px; padding-right: 100px; margin-top: 10%;" action="{{ route('submitReservasi') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="formStep1">
              <center>
              <h5 style="color:#CC4848">STEP 1 - DAFTAR</h5>
              </center>
              <h6 style="font-weight: bold">Kamar {{ $data->namaKamar }}</h6>
              <h6 style="font-weight: bold">IDR {{ strrev(implode('.',str_split(strrev(strval($data->harga)),3))) }}</h6>
              <h6 style="font-weight: normal">{{ $data->namaRumahSakit }}</h6>
              <h6 style="font-weight: normal; float:right; color: #828282;"><img
                  src="{{ URL::to('/') }}/resource/imgres/Vector.png" alt="vector">
                  {{ $data->alamatRumahSakit }}
              </h6>

              <input type="hidden" name="idKamar" value="{{ $data->idKamarInap }}">
              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputnamawali" class="form-label">Nama Wali:</label>
                <input name="namaWali" style="border: 2px solid #CC4848; border-radius:10px" type="text" class="form-control"
                  id="exampleInputnamawali" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputnamapasien" class="form-label">Nama Pasien:</label>
                <input name="namaPasien" style="border: 2px solid #CC4848; border-radius:10px" type="text" class="form-control"
                  id="exampleInputnamapasien" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputktp" class="form-label">Jenis Kelamin:</label>
                <select name="jenisKelamin" name="metode_pembayaran" class="form-control"
                  style="border: 2px solid #CC4848; border-radius:10px">
                  <option selected>Pilih</option>
                  <option value="laki-laki">Laki-laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputktp" class="form-label">NIK KTP:</label>
                <input name="nikKtp" style="border: 2px solid #CC4848; border-radius:10px" type="text" class="form-control"
                  id="exampleInputktp" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputlahir" class="form-label">Tempat Tanggal Lahir:</label>
                <input name="ttl" style="border: 2px solid #CC4848; border-radius:10px" type="text" placeholder="ex: Tangerang, 02/04/1997" class="form-control"
                  id="exampleInputlahir" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label style="font-weight: bold;" for="exampleInputalamatpasien" class="form-label">Alamat Pasien</label>
                <input name="alamatPasien" style="border: 2px solid #CC4848; border-radius:10px" type="text" class="form-control"
                  id="exampleInputalamatpasien">
                <br>
              </div>
            </div>
            <div class="form-section" id="formStep2" style="display: none">
              <center>
                <h5 style="color:#CC4848">STEP 2 - UPLOAD BUKTI PEMBAYARAN</h5>
              </center>
              <br><br>
              <div class="mb-3">
                <div class="form-group">
                  <input type="file" name="buktiPembayaran" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <br><br>

              </div>
              <br>

            </div>
            <div class="d-grid gap-2">
              <button onclick="hideStep1()" class="btn" id="btnLanjut" style="background-color: #CC4848; color:white; border-radius:10px"
                type="button">Lanjut</button>
                <button onclick="hideStep2()" id="btnBackToStep1" class="btn" style="background-color: #CC4848; color:white; border-radius:10px; display: none"
                type="button">Kembali</button>
                <button type="submit" class="btn" id="btnSelesai" style="background-color: #CC4848; color:white; border-radius:10px; display: none"
                type="button">Selesai</button>
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


<script>
  function hideStep1() {
    var x = document.getElementById("formStep1");
    var y = document.getElementById("formStep2");
    var btnLanjut = document.getElementById("btnLanjut");
    var btnBackToStep1 = document.getElementById("btnBackToStep1");
    var btnSelesai = document.getElementById("btnSelesai");
    x.style.display = "none";
    y.style.display = "block";
    btnLanjut.style.display = "none";
    btnBackToStep1.style.display = "block";
    btnSelesai.style.display = "block";
  }

  function hideStep2() {
    var x = document.getElementById("formStep1");
    var y = document.getElementById("formStep2");
    var btnLanjut = document.getElementById("btnLanjut");
    var btnBackToStep1 = document.getElementById("btnBackToStep1");
    var btnSelesai = document.getElementById("btnSelesai");
    x.style.display = "block";
    y.style.display = "none";
    btnLanjut.style.display = "block";
    btnBackToStep1.style.display = "none";
    btnSelesai.style.display = "none";
  }
</script>