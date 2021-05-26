@extends('template/landingtemplate')

@section('title', 'Hosvital: Home')

@section('css')
  .background {
    background-image: url('resource/imgres/back-about.png');
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: bottom;
    min-height: 80vh;
  }
@endsection

@section('content')
<div class="background">
  <div class="container" style="padding-bottom: 1rem">
    <div class="shadow card" style="margin: 3rem 1rem; border-radius: 10px; overflow: hidden;">
      <div class="row">
        <div class="col-5" style="overflow: hidden">
          <img src="/resource/imgres/kamar-2.jpg" alt="" style="height: 690px;">
        </div>
        <div class="col-7" style="padding: 3rem">
          @foreach ($data as $d)
          <h5>{{ $d->tipekamar }}</h5>
          <h5>IDR {{ $d->harga }}</h5>
          <p class="mb-2">{{ $d->namars }}</p>
          <table style="color: #828282">
            <tr>
              <td style="width: 30px; font-size: 20px; vertical-align: top"><i class="fa fa-map-marker" aria-hidden="true"></i></td>
              <td style="padding-top: 5px">Jl. Moh. Husni Thamrin No.1, Pd. Jaya, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15224</td>
            </tr>
          </table>
          <br>
          <h5>Tulis Feedback/Review</h5>
          <form action="/postulasan" method="POST" style="margin-top: 14px">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $d->id_riwayat }}" name="id_riwayat">
            <textarea name="feedback" id="" cols="30" rows="13" style="width: 100%; border: solid 3px #CC4848; border-radius: 10px; resize: none"></textarea>
            <button class="btn" style="background-color: #CC4848; color:white; border-radius:10px; width: 100%; margin-top: 15px"
                type="submit">Kirim</button>
          </form>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
