<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NikiSam</title>

    <!--FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/cssAuth.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col h-100 main-kiri d-flex justify-content-center align-items-center">
                <h1 class="">
                    <img class="logo" src="img/logo-nikisam.svg" />
                </h1>
            </div>

            <div class="col h-100 main-kanan d-flex justify-content-center align-items-center flex-column">
                <div class="inter-kanan d-flex justify-content-center align-items-start flex-column">
                    <div class="auth-card w-100">
                        <h2 class="greet">Ubah sampah menjadi rupiah!</h2>
                        <p>Bersama NikiSam perbaiki lingkungan</p>
                    </div>

                    <div class="auth-button-card d-flex gap-3">
                        <a href="/login" class="btn-quarter-solid d-flex justify-content-center align-items-center">Log
                            in</a>
                        <a href="/register"
                            class="btn-quarter-outline d-flex justify-content-center align-items-center">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>