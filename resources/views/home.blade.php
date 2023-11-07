<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
    body {
        background-image: url('images/polbeng.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;

    }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/"> Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak </a>
            <a class="navbar-brand" href="{{ route('biodata') }}">Biodata Saya</a>
        </div>
    </nav>
    <div class="container" style="margin-top: 70px">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-secondary">Selamat Datang !</h1>
                <h4 class="text-secondary">Di Perpustakaan Politeknik Negeri Bengkalis</h4>
                <h6 class="mt-3">Silahkan
                    <a href="{{ route('auth.login') }}" style="text-decoration: none;">masuk</a>
                    atau <a href="{{ route('auth.register') }}" style="text-decoration: none;">daftar</a>
                    jika anda belum punya akun
                </h6>
            </div>
        </div>
    </div><br>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>