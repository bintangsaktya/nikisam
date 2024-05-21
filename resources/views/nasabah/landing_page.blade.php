<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NikiSam</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/nasabah/cssLanPage.css" />
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
    <div class="container-fluid d-flex justify-content-center border shadow-sm">
        <div class="container row mt-4 mb-3">
            <div class="logo col-4">
                <img src="/img/nasabah/NikiSAM logo.svg">
            </div>
            <div class="menu col-5 mt-2">
                <ul class="row">
                    <li class="col-2 pe-0">
                        <a class="nav-menu" href="#visimisi">Visi</a>
                    </li>
                    <li class="col-2">
                        <a class="nav-menu" href="#visimisi">Misi</a>
                    </li>
                    <li class="col-3">
                        <a class="nav-menu" href="#aboutus">About Us</a>
                    </li>
                    <li class="col-2">
                        <a class="nav-menu" href="#faq">FAQs</a>
                    </li>
                </ul>
            </div>
            <div class="btn-sign col-3 justify-content-end d-flex gap-3 mt-1">
                <a href="/login" class="btn-quarter-solid d-flex justify-content-center align-items-center">Log
                    in</a>
                <a href="/register" class="btn-quarter-outline d-flex justify-content-center align-items-center">Sign
                    up</a>
            </div>
        </div>
    </div>
    <!--NAVBAR END-->

    <!--HERO IMAGES-->
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/nasabah/gambar 1.jpg" class="d-block car-img w-100" alt="...">
                <div
                    class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                    <h1 class="text-carousel">Ubah sampah jadi rupiah!</h1>
                    <a href="../../authorization/auth_page.html"
                        class="btn-carousel w-25 mt-2 d-flex justify-content-center align-items-center">Jelajahi</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/nasabah/gambar 2.jpg" class="d-block car-img w-100" alt="...">
                <div
                    class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                    <h1 class="text-carousel">Ubah sampah jadi rupiah!</h1>
                    <a href="../../authorization/auth_page.html"
                        class="btn-carousel w-25 mt-2 d-flex justify-content-center align-items-center">Jelajahi</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/nasabah/gambar 3.jpg" class="d-block car-img w-100" alt="...">
                <div
                    class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                    <h1 class="text-carousel">Ubah sampah jadi rupiah!</h1>
                    <a href="../../authorization/auth_page.html"
                        class="btn-carousel w-25 mt-2 d-flex justify-content-center align-items-center">Jelajahi</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--HERO IMAGES END-->

    <!--VISI DAN MISI-->
    <div id="visimisi" class="visi d-flex justify-content-center row px-0">
        <div class="visi-text d-flex col-12 justify-content-center mt-5 pt-5">
            <h2 class="visi-head"><span class="visi-green">Visi</span> <span class="visi-black">Kami Berdiri</span></h2>
        </div>
        <div class="d-flex justify-content-center col-12">
            <p class="visi-parap">Menjadi platform terdepan dalam mendukung keberlanjutan lingkungan dan <br>
                perekonomian dengan memfasilitasi
                pengelolaan sampah yang efisien dan <br> bertanggung jawab.</p>
        </div>

        <div class="visi-text d-flex col-12 justify-content-center mt-5 pt-5">
            <h2 class="visi-head"><span class="visi-green">Misi</span> <span class="visi-black">Kami Berdiri</span></h2>
        </div>
        <div class="d-flex justify-content-center col-12 mb-5 pb-5">
            <p class="visi-parap">Misi kami adalah menyediakan solusi pengelolaan sampah yang efisien, bertanggung
                jawab, dan <br>
                mendukung keberlanjutan lingkungan serta ekonomi. Kami berkomitmen untuk memfasilitasi pengguna <br>
                dalam memilah dan mengelola sampah, mendukung implementasi SDGs, membangun kemitraan yang kuat, <br>
                memberikan insentif kepada pengguna, dan menjunjung tinggi nilai transparansi serta tanggung jawab <br>
                dalam setiap langkah pengelolaan sampah.</p>
        </div>
    </div>
    <!--VISI END-->

    <!--ABOUT US-->
    <div id="aboutus" class="about-us row d-flex justify-content-center py-5">
        <h2 class="visi-head visi-about col-12 pb-4 pt-5"><span class="visi-black">About</span> <span
                class="visi-green">Us</span></h2>
        <div class="logo col-4 d-flex justify-content-center align-items-center">
            <img src="/img/nasabah/logo-about-us.svg" class="w-75 h-75">
        </div>
        <div class="text-about col-6 pb-5">
            <p class="parap-about">NikiSam adalah sebuah platform yang bertujuan untuk menghubungkan pengguna dengan
                pihak pengelola sampah
                atau bank sampah. Kami menawarkan layanan untuk memudahkan pengguna dalam memilah sampah sebelum disetor
                ke bank sampah. </p>
            <p class="parap-about">Dengan fitur-fitur yang kami sediakan, mulai dari permintaan penjemputan sampah
                hingga simulasi tabungan
                sampah, NikiSam mendukung implementasi SDGs (Sustainable Development Goals) khususnya poin 11 dan 12,
                serta poin 13, 15, dan 17. </p>
            <p class="parap-about">Dengan fokus pada keberlanjutan lingkungan dan kemitraan, NikiSam memungkinkan
                pengguna untuk
                berkontribusi pada lingkungan dan mendukung perekonomian melalui pengelolaan sampah yang
                bertanggungjawab.</p>
        </div>
    </div>
    <!--ABOUT US END-->

    <!--FAQ-->
    <div id="faq" class="faq py-5">
        <h2 class="head-faq pb-5">Frequently Asked Questions</h2>
        <div class="row">
            <div class="col-7">
                <div class="question border-bottom">
                    <button class="accordion">
                        Kapan sampah saya akan diambil?
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                    <div class="pannel">
                        <p>
                            Sampah Anda akan diambil setelah dikonfirmasi oleh admin bank sampah. Setelah Anda
                            mengajukan permintaan pengambilan sampah melalui aplikasi Nikisam, tim admin bank sampah
                            akan memverifikasi permintaan tersebut.
                        </p>
                    </div>
                </div>
                <div class="question border-bottom">
                    <button class="accordion">
                        Bagaimana sampah saya bisa menjadi uang?
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                    <div class="pannel">
                        <p>
                            Kamu bisa mengantarkan sampah anda untuk ditimbang atau meminta jemput sampah. Kemudian
                            admin dan penjemput akan mengurus sampah anda dan anda akan mendapatkan uang sesuai berat
                            dan jenis sampah anda.
                        </p>
                    </div>
                </div>
                <div class="question border-bottom">
                    <button class="accordion">
                        Bagaimana mekanisme penjemputan sampah?
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                    <div class="pannel">
                        <p>
                            Agar sampah anda dijemput, anda bisa mengakses menu jemput sampah, kemudian jika permintaan
                            anda disetujui maka penjemput akan segera datang ke lokasi anda.
                        </p>
                    </div>
                </div>
                <div class="question border-bottom">
                    <button class="accordion">
                        Apakah ada kategori sampah tertentu yang harus dipisahkan?
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                    <div class="pannel">
                        <p>
                            Ya, anda wajib memisahkan sampah B3, elektronik, kaca, dan logam
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <img src="/img/nasabah/icon-faq.svg">
            </div>
        </div>
    </div>
    <!--FAQ END-->

    <!--FOOTER-->
    <div class="footer row d-flex justify-content-center pt-5 shadow-sm">
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
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                this.parentElement.classList.toggle("active");

                var pannel = this.nextElementSibling;

                if (pannel.style.display === "block") {
                    pannel.style.display = "none";
                } else {
                    pannel.style.display = "block";
                }

                var icon = this.querySelector(".fa-solid");
                if (icon) {
                    icon.classList.toggle("rotate-90");
                }
            });
        }
    </script>


    <!--JS BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>