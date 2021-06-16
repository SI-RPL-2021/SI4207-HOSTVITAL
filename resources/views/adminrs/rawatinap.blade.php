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
      <div class="col-md-3" style="background-color: #CC4848; min-height: 70vh">
        <br>
        <ul class="nav flex-column">
          <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
            <a class="nav-link active" href="/rsrawatinap"
              style="font-weight: bold; font-size: 16px; text-decoration: none; color:#CC4848;">Data Rawat Inap</a>
          </li>

          <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
            <a class="nav-link" href="/rsreview"
              style="font-weight: bold; font-size: 16px; text-decoration: none; color:#FFFFFF;">Saran & Masukan</a>
          </li>

          <li class="nav-item mb-1" style="margin-right: 2rem; text-align:center;">
            <a class="nav-link" href="/rsmin"
              style="font-weight: bold; font-size: 16px; text-decoration: none; color:#FFFFFF;">Edit Data</a>
          </li>
        </ul>

      </div>
      <div class="col-md-9" style="background-color: #FFFF;  ">
        <h2 class="pt-3" style="font-size: 18px; font-weight: bold; text-decoration: underline;">Laporan Data
          Rawat Inap</h2>
          <a href="/printpdfrawayinap" class="btn btn-success">Print Pdf</a>

          <br><br>
          
        <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Nama Rumah Sakit</th>
              <th scope="col">Tipe Kamar</th>
              <th scope="col">Harga</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp
            @foreach ($data as $row)
              <tr>
                <td>{{ $no++ }}</td>
                <td>
                  @php
                    $user = App\Models\User::find($row->id_user);
                  @endphp
                  {{ $user->firstname }} {{ $user->lastname }}
                </td>
                <td>{{ $row->namars }}</td>
                <td>{{ $row->tipekamar }}</td>
                <td>IDR {{ number_format($row->harga, 0, ',', '.') }}</td>
                <td>
                  @php
                    $bukti = App\Models\reservasi::find($row->reservasi_id);
                  @endphp
                  {{ date('d-m-Y', strtotime($bukti->created_at)) }} </td>
                <td>{{ $row->status }}</td>
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
