<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Status Jemput</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/nasabah/cssTracking.css')}}" />
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
        <div class="container row mt-4 mb-3">
            <div class="logo col-4">
                <img src="/img/nasabah/NikiSAM logo.svg">
            </div>
            <div class="menu col-6 mt-2">
                <ul class="row">
                    <li class="col-2 pe-0">
                        <a class="nav-menu" href="/nasabah">Home</a>
                    </li>
                    <li class="col-2">
                        <a class="nav-menu" href="/nasabah/profile">Profile</a>
                    </li>
                    <li class="col-3">
                        <a class="nav-menu" href="/jenis">Jenis Sampah</a>
                    </li>
                    <li class="col-2">
                        <a class="nav-menu" href="/">About</a>
                    </li>
                </ul>
            </div>
            <div class="btn-sign col-2 justify-content-center align-items-start d-flex gap-3 ">
                <div class="d-flex justify-content-center align-items-center  gap-3">
                    <div class="small-photo">
                        <img src="/img/nasabah/profile-img.jpg" alt="" srcset="">
                    </div>
                    <a href="/nasabah/profile" style="color: black" class="profile-name"><b id="nama_profil1"></b></a>
                </div>

            </div>
        </div>
    </div>
    <!--NAVBAR END-->

    <!--TRACKING-->
    <div class="track pt-5 justify-content-center pb-5">
        <h2 class="head-track text-center pb-5">Track Status Jemputan</h2>
        <div class="row d-flex justify-content-center">
            <div class="row col-9 justify-content-between d-flex wrap-card px-0">
                <!--CARD DALAM PERJALANAN #1-->
                @foreach ($track as $trac)
                    <?php 
                                                                                                                                        $date = date_create($trac->tanggal)

                                                                                                                                    ?>
                    <div class="row col-6 mb-4 card-track">
                        <div class="kiri-card col-6 pt-3 pb-3">
                            <p class="card-text id-jemput">{{$trac->id_jemputan}}</p>
                            <p class="card-text jenis mb-1">Jenis Sampah</p>
                            <p class="card-text berat mb-1">Berat Sampah (dalam Kg)</p>
                            <p class="card-text saldo-diterima">Total Saldo Diterima</p>
                        </div>
                        <div class="kanan-card col-6 text-end pt-3 pb-3">
                            <p class="date card-text">{{date_format($date, "d-m-Y")}}</p>
                            <p class="card-text jenis-text mb-1">{{$trac->jenis_sampah}}</p>
                            <p class="card-text mb-1"><span class="berat-angka">{{$trac->berat}}</span> Kg</p>
                            <p class="card-text">Rp<span class="saldo-text">{{$trac->harga}}</span></p>
                        </div>
                        <div class="line border"></div>
                        <div class="kiri-card col-6 pt-3 pb-3">
                            <p class="card-text penjemput mb-1">Nama Penjemput</p>
                            <p class="card-text status mb-1">Status</p>
                        </div>
                        <div class="kanan-card col-6 text-end pt-3 pb-3">
                            <p class="card-text penjemput-name mb-1">
                                @if ($trac->nama_lengkap == "")
                                    ...
                                @else
                                    {{$trac->nama_lengkap}}
                                @endif
                            </p>
                            @if ($trac->konfirmasi == "Pending" || $trac->konfirmasi == "Ditolak" || $trac->konfirmasi == "Dalam Perjalanan")
                                <p class="status-text-process d-flex align-items-center justify-content-end mb-1"><i
                                        class="fa-solid fa-circle custom-size pe-2"></i>{{$trac->konfirmasi}}
                                </p>
                            @else
                                <p class="status-text-done d-flex align-items-center justify-content-end mb-1"><i
                                        class="fa-solid fa-circle custom-size pe-2"></i> {{$trac->konfirmasi}}
                                </p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--TRACK END-->

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

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        $token = localStorage.getItem('token')
        $(document).ready(function () {
            axios.get('/api/auth/user', {
                headers: {
                    'Authorization': 'bearer ' + $token
                }
            }).then(function (response) {
                console.log(response)
                localStorage.setItem('id', response.data.id)
                if (response.data.role != "nasabah") {
                    if (response.data.role == "admin") {
                        window.location = '/admin'
                    } else {
                        window.location = '/penjemput'
                    }
                } else {
                    $('#nama_profil1').text(response.data.name)

                }
            })
        })
    </script>
</body>

</html>