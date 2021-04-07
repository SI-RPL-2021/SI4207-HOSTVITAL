@extends('../template/landingtemplate')

@section('title', 'Hosvital: Cari Dokter')

@section('content')
<img src="{{ 'resource/imgres/back-caridokter.png' }}" alt="cari dokter" width="100%">

<div class="container" style="margin-top: 3rem">
    <div class="row">
        {{-- left content --}}
        <div class="col-7">
            <h3 style="margin-bottom: 1rem">Cari Dokter</h3>
            <form method="get">
                <div class="row" style="width: 100%">
                    <div class="col-md-11" style="padding: 0 0 0 1rem">
                        <input name="nama_dokter" class="search-100" type="text" id="search-100" placeholder="Nama Dokter">
                    </div>
                    <div class="col-md-1" style="padding: 0">
                        <button class="search-100-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
            </form><br>

            <h3>@php echo ($keyword) ? 'Hasil Pencarian "'.$keyword.'"':'Silahkan cari nama dokter'; @endphp</h3><br>

            @if ($dataSearch != null)
            @foreach ($dataSearch as $d)

            <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px">
                <div class="row g-0">
                    <div class="col-md-2" style="overflow: hidden;">
                        <img src="{{ 'resource/imgres/'.$d->foto }}" style="height: 150px;">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h6 class="card-title judul">{{$d->nama}}</h6>
                            <h6 class="card-title judul" style="color: #828282;">Rumah Sakit {{$d->rumahsakit}}</h6>
                            <h6 class="card-title judul">Spesialis {{$d->spesialis}}</h6>
                            <div class="d-grid gap-2">
                                <a class="btn" href="{{ '/profiledokter/'.$d->id }}" style="background-color: #CC4848; color:white; border-radius:10px">Lihat Profile Dokter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @elseif ($dataSearch == null && $keyword != null)
            <p>Tidak ada hasil</p>
            @endif

            {{-- contoh blok hasil pencarian --}}
            {{-- <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px">
                <div class="row g-0">
                    <div class="col-md-2" style="overflow: hidden;">
                        <img src="{{ 'resource/imgres/doktercici.png' }}" style="height: 150px;">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h6 class="card-title judul">dr. Cici Cantik, SpBP</h6>
                            <h6 class="card-title judul" style="color: #828282;">Rumah Sakit Premier Bintaro</h6>
                            <h6 class="card-title judul">Spesialis Bedah Plastik</h6>
                            <div class="d-grid gap-2">
                                <a class="btn" href="{{ '/profiledokter' }}" style="background-color: #CC4848; color:white; border-radius:10px">Lihat Profile Dokter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            
        </div>

        {{-- right content --}}
        <div class="col-5">
            <div class="row">
                <div class="col">
                    <h3>Rekomendasi</h3>
                    <br>
                    <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px">
                        <div class="row g-0">
                            <div class="col-md-3" style="overflow: hidden;">
                                <img src="{{ 'resource/imgres/doktercici.png' }}" style="height: 120px;">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-title judul">dr. Cici Cantik, SpBP</h6>
                                    <h6 class="card-title judul" style="color: #828282;">Rumah Sakit Premier Bintaro</h6>
                                    <h6 class="card-title judul">Spesialis Bedah Plastik</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px">
                        <div class="row g-0">
                            <div class="col-md-3" style="overflow: hidden;">
                                <img src="{{ 'resource/imgres/dokterstephen.png' }}" style="height: 120px;">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-title judul">dr. Stephen Marbun, SpBS</h6>
                                    <h6 class="card-title judul" style="color: #828282;">Rumah Sakit Siloam Simatupang</h6>
                                    <h6 class="card-title judul">Spesialis Bedah Saraf</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection