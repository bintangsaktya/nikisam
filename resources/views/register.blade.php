<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/cssAuth.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!--FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row vh-100">
            <!--KIRI-->
            <div class="col h-100 main-kiri d-flex justify-content-center align-items-center">
                <h1 class="">
                    <img class="logo" src="img/logo-nikisam.svg">
                </h1>
            </div>
            <!--KIRI END-->

            <!--KANAN-->
            <div class="col h-100 main-kanan d-flex justify-content-center align-items-center">
                <div class="auth-card">
                    <h2 class="greet mb-4">Sign up</h2>
                    <!--FORM-->
                    <form method="POST">
                        <div class="mb-2">
                            <label for="exampleInputUsername1" class="form-label register-label">Username</label>
                            <input type="text" class="form-control register-input" id="username"
                                aria-describedby="emailHelp" name="username" />
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label register-label">Email</label>
                            <input type="email" class="form-control register-input" id="email"
                                aria-describedby="emailHelp" name="email" />
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputPassword1" class="form-label register-label">Kata Sandi</label>
                            <input type="password" class="form-control register-input" id="password" name="password" />
                        </div>
                        <!-- <div class="mb-2">
                            <label for="exampleInputAlamat1" class="form-label register-label">Alamat</label>
                            <input type="text" class="form-control register-input" id="alamat"
                                aria-describedby="emailHelp" name="alamat" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputNoTelp1" class="form-label register-label">Nomor Telepon</label>
                            <input type="text" class="form-control register-input" id="nomorTelepon"
                                aria-describedby="emailHelp" name="nomorTelepon" />
                        </div> -->
                        <button type="button" class="btn-full" id="submit">
                            Buat Akun
                        </button>
                    </form>
                    <!--FORM END-->
                    <div class="auth-option-card d-flex justify-content-center align-items-center mt-3">
                        <p class="auth-option-letter">
                            Sudah memiliki akun?
                            <a href="/login"><span>Login</span></a>
                        </p>
                    </div>
                </div>
            </div>
            <!--KANAN END-->
        </div>
    </div>

    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('#submit').click(function () {
                axios.post('/api/auth/register', {
                    name: document.getElementById('username').value,
                    email: document.getElementById('email').value,
                    password: document.getElementById('password').value
                }).then(function (response) {
                    alert(response.data.message)
                    if (response.data.redirect) {
                        window.location = '/login'
                    }
                })
            })
        })
    </script>
</body>



</html>