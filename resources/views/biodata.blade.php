<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Bootstrap Page</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Add your custom CSS -->
    <style>
    /* Add any custom CSS styles here */
    body {
        background: #FFFAF0;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My CV |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Me |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('auth.login') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="text-center">
            <img src="{{ ('image/nina.jpeg') }}" alt="Nina's Image" class="img-fluid rounded-circle" width="175"
                height="175">
            <h3 class="mt-3">Sufina</h3>
            <p>Software Engineer</p>
        </div>

        <hr>

        <h4 class="text-center">Overview</h4>
        <p class="text-center">Mahasiswi jurusan Teknik Informatika program studi Rekayasa Perangkat Lunak <br>
            angkatan 21 semester 5</p>

        <div class="row justify-content-center mt-4">
            <div class="col-md-6">

                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Skill</th>
                            <th>Pengalaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li>Memasak</li>
                                    <li>Bermain game</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Kader Kesehatan Posyandu Remaja</li>
                                    <li>Pramuka</li>
                                    <li>Konselor Sebaya</li>
                                    <li>Korps Sukarela Polbeng</li>
                                    <li>Badan Eksekutif Mahasiswa</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <hr>

        <p class="text-center">Copyright 2023 @Sufina</p>
    </div>

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>