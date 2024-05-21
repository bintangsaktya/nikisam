<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>

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
                    <img class="logo" src="/img/logo-nikisam.svg">
                </h1>
            </div>
            <!--KIRI END-->

            <!--KANAN-->
            <div class="col h-100 main-kanan d-flex justify-content-center align-items-center">
                <div class="auth-card">
                    <h2 class="greet mb-4">Selamat datang kembali!</h2>
                    <!--FORM-->
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                name="email" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password" />
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                            <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                        </div>
                        <a href="#">
                            <button type="button" class="btn-full" id="submit">Log
                                in</button>
                        </a>
                    </form>
                    <!--FORM END-->
                    <div class="auth-option-card d-flex justify-content-center align-items-center mt-3">
                        <p class="auth-option-letter">
                            Belum memiliki akun?
                            <a href="/register"><span>Sign up</span></a>
                        </p>
                    </div>
                </div>
            </div>
            <!--KANAN END-->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('#submit').click(function () {
                axios.post('/api/auth/login', {
                    email: document.getElementById('email').value,
                    password: document.getElementById('password').value
                }).then(function (response) {
                    console.log(response)
                    alert(response.data.message)
                    if (response.data.redirect) {
                        localStorage.setItem('token', response.data.access_token)
                        if (response.data.role == "nasabah") {
                            window.location = '/nasabah'
                        } else if (response.data.role == "admin") {
                            window.location = '/admin'
                        } else {
                            window.location = '/penjemput'
                        }
                    }
                })
            })
        })
    </script>
</body>

</html>