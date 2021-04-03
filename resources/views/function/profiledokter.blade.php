@extends('../template/landingtemplate')

@section('title', 'Hosvital: Detail Rumah Sakit')

@section('content')
<div>
    <div class="container">
      <div class="shadow card" style="margin: 3rem 1rem 3rem 1rem; padding: 3rem; border-radius: 10px">
        <img src="{{ 'resource/imgres/logo-big.png' }}" style="max-width: 453px">
        <br>
        <div class="row">
        <div class="col-6">
            <img src="{{ 'resource/imgres/profilecici.png' }}" style="height: 505px;">
          </div>
          <div class="col-6">
        <h3>Profile Dokter</h3>
        <h6 class="card-title judul">dr. Cici Cantik, SpBP</h6>
                        <h6 class="card-title judul" style="color: #828282;">Rumah Sakit Premier Bintaro</h6>
                        <h6 class="card-title judul">Spesialis Bedah Plastik</h6>

        <p style="margin-top: 2rem">
            dr. Cici adalah dokter spesialis bedah plastik rekonstruksi dan estetik 
            dan konsultan ilmu bedah plastik bedah mikro, bedah tangan dan rekonstruksi. 
            Setelah menamatkan pendidikan dokter umum dari Fakultas Kedokteran Universitas 
            Telkom tahun 2000, beliau melanjutkan pendidikan spesialisasi bedah plastik 
            di Fakultas Kedokteran Universitas Indonesia dan lulus tahun 2008. Beliau juga 
            mendapat kesempatan untuk melanjutkan pendidikan sebagai fellow di pusat bedah 
            tangan, bedah mikro, dan rekonstruksi di Amerika Serikat, yaitu Fellow of Reconstructive 
            Microsurgery di Department of Plastic Surgery, University of Texas, MD Anderson 
            Cancer Center (2002) dan Fellow of Reconstructive Microsurgery di The Buncke Clinic, 
            California Pacific Medical Center Davies Campus, Amerika Serikat (2011)</p>
        </div>
      </div>
    </div>
  </div>
@endsection