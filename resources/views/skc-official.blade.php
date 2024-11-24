<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('/pic/favicon.png') }}">
    <link rel="stylesheet" href="css/skcofficialstyle.css">
    <title>SMK Kesehatan Cianjur</title>
</head>
<body>
    <header>
        <nav>
            <div class="navigasi">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Galeri</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Event</a></li>
                    <li><a href="/informasi">Formulir</a></li>
                </ul>
            </div>
        </nav>
    </header>

    {{-- isi dari website --}}
    <div class="main">

        {{-- logo sekolah SMK Kesehatan Cianjur --}}
        <div class="logoskc">
            <img src="pic/LOGO_SKC.png" alt="Logo Seklolah">
        </div>

        {{-- nama sekolah --}}
        <div class="jdl">
            <p>SMK Kesehatan Cianjur</p>
        </div>

        {{-- logo jurusan --}}
        <div class="logo-jurusan">
            <img src="pic/LOGO_ASKEP.png" alt="Logo Jurusan">
            <img src="pic/LOGO_FARMASI.png" alt="Logo Jurusan">
            <img src="pic/LOGO_TLM.png" alt="Logo Jurusan">
        </div>

        {{-- pencarian --}}
        {{-- <div>
            <input type="search" name="pencarian" id="pencarian" class="pencarian">
        </div> --}}
    </div>
    
</body>
</html>