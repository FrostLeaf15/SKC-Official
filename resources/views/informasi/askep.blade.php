@extends('informasi.app')

@section('main')
    <div class="kompetensi pt-3 mx-2">
        <h3>Kompetensi Keahlian</h3>
        <p>{{ $kompetensi }}</p>
    </div>

    <div class="guru pt-5">
        <h3 class="text-center">Guru Ahli</h3>
        <!-- Tambahkan class untuk Bootstrap grid -->
        <div class="profile-guru pt-3">
            <div class="card" style="width: 18rem;">
                <img src="/pic/Guru/askep/guru_1.jpg" class="card-img-top" alt="Guru Askep">
                <div class="card-body text-center">
                    <p class="card-text" style="margin-bottom: 0px">Nama :</p>
                    <p class="card-text"><b>Nurun Nisa Shofi, S.Kep., Ners</b></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/pic/Guru/askep/guru_2.jpg" class="card-img-top" alt="Guru Askep">
                <div class="card-body text-center">
                    <p class="card-text" style="margin-bottom: 0px">Nama :</p>
                    <p class="card-text"><b>Yanti Indriyanti, S.Kep</b></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/pic/Guru/askep/guru_3.jpg" class="card-img-top" alt="Guru Askep">
                <div class="card-body text-center">
                    <p class="card-text" style="margin-bottom: 0px">Nama :</p>
                    <p class="card-text"><b>Fitri Rhamanda, S.Keb</b></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/pic/Guru/askep/guru_4.jpg" class="card-img-top" alt="Guru Askep">
                <div class="card-body text-center">
                    <p class="card-text" style="margin-bottom: 0px">Nama :</p>
                    <p class="card-text"><b>Afiifah Inaayah, S.Kep</b></p>
                </div>
            </div>
        </div>
    </div>

    <div class="seragam pt-5">
        <h3>Seragam</h3>
        {{-- Card Group --}}
        <div class="seragam-sekolah pt-2">
            <div class="card" style="width: 18rem;">
                <img src="/pic/seragam/seragam_1.jpg" class="card-img-top" alt="Guru Askep">
                <div class="card-body text-center">
                    <p class="card-text"><b>Seragam A</b></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/pic/seragam/seragam_2.jpg" class="card-img-top" alt="Guru Askep">
                <div class="card-body text-center">
                    <p class="card-text"><b>Seragam B</b></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/pic/seragam/seragam_3.jpg" class="card-img-top" alt="Guru Askep">
                <div class="card-body text-center">
                    <p class="card-text"><b>Seragam C</b></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/pic/seragam/seragam_4.jpg" class="card-img-top" alt="Guru Askep">
                <div class="card-body text-center">
                    <p class="card-text"><b>Seragam D</b></p>
                </div>
            </div>
        </div>
        {{-- Card Group end --}}
    </div>

    {{-- List Peluang Lulusan --}}
    <div class="peluang-lulus pt-5">
        <h3>Peluang Lulusan</h3>
        <div class="list-peluang">

            {{-- Tampiilan Desktop --}}
            <div class="desktop-view">
                <ul>
                    <li>Rumah Sakit</li>
                    <li>Praktek Dokter</li>
                    <li>Klinik Homecare</li>
                </ul>
                <ul>
                    <li>Klinik Kecantikan</li>
                    <li>Klinik Swasta</li>
                    <li>Care Worker di Jepang</li>
                </ul>
            </div>
            {{-- Tampiilan Desktop end --}}

            {{-- Tampilan Mobile --}}
            <div class="mobile-view">
                <ul>
                    <li>Rumah Sakit</li>
                    <li>Praktek Dokter</li>
                    <li>Klinik Homecare</li>
                    <li>Klinik Kecantikan</li>
                    <li>Klinik Swasta</li>
                    <li>Care Worker di Jepang</li>
                </ul>
            </div>
            {{-- Tampilan Mobile end --}}

        </div>
    </div>
    {{-- List Peluang Lulusan end --}}

    {{-- Photo Kegiatan --}}
    <div class="kegiatan-productive pt-5">
        <h3>Kegiatan</h3>
        <div class="gambar text-center">
            <div id="carouselExampleIndicators"
                class="carousel slide carousel object-fit-sm-contain border rounded custom-carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://dummyimage.com/700X400/000/fff.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dummyimage.com/700X400/000/fff.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dummyimage.com/700X400/000/fff.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    {{-- Photo Kegiatan end --}}

    {{-- Testimoni Alumni --}}
    <div class="testimoni">
        <h3 class="mt-5">Testimoni Alumni</h3>
        <div class="list-testimoni">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://dummyimage.com/500X500/000/fff.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                                content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://dummyimage.com/500X500/000/fff.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                                content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://dummyimage.com/500X500/000/fff.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                                content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://dummyimage.com/500X500/000/fff.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                                content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Testimoni Alumni end --}}
@endsection
