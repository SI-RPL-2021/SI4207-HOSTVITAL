@extends('../template/landingtemplate')

@section('title', 'Hosvital: Cari Diagnosis')

@section('content')
  <img src="{{ 'resource/imgres/back-caridignosis.png' }}" alt="cari diagnosis" width="100%">

  <div class="container" style="margin-top: 3rem">
    <div class="row">
      {{-- left content --}}
      <div class="col-7">
        <h3 style="margin-bottom: 1rem">Cari Diagnosis </h3>
        <form action="#">
          <div class="row" style="width: 100%">
            <div class="col-md-11" style="padding: 0 0 0 1rem">
              <input class="search-100" type="text" id="search-100" placeholder="Keluhan">
            </div>
            <div class="col-md-1" style="padding: 0">
              <button class="search-100-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
          </div>
        </form><br>

        <h3>Hasil Pencarian "Rematik" </h3><br>
        
      </div>

      {{-- right content --}}
      <div class="col-5">
        <div class="shadow card mb-3" style="max-width: 540px; border-radius: 10px">
          <div class="row g-0">
            <div class="col-md-7">
              <p style="padding: 3rem 1rem 3rem 2rem; margin: 0; ">Tanyakan '"Rematik" dirumah sakit terdekat sekarang!</p>
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
  <div class="shadow card mb-3" style="max-width: 81rem; border-radius: 10px">
        <div class="card-body">
            <h5 class="card-title">Rematik</h5>
            <p class="card-text">Rematik atau penyakit yang ditandai dengan nyeri sendi disebut juga rheumatoid arthritis. Penyakit ini merupakan penyakit autoimun ketika sistem imun pada tubuh seseorang menyerang sel-sel tubuhnya sendiri.</p>
            <p class="card-text">Dalam hal ini, area persendian adalah area yang diserang oleh sistem imun pengidap rheumatoid arthritis. Akibatnya, peradangan kronik dan rasa nyeri yang hebat pada sendi-sendi yang terserang terjadi.</p>
            <p class="card-text">saat ini penyebab utama seseorang bisa mengidap penyakit rematik belum ditemukan, tetapi faktor genetik dipercaya memiliki peran dalam timbulnya penyakit ini. Faktor risiko yang meningkatkan seseorang mengalami penyakit ini, antara lain:</p>
            <div id="button">
              <span style="float: right">
              <a href="{{ '/detaildiagnosis' }}" class="card-link text-secondary text-right mx-auto">Lihat lebih banyak</a>
              </span>
            </div>
        </div>
        </div>
  </div><br>
@endsection
