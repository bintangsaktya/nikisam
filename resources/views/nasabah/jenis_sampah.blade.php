<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Sampah</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/nasabah/cssJenisSampah.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!--FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!--ICON-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--SCRIPT-->
    <script src="../assets/js/jsNasabah.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <!--NAVBAR-->
    <div class="nav container-fluid d-flex justify-content-center align-items-center shadow-sm">
        <div class="container row mt-4 mb-4">
            <div class="logo col-4">
                <img src="/img/nasabah/NikiSAM logo.svg">
            </div>
            <div class="menu col-6 mt-2">
                <ul class="row">
                    <li class="col-2 pe-0">
                        <a class="nav-menu" href="#">Home</a>
                    </li>
                    <li class="col-2">
                        <a class="nav-menu" href="#">Profile</a>
                    </li>
                    <li class="col-3">
                        <a class="nav-menu" href="/jenis">Jenis Sampah</a>
                    </li>
                    <li class="col-2">
                        <a class="nav-menu" href="/">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--NAVBAR END-->

    <!--HISTORY SETOR TARIK-->
    <div class="history pt-5 justify-content-center">
        <h2 class="head-history text-center pb-5">Jenis Sampah</h2>
        <div class="row d-flex justify-content-center">
            <div class="row col-7 justify-content-center d-flex wrap-card">
                <!--CARD LIST-->
                @foreach ($jenis as $sampa)
                    <div class="row col-12 mb-4 card-history shadow">
                        <div class="kiri-card col-6 pt-3 pb-3">
                            <p class="card-text-bold mb-0">{{$sampa->jenis_sampah}}</p>
                            <p class="card-text berat">{{$sampa->deskripsi}}</p>
                        </div>
                        <div class="kanan-card col-6 text-end pt-3 pb-3">
                            <p class="card-text-bold harga mb-0"><span class="operation">Rp</span><span
                                    class="price">{{$sampa->harga_kilo}}</span></p>
                            <p class="date card-text">Per-kilogram</p>
                        </div>
                    </div>
                @endforeach
                <!--SETOR-->
                <!--CARD LIST END-->
            </div>
        </div>
    </div>
    <!-- HISTORY SETOR TARIK END-->

    <!--FOOTER-->
    <div class="footer row d-flex justify-content-center pt-5 pb-0 shadow-sm">
        <!--FOOTER LOGO-->
        <div class="col-2">
            <img src="/img/nasabah/NikiSAM logo.svg">
        </div>
        <!--FOOTER LIST-->
        <div class="col-2">
            <ul>
                <li class="foot-bold pb-2">NikiSAM</li>
                <li class="foot-list pb-1">Visi</li>
                <li class="foot-list pb-1">Misi</li>
                <li class="foot-list pb-1">About Us</li>
                <li class="foot-list">FAQs</li>
            </ul>
        </div>
        <div class="col-2">
            <ul>
                <li class="foot-bold pb-2">Informasi</li>
                <li class="foot-list pb-1">Kontak Kami</li>
                <li class="foot-list pb-1">Bantuan</li>
                <li class="foot-list pb-1">Syarat & Ketentuan</li>
                <li class="foot-list pb-1">Kebijakan Privasi</li>
            </ul>
        </div>
        <div class="col-2">
            <ul>
                <li class="foot-bold pb-2">Media Sosial</li>
                <li class="foot-list pb-1">Tiktok</li>
                <li class="foot-list pb-1">Instagram</li>
                <li class="foot-list pb-1">Youtube</li>
                <li class="foot-list pb-1">Twitter</li>
            </ul>
        </div>

        <!--LINE-->
        <div class="line border col-10 mt-5"></div>

        <!--COPYRIGHT-->
        <div class="copyright d-flex justify-content-center mt-3">
            <p class="text-copyright">Copyright ©NikiSAM 2024 - All Rights Reserved.</p>
        </div>
    </div>
    <!--FOOTER END-->
</body>

</html>