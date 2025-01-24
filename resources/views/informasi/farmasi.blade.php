@extends('informasi.app')

@section('main')
    {{-- Kompetensi Keahlian --}}
    <div class="kompetensi pt-3">
        <h3>Kompetensi Keahlian</h3>
        <p>{{ $kompetensi }}</p>
    </div>
    {{-- Kompetensi Keahlian end --}}

    {{-- Guru Ahli --}}
    <div class="guru pt-5">
        <h3 class="text-center">Guru Ahli</h3>
        <!-- Tambahkan class untuk Bootstrap grid -->
        <div class="profile-guru-f pt-3">
            <div class="card" style="width: 18rem;">
                <img src="/pic/Guru/farmasi/guru1.jpg" class="card-img-top" alt="Guru Farmasi">
                <div class="card-body text-center">
                    <p class="card-text" style="margin-bottom: 0px">Nama :</p>
                    <p class="card-text"><b>Anggi, S.Farm</b></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/pic/Guru/farmasi/guru2.jpg" class="card-img-top" alt="Guru Farmasi">
                <div class="card-body text-center">
                    <p class="card-text" style="margin-bottom: 0px">Nama :</p>
                    <p class="card-text"><b>apt. Dede Siska, S.Farm</b></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/pic/Guru/farmasi/guru3.jpg" class="card-img-top" alt="Guru Farmasi">
                <div class="card-body text-center">
                    <p class="card-text" style="margin-bottom: 0px">Nama :</p>
                    <p class="card-text"><b>Lena Diena Fhadlilasati, S.Farm</b></p>
                </div>
            </div>
        </div>
    </div>
    {{-- Guru Ahli end --}}

    {{-- Seragam Sekolah --}}
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
    {{-- Seragam Sekolah end --}}

    {{-- List Peluang Lulusan Jurusan --}}
    <div class="peluang-lulus pt-5">
        <h3>Peluang Lulusan</h3>
        <div class="list-peluang">

            {{-- Tampiilan Desktop --}}
            <div class="desktop-view">
                <ul>
                    <li>Apotek</li>
                    <li>Rumah Sakit</li>
                    <li>Puskesmas</li>
                </ul>
                <ul>
                    <li>Industri Kosmetik</li>
                    <li>Wirausaha</li>
                </ul>
            </div>
            {{-- Tampiilan Desktop end --}}

            {{-- Tampilan Mobile --}}
            <div class="mobile-view">
                <ul>
                    <li>Apotek</li>
                    <li>Rumah Sakit</li>
                    <li>Puskesmas</li>
                    <li>Industri Kosmetik</li>
                    <li>Wirausaha</li>
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
                        <img src="/pic/Kegiatan/farmasi/kegiatan1.JPG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/pic/Kegiatan/farmasi/kegiatan2.JPG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/pic/Kegiatan/farmasi/kegiatan3.JPG" class="d-block w-100" alt="...">
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
            <div class="card mb-5 mt-3 container-fluid" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/pic/Guru/alumni/alumni2.jpg" class="img-fluid rounded" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Rosi Restianti</h5>
                            <p class="card-text">bekerja di klinik azka zayyan … sebagai asisten apoteker… dipercaya juga
                                sebagai kasir dan pendaftarn … bekerja langsung setelah lulus sekolah.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-5 mt-3 container-fluid" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/pic/Guru/alumni/alumni1.jpg" class="img-fluid rounded" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Ira Sanjani</h5>
                            <p class="card-text">bekerja di klinik Nova … stelah 1 bulan lulus sekolah langsung di terima
                                di klinik nova … sebagai asisten apoteker… alhamdulilahh betah dan nyaman…</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://dummyimage.com/500X500/000/fff.png" class="img-fluid rounded"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">(Nama)</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A ipsa
                                laboriosam repudiandae, architecto error iusto libero numquam praesentium nostrum qui.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://dummyimage.com/500X500/000/fff.png" class="img-fluid rounded"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">(Nama)</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A ipsa
                                laboriosam repudiandae, architecto error iusto libero numquam praesentium nostrum qui.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    {{-- Testimoni Alumni end --}}
@endsection
