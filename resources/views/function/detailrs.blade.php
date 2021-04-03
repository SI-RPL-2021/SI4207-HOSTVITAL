@extends('../template/landingtemplate')

@section('title', 'Hosvital: Detail Rumah Sakit')

@section('content')
<img src="{{ 'resource/imgres/back-detailrs.png' }}" alt="detail rs" width="100%">
<div class="container" style="margin-top: 3rem">
    <div class="row">
        <div class="col-8">
            <h3 class="artikel">Rumah Sakit Premier Bintaro</h3>
            <h6 class="card-title judul" style="color: #828282;">Jl. Moh. Husni Thamrin No.1, Pd. Jaya, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15224</h6>
            <br>
            <p style="text-align:justify;">Sebagai bagian dari Ramsay Sime Darby Health Care, RS Premier Bintaro senantiasa berupaya meningkatkan kualitas pelayanan disemua bidang secara berkesinambungan.</p>
            <p style="text-align:justify;">Merupakan suatu tanggung jawab dan komitmen bagi kami untuk mengedepankan layanan kesehatan bermutu dan memperjelas arah tujuan pelayanan bahwa RS Premier Bintaro berupaya memberikan pelayanan kesehatan yang terbaik dibandingkan dengan pemberi jasa layanan kesehatan yang ada di Indonesia.</p>
            <p style="text-align:justify;">RS Premier Bintaro telah meraih Akreditasi Internasional dari JCI (Joint Commision International) yang merupakan badan Akreditasi Internasional bagian dari Joint Commission Accreditation of Health Care Organizations (JCAHO-USA). RS Premier Bintaro merupakan rumah sakit pertama di Indonesia yang terakreditasi menggunakan standar terbaru JCI (edisi ke-empat).</p>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <div class="maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.905164409354!2d106.72153501476944!3d-6.276198495457379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa9d8b042767%3A0x2a7956b6a6d3c3c3!2sPremier%20Bintaro%20Hospital!5e0!3m2!1sen!2sid!4v1616555891121!5m2!1sen!2sid" width="300" height="220" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <img src="{{ 'resource/imgres/tlp.png' }}" width="20" height="20" alt="" loading="">+62 817 777 742
                    <br>
                    <img src="{{ 'resource/imgres/web.png' }}" width="30" height="20" alt="" loading="">www.ramsaysimedarby.co.id
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <br>
            <h3 class="artikel">Lihat Kamar Rawat Inap</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px">
                        <div class="row g-0">
                            <div class="col-md-3" style="overflow: hidden;">
                                <img src="{{ 'resource/imgres/premier1.png' }}" style="height: 160px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title judul">Kamar Premier</h6>
                                        <h6 class="card-title judul" style="color: #263238;">Tersedia 2
                                    </h5>
                                    <h6 class="card-title judul" style="color: #27AE60;">IDR 3.000.000</h6>
                                    <div class="d-grid gap-2">
                                        <a class="btn" href="{{ '/cekdetailkamar' }}" style="background-color: #CC4848; color:white; border-radius:10px">Cek Kamar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px;">
                        <div class="row g-0">
                            <div class="col-md-3" style="overflow: hidden;">
                                <img src="{{ 'resource/imgres/premier2.png' }}" style="height: 160px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title judul">Suite A</h6>
                                        <h6 class="card-title judul" style="color: #263238;">Tersedia 15
                                    </h5>
                                    <h6 class="card-title judul" style="color: #27AE60;">IDR 2.000.000</h6>
                                    <div class="d-grid gap-2">
                                        <a class="btn" href="#" style="background-color: #CC4848; color:white; border-radius:10px">Cek Kamar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="shadow card mb-3 pop" style="border: 0; border-radius: 10px;">
                        <div class="row g-0">
                            <div class="col-md-3" style="overflow: hidden;">
                                <img src="{{ 'resource/imgres/premier3.png' }}" style="height: 160px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title judul">Suite B</h6>
                                        <h6 class="card-title judul" style="color: #263238;">Tersedia 10
                                    </h5>
                                    <h6 class="card-title judul" style="color: #27AE60;">IDR 900.000</h6>
                                    <div class="d-grid gap-2">
                                        <a class="btn" href="#" style="background-color: #CC4848; color:white; border-radius:10px">Cek Kamar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-8">
        <br>
        <h3 class="artikel">Feedback and Review</h3>
        <img src="{{ 'resource/imgres/profile.png' }}" width="40" height="40" alt="" loading=""> <b>Timothy Felixivano</b> Kamar Premier
        <br>
        <p>Rumah sakitnya bagus, dokternya juga friendly... kamarnya juga nyaman</p>
    </div>
    <br>
</div>
@endsection