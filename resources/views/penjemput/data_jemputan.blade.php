<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jemputan</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/penjemput/cssPenjemput.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!--FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div class="">
        <!--NAVBAR-->
        <div class="nav container-fluid d-flex justify-content-center align-items-center shadow-sm">
            <div class="container row mt-4">
                <div class="logo col-4">
                    <img src="/img/penjemput/NikiSAM logo.svg">
                </div>
                <div class="menu col-6 mt-2">
                    <ul class="row">
                        <li class="col-2 pe-0">
                            <a class="nav-menu" href="/penjemput">Home</a>
                        </li>
                        <li class="col-2">
                            <a class="nav-menu" id="penjemputProfil" href="">Profile</a>
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
                            <img src="/img/penjemput/LUCKIEST.png" alt="" srcset="">
                        </div>
                        <a href="/penjemput/profile" style="color: black" class=""><b id="nama_profil1"></b></a>
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

            @foreach ($jemput as $jemp)
                <div class="data-flow d-flex justify-content-center align-items-center">

                    <div class="list-card d-flex justify-content-around align-items-center">
                        <div class="side-photo">
                            <img src="/img/penjemput/LUCKIEST.png" alt="">
                        </div>

                        <div class="jemputan-data">
                            <input type="text" name="" id="id" value="{{$jemp->id_jemputan}}" hidden>
                            <div class="icon-text-container">
                                <span class="icon"><i class="fa fa-user"></i></span>
                                <span class="text">{{$jemp->nama_lengkap}}</span>
                            </div>

                            <div class="icon-text-container">
                                <span class="icon"><i class="fa fa-map"></i></span>
                                <span class="text">{{$jemp->alamat}}</span>
                            </div>

                            <div class="icon-text-container">
                                <span class="icon"><i class="fa fa-phone"></i></span>
                                <span class="text">{{$jemp->no_hp}}</span>
                            </div>

                            <div class="icon-text-container">
                                <span class="icon"><i class="fa fa-trash"></i></span>
                                <span class="text">{{$jemp->jenis_sampah}}</span>
                            </div>

                            <div class="icon-text-container">
                                <span class="icon"><i class="fa fa-cubes"></i></span>
                                <span class="text">{{$jemp->berat}}</span>
                            </div>

                            <div class="icon-text-container">
                                <span class="icon"><i class="fa fa-money"></i></span>
                                <span class="text">{{$jemp->harga}}</span>
                            </div>
                        </div>


                        @if ($jemp->konfirmasi == "Selesai")
                            <div class="action-data">
                                <div class="mb-3">
                                    <label for="Select" class="form-label">Status</label>
                                    <select id="Select" class="form-select" disabled>
                                        <option value="1">Pilih Status</option>
                                        <option value="1">Dalam Perjalanan</option>
                                        <option value="2">Selesai</option>

                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 d-flex flex-column">
                                <label for="exampleInputfoto1" class="form-label">Dokumentasi</label>
                                <input type="file" class="form-control" id="foto" aria-describedby="foto" disabled>
                            </div>
                        @else
                            <div class="action-data">
                                <div class="mb-3">
                                    <label for="Select" class="form-label">Status</label>
                                    <select id="Select<?php        echo $jemp->id_jemputan ?>" class="form-select">
                                        <option value="">Pilih Status</option>
                                        <option value="Dalam Perjalanan">Dalam Perjalanan</option>
                                        <option value="Selesai">Selesai</option>

                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 d-flex flex-column">
                                <label for="exampleInputfoto1" class="form-label">Dokumentasi</label>
                                <input type="file" class="form-control" id="foto<?php        echo $jemp->id_jemputan ?>"
                                    aria-describedby="foto">
                            </div>
                        @endif
                    </div>

                </div>
            @endforeach


            <!-- <div class="data-flow d-flex justify-content-center align-items-center">

                <div class="list-card d-flex justify-content-around align-items-center">
                    <div class="side-photo">
                        <img src="/img/penjemput/LUCKIEST.png" alt="">
                    </div>

                    <div class="jemputan-data">
                        <div class="icon-text-container">
                            <span class="icon"><i class="fa fa-user"></i></span>
                            <span class="text">Tiara Andini</span>
                        </div>

                        <div class="icon-text-container">
                            <span class="icon"><i class="fa fa-map"></i></span>
                            <span class="text">Jl. Mentaraman I RW 02 / RW 07 No. 45</span>
                        </div>

                        <div class="icon-text-container">
                            <span class="icon"><i class="fa fa-phone"></i></span>
                            <span class="text">08123456789</span>
                        </div>

                        <div class="icon-text-container">
                            <span class="icon"><i class="fa fa-trash"></i></span>
                            <span class="text">Plastik</span>
                        </div>

                        <div class="icon-text-container">
                            <span class="icon"><i class="fa fa-cubes"></i></span>
                            <span class="text">2 kg</span>
                        </div>

                        <div class="icon-text-container">
                            <span class="icon"><i class="fa fa-money"></i></span>
                            <span class="text">Rp 50.000</span>
                        </div>
                    </div>

                    <div class="action-data">
                        <div class="mb-3">
                            <label for="Select" class="form-label">Status</label>
                            <select id="Select" class="form-select" disabled>
                                <option value="1">Pilih Status</option>
                                <option value="1">Dalam Perjalanan</option>
                                <option value="2">Selesai</option>

                            </select>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <label for="exampleInputfoto1" class="form-label">Dokumentasi</label>
                        <input type="file" class="form-control" id="foto" aria-describedby="foto" disabled>
                    </div>
                </div>

            </div> -->


        </div>
        <!--DATA END-->


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
            }).then(function (response) {
                console.log(response)
                localStorage.setItem('id', response.data.id)
                if (response.data.role != "penjemput") {
                    if (response.data.role == "nasabah") {
                        window.location = '/nasabah'
                    } else {
                        window.location = '/admin'
                    }
                } else {
                    $('#nama_profil1').text(response.data.name)

                    axios.get('/api/penjemput/' + response.data.id, {
                        headers: {
                            'Authorization': 'bearer ' + $token
                        }
                    }).then(function (response) {
                        $('#penjemputProfil').attr('href', '/penjemput/profile/' + response.data.id_penjemput)

                    })
                }
            })

            @foreach ($jemput as $jemp)
                $('#Select<?php    echo $jemp->id_jemputan ?>').change(function () {
                    axios.put('/api/jemput/status/' + <?php    echo $jemp->id_jemputan ?>, {
                        konfirmasi: $('#Select<?php    echo $jemp->id_jemputan ?>').val()
                    }, {
                        headers: {
                            'Authorization': 'bearer ' + $token
                        }
                    }).then(function (response) {
                        alert(response.data.message)
                        location.reload()
                    })
                })
            @endforeach

            @foreach ($jemput as $jemp)

                $('#foto<?php    echo $jemp->id_jemputan ?>').change(function () {
                    let formData = new FormData()
                    let imageFile = document.querySelector('#foto<?php    echo $jemp->id_jemputan ?>').files[0]
                    formData.append('image', imageFile)
                    formData.append('id_jemputan', <?php    echo $jemp->id_jemputan ?>)

                    axios.post('/api/jemput/upload', formData, {
                        headers: {
                            'Authorization': 'bearer ' + $token,
                            'Content-Type': 'multipart/form-data'
                        },

                    }).then(function (response) {
                        console.log(response)
                    })
                })
            @endforeach


            $('#logout').click(function () {
                axios.get('/api/auth/logout', {
                    headers: {
                        'Authorization': 'bearer ' + $token
                    }
                }).then(function () {
                    window.location = '/'
                })
            })
        })
    </script>
</body>

</html>