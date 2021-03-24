@extends('../template/landingtemplate')

@section('title', 'Hosvital: Cari Dokter')

@section('content')
  <img src="{{ 'resource/imgres/back-caridokter.jpg' }}" alt="cari dokter" width="100%">

  <div class="container" style="margin-top: 3rem">
    <div class="row">
      {{-- left content --}}
      <div class="col-7">
        <h3 style="margin-bottom: 1rem">Cari Dokter</h3>
        <form action="#">
          <div class="row" style="width: 100%">
            <div class="col-md-11" style="padding: 0 0 0 1rem">
              <input class="search-100" type="text" id="search-100" placeholder="Nama Dokter">
            </div>
            <div class="col-md-1" style="padding: 0">
              <button class="search-100-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
          </div>
        </form><br>

        <h3>Hasil Pencarian "Cantik"</h3>

        <div class="row row-cols-1 row-cols-md-3 g-6">
 
  <div class="col">
    <div class="card">

      <div class="card-body">
        <h5 class="card-title">dr. Cici Cantik, SpBP</h5>
        <p class="card-text">Spesialis Bedah Plastik.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">

      <div class="card-body">
        <h5 class="card-title">dr. Stephen Marbun, SpBS</h5>
        <p class="card-text">Spesialis Bedah Plastik.</p>
      </div>
    </div>
  </div>

</div>
        
        <br><br>

      {{-- right content --}}
      <div class="col-5">
        <div class="shadow card mb-3" style="max-width: 540px; border-radius: 10px">
          <div class="row g-0">
            <div class="col-md-7">
              <p style="padding: 3rem 1rem 3rem 2rem; margin: 0; ">Cari dokter yang tepat untuk anda sekarang!</p>
            </div>
            <a class="col-md-5 pop" style="background-color: #cc4848; border-radius: 0 10px 10px 0" href="#">
              <p style="padding: 3.5rem 1rem 3rem 2rem; margin: 0; font-weight: 700; color: white">Cek Dokter</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
