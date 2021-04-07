@extends('../template/landingtemplate')

@section('title', 'Hosvital: Detail Rumah Sakit')

@section('content')

<div>
    <div class="container">
      <div class="shadow card" style="margin: 3rem 1rem 3rem 1rem; padding: 3rem; border-radius: 10px">
        <div class="row">
        <div class="col-6">
            <img src="{{ url('resource/imgres/'.$data->foto) }}" style="height: 505px;">
          </div>
          <div class="col-6" style="margin-top: 50px;">
        <h3>Profile Dokter</h3>
        <h6 class="card-title judul">{{$data->nama}}</h6>
                        <h6 class="card-title judul" style="color: #828282;">Rumah Sakit {{$data->rumahsakit}}</h6>
                        <h6 class="card-title judul">Spesialis {{$data->spesialis}}</h6>
<br>
        <h3>Jadwal Dokter</h3>
        <p>
            {{$data->deskripsi}}</p>
        </div>
      </div>
    </div>
  </div>
@endsection