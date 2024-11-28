@extends('layout.form') 
@section('main')

<div>
    <!-- Bagian untuk menampilkan logo utama -->
    <div class="positionlogo">
        <img class="logo1" src="/pic/LOGO_SKC.png" alt="Logo SKC">
    </div>
    <br>
    <div class="positionlogo">
        <!-- Menampilkan logo tambahan (ASKPE, FARMASI, TLM) -->
        <img class="logo2" src="/pic/LOGO_ASKEP.png" alt="Logo Asisten Keperawatan">
        <img class="logo2" src="/pic/LOGO_FARMASI.png" alt="Logo Farmasi">
        <img class="logo2" src="/pic/LOGO_TLM.png" alt="Logo Teknologi Laboratorium Medik">
    </div>
    <br>
</div>

<!-- Container untuk formulir dan (opsional) persyaratan -->
<div class="table-container">

    <!-- Bagian formulir -->
    <div class="bagian-formulir">
        <h1 class="jdl">FORMULIR</h1>
        <div class="formulir">
            <!-- Formulir pendaftaran -->
            <form class="form" name="formMurid" method="POST" action="{{ route('student.store') }}">
                @csrf <!-- Token CSRF untuk keamanan -->
                
                <!-- Input untuk nama lengkap -->
                <div class="boxTextForm">
                    <label for="nama">Nama:</label><br>
                    <input type="text" name="nama" id="nama" class="inputtext" required>
                </div>

                <!-- Pilihan jurusan menggunakan radio button -->
                <div class="boxTextForm">
                    <label for="jurusan">Jurusan ke-1 :</label>
                    <div class="radio">
                        <label><input type="radio" name="jurusan" value="Asisten Keperawatan" required> Asisten Keperawatan </label><br>
                        <label><input type="radio" name="jurusan" value="Farmasi Klinis dan Komunitas"> Farmasi Klinis dan Komunitas </label><br>
                        <label><input type="radio" name="jurusan" value="Teknologi Laboratorium Medik"> Teknologi Laboratorium Medik </label>
                    </div>
                </div>

                <div class="boxTextForm">
                    <label for="jurusan">Jurusan ke-2 :</label>
                    <div class="radio">
                        <label><input type="radio" name="jurusan_2" value="Asisten Keperawatan" required> Asisten Keperawatan </label><br>
                        <label><input type="radio" name="jurusan_2" value="Farmasi Klinis dan Komunitas"> Farmasi Klinis dan Komunitas </label><br>
                        <label><input type="radio" name="jurusan_2" value="Teknologi Laboratorium Medik"> Teknologi Laboratorium Medik </label>
                    </div>
                </div>

                <!-- Input untuk tempat lahir -->
                <div class="boxTextForm">
                    <label for="tmptLahir">Tempat Lahir:</label><br>
                    <input type="text" name="tempat_lahir" id="tmptLahir" class="inputtext">
                </div>

                <!-- Input untuk tanggal lahir -->
                <div class="boxTextForm">
                    <label for="tglLahir">Tanggal Lahir:</label><br>
                    <input type="date" name="tanggal_lahir" id="tglLahir" class="inputtext">
                </div>

                <!-- Input untuk alamat lengkap -->
                <div class="boxTextForm">
                    <label for="almt">Alamat Lengkap:</label><br>
                    <textarea name="alamat" id="almt" cols="30" rows="5" class="inputtext"></textarea>
                </div>

                <!-- Input untuk NISN -->
                <div class="boxTextForm">
                    <label for="nisnSiswa">Nomor Induk Siswa Nasional (NISN):</label><br>
                    <input type="number" name="nisn" id="nisnSiswa" class="inputtext">
                </div>

                <!-- Pilihan jenis kelamin -->
                <div class="boxTextForm">
                    <label for="kelamin">Jenis Kelamin:</label><br>
                    <div class="radio">
                        <input type="radio" id="cowo" name="kelamin" value="Laki-laki">
                        <label for="cowo">Laki-laki</label><br>
                        <input type="radio" id="cewe" name="kelamin" value="Perempuan">
                        <label for="cewe">Perempuan</label><br>
                    </div>
                </div>

                <!-- Input untuk sekolah asal -->
                <div class="boxTextForm">
                    <label for="SekolahAsal">Nama Sekolah Asal:</label><br>
                    <input type="text" name="sekolahAsal" id="SekolahAsal" class="inputtext">
                </div>

                <!-- Input untuk data orang tua -->
                <div class="boxTextForm">
                    <label for="namaAyah">Nama Lengkap Ayah:</label><br>
                    <input type="text" name="namaAyah" id="namaAyah" class="inputtext">
                </div>
                <div class="boxTextForm">
                    <label for="pkrjnAyah">Pekerjaan Ayah:</label><br>
                    <input type="text" name="pkrjnAyah" id="pkrjnAyah" class="inputtext">
                </div>
                <div class="boxTextForm">
                    <label for="namaIbu">Nama Lengkap Ibu:</label><br>
                    <input type="text" name="namaIbu" id="namaIbu" class="inputtext">
                </div>
                <div class="boxTextForm">
                    <label for="pkrjnIbu">Pekerjaan Ibu:</label><br>
                    <input type="text" name="pkrjnIbu" id="pkrjnIbu" class="inputtext">
                </div>

                <!-- Input untuk nomor kontak -->
                <div class="boxTextForm">
                    <label for="nmrkonfirmasi">Nomor Kontak yang Bisa Dihubungi:</label><br>
                    <input type="text" maxlength="21" oninput="formatInput(this)" name="nmrkonfirmasi" id="nmrkonfirmasi" class="inputtext">
                </div>

                <div class="boxTextForm">
                    <label for="rekomendasi">Rekomendasi Daftar ke SMK Kesehatan Cianjur :</label>
                    <input type="text" name="rekomendasi" id="rekomendasi" class="inputtext">
                </div>

                <!-- Tombol submit -->
                <div>
                    <button type="submit" class="btnSimpan">Kirim Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
