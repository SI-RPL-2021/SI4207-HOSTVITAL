@extends('template/landingtemplate')

@section('title', 'Hosvital: Home')

@section('content')
  {{-- header pict --}}
  <img src="{{ 'resource/imgres/back-landing.png' }}" alt="welcome hostvital" width="100%">

  {{-- content --}}
  <div class="container" style="margin-top: 3rem">
    <div class="row">
      {{-- left content --}}
      <div class="col-7">
        <h3 class="siagacovid">#SIAGA COVID-19</h3>
        <a class="button-c" href="#"><img class="button-covid" src="{{ 'resource/imgres/button-covid.png' }}" alt="check covid-19"></a>

        <h3 style="margin-top: 2rem">Layanan</h3>
        <div class="row">
          <div class="col-md layanan">
            <a class="btn-layanan" href="{{ '/caridokter' }}" style="text-decoration: none;">
              <div class="shadow mb-5 bg-body" style="border-radius: 10px">
                <img class="img" src="{{ 'resource/imgres/a-dokter.png' }}" alt="">
                <p class="desc">Cari Dokter</p>
              </div>
            </a>
          </div>
          <div class="col-md layanan">
            <a class="btn-layanan" href="{{ '/cariobat' }}" style="text-decoration: none;">
              <div class="shadow mb-5 bg-body" style="border-radius: 10px">
                <img class="img" src="{{ 'resource/imgres/a-obat.png' }}" alt="">
                <p class="desc">Cari Obat</p>
              </div>
            </a>
          </div>
          <div class="col-md layanan">
            <a class="btn-layanan" href="{{ '/carirs' }}" style="text-decoration: none;">
              <div class="shadow mb-5 bg-body" style="border-radius: 10px">
                <img class="img" src="{{ 'resource/imgres/a-rs.png' }}" alt="">
                <p class="desc">Cari Rumah Sakit</p>
              </div>
            </a>
          </div>
          <div class="col-md layanan">
              <a class="btn-layanan" href="{{ '/caridiagnosis' }}" style="text-decoration: none;">
                <div class="shadow mb-5 bg-body" style="border-radius: 10px">
                  <img class="img" src="{{ 'resource/imgres/a-obat.png' }}" alt="">
                  <p class="desc">Cari Diagnosis</p>
                </div>
              </a>
        </div>
        <div class="col-md layanan">
            <a class="btn-layanan" href="#" style="text-decoration: none;">
              <div class="shadow mb-5 bg-body" style="border-radius: 10px">
                <img class="img" src="{{ 'resource/imgres/a-bpjs.png' }}" alt="">
                <p class="desc">Panduan BPJS</p>
              </div>
            </a>
          </div>
        </div>
      </div>

      {{-- right content --}}
      <div class="col-5">
        <div class="row">
          <div class="col">
            <h3>Artikel</h3>
          </div>
          <div class="col" style="text-align: right">
            <a class="b-link" href="#">Lihat lebih banyak</a>
          </div>
        </div>
        <div class="shadow card berita" style="margin: 1rem 0 3rem; border: 0; border-radius: 10px">
          <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h6 class="card-title judul">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nobis debitis, laborum atque ad dolore, totam omnis dignissimos hic nemo modi laudantium sed similique veritatis nihil cum expedita vero beatae!</h6>
                  <a class="b-link" href="#" style="font-size: 14px">baca selengkapnya</a>
                </div>
              </div>
              <div class="col-md-4" style="overflow: hidden;">
                <img src="{{ 'resource/imgres/dummy-berita.jpeg' }}" style="height: 125px; border-radius: 0 10px 10px 0" align="right">
              </div>
            </div>
          </div>
          <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h6 class="card-title judul">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nobis debitis, laborum atque ad dolore, totam omnis dignissimos hic nemo modi laudantium sed similique veritatis nihil cum expedita vero beatae!</h6>
                  <a class="b-link" href="#" style="font-size: 14px">baca selengkapnya</a>
                </div>
              </div>
              <div class="col-md-4" style="overflow: hidden;">
                <img src="{{ 'resource/imgres/dummy-berita.jpeg' }}" style="height: 125px; border-radius: 0 10px 10px 0" align="right">
              </div>
            </div>
          </div>
          <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h6 class="card-title judul">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nobis debitis, laborum atque ad dolore, totam omnis dignissimos hic nemo modi laudantium sed similique veritatis nihil cum expedita vero beatae!</h6>
                  <a class="b-link" href="#" style="font-size: 14px">baca selengkapnya</a>
                </div>
              </div>
              <div class="col-md-4" style="overflow: hidden;">
                <img src="{{ 'resource/imgres/dummy-berita.jpeg' }}" style="height: 125px; border-radius: 0 10px 10px 0" align="right">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
