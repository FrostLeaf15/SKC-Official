@extends('informasi.app')

@section('main')
    <div class="kompetensi pt-3">
        <h3>Kompetensi Keahlian</h3>
        <p>{{ $kompetensi }}</p>
    </div>

    <div class="guru pt-5">
        <h3 class="text-center">Guru Ahli</h3>
        <!-- Tambahkan class untuk Bootstrap grid -->
        <div class="profile-guru-t pt-3">
            <div class="card" style="width: 18rem;">
                <img src="/pic/Guru/tlm/guru1.jpg" class="card-img-top" alt="Guru TLM">
                <div class="card-body text-center">
                    <p class="card-text" style="margin-bottom: 0px">Nama :</p>
                    <p class="card-text"><b>Regina Rahmawati, A.Md, A.K </b></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/pic/Guru/tlm/guru2.jpg" class="card-img-top" alt="Guru TLM">
                <div class="card-body text-center">
                    <p class="card-text" style="margin-bottom: 0px">Nama :</p>
                    <p class="card-text"><b>Dwiki Ifansyah, A.Md, A.K </b></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/pic/Guru/tlm/guru3.jpg" class="card-img-top" alt="Guru TLM">
                <div class="card-body text-center">
                    <p class="card-text" style="margin-bottom: 0px">Nama :</p>
                    <p class="card-text"><b>Iva Nurshipa Asiah Ramdhania, S.Tr.Kes </b></p>
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

    {{-- List Peluang Lulusan Jurusan --}}
    <div class="peluang-lulus pt-5">
        <h3>Peluang Lulusan</h3>
        <div class="list-peluang">

            {{-- Tampiilan Desktop --}}
            <div class="desktop-view">
                <ul>
                    <li>Laboratorium Rumah Sakit</li>
                    <li>Laboratorium Puskesmas</li>
                </ul>
                <ul>
                    <li>Laboratorium Klinik Swasta</li>
                    <li>Balai POM</li>
                </ul>
            </div>
            {{-- Tampiilan Desktop end --}}

            {{-- Tampilan Mobile --}}
            <div class="mobile-view">
                <ul>
                    <li>Laboratorium Rumah Sakit</li>
                    <li>Laboratorium Puskesmas</li>
                    <li>Laboratorium Klinik Swasta</li>
                    <li>Balai POM</li>
                </ul>
            </div>
            {{-- Tampilan Mobile end --}}

        </div>
    </div>
    {{-- List Peluang Lulusan Jurusan end --}}

    {{-- Photo Kegiatan --}}
    <div class="kegiatan-productive pt-5">
        <h3>Kegiatan</h3>
        <div class="gambar text-center">
            <div id="carouselExampleIndicators"
                class="carousel slide carousel-fade object-fit-sm-contain border rounded custom-carousel">
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
                        <img src="/pic/kegiatan/tlm/kegiatan.png" class="d-block w-100" alt="Kegiatan Teknologi Laboratorium Medis">
                    </div>
                    <div class="carousel-item">
                        <img src="/pic/kegiatan/tlm/kegiatan2.jpg" class="d-block w-100" alt="Kegiatan Teknologi Laboratorium Medis">
                    </div>
                    <div class="carousel-item">
                        <img src="/pic/kegiatan/tlm/kegiatan3.jpg" class="d-block w-100" alt="Kegiatan Teknologi Laboratorium Medis">
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
    <div class="testimoni mt-5">
        <h3>Testimoni Alumni</h3>
        <div class="list-testimoni mt-3">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://dummyimage.com/1000X700/000/fff.png" class="img-fluid rounded" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">(Nama)</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dicta
                                perspiciatis laborum iure eum amet ea atque, quae provident iusto.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://dummyimage.com/1000X700/000/fff.png" class="img-fluid rounded" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">(Nama)</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit amet,
                                beatae et expedita odit blanditiis quae cum rem nihil. Esse!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://dummyimage.com/1000X700/000/fff.png" class="img-fluid rounded"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">(Nama)</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://dummyimage.com/1000X700/000/fff.png" class="img-fluid rounded"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">(Nama)</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Testimoni Alumni end --}}
@endsection
