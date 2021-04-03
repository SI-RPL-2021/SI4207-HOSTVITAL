@extends('../template/landingtemplate')

@section('title', 'Hosvital: Cari Rumah Sakit')

@section('content')
<img src="{{ 'resource/imgres/back-carirs.png' }}" alt="cari obat" width="100%">

<div class="container" style="margin-top: 3rem">
    <div class="row">
        {{-- left content --}}
            <div class="col-7">
                <h3 style="margin-bottom: 1rem">Cari Rumah Sakit</h3>
                <form action="#">
                    <div class="row" style="width: 100%">
                        <div class="col-md-11" style="padding: 0 0 0 1rem">
                            <input class="search-100" type="text" id="search-100" placeholder="Nama Rumah Sakit">
                        </div>
                        <div class="col-md-1" style="padding: 0">
                            <button class="search-100-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form><br>
                <h3>Hasil Pencarian</h3>
                <br>
                <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px">
                    <div class="row g-0">
                        <div class="col-md-2" style="overflow: hidden;">
                            <img src="{{ 'resource/imgres/rspremier.png' }}" style="height: 150px;">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h6 class="card-title judul">Rumah Sakit Premier Bintaro</h6>
                                <h6 class="card-title judul" style="color: #828282;">Jl. Moh. Husni Thamrin No.1, Pd. Jaya, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15224</h6>
                                <div class="d-grid gap-2">
                                    <a class="btn" href="{{ '/detailrs' }}" style="background-color: #CC4848; color:white; border-radius:10px">Lihat Rumah Sakit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <img src="{{ 'resource/imgres/rspremier.png' }}" style="height: 150px;">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-title judul">Rumah Sakit Premier Bintaro</h6>
                                    <h6 class="card-title judul" style="color: #828282;">Jl. Moh. Husni Thamrin No.1, Pd. Jaya, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15224</h6>
                                    <div class="d-grid gap-2">
                                        <a class="btn" href="{{ '/detailrs' }}" style="background-color: #CC4848; color:white; border-radius:10px">Lihat Rumah Sakit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px">
                        <div class="row g-0">
                            <div class="col-md-3" style="overflow: hidden;">
                                <img src="{{ 'resource/imgres/rssiloam.png' }}" style="height: 165px;">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-title judul">Siloam Hospitals TB Simatupang</h6>
                                    <h6 class="card-title judul" style="color: #828282;">Jl. R.A.Kartini No.8, RT.10/RW.4, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Jakarta 12430</h6>
                                    <div class="d-grid gap-2">
                                        <a class="btn" href="#" style="background-color: #CC4848; color:white; border-radius:10px">Lihat Rumah Sakit</a>
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