<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Jadwal</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/nasabah/cssNasabah.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!--FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div class="">
        <!--NAVBAR-->
        <div class="nav container-fluid d-flex justify-content-center align-items-center shadow-sm">
            <div class="container row mt-4">
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
                            <img src="/img/nasabah/LUCKIEST.png" alt="" srcset="">
                        </div>
                        <a href="/nasabah/profile" style="color: black"><b id="nama_profil1"></b></a>
                    </div>

                </div>
            </div>
        </div>
        <!--NAVBAR END-->

        <!--DATA-->
        <div class="data container-fluid gap-3 align-items-center mt-5 mb-5 d-flex flex-column justify-content-center">
            <div class="data-text d-flex justify-content-center mb-5">
                <h2><span class="data-black">Minta Jemput Sampah</span></h2>
            </div>

            <div class="data-flow d-flex justify-content-center align-items-center">

                <div class="counter-circle active d-flex align-items-center justify-content-center">
                    <h3 style="margin: unset;">1</h2>
                </div>

                <div class="horizontal-separator active">

                </div>

                <div class="counter-circle active d-flex align-items-center justify-content-center">
                    <h3 style="margin: unset;">2</h2>
                </div>

                <div class="horizontal-separator active">

                </div>

                <div class="counter-circle active d-flex align-items-center justify-content-center">
                    <h3 style="margin: unset;">3</h2>
                </div>
            </div>

            <div class="indikator-flow d-flex justify-content-around align-items-center">

                <div class="active-text d-flex align-items-center justify-content-center">
                    <h5 style="margin: unset; ">Lengkapi Data Jemputan</h5>
                </div>

                <!-- <div class="horizontal-separator transparan">

                </div> -->

                <div class="active-text d-flex align-items-center justify-content-center">
                    <h5 style="margin: unset;">Pilih Jadwal</h5>
                </div>
                <!-- 
                <div class="horizontal-separator transparan">
                    
                </div> -->

                <div class="active-text d-flex align-items-center justify-content-center">
                    <h5 style="margin: unset;">Menunggu Konfirmasi</h5>
                </div>

            </div>

        </div>
        <!--DATA END-->



        <!-- FORMULIR -->
        <div class="formulir bawah container-fluid row d-flex justify-content-center align-items-center gap-3">

            <img src="/img/nasabah/menunggu.png" alt="" class="gambar-tunggu w-10">
            <h3 style="text-align: center;">Tunggu sebentar ya! Admin sedang memproses permintaanmu...</h3>

        </div>
        <!-- FORMULIR-END -->

        <!--FOOTER-->
        <div class="footer row d-flex justify-content-center py-5">
            <!--FOOTER LOGO-->
            <div class="col-2">
                <img src="/img/nasabah/NikiSAM logo.svg">
            </div>
            <!--FOOTER LIST-->
            <div class="col-2">
                <ul>
                    <li class="foot-bold pb-3">NikiSAM</li>
                    <li class="foot-list pb-1">Visi</li>
                    <li class="foot-list pb-1">Misi</li>
                    <li class="foot-list pb-1">About Us</li>
                    <li class="foot-list pb-1">FAQs</li>
                </ul>
            </div>
            <div class="col-2">
                <ul>
                    <li class="foot-bold pb-3">Informasi</li>
                    <li class="foot-list pb-1">Kontak Kami</li>
                    <li class="foot-list pb-1">Bantuan</li>
                    <li class="foot-list pb-1">Syarat & Ketentuan</li>
                    <li class="foot-list pb-1">Kebijakan Privasi</li>
                </ul>
            </div>
            <div class="col-2">
                <ul>
                    <li class="foot-bold pb-3">Media Sosial</li>
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
    </div>
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
                if (response.data.role != "nasabah") {
                    if (response.data.role == "admin") {
                        window.location = '/admin'
                    } else {
                        window.location = '/penjemput'
                    }
                } else {
                    $("#nama_profil1").text(response.data.name)
                }
            });

            // axios.get('/api/nasabah/' + localStorage.getItem('id'), {
            //     headers: {
            //         'Authorization': 'bearer ' + $token
            //     }
            // }).then(function (response) {
            //     console.log(response)
            //     axios.post('/api/tabungan', {
            //         id_nasabah: response.data.id_nasabah,
            //         saldo: 0
            //     }, {
            //         headers: {
            //             'Authorization': 'bearer ' + $token
            //         }
            //     })
            // })
        })
    </script>
</body>

</html>