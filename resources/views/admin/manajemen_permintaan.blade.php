<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Permintaan Jemput</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/admin/cssAdmin.css')}}" />
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
                    <img src="/img/admin/NikiSAM logo.svg">
                </div>
                <div class="menu col-6 mt-2">
                    <ul class="row">
                        <li class="col-2 pe-0">
                            <a class="nav-menu" href="/admin">Home</a>
                        </li>
                        <li class="col-2">
                            <a class="nav-menu" href="/admin/profile">Profile</a>
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
                            <img src="/img/admin/LUCKIEST.png" alt="" srcset="">
                        </div>
                        <a href="/admin/profile" style="color: black" class=""><b id="nama_profil1"></b></a>
                    </div>

                </div>
            </div>
        </div>
        <!--NAVBAR END-->

        <!--DATA-->
        <div class="data container-fluid gap-3 align-items-center mt-5 mb-5 d-flex flex-column justify-content-center">
            <div class="data-text d-flex justify-content-center mb-5">
                <h2><span class="data-black">Manajemen Permintaan Jemputan</span></h2>
            </div>

            @foreach ($jemput as $jemp)
                <div class="data-jemputan d-flex gap-3 justify-content-center align-items-center">
                    <div class="data-side d-flex flex-column justify-content-center align-items-start">
                        <h5>{{$jemp->id_jemputan}}</h5>
                        <p class="my-0">Nama Nasabah</p>
                        <h6>{{$jemp->nama_lengkap}}</h6>
                        <p class="my-0">Alamat Lengkap</p>
                        <h6>{{$jemp->alamat}}</h6>
                    </div>

                    <div class="tall-separator">
                        <!-- SEPARATOR -->
                    </div>

                    <div class="data-side d-flex flex-column justify-content-center align-items-start">
                        <p class="my-0">Jenis Sampah</p>
                        <h6>{{$jemp->jenis_sampah}}</h6>
                        <p class="my-0">Berat Sampah (Dalam Kg)</p>
                        <h6>{{$jemp->berat}}</h6>
                        <p class="my-0">Harga Sampah</p>
                        <h6>{{$jemp->harga}}</h6>
                    </div>

                    <div class="tall-separator">
                        <!-- SEPARATOR -->
                    </div>

                    <div class="data-side d-flex flex-column justify-content-center align-items-center">
                        <p class="my-0">Total</p>
                        <h4>{{$jemp->harga}}
                    </div>

                    <div class="tall-separator">
                        <!-- SEPARATOR -->
                    </div>

                    @if ($jemp->konfirmasi == "Pending")
                        <div class="data-side d-flex flex-column justify-content-center align-items-center">
                            <a
                                onclick="updateStatus(<?php        echo $jemp->id_jemputan ?>, 'Diterima', <?php        echo $jemp->id_nasabah ?>, <?php        echo $jemp->harga ?>, <?php        echo $jemp->berat ?>)">
                                <button class="small-button-green">Setujui</button>

                            </a>
                            <br>
                            <a
                                onclick="updateStatus(<?php        echo $jemp->id_jemputan ?>, 'Ditolak', <?php        echo $jemp->id_nasabah ?>, <?php        echo $jemp->harga ?>, <?php        echo $jemp->berat ?>)">
                                <button class="small-button-red">Tolak</button>

                            </a>
                        </div>
                    @elseif($jemp->konfirmasi == "Diterima")
                        <div class="data-side d-flex flex-column justify-content-center align-items-center">
                            <p class="status-text-done d-flex align-items-center justify-content-end mb-1"><i
                                    class="fa-solid fa-circle custom-size pe-2"></i> {{$jemp->konfirmasi}}
                            </p>
                        </div>
                    @else
                        <div class="data-side d-flex flex-column justify-content-center align-items-center">
                            <p class="status-text-process d-flex align-items-center justify-content-end mb-1"><i
                                    class="fa-solid fa-circle custom-size pe-2"></i> {{$jemp->konfirmasi}}
                            </p>
                        </div>
                    @endif


                </div>
            @endforeach

        </div>
        <!--DATA END-->


        <!--FOOTER-->
        <div class="footer row d-flex justify-content-center py-5">
            <!--FOOTER LOGO-->
            <div class="col-2">
                <img src="/img/admin/NikiSAM logo.svg">
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

        function updateStatus(id, status, id_nasabah, saldo, berat) {
            if (status == "Diterima") {
                axios.put('/api/jemput/status/' + id, {
                    konfirmasi: status
                }, {
                    headers: {
                        'Authorization': 'bearer ' + $token
                    }
                }).then(function (response) {
                    alert(response.data.message)
                    axios.get('/api/tabungan/' + id_nasabah, {
                        headers: {
                            'Authorization': 'bearer ' + $token
                        }
                    }).then(function (response) {

                        axios.post('/api/riwayat', {
                            id_tabungan: response.data.id_tabungan,
                            tipe: "Setor",
                            nominal: saldo,
                            berat: berat
                        }, {
                            headers: {
                                'Authorization': 'bearer ' + $token
                            }
                        })

                        totalSaldo = parseFloat(response.data.saldo) + parseFloat(saldo)
                        totalBerat = parseInt(response.data.berat) + parseInt(berat)
                        axios.put('/api/tabungan/' + id_nasabah, {
                            saldo: totalSaldo,
                            berat: totalBerat
                        }).then(function (response) {
                            alert(response.data.message)
                            location.reload()
                        })
                    })
                })
            } else {
                axios.put('/api/jemput/status/' + id, {
                    konfirmasi: status
                }, {
                    headers: {
                        'Authorization': 'bearer ' + $token
                    }
                }).then(function (response) {
                    alert(response.data.message)
                    location.reload()
                })
            }

        }
    </script>
</body>

</html>