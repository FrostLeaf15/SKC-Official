<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('/pic/favicon.png') }}">
    <link rel="stylesheet" href="/css/information.css">
    <title>PPDB - SMK Kesehatan Cianjur</title>
</head>
<body>
    <header>
        {{-- <a href="/" class="back-button">
            &#x2190; Home <!-- Ikon panah ke kiri -->
        </a> --}}
        SMK Kesehatan Cianjur
    </header>

    <main>
        <div class="logo-ppdb">
            <img src="pic/Logo_PPDB.png" alt="Logo PPDB">
            <p>Penerimaan Peserta Didik Baru</p>
        </div>
        <div class="table-container">
            <div class="bagian-persyaratan">
                <h1 class="jdl">Persyaratan</h1>
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
                        <li><p>Membayar Biaya Psikotes dan Mengikuti Psikotes</p></li>
                    </ol>
                </div>
            </div>
            <div class="jurusan">
                <h1 class="jdl">Informasi Jurusan</h1>
                <div class="list-jurusan">
                    <a href="/ppdb/asper">
                        <img src="pic/LOGO_ASKEP.png" alt="Logo Asisten Keperawatan">
                    </a>
                    <a href="/ppdb/farmasi">
                        <img src="pic/LOGO_FARMASI.png" alt="Logo Farmasi">
                    </a>
                    <a href="/ppdb/tlm">
                        <img src="pic/LOGO_TLM.png" alt="Logo Teknologi Laboratorium">
                    </a>
                </div>
            </div>
        </div>
        <div class="daftar">
            <a href="/ppdb">Daftar Sekarang</a>
        </div>
    </main>

    @include('layout.footer2')

    <script src="/js/script.js"></script>
    
</body>
</html>