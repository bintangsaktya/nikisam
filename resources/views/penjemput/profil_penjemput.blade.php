<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS BS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{URL::asset('css/penjemput/cssProfil.css')}}" rel="stylesheet">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/js/home_page.js"></script>
    <!--FONT-->
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@500&display=swap" rel="stylesheet">
    <title>Profil Penjemput</title>
</head>

<body class="h-100">
    <div class="container h-100">
        <!--NAVBAR-->
        <div class="container row ps-5 pt-0">
            <div class="col-3 pt-3">
                <img src="/img/penjemput/NikiSAM logo.svg">
            </div>
            <div class="col-5 justify-content-start border border-top-0 d-flex pt-3">
                <p class="nav-text2">Profil Penjemput</p>
            </div>
            <div class="col-4 justify-content-start d-flex mt-1">
                <form class="pt-2">
                    <div class="search ms-1">
                        <img src="/img/penjemput/search.svg" class="ms-2">
                        <input class="search-input border-0 p-2" type="search" placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
        <!--NAVBAR END-->

        <!--CONTENT SECTION-->
        <div class="container row ps-5 h-100">
            <!--NAV KIRI-->
            <div class="col-3">
                <ul class="menu pt-3 list-group">
                    <li class="menu-item"><img src="/img/penjemput/Vector.svg" class="me-2 pb-1">
                        <a href="../manajemen_tracking/data_jemputan.html">Beranda</a>
                    </li>


                </ul>
            </div>
            <!--CONTENT-->
            <div class="col-5 border border-top-0 h-100">
                <!-- PROFILE ISI -->
                <div class="row vh-100  mx-1 mt-3">
                    <div class="col h-100">
                        <div class="row profile-isi d-flex justify-content-center align-items-center">

                            <div class="foto-profil rounded-circle col-2 profile-img p-0 ms-3">
                                <img src="/img/penjemput/image 5.png" width="10px">
                            </div>

                            <div class="col-4 mt-3">
                                <p class="name mb-0">tiara permata</p>
                                <p class="post-info">$tanggalMulaiKerja</p>
                            </div>

                            <div class="col-3"></div>

                            <div class="col-3 d-flex align-items-center justify-content-center">
                                <button type="button" class="btn btn-secondary btn-edit">Ubah foto</button>
                            </div>
                        </div>

                        <!--FORM EDIT PROFIL  -->
                        <form class="mt-3">
                            <div class="mb-1">
                                <label for="exampleInputNama1" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleInputNama1">

                            </div>
                            <div class="mb-1">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">

                            </div>

                            <div class="mb-1">
                                <label for="exampleInputNoTelp1" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label for="exampleInputAL" class="form-label">Alamat Lengkap</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label for="exampleInputDesa" class="form-label">Desa</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="mb-1">
                                <label for="exampleInputKecamatan" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputKota" class="form-label">Kota</label>
                                <input type="text" class="form-control">
                            </div>


                            <button type="submit" class="btn-full">Simpan</button>
                        </form>

                    </div>
                </div>

            </div>

        </div>
        <!--WHITESPACE-->
        <div class="col-4"></div>
    </div>
    <!--CONTENT UPLOAD SECTION END-->

    <!--FOOTER-->
    <div class="footer row d-flex justify-content-center py-5">
        <!--FOOTER LOGO-->
        <div class="col-2">
            <img src="/img/penjemput/NikiSAM logo.svg">
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
            }).then(function () {
                console.log(response)
                if (response.data.role != "admin") {
                    if (response.data.role == "nasabah") {
                        window.location = '/nasabah'
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