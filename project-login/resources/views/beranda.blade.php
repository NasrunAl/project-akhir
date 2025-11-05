<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <title>Beranda | Porsche Collector</title>
 <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container">
 <a class="navbar-brand" href="{{ route('beranda') }}">Porsche Luxury</a>
 <div class="d-flex">
 <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
 </div>
 </div>
</nav>
<div class="container text-center mt-5">
 <h1>Selamat Datang di Porsche Luxury</h1>
 <p class="lead">Silakan login untuk melihat produk penjualan kami.</p>
 <img src="https://cdn-icons-png.flaticon.com/512/891/891462.png"
width="200" alt="Shopping Icon">
</div>
</body>
</html>
