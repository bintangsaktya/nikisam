<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Tarikan</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/admin/manajmen_tarik_setor.css')}}" />
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
</head>

<body>
    <!--NAVBAR-->
    <div class="nav container-fluid d-flex justify-content-center align-items-center shadow-sm">
        <div class="container row mt-4 mb-4">
            <div class="logo col-4">
                <img src="/img/admin/NikiSAM logo.svg">
            </div>
            <div class="menu col-6 mt-2">
                <ul class="row">
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

    <!--MANAJEMEN SETOR-->
    <div class="tarik pt-5 justify-content-center pb-5">
        <h2 class="head-tarik-setor text-center pb-5">Manajemen Setoran Nasabah</h2>
        <!--SEARCH-->
        <div class="d-flex justify-content-center div-search">
            <form class="pt-2 w-50 form-search">
                <div class="search ms-1">
                    <img src="/img/nasabah/search.svg" class="ms-2">
                    <input class="search-input border-0 w-75 p-2" type="search" placeholder="Cari nama atau id nasabah"
                        id="search">
                </div>
            </form>
        </div>

        <!--FORM-->
        @if (isset($tabung))
            <div class="formulir bawah container-fluid row d-flex justify-content-center gap-3 mt-5">
                <div class="col-7 formulir-kiri d-flex justify-content-around pt-5">
                    <div class="formulir-dalam">
                        <form>
                            <div class="mb-3 row table-head">
                                <p class="name col-5">Nama Lengkap Nasabah</p>
                                <p class="id-nas col-3">ID Nasabah</p>
                                <p class="tgl-gabung col-4">Tanggal Bergabung</p>
                            </div>
                            <div class="mb-3 row">
                                <p class="name-text col-5">{{$tabung->nama_lengkap}}</p>
                                <p class="id-nas-text col-3">{{$tabung->id_nasabah}}</p>
                                <p class="tgl-gabung-text col-4">{{$tabung->tanggal_bergabung}}</p>
                            </div>

                            <div class="mb-3">
                                <label for="Select" class="form-label tarikan-text">Jenis Sampah</label>
                                <select id="Select" class="form-select">
                                    <option value="">Pilih Jenis Sampah</option>
                                    <option value="1">Plastik</option>
                                    <option value="2">Kertas</option>
                                    <option value="3">Logam</option>
                                    <option value="4">Kaca</option>
                                    <option value="5">Karet</option>
                                    <option value="6">Tekstil</option>
                                    <option value="7">Elektronik</option>
                                    <option value="8">Baterai</option>
                                    <option value="9">Minyak goreng bekas</option>
                                    <option value="10">Lampu neon bekas</option>
                                    <option value="11">Ban bekas</option>
                                    <option value="12">Kaleng bekas</option>
                                    <option value="13">Botol plastik bekas</option>
                                    <option value="14">Karton bekas</option>
                                    <option value="15">Kertas bekas</option>
                                    <option value="16">Majalah bekas</option>
                                    <option value="17">Koran bekas</option>
                                    <option value="18">Buku bekas</option>
                                    <option value="19">Daun kering</option>
                                    <option value="20">Ranting pohon</option>
                                    <option value="21">Sampah organik</option>
                                    <option value="22">Sampah sisa makanan</option>
                                    <option value="23">Sampah medis</option>
                                    <option value="24">Sampah B3</option>
                                    <option value="25">Sampah elektronik</option>
                                    <option value="26">Sampah konstruksi</option>
                                    <option value="27">Sampah tekstil</option>
                                    <option value="29">Sampah karet</option>
                                    <option value="30">Sampah kaca</option>
                                    <option value="31">Sampah logam</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputJenis1" class="form-label">Berat Sampah (Dalam kg)</label>
                                <div class="col-3 gap-3 d-flex align-items-center justify-content-around">
                                    <input type="number" class="form-control" id="berat" aria-describedby="beratSampah"
                                        min="0">
                                    <h6>kg</h6>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-4 formulir-kanan ">
                    <h3 class="px-3 pt-5 pb-3 head-rekap">Rekapitulasi Setoran</h3>
                    <div class="harga-sampah d-flex justify-content-between px-3">
                        <p><span>Saldo Awal</span></p>
                        <p>{{$tabung->saldo}}</p>
                    </div>

                    <div class="harga-sampah d-flex justify-content-between px-3">
                        <p><span>Setoran</span></p>
                        <p id="setoran"> Rp. 0</p>
                    </div>

                    <div class="harga-sampah d-flex justify-content-between px-3">
                        <p><span>Tanggal Setoran</span></p>
                        <p id="tanggalSetor">-/-/-</p>
                    </div>

                    <div class="thin-separator mx-4"></div>

                    <div class="total-harga d-flex justify-content-between">
                        <p class="ps-3 py-4 total-kiri">Saldo Akhir</p>
                        <p class="pe-3 py-4 total-harga-sampah" style="text-align: right;" id="hasil">Rp. 0</p>
                    </div>

                    <a><button type="button" class="button-green mx-5" id="submit">Simpan dan Konfirmasi
                            Data</button></a>
                </div>
            </div>
        @endif

        <!-- FORM-END -->
    </div>
    <!--MANAJEMEN SETOR END-->

    <!--FOOTER-->
    <div class="footer row d-flex justify-content-center pt-5 shadow-sm">
        <!--FOOTER LOGO-->
        <div class="col-2">
            <img src="/img/admin/NikiSAM logo.svg">
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

            $('#search').change(function () {
                window.location = '/admin/setoran/' + $('#search').val();
            })

            const date = Date.now();
            const options = { day: '2-digit', year: 'numeric', month: 'long' };
            const formattedDate = new Intl.DateTimeFormat('en-US', options).format(date);

            @if (isset($tabung))
                $('#Select').change(function () {
                    axios.get('/api/jenis/' + $('#Select').val(), {
                        headers: {
                            'Authorization': 'bearer ' + $token
                        }
                    }).then(function (response) {
                        localStorage.setItem('harga_kilo', response.data.harga_kilo)
                        $('#tanggalSetor').text(formattedDate)
                    })
                })

                $("#berat").change(function (response) {
                    let harga_kilo = localStorage.getItem('harga_kilo')
                    setoran = parseFloat(harga_kilo) * parseFloat($('#berat').val())
                    localStorage.setItem('berat', $('#berat').val())
                    localStorage.setItem('saldo', setoran)
                    $('#setoran').text("Rp." + setoran)
                    hasil = parseFloat(<?php    echo $tabung->saldo ?>) + parseFloat(setoran)
                    localStorage.setItem('hasilSaldo', hasil)
                    $('#hasil').text("Rp. " + hasil)
                })

                $('#submit').click(function () {

                    axios.post('/api/riwayat', {
                        id_tabungan: <?php    echo $tabung->id_tabungan ?>,
                        tipe: "Setor",
                        nominal: localStorage.getItem('saldo'),
                        berat: localStorage.getItem('berat')
                    }, {
                        headers: {
                            'Authorization': 'bearer ' + $token
                        }
                    }).then(function (response) {
                        alert(response.data.message)
                        axios.put('/api/tabungan/' + <?php    echo $tabung->id_tabungan ?>, {
                            saldo: localStorage.getItem('hasilSaldo'),
                            berat: parseInt(<?php    echo $tabung->berat ?>) + parseInt(localStorage.getItem('berat'))
                        }, {
                            headers: {
                                'Authorization': 'bearer ' + $token
                            }
                        }).then(function (response) {
                            alert(response.data.message)
                            if (response.data.redirect) {
                                window.location = '/admin'
                            }
                        })
                    })
                })
            @endif

        })
    </script>
</body>

</html>