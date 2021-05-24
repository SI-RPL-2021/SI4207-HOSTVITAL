@extends('../../template/landingtemplate')

@section('title', 'Hostvital: Articles')

@section('content')
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach ($article as $a)
        <div class="carousel-item active">
          <div style="height: 60vh; overflow: hidden;">
            <img src="{{ '/resource/imgres/articles/' . $a->image }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h1 style="color: white">{{ $a->title }}</h1>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <div class="container" style="margin-top: 2rem">
    @foreach ($article as $a)
      <h3 style="margin-top: 1rem">{{ $a->title }}</h3>
      <p style="color: #BDBDBD">Posted on {{ $a->post_date }} by {{ $a->author }}</p>
      <div style="margin: 1rem 0 3rem; border: 0; border-radius: 10px">
        @php
          $content = array_values(array_filter(explode(PHP_EOL, $a->content)));
        @endphp
        @foreach ($content as $cont)
          <p>{{ $cont }}</p>
        @endforeach
      </div>
    @endforeach

    <h3 class="mb-3">Artikel Lainnya</h3>
    <div style="display: flex; justify-content: space-between">
      @foreach ($prev as $pr)
      <a href="{{ "/articles/$pr->id_article" }}" class="card" style="width: 32rem; text-decoration: none; color: #263238">
        <div class="card-body ">
          <div class="row">
            <div class="col" style="display: flex; max-width: 50px; align-items: center">
              <i class="fa fa-angle-left" aria-hidden="true" style="font-size: 60px"></i>
            </div>
            <div class="col">
              <h5>Artikel Sebelumnya</h5>
                <h6 class="mb-0">{{ $pr->title }}</h6>
            </div>
            <div class="col" style="display: flex; align-items: center; max-width: 120px" ;>
              <img src="{{ '/resource/imgres/articles/' . $pr->image }}" class="d-block" style="width: 100%">
            </div>
          </div>
        </div>
      </a>
      @endforeach
      @foreach ($next as $nx)
      <a href="{{ "/articles/$nx->id_article" }}" class="card" style="width: 32rem; text-decoration: none; color: #263238">
        <div class="card-body ">
          <div class="row">
            <div class="col" style="display: flex; align-items: center; max-width: 120px" ;>
              <img src="{{ '/resource/imgres/articles/' . $nx->image }}" class="d-block" style="width: 100%">
            </div>
            <div class="col">
              <h5>Artikel Berikutnya</h5>
              <h6 class="mb-0">{{ $nx->title }}</h6>
            </div>
            <div class="col" style="display: flex; max-width: 50px; align-items: center">
              <i class="fa fa-angle-right" aria-hidden="true" style="font-size: 60px"></i>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>
    <br><br>
  </div>
@endsection
