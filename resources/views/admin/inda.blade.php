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
    </nav><br>
    <h4 class= "text-center">Silahkan Input data Profil Lulusan</h4>

    <div class="container m-4">
            
                <form action="{{ route('postInda') }}" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <label>Nama</label>
                        <input type="text" class="form-control border bordersecondary form-control-lg" name="nama">

                    <div class="form-group mt-1">
                        <label class= for="jk">Jenis Kelamin</label>
                        <select class="form-select" id="jk" name="jk">
                            <option selected></option>
                            <option value="1">Perempuan</option>
                            <option value="1">Laki-Laki</option>
                        </select>
                          
                    <div class="form-group mt-1">
                        <label class=for="jurusan">Jurusan</label>
                        <select class="form-select" id="jurusan" name="jurusan">
                        <option selected></option>
                            <option value="1">Teknik Informatika</option>
                            <option value="2">Teknik Elektro</option>
                            <option value="3">Teknik Mesin</option>
                            <option value="3">Teknik Sipil</option>
                            <option value="3">Teknik Perkapalan</option>
                            <option value="3">Administrasi Niaga</option>
                            <option value="3">Bahasa Inggris</option>
                            <option value="3">Kemaritiman</option>
                        </select>

                    <div class="form-group mt-4">
                        <label>Program Studi</label>
                        <input type="text" class="form-control border bordersecondary form-control-lg" name="prodi">

                    <div class="form-group mt-1">
                        <label>Ipk</label>
                        <input type="text" class="form-control border border-secondary form-control-lg"
                            name="ipk">

                    <div class="form-group mt-1">
                        <label>Tahun Lulus</label>
                        <input type="text" class="form-control border border-secondary form-control-lg"
                            name="tahun">
               
                    </div>
                    @csrf
                  <button type="submit" class=" form-control btn btn-primary mt-5"php>Tambahkan</button>
                </form>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>