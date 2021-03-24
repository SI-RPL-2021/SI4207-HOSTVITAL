@extends('../../template/landingtemplate')

@section('title', 'Hostvital: Articles')

@section('content')
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div style="height: 60vh; overflow: hidden;">
          <img src="{{ 'resource/imgres/dummy-berita.jpeg' }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h5>Headline 1</h5>
        </div>
      </div>
      <div class="carousel-item">
        <div style="height: 60vh; overflow: hidden;">
          <img src="{{ 'resource/imgres/berita-2.jpeg' }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h5>Headline 2</h5>
        </div>
      </div>
      <div class="carousel-item">
        <div style="height: 60vh; overflow: hidden;">
          <img src="{{ 'resource/imgres/berita-3.jpg' }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h5>Headline 3</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container" style="margin-top: 2rem">
    <div class="row">
      {{-- left content --}}
      <div class="col-9">
        <div class="row">
          <div class="col">
            <h3 style="margin-top: 1rem">Semua Artikel</h3>
          </div>
        </div>
        <div style="margin: 1rem 0 3rem; border: 0; border-radius: 10px">
          <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title judul-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nobis
                    debitis, laborum atque ad dolore, totam omnis dignissimos hic nemo modi laudantium sed similique
                    veritatis nihil cum expedita vero beatae!</h5>
                  <a class="b-link" href="#" style="font-size: 14px">baca selengkapnya</a>
                </div>
              </div>
              <div class="col-md-4" style="overflow: hidden;">
                <img src="{{ 'resource/imgres/dummy-berita.jpeg' }}" style="height: 170px; border-radius: 0 10px 10px 0"
                  align="right">
              </div>
            </div>
          </div>
          <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title judul-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nobis
                    debitis, laborum atque ad dolore, totam omnis dignissimos hic nemo modi laudantium sed similique
                    veritatis nihil cum expedita vero beatae!</h5>
                  <a class="b-link" href="#" style="font-size: 14px">baca selengkapnya</a>
                </div>
              </div>
              <div class="col-md-4" style="overflow: hidden;">
                <img src="{{ 'resource/imgres/dummy-berita.jpeg' }}" style="height: 170px; border-radius: 0 10px 10px 0"
                  align="right">
              </div>
            </div>
          </div>
          <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title judul-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nobis
                    debitis, laborum atque ad dolore, totam omnis dignissimos hic nemo modi laudantium sed similique
                    veritatis nihil cum expedita vero beatae!otam omnis dignissimos hic nemo modi laudantium sed similique
                    veritatis nihil cum expedita vero beatae!</h5>
                  <a class="b-link" href="#" style="font-size: 14px">baca selengkapnya</a>
                </div>
              </div>
              <div class="col-md-4" style="overflow: hidden;">
                <img src="{{ 'resource/imgres/dummy-berita.jpeg' }}" style="height: 170px; border-radius: 0 10px 10px 0"
                  align="right">
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- right content --}}
      <div class="col-3">
        <div class="shadow card" style="border-radius: 10px; border: 0">
          <div class="card-body">
            <h3 style="margin-bottom: 2rem">Tags</h3>
            <div class="tags pop">
              + coronavirus
            </div>
            <div class="tags pop">
              + vaccine
            </div>
            <div class="tags pop">
              + who
            </div>
            <div class="tags pop">
              + flu
            </div>
            <div class="tags pop">
              + diet
            </div>
            <div class="tags pop">
              + olahraga
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
