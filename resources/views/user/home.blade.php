<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak</a>
            <a class="navbar-brand" href="{{ route('logout') }}">Logout</a>
        </div>
    </nav>
    <div class="container mt-4">
        <h4 class="text-secondary text-center">Selamat Datang {{ Auth::user()->name }} !</h4>

    </div>

    <div class="row mt-5 mb-5">
        <div class="col-6 m-sm-4">
            <form action="" method="GET">
                @csrf
                <div class="input-group">
                    <input type="search" name="search" class="formcontrol rounded" placeholder="Cari nama buku"
                        aria-label="Search" aria-describedby="searchaddon" />
                    <button type="submit" class="btn btn-primary">search</button>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
    @foreach ($data as $buku)
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-2"><img style="width: 150px" src="{{ asset('images/' . $buku->gambar) }}"
                        alt="cover buku"></div>
                <div class="col-2">
                    <p class="fw-bold">Judul</p>
                    <p class="fw-bold">Penulis</p>
                    <p class="fw-bold">Penerbit</p>
                    <p class="fw-bold">Tahun Terbit</p>
                    <p class="fw-bold">Deskripsi Buku</p>
                </div>
                <div class="col-8">
                    <p>{{ $buku->judul_buku }}</p>
                    <p>{{ $buku->penulis }}</p>
                    <p>{{ $buku->penerbit }}</p>
                    <p>{{ $buku->tahun_terbit }}</p>
                    <p>{{ $buku->deskripsi }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{ $data->links() }}
    </div>

    <div class="container mt-5">
        <div class="row">
            <h3 class="text-center">Dapatkan Informasi Terbaru</h3><br><br>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ ('/image/rpl.jpg') }}" ass="card-img-top" alt="Berita RPL">
                    <div class="card-body">
                        <h5 class="card-title">Berita RPL</h5>
                        <p class="card-text">Dapatkan berita terbaru tentang Program Studi Rekayasa Perangkat Lunak.
                        </p>
                        <a href="{{ route('berita') }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Profile RPL -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ ('/image/agence.jpeg') }}" class="card-img-top" alt="Profile RPL">
                    <div class="card-body">
                        <h5 class="card-title">Profile Lulusan RPL</h5>
                        <p class="card-text">Cari tahu lebih lanjut tentang profil lulusan Program Studi Rekayasa
                            Perangkat Lunak.</p>
                        <a href="{{ route('profile') }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Aktivitas Mahasiswa RPL -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ ('/image/aaa.jpeg') }}" class="card-img-top" alt="Aktivitas Mahasiswa RPL">
                    <div class="card-body">
                        <h5 class="card-title">Aktivitas Mahasiswa RPL</h5>
                        <p class="card-text">Lihat aktivitas mahasiswa di Program Studi Rekayasa Perangkat Lunak.
                        </p>
                        <a href="{{ route('aktivitas') }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>