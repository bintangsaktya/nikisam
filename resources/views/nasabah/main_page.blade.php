<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NikiSam</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/nasabah/cssNasabah.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!--FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

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
                            <a class="nav-menu" href="" id="nasabahProfil">Profile</a>
                        </li>
                        <li class="col-3">
                            <a class="nav-menu" href="/jenis">Jenis Sampah</a>
                        </li>
                        <li class="col-2">
                            <a class="nav-menu" href="/">About</a>
                        </li>
                        <li class="col-2">
                            <a class="nav-menu" type="button" id="logout">Log out</a>
                        </li>
                    </ul>
                </div>
                <div class="btn-sign col-2 justify-content-center align-items-start d-flex gap-3 ">
                    <div class="d-flex justify-content-center align-items-center  gap-3">
                        <div class="small-photo">
                            <img src="/img/nasabah/LUCKIEST.png" alt="" srcset="">
                        </div>
                        <a href="/nasabah/profile" style="color: black" id="nama_profil1"><b></b></a>
                    </div>

                </div>
            </div>
        </div>
        <!--NAVBAR END-->

        <!--DATA-->
        <div class="data container-fluid gap-3 align-items-center mt-5 mb-5 d-flex flex-column justify-content-center">
            <div class="data-text d-flex justify-content-center mb-5">
                <h2><span class="data-black">Selamat Datang,</span><span class="data-green" id="nama_profil2"></span>
                </h2>
            </div>

            <div class="data-nominal d-flex gap-5 justify-content-center align-items-center">
                <div class="data-side d-flex flex-column justify-content-center align-items-center">
                    <p>Total Saldo</p>
                    <h5 id="saldo">Rp. 0</h5>
                </div>

                <div class="separator">
                    <!-- SEPARATOR -->
                </div>

                <div class="data-side d-flex flex-column justify-content-center align-items-center">
                    <p>Setoran Sampah</p>
                    <h5 id="sampah">0 Kg</h5>
                </div>

                <div class="separator">
                    <!-- SEPARATOR -->
                </div>

                <div class="data-side d-flex flex-column justify-content-center align-items-center">
                    <p>Jumlah Permintaan</p>
                    <h5 id="permintaan">0 x</h5>
                </div>

            </div>
        </div>
        <!--DATA END-->

        <!-- MENU -->
        <div class="menu bawah container-fluid d-flex justify-content-center gap-5 align-items-center">
            <a href="nasabah/jemput">
                <div class="menu-card d-flex flex-column align-items-center justify-content-center">
                    <img src="/img/nasabah/mintajemputsampah.png" alt="" srcset="">
                    <h5>Minta Jemput Sampah</h5>
                </div>
            </a>

            <a id="track">
                <div class="menu-card d-flex flex-column align-items-center justify-content-center">
                    <img src="/img/nasabah/trackstatusjemput.png" alt="" srcset="">
                    <h5>Track Status Jemput</h5>
                </div>
            </a>

            <a id="riwayat">
                <div class="menu-card d-flex flex-column align-items-center justify-content-center">
                    <img src="/img/nasabah/riwayattariksetor.png" alt="" srcset="">
                    <h5>Riwayat Tarik Setor</h5>
                </div>
            </a>
        </div>
        <!-- MENU-END -->
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

            // Check Role User + Tambah Nasabah
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
                    $('#nama_profil2').text(response.data.name)

                    axios.post('/api/nasabah/register', {
                        id: response.data.id,
                        nama_lengkap: response.data.name
                    }, {
                        headers: {
                            'Authorization': 'bearer ' + $token
                        }
                    }).then(function () {
                        axios.get('/api/nasabah/' + response.data.id, {
                            headers: {
                                'Authorization': 'bearer ' + $token
                            }
                        }).then(function (response) {

                            $('#nasabahProfil').attr('href', 'nasabah/profile/' + response.data.id_nasabah)

                            axios.get('/api/nasabah/' + localStorage.getItem('id'), {
                                headers: {
                                    'Authorization': 'bearer ' + $token
                                }
                            }).then(function (response) {
                                console.log(response)
                                axios.post('/api/tabungan', {
                                    id_nasabah: response.data.id_nasabah,
                                    saldo: 0
                                }, {
                                    headers: {
                                        'Authorization': 'bearer ' + $token
                                    }
                                }).then(function () {
                                    axios.get('/api/tabungan/' + response.data.id_nasabah, {
                                        headers: {
                                            'Authorization': 'bearer ' + $token
                                        }
                                    }).then(function (response) {
                                        $('#riwayat').attr("href", "/nasabah/riwayat/" + response.data.id_tabungan)

                                    })

                                })
                            })


                            $('#track').attr("href", "/nasabah/track/" + response.data.id_nasabah)

                            axios.get('/api/tabungan/nominal/' + response.data.id_nasabah, {
                                headers: {
                                    'Authorization': 'bearer ' + $token
                                }
                            }).then(function (response) {
                                console.log(response);
                                $("#saldo").text("Rp. " + response.data)
                            })

                            axios.get('/api/tabungan/berat/' + response.data.id_nasabah, {
                                headers: {
                                    'Authorization': 'bearer ' + $token
                                }
                            }).then(function (response) {
                                console.log(response);
                                $("#sampah").text(response.data + " Kg")
                            })

                            axios.get('/api/tabungan/' + response.data.id_nasabah, {
                                headers: {
                                    'Authorization': 'bearer ' + $token
                                }
                            }).then(function (response) {
                                $('#riwayat').attr("href", "/nasabah/riwayat/" + response.data.id_tabungan)

                            })

                            axios.get('/api/jemput/jumlah/' + response.data.id_nasabah, {
                                headers: {
                                    'Authorization': 'bearer ' + $token
                                }
                            }).then(function (response) {
                                console.log(response);
                                $("#permintaan").text(response.data + " x")
                            })
                        })
                    })
                }
            })

            $('#logout').click(function () {
                axios.get('/api/auth/logout', {
                    headers: {
                        'Authorization': 'bearer ' + $token
                    }
                }).then(function () {
                    localStorage.removeItem('harga_kilo')
                    localStorage.removeItem('id')
                    localStorage.removeItem('berat')
                    localStorage.removeItem('jenis_sampah')
                    localStorage.removeItem('totalHarga')
                    localStorage.removeItem('jadwal')
                    localStorage.removeItem('alamat_jemput')
                    localStorage.removeItem('tanggal')
                    localStorage.removeItem('token')

                    window.location = '/'
                })
            })
        })
    </script>
</body>

</html>