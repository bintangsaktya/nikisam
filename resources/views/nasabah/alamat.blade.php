<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minta Jemput</title>

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

                <div class="horizontal-separator">

                </div>

                <div class="counter-circle d-flex align-items-center justify-content-center">
                    <h3 style="margin: unset;">2</h2>
                </div>

                <div class="horizontal-separator">

                </div>

                <div class="counter-circle d-flex align-items-center justify-content-center">
                    <h3 style="margin: unset;">3</h2>
                </div>
            </div>

            <div class="indikator-flow d-flex justify-content-around align-items-center">

                <div class="active-text d-flex align-items-center justify-content-center">
                    <h5 style="margin: unset; ">Lengkapi Data Jemputan</h5>
                </div>

                <!-- <div class="horizontal-separator transparan">

                </div> -->

                <div class="inactive-text d-flex align-items-center justify-content-center">
                    <h5 style="margin: unset;">Pilih Jadwal</h5>
                </div>
                <!-- 
                <div class="horizontal-separator transparan">
                    
                </div> -->

                <div class="inactive-text d-flex align-items-center justify-content-center">
                    <h5 style="margin: unset;">Menunggu Konfirmasi</h5>
                </div>

            </div>

        </div>
        <!--DATA END-->



        <!-- FORMULIR -->
        <div class="formulir bawah container-fluid row d-flex justify-content-center align-items-center gap-3">
            <div class="col-6 formulir-kiri d-flex justify-content-around align-items-center">
                <div class="formulir-dalam">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputAlamat1" class="form-label">Alamat Jemput</label>
                            <input type="text" class="form-control" id="alamat" aria-describedby="Alamat">
                        </div>

                        <div class="mb-3">
                            <label for="Select" class="form-label">Jenis Sampah</label>
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
                <h3 class="px-5 py-5">Simulasi Harga Sampah</h3>
                <div class="harga-sampah d-flex justify-content-between px-5">
                    <p><span>Jenis Sampah</span></p>
                    <p id="jenis_sampah"></p>
                </div>

                <div class="harga-sampah d-flex justify-content-between px-5">
                    <p><span>Berat Sampah (dalam Kg) </span></p>
                    <p id="totalBerat"></p>
                </div>

                <div class="thin-separator mx-5"></div>

                <div class="total-harga d-flex justify-content-between">
                    <p class="px-5 py-2 total-kiri">Total</p>
                    <p class="px-5 py-2 total-harga-sampah" style="text-align: right;" id="total_harga">Rp0</p>
                </div>

                <a href="/nasabah/jemput/jadwal"><button type="submit" class="button-green mx-5">Pilih
                        Jadwal</button></a>
            </div>
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
                    $('#nama_profil1').text(response.data.name)
                }
            });

            $("select").change(function () {
                axios.get('/api/jenis/' + document.getElementById('Select').value, {
                    headers: {
                        'Authorization': 'bearer ' + $token
                    }
                }).then(function (response) {
                    console.log(response)
                    localStorage.setItem('jenis_sampah', response.data.id_jenis_sampah)
                    localStorage.setItem('harga_kilo', response.data.harga_kilo)
                    $('#jenis_sampah').text(response.data.jenis_sampah)
                })
            })

            $("#berat").change(function (response) {
                localStorage.setItem('alamat_jemput', document.getElementById('alamat').value)
                let harga_kilo = localStorage.getItem('harga_kilo')
                $('#totalBerat').text($("#berat").val())
                hasil = parseFloat(harga_kilo) * parseFloat(document.getElementById('berat').value)
                $('#total_harga').text("Rp." + hasil)
                localStorage.setItem('berat', $("#berat").val())
                localStorage.setItem('totalHarga', hasil)
            })

        })
    </script>
</body>

</html>