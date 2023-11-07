<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Input Berita</title>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak</a>
            <a class="navbar-brand" href="{{ route('admin.home') }}">Home</a>
            <a class="navbar-brand" href="{{ route('logout') }}">Logout</a>
        </div>
    </nav>
    <div class="container mt-4">
    <form action="{{ route('postInber') }}" method="post">
@csrf
<div class="mb-3">
  <h3 class="text-center">Silahkan Isi Berita</h3>
    <label for="judul" class="form-label">Judul Berita</label>
    <input type="text" class="form-control" id="judul" name="judul">
</div>

<div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
</div>

<div class="mb-3">
    <label for="isi" class="form-label">Isi Berita</label>
    <textarea class="form-control" id="isi" name="isi" rows="5"></textarea>
</div>

<button type="submit" class="btn btn-primary">Tambahkan</button>
</form>


    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>