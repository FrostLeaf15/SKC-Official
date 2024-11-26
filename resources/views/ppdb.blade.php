@extends('layout.form')
@section('main')

<div>
    <div class="positionlogo">
        <img class="logo1" src="/pic/LOGO_SKC.png" alt="LOGO_SKC.png">
    </div>
    <br>
    <div class="positionlogo">
        <img class="logo2" src="/pic/LOGO_ASKEP.png" alt="LOGO_ASKEP.png">
        <img class="logo2" src="/pic/LOGO_FARMASI.png" alt="LOGO_FARMASI.png">
        <img class="logo2" src="/pic/LOGO_TLM.png" alt="LOGO_TLM.png">
    </div>
    <br>
</div>

{{-- bagian persyaratan dan formulir untuk peserta didik baru --}}
<div class="table-container">
    {{-- ini bagian untuk persyaratan --}}
    {{-- <div class="bagian-persyaratan">
        <h1 class="jdl">PERSYARATAN</h1>
        <div class="isijdl">
            <ol>
                <li>
                    <p>Melampirkan :</p>
                    <ul>
                        <li>Fotocopi Ijazah SMP/MTs</li>
                        <li>Fotokopi Kartu Keluarga</li>
                        <li>Fotokopi KTP Orang Tua</li>
                        <li>Fotokopi Akta Kelahiran</li>
                        <li>Fotokpi Kartu Indonesia Pintar (KIP) <i>Jika Ada</i></li>
                        <li>Surat Keterangan Baik (SKB) Dari Sekolah Asal SMP/MTs</li>
                        <li>Foto 2x3 Background Biru</li>
                    </ul>
                </li>
                <li><p>Membayar Biaya Tes Kesehatan</p></li>
                <li><p>Mengikuti Tes Kesehatan dan Wawancara</p></li>
            </ol>
        </div>
    </div> --}}
    <div class="bagian-formulir">
        <h1 class="jdl">FORMULIR</h1>
        <div class="formulir">
            <form class="form" name="formMurid" method="POST" action="{{ route('student.store') }}">
                @csrf
                <div class="boxTextForm">
                    <label for="nameform">
                        Nama :
                    </label><br>
                    <input type="text" name="nama" id="nama" class="inputtext" required>
                </div>
                <div class="boxTextForm">
                    <label for="nameform">
                        Nomor Induk Kependudukan (NIK) :
                    </label><br>
                    <input type="number" name="nik" id="nikSiswa" class="inputtext" maxlength="16" oninput="if(this.value.length > 16) this.value = this.value.slice(0, 16);">
                </div>
                <div class="boxTextForm">
                    <label for="nameform">
                        Jurusan :
                    </label>
                    <div class="radio">
                        <label><input type="radio" name="jurusan" value="Asisten Keperawatan"> Asisten Keperawatan </label><br>
                        <label><input type="radio" name="jurusan" value="Farmasi"> Farmasi Klinis dan Komunitas </label><br>
                        <label><input type="radio" name="jurusan" value="Teknologi Laboratorium Medik"> Teknologi Laboratorium Medik </label>
                    </div>
                </div>
                <div class="boxTextForm">
                    <label for="nameform">
                        Tempat Lahir :
                    </label><br>
                    <input type="text" name="tempat_lahir" id="tmptLahir" class="inputtext">
                </div>
                <div class="boxTextForm">
                    <label for="nameform">
                        Tanggal Lahir :
                    </label><br>
                    <input type="date" name="tanggal_lahir" id="tglLahir" class="inputtext">
                </div>
                <div class="boxTextForm">
                    <label for="nameform">
                        Alamat Lengkap :
                    </label><br>
                    <textarea name="alamat" id="almt" cols="30" rows="5" class="inputtext"></textarea>
                </div>
                <div class="boxTextForm">
                    <label for="nameform">
                        Nomor Induk Siswa Nasional (NISN) :
                    </label><br>
                    <input type="number" name="nisn" id="nisnSiswa" class="inputtext">
                </div>
                <div class="boxTextForm">
                    <label for="nameform">
                        Jenis Kelamin :
                    </label><br>
                    <div class="radio">
                        <input type="radio" id="cowo" name="kelamin" value="Laki-laki">
                        <label for="laki-laki">Laki-laki</label><br>
                        <input type="radio" id="cewe" name="kelamin" value="Perempuan">
                        <label for="perempuan">Perempuan</label><br>
                    </div>
                </div>
                <div class="boxTextForm">
                    <label for="nameform">
                        Nama Sekolah Asal :
                    </label><br>
                    <input type="text" name="sekolahAsal" id="SekolahAsal" class="inputtext">
                </div>
                <div class="boxTextForm">
                    <label for="nameform">
                        Nama Lengkap Ayah :
                    </label><br>
                    <input type="text" name="namaAyah" id="namaAyah" class="inputtext">
                </div>
                <div class="boxTextForm">
                    <label for="nameform">
                        Pekerjaan Ayah :
                    </label><br>
                    <input type="text" name="pkrjnAyah" id="pkrjnAyah" class="inputtext">
                </div>
                <div class="boxTextForm">
                    <label for="nameform">
                        Nama Lengkap Ibu :
                    </label><br>
                    <input type="text" name="namaIbu" id="namaIbu" class="inputtext">
                </div>
                <div class="boxTextForm">
                    <label for="nameform">
                        Pekerjaan Ibu :
                    </label><br>
                    <input type="text" name="pkrjnIbu" id="pkrjnIbu" class="inputtext">
                </div>
                <div class="boxTextForm">
                    <label for="nameform">
                        Nomor kontak yang bisa dihubungi :
                    </label><br>
                    <input type="text" maxlength="21" oninput="formatInput(this)" name="    nmrkonfirmasi" id="nmrkonfirmasi" class="inputtext">
                </div>
                <div>
                    <button type="submit" class="btnSimpan">Kirim Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection