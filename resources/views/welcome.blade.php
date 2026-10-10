<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</head>

<body class="bg-light d-flex flex-column min-vh-100">
    <nav class="navbar navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">UNPAM - Prodi SI</a>
        </div>
    </nav>
    <div class="container flex-grow-1">
        <div class="row justify-content-center">
            <h2>Selamat Datang</h2>
            <p class="text-muted">Ini halaman utama web profile mahasiswa prodi SI UNPAM</p>
            <a href="{{ url('/profile') }}" class="btn btn-primary">Lihat Profile</a>
        </div>
    </div>
    <footer class="bg-white text-dark border-top text-center py-3 mt-auto">
        <div class="container">
            <p>&copy; {{ date('Y') }} UNPAM. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>