@extends('../template/landingtemplate')

@section('title', 'Hosvital: Cari Obat')

@section('content')
  <img src="{{ 'resource/imgres/back-cariobat.png' }}" alt="cari obat" width="100%">

  <div class="container" style="margin-top: 3rem">
    <div class="row">
      {{-- left content --}}
      <div class="col-7">
        <h3 style="margin-bottom: 1rem">Cari Obat</h3>
        <form action="#">
          <div class="row" style="width: 100%">
            <div class="col-md-11" style="padding: 0 0 0 1rem">
              <input class="search-100" type="text" id="search-100" placeholder="Nama Obat">
            </div>
            <div class="col-md-1" style="padding: 0">
              <button class="search-100-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
          </div>
        </form><br>

        <div id="button">
          <span style="float: right">
            <a class="btn" href="{{ '/detailrs' }}" style="background-color: #CC4848; color:white; border-radius:10px">Filter</a>
          </span>
        </div>
        <h3>Hasil Pencarian "Panadol"</h3><br>
        
      </div>

      {{-- right content --}}
      <div class="col-5">
        <div class="shadow card mb-3" style="max-width: 540px; border-radius: 10px">
          <div class="row g-0">
                <div class="col-md-7">
                <p style="padding: 3rem 1rem 3rem 2rem; margin: 0; ">Tanyakan '"Panadol" dirumah sakit terdekat sekarang!</p>
                </div>
                <a class="col-md-5 pop" style="background-color: #cc4848; border-radius: 0 10px 10px 0" href="#">
                <p style="padding: 3.5rem 1rem 3rem 2rem; margin: 0; font-weight: 700; color: white">Cek Rumah Sakit</p>
                </a>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
            <div class="shadow card mb-3" style="max-width: 650px; border-radius: 10px">
            <div class="row g-0">
                <div class="col-md-4"><br>
                  <img src="{{ 'resource/imgres/obat-1.png' }}"style="height: 150px;">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                      <h5 class="card-title">Panadol Advance 100 mge</h5>
                      <p class="card-text">Tablet / Kapsul / Pil </p>
                      <span class="text-muted">Perlu Resep Dokter</span><span>/Tidak Perlu Resep Dokter</span>
                      <br><br><p class="card-text">IDR 30.000 </p>
                  </div>
                  <div class="d-grid gap-2">
                      <a class="btn" href="{{ '/detailrs' }}" style="background-color: #CC4848; color:white; border-radius:10px">Beli Obat</a>
                  </div>
                  <br>
                </div>
            </div>
          </div>
            </div>
            <div class="col">
            <div class="shadow card mb-3" style="max-width: 650px; border-radius: 10px">
            <div class="row g-0">
                <div class="col-md-4"><br>
                  <img src="{{ 'resource/imgres/obat-2.png' }}"style="height: 150px;">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                      <h5 class="card-title">Panadol Paracetamol 100 mg</h5>
                      <p class="card-text">Tablet / Kapsul / Pil </p>
                      <span class="text-muted">Perlu Resep Dokter</span><span>/Tidak Perlu Resep Dokter</span>
                      <br><br><p class="card-text">IDR 15.000 </p>
                  </div>
                  <div class="d-grid gap-2">
                      <a class="btn" href="{{ '/detailrs' }}" style="background-color: #CC4848; color:white; border-radius:10px">Beli Obat</a>
                  </div>
                  <br>
                </div>
            </div>
          </div>
            </div>
        </div>
  </div>
  
@endsection
