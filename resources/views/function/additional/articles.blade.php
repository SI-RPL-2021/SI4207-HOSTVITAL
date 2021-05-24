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
      @php
        $fs = true;
      @endphp
      @for ($i = count($articles) - 1; $i > count($articles) - 4; $i--)
      @if ($fs == true)
      <div class="carousel-item active">
        <div style="height: 60vh; overflow: hidden;">
          <img src="{{ 'resource/imgres/articles/'.$articles[$i]->image }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h1 style="color: white">{{ $articles[$i]->title }}</h1>
        </div>
      </div>
      @php
        $fs = false;
      @endphp
      @else
      <div class="carousel-item">
        <div style="height: 60vh; overflow: hidden;">
          <img src="{{ 'resource/imgres/articles/'.$articles[$i]->image }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h1 style="color: white">{{ $articles[$i]->title }}</h1>
        </div>
      </div>
      @endif
      @endfor
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
    <div class="row g-5">
      {{-- left content --}}
      <div class="col-9">
        <div class="row">
          <div class="col">
            <h3 style="margin-top: 1rem">Semua Artikel</h3>
          </div>
        </div>
        <div style="margin: 1rem 0 3rem; border: 0; border-radius: 10px">
          @foreach ($articles as $article)
          <a href="{{ "/articles/$article->id_article" }}" class="shadow card mb-3 pop-05" style="border: 0; border-radius: 10px; text-decoration: none">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <p class="article-date">Posted on {{$article->post_date}}</p>
                  <h5 class="card-title article-title">{{$article->title}}</h5>
                  <p class="article-date mb-0">by {{$article->author}}</p>
                </div>
              </div>
              <div class="col-md-4" style="overflow: hidden;">
                <img src="{{ 'resource/imgres/articles/'.$article->image }}" style="height: 170px; border-radius: 0 10px 10px 0"
                  align="right">
              </div>
            </div>
          </a>
          @endforeach
        </div>
      </div>

      {{-- right content --}}
      <div class="col-3">
        <h3 style="margin-bottom: 2rem">Tags</h3>
        <div class="tags pop">
          + helath
        </div>
        <div class="tags pop">
          + diet
        </div>
      </div>
    </div>
  </div>
@endsection
